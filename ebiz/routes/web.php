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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/calc',function(){
    return view('calc');
});
Route::post('/calc',"calcController@test");

Route::get('/work',function(){
    return view('work');
});
Route::post('/work',"calcController@work");

Route::get('/emp',function(){
    return view('emp');
});
Route::post('/emp',"empController1@emp_details");
Route::post('/emp',"empController@details");
  
Route::any('/products',"ProductController@products");

Route::any('/editproduct',"ProductController@editProduct");

Route::any('/deleteproduct',"ProductController@deleteProduct");


Route::any('/customer',"CustomerController@customerDetails");
Route::any('/editcustomer',"CustomerController@editCustomer");
Route::any('/deletecustomer',"CustomerController@deleteCustomer");

Route::any('/catalog',"catalogController@catalogs");
Route::any('/editcatalog',"catalogController@editCatalog");
Route::any('/deletecatalog',"catalogController@deleteCatalog");

Route::any('/login','Auth\LoginController@authenticate');

Route::any('/signup','Auth\RegisterController@signUp');

//Route::get('/home','Auth\LoginController@home');
Route::get('/home',function(){
    return view('home1');
});

Route::get('/logout',function(){
    session()->flush();
    return redirect('login');
});

Route::any('/addtocart','CartController@addToCart');

Route::get('/jquery',function(){
    return view('jquery');
});

Route::get('/shop1',function(){
    return view('shop1');
});

Route::get('/shope2',function(){
    return view('shope2');
});

Route::get('/viewproduct','ProductController@viewProduct');

Route::get('/viewcart','CartController@viewCart');

Route::any('/removefromcart','CartController@removeFromCart');

//Route::any('/userlogin','Auth\LoginController@authenticate');
//Route::any('/usersignup','Auth\RegisterController@signUp');

/*Route::get('/userlogin',function(){
    return view('userlogin');
});
Route::get('/usersignup',function(){
    return view('usersignup');
});*/

Route::any('/viewproduct',"ProductController@viewProduct");

Route::get('/test',function(){
                            return view('test');
                        }
        );
Route::post('/test','testController@show');

/*Route::get('/checkout',function(){
    return view('table');
});*/
Route::get('/checkout',function(){
    return view('checkout');
});

Route::post('/checkout','CheckoutController@checkout');

Route::get('/category',function(){
                             return view('table2');
                        });

Route::get('/payfromcart',function(){
    return view('payfromcart');
});

Route::any('/payfromcartconform',"CartController@payFromCart");

Route::any('/paymentdetails',"CartController@details");

Route::get('/yourorders',function(){
    return view('YourOrders');
});

Route::any('/order',"OrderController@cancelOrder");

Route::get('/productorder',function(){
    return view('productorder');
});

Route::post('/changeStatus',"OrderController@changeStatus");

Route::get('/ordercancel',"OrderController@cancelOreder");

Route::get('/mailtest',function(){
    $user = "";
    Mail::send('Email', ['user'=>$user], function ($m) use ($user) {
        $m->from('svssukesh@gmail.com', 'Ebiz');
        $m->to("svssukesh@gmail.com", "test")->subject('Your Reminder!');
    });
});

Route::get('/delivery',function(){
    return view('deliverycnform');
});
Route::post('/delivery',"OrderController@sendotp");
Route::post('/oppverification',"OrderController@oppVerification");

Route::get('/s',function(){
    return view('s');
});

Route::get('/myprofile',function(){
    return view('Myprofile');
});

Route::post('/profileEdit',function(){
    return view('EditProfile');
});

Route::post('/editprofile',"OrderController@editProfile");


