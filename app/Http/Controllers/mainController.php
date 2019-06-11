<?php

namespace App\Http\Controllers;
session_start();

use Illuminate\Http\Request;
use App\Customer;
use App\Product;
use App\AdminInfo;
use App\Order;
use DB;

class mainController extends Controller
{
    public function addCustomer(Request $request){
        $name=$request['name'];
        $email=$request['email'];
        $password=$request['pass'];
        $phone=$request['contact-number'];
        $address=$request['address'];
        
        $flag=0;

        $customers = Customer::all();

        foreach($customers as $customer){
            if($customer->Email==$email){
                $flag=1;
            }
        }

        if($flag==0){
            $customer=new Customer();

            $customer->Name=$name;
            $customer->Email=$email;
            $customer->Password=$password;
            $customer->Phone=$phone;
            $customer->Address=$address;
    
            $customer->save();
            
            echo "<script>
                        window.location='http://localhost/Bakeology/public/login';
                        alert('your account has been created. Now login to get started.');
                    </script>";
        }

        if($flag==1){
            echo "<script>
                        window.location='http://localhost/Bakeology/public/signup';
                        alert('User already exist. Try again with another email.');
                    </script>";
        }
        
    }

    public function loginCustomer(Request $request){
        $email=$request['email'];
        $password=$request['pass'];

        $customers = Customer::all();

        foreach($customers as $customer){
            if($customer->Email==$email && $customer->Password== $password){
                $_SESSION['email']=$email;
                return redirect('/shop');    
            }
        }

        echo "<script>
                window.location='http://localhost/Bakeology/public/login';
                alert('Invalid credentials. Retry.');
               </script>";

    }

    public function logout(){
        unset($_SESSION['email']);
        unset($_SESSION['cart']);
        return redirect('/');

    }

    public function getPassword(Request $request){

        $email=$request['email'];
        $password='';

        $customers = Customer::all();

        foreach($customers as $customer){
            if($customer->Email==$email){
                $password=$customer->Password;
            }
        }

        if($password!=''){
            $yourSubject="Password reminder";
            $yourMessage="Your Password is : ".$password.".";

            mail($email,$yourSubject,$yourMessage,'From:abc@xyz.com');

            echo"<script>
                alert('Your password has been sent to your registered email. Login again and reset your password to keep your account secured.');
                window.location='http://localhost/Bakeology/public/login';
            </script>";
        }
            
        else{
            echo "<script>
                    alert('Entered invalid email. Try again.');
                    window.location='http://localhost/Bakeology/public/login';
                </script>";
        }
        
    }

    public function feedback(Request $request){
        $name=$request['name'];
        $email=$request['email'];
        $phone=$request['phone'];
        $message=$request['message'];

        $mailTo="bakeologybakery2019@gmail.com";
        $yourSubject="Feedback from ".$name." (".$email.",".$phone.")";
        $yourMessage=$message;

        mail($mailTo,$yourSubject,$yourMessage,'From:abc@xyz.com');
        
        $replyMessage="Hello ".$name.", thankyou for giving your precious time to fill up our feedback form. Your feedback was recorded and it will surely help make Bakeology better.";
        mail($email,"Re:Feedback",$replyMessage,'From:abc@xyz.com');

        echo "<script>
                alert('Your feedback was sent.');
                window.location='http://localhost/Bakeology/public/';
            </script>";
    }

    public function editCustomer(Request $request){
        $name=$request['name'];
        $email=$request['email'];
        $password=$request['pass'];
        $phone=$request['contact-number'];
        $address=$request['address'];
        
        DB::table('customers')
            ->where('Email', $email)
            ->update(['Password' => $password,'Phone'=> $phone, 'Address' => $address]);
        
        
        echo "<script>
                alert('Changes Saved');
                window.location='http://localhost/Bakeology/public/shop';
            </script>";
    }

    public function enterAccount(){
        if(isset($_SESSION['email'])){
            return redirect('/account');
        }
        else{
            return redirect('/login');
        }
    }

    public function enterCart(){
        if(isset($_SESSION['email'])){
            return redirect('/cart');
        }
        else{
            return redirect('/login');
        }
    }

    public function addToCart(Request $request){
        $productID=$request['product-id'];

        if(!isset($_SESSION['cart'])){
            $_SESSION['cart'][$productID]=1;
        }
        else
        {
            if(!isset($_SESSION['cart'][$productID])){
                $_SESSION['cart'][$productID]=1;
            }
        }

        echo "<script>window.history.back();</script>";

       /* if(!in_array($productID,$_SESSION['cart']))
            array_push($_SESSION['cart'],$productID);
        */
        //return redirect()->back(); 
    }

    public function removeFromCart(Request $request){
        if(count($_SESSION['cart'])==1)
            {
                unset($_SESSION['cart']);
            }
        else
        {
            $productID=$request['product-id'];
            unset($_SESSION['cart'][$productID]);
            //$_SESSION['cart']=\array_diff($_SESSION['cart'],[$productID]);
        }

        echo "<script>
                window.history.back();
            </script>";
        
    }

    public function increaseQuantity(Request $request){
        $productID=$request['product-id'];
        $_SESSION['cart'][$productID]=$_SESSION['cart'][$productID]+1;
        echo "<script>window.history.back();</script>";
    }   
    
    public function reduceQuantity(Request $request){
        $productID=$request['product-id'];
        if($_SESSION['cart'][$productID]>1){
            $_SESSION['cart'][$productID]=$_SESSION['cart'][$productID]-1;
        }
        echo "<script>window.history.back();</script>";
    }

    public function placeOrder(Request $request){
        if(!isset($_SESSION['cart'])){
            echo "<script>window.history.back();</script>";
        }
        else{
            $customerShippingAddress=$request['shipping-address'];
            $cart=$_SESSION['cart'];
            
            $customers = Customer::all();

            $customerEmail=$_SESSION['email'];
            foreach($customers as $customer){
                if($customer->Email==$customerEmail){
                    $customerName=$customer->Name;
                    $customerPhone=$customer->Phone;
                }
            }

            $messageToCustomer="Your order has been placed. Our delivery-man will be soon at your doorstep with your order. Your order details are as below:\r\n \r\n \r\n";
            $subjectToCustomer='Bakeology Order Details';

            $subjectToAdmin='Order from '.$customerName;
            $messageToAdmin="Name : ".$customerName."\r\nEmail : ".$customerEmail."\r\nContact Number : ".$customerPhone."\r\nShipping Address : ".$customerShippingAddress."\r\n\r\n";
           
            $totalCost=0;
            
            foreach($_SESSION['cart'] as $key => $value){
                $productID=$key;
				$productQuantity=$value;
				$productName = DB::table('products')->where('ProductID',$productID)->value('ProductName');
                $productCost = DB::table('products')->where('ProductID',$productID)->value('ProductCost');
                $total=$productCost*$productQuantity;
                $totalCost=$totalCost+$total;

                $messageToCustomer=$messageToCustomer.$productName."(₹".$productCost.") x ".$productQuantity." = ₹".($productCost*$productQuantity)." \r\n";
                $messageToAdmin=$messageToAdmin.$productName."(₹".$productCost.") x ".$productQuantity." = ₹".($productCost*$productQuantity)." \r\n";
            }

            $cgst=(int)($totalCost*0.09);
            $sgst=(int)($totalCost*0.09);
            $totalCostWithTax=$totalCost+$cgst+$sgst;

            $messageToCustomer=$messageToCustomer."\r\nSub-Total : ₹".$totalCost."\r\nCGST @9% : ₹".$cgst."\r\nSGST @9% : ₹".$sgst." \r\n \r\nTOTAL :  ₹".$totalCostWithTax."\r\n\r\nThankyou for ordering from Bakeology. Hope to see you again soon.";
            $messageToAdmin=$messageToAdmin."\r\nSub-Total : ₹".$totalCost."\r\nCGST @9% : ₹".$cgst."\r\nSGST @9% : ₹".$sgst." \r\n \r\nTOTAL :  ₹".$totalCostWithTax;

            mail('bakeologybakery2019@gmail.com',$subjectToAdmin,$messageToAdmin,'From:abc@xyz.com');
            mail($customerEmail,$subjectToCustomer,$messageToCustomer,'From:abc@xyz.com');



            date_default_timezone_set("Asia/Kolkata");
            $orderDate=date('Y-m-d');
            $orderNames='';
            $orderQuantities='';

            $orders=array();
            $quantities=array();

            foreach($_SESSION['cart'] as $key => $value){
                array_push($orders,DB::table('products')->where('ProductID',$key)->value('ProductName'));
                array_push($quantities,$value);
            }

            $orderNames=implode(",",$orders);
            $orderQuantities=implode(",",$quantities);

            $order=new Order();

            $order->OrderDate=$orderDate;
            $order->CustomerName=$customerName;
            $order->CustomerEmail=$customerEmail;
            $order->OrderNames=$orderNames;
            $order->OrderQuantities=$orderQuantities;
            $order->TotalProfit=$totalCostWithTax;
    
            $order->save();



            echo "<script>alert('Your Order has been place.');</script>";
            unset($_SESSION['cart']);
            echo "<script>window.history.back();</script>";
        }
    }



    public function loginAdmin(Request $request){
        $email=$request['email'];
        $password=$request['pass'];

        $admins = AdminInfo::all();

        foreach($admins as $admin){
            if($admin->Email==$email && $admin->Password== $password){
                $_SESSION['adminEmail']=$email;
                return redirect('/admin-customers');    
            }
        }

        echo "<script>
                window.location='http://localhost/Bakeology/public/adminLogin';
                alert('Invalid credentials. Retry.');
               </script>";
    }

    public function logoutAdmin(){
        unset($_SESSION['adminEmail']);
        return redirect('/adminLogin');

    }

    public function updateProduct(Request $request){
        $productID=$request['product-id'];
        $productCost=$request['product-cost'];
        if(isset($request['product-availability'])){
            $productAvailability="yes";
        }
        else{
            $productAvailability="no";
        }

        
        $updateDetails = [
            'ProductCost' => $productCost,
            'ProductAvailability' => $productAvailability
        ];

        DB::table('products')
            ->where('ProductID', $productID)
            ->update($updateDetails);

        echo "<script>window.history.back();</script>";
    }

    public function deleteProduct(Request $request){
        $productID=$request['product-id'];

        DB::table('products')->where('ProductID', '=', $productID)->delete();

        echo "<script>window.history.back();</script>";
    }

    public function addProduct(Request $request){

        $this->validate($request, [
            'product-image'  =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $image=$request->file('product-image');

        $productImageName= time().rand().'.'.$image->getClientOriginalExtension();
        

        $productName=$request['product-name'];
        $productCategory=$request['product-category'];
        $productAvailability=$request['product-availability'];
        $productCost=$request['product-cost'];


        $flag=0;

        $products = Product::all();

        foreach($products as $product){
            if(($product->ProductName==$productName && $product->ProductCategory==$productCategory) || $product->ProductImageName==$productImageName ){
                $flag=1;
            }
        }

        if($flag==0){
            $image->move(public_path("Products/images"), $productImageName);
            $product=new Product();

            $product->ProductName=$productName;
            $product->ProductImageName=$productImageName;
            $product->ProductCategory=$productCategory;
            $product->ProductAvailability=$productAvailability;
            $product->ProductCost=$productCost;
    
            $product->save();
        }

        return redirect()->back();
    }

}

