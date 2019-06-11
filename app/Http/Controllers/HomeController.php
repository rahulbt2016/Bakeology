<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontEnd.homeContent');
    }

    public function login(){
    	return view('loginFrontEnd.loginContent');
    }

    public function signup(){
    	return view('signupFrontEnd.signupContent');
    }

    public function shop(){
    	return view('shopFrontEnd.shopContent');
    }

    public function forgotPassword(){
    	return view('loginFrontEnd.resetPasswordContent');
    }

    public function shopPastry(){
    	return view('shopFrontEnd.shopContentPastry');
    }

    public function shopBakehouse(){
    	return view('shopFrontEnd.shopContentBakehouse');
    }

    public function accountContent(){
    	return view('accountFrontEnd.accountContent');
    }

    public function cart(){
    	return view('cartFrontEnd.cartContent');
    }

    public function faqContent(){
    	return view('frontEnd.faqContent');
    }

    public function adminLogin(){
        return view('admin.loginFrontEnd.adminLogin');
    }

    public function adminCustomers(){
        return view('admin.frontEnd.customerContent');
    }

    public function adminCakes(){
        return view('admin.frontEnd.cakesContent');
    }

     public function adminPastries(){
        return view('admin.frontEnd.pastriesContent');
    }

    public function adminBakehouse(){
        return view('admin.frontEnd.bakehouseContent');
    }

    public function adminAddProducts(){
        return view('admin.frontEnd.addProductsContent');
    }

    public function adminOrderDetails(){
        return view('admin.frontEnd.orderDetailsContent');
    }

}
