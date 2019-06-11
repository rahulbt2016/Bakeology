<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','HomeController@index');

Route::get('/login','HomeController@login');

Route::get('/signup','HomeController@signup');

Route::get('/addCustomer',[
    'uses'=>'mainController@addCustomer',
    'as'=>'customer.addCustomer'
]);


Route::get('/shop','HomeController@shop');

Route::get('/loginCustomer',[
    'uses'=>'mainController@loginCustomer',
    'as'=>'customer.loginCustomer'
]);

Route::get('/logout',[
    'uses'=>'mainController@logout',
    'as'=>'customer.logout'
]);

Route::get('/forgotPassword','HomeController@forgotPassword');

Route::get('/getPassword',[
    'uses'=>'mainController@getPassword',
    'as'=>'customer.getPassword'
]);

Route::get('/feedback',[
    'uses'=>'mainController@feedback',
    'as'=>'customer.feedback'
]);

Route::get('/shop-pastry','HomeController@shopPastry');

Route::get('/shop-bakehouse','HomeController@shopBakehouse');

Route::get('/account','HomeController@accountContent');


Route::get('/editCustomer',[
    'uses'=>'mainController@editCustomer',
    'as'=>'customer.editCustomer'
]);

Route::get('/enterAccount',[
    'uses'=>'mainController@enterAccount',
    'as'=>'customer.enterAccount'
]);

Route::get('/cart','HomeController@cart');

Route::get('/enterCart',[
    'uses'=>'mainController@enterCart',
    'as'=>'customer.enterCart'
]);

Route::get('/addToCart',[
    'uses'=>'mainController@addToCart',
    'as'=>'customer.addToCart'
]);

Route::get('/removeFromCart',[
    'uses'=>'mainController@removeFromCart',
    'as'=>'customer.removeFromCart'
]);

Route::get('/faq','HomeController@faqContent');

Route::get('/increaseQuantity',[
    'uses'=>'mainController@increaseQuantity',
    'as'=>'customer.increaseQuantity'
]);

Route::get('/reduceQuantity',[
    'uses'=>'mainController@reduceQuantity',
    'as'=>'customer.reduceQuantity'
]);

Route::get('/placeOrder',[
    'uses'=>'mainController@placeOrder',
    'as'=>'customer.placeOrder'
]);

Route::get('/adminLogin','HomeController@adminLogin');

Route::get('/loginAdmin',[
    'uses'=>'mainController@loginAdmin',
    'as'=>'admin.loginAdmin'
]);

Route::get('/logoutAdmin',[
    'uses'=>'mainController@logoutAdmin',
    'as'=>'admin.logoutAdmin'
]);

Route::get('/admin-customers','HomeController@adminCustomers');

Route::get('/admin-cakes','HomeController@adminCakes');

Route::get('/admin-pastries','HomeController@adminPastries');

Route::get('/admin-bakehouse','HomeController@adminBakehouse');

Route::get('/admin-addProducts','HomeController@adminAddProducts');

Route::get('/admin-orderDetails','HomeController@adminOrderDetails');

Route::get('/updateProduct',[
    'uses'=>'mainController@updateProduct',
    'as'=>'admin.updateProduct'
]);

Route::get('/deleteProduct',[
    'uses'=>'mainController@deleteProduct',
    'as'=>'admin.deleteProduct'
]);

Route::post('/addProduct',[
    'uses'=>'mainController@addProduct',
    'as'=>'admin.addProduct'
]);
