<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

//checkoutlogin
Route::get('logincheck-out','CheckoutController@checkout_login');
Route::get('logoutcheck-out','CheckoutController@logout_checkout');
Route::post('login-cus','CheckoutController@login_cus');
Route::get('sign-in','CheckoutController@sign_in')->name('sigin');
Route::post('chi-tiet/{id}','HomeController@addCart');
Route::post('add-customer','CheckoutController@add_customers');
Route::get('payment','CheckoutController@payment');
Route::post('order','CheckoutController@order_place')->name('order-place');


Route::get('chi-tiet/{id}','HomeController@detailProduct')->name('detail');
Route::post('chi-tiet/{id}','HomeController@addCart');
Route::get('gio-hang','HomeController@Cart')->name('cart');
Route::get('xoa-gio-hang/{id}','HomeController@DelCart')->name('removecart');
Route::get('updatecart/{rowId}/{qty}', 'HomeController@UpdateCart');
Route::get('check-out', 'HomeController@Checkout')->name('checkout');
// Route::post('thanh-toan-post', 'HomeController@CheckoutPost');
//admin
Route::group(['prefix' => 'admin'], function (){
Route::get('login','AdminController@login');
Route::get('logn_out','AdminController@logout_admin');
Route::get('dashboard','AdminController@index')->name('dashboard');
Route::post('/admin-dashboard','AdminController@dashboard')->name('dashboard');
//category_product





});


    Route::get('updates', function () {
        Schema::table('product', function (Blueprint $table) {
            $table->string('describe')->after('origin');});
        });
//Search_Region

Route::get('searching','HomeController@search')->name('search');


Route::get('search_value','HomeController@searchValue');

//End-Region




//Admin_Categories
Route::get('add-category-product','CategoryProduct@add_category_product')->name('add');
Route::get('all-category-product', 'CategoryProduct@all_category_product')->name('list');
Route::get('edit-category-product/{id}', 'CategoryProduct@edit_category_product')->name('edit');
Route::post('update-category-product/{id}','CategoryProduct@update_category_product');
Route::get('del-category-product/{id}', 'CategoryProduct@del_category_product')->name('del');

Route::get('/active-cate','CategoryProduct@active_cate');
Route::get('/unactive-cate','CategoryProduct@unactive_cate');
Route::post('save-category-product', 'CategoryProduct@save_category_product');

//End
//Admin_Products
Route::get('all-Product', 'ProductController@all_product')->name('list');
Route::get('add-product', 'ProductController@Product')->name('add');
Route::post('add-product', 'ProductController@ProductPost')->name('save');
Route::get('edit-product/{id}', 'ProductController@edit_product')->name('edit');
Route::post('update-product/{id}','ProductController@update_product');
Route::get('del-product/{id}', 'ProductController@del_product')->name('del');
//End
//Category-product
Route::get('Home/DanhMuc','CateHomeController@Categories');
Route::get('Home','HomeController@HomeProduct');
//Get Product in cate
Route::get('danh-muc-san-pham/{id}','CateHomeController@Showlistbyid');


//login admin

