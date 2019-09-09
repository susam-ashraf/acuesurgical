<?php
# @Date:   2018-06-11T19:18:37+06:00
# @Last modified time: 2018-06-18T04:20:17+06:00




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

// Route::get('/', function () {
//     return view('pages.welcome');
// });
// Route::get('/admin', function () {
//     return view('layouts.app_admin');
// });

Auth::routes();
Route::get('/product/{id}','ManageController@product_list');

Route::get('/get-category', 'ManageCategoryController@category_type');




Route::get('/user-dashboard/{id}', 'HomeController@user_dashboard');
Route::get('/user-order/{id}', 'HomeController@my_order');





Route::get('/delete_wishlist/{id}', 'HomeController@delete_wishlist');

Route::get('/wishlist', 'HomeController@wishlist');
Route::get('/add_to_wishlist/{id}', 'HomeController@addToWishlist');



Route::get('/product-images/{id}', 'ManageController@more_images');
Route::post('/review-submit/{id}', 'ManageController@review_submit');









Route::get('/show-order', 'ManageOrder@showOrder');

Route::get('/delete-order/{id}', 'ManageOrder@destroy');

Route::get('/edit-order/{id}', 'ManageOrder@edit_order');
Route::post('/store-order', 'ManageOrder@store');

Route::get('/search', 'ManageController@autocomplete');

Route::post('/search-item', 'ManageController@search_all');



Route::get('/faq', 'ManageController@faq')->name('faq');
Route::get('/term-Conditions', 'ManageController@terms_and_condition')->name('terms_and_condition');
Route::get('/contact-us', 'ManageController@contact')->name('contact');
Route::get('/site-map', 'ManageController@sitemap')->name('sitemap');

//Route::post('/search', 'ManageController@search_all')->name('search_product');


Route::get('/home', 'HomeController@welcome')->name('home');
Route::get('/admin', 'HomeController@admin')->name('admin');
Route::get('/', 'ManageController@welcome')->name('welcome');

Route::get('/language/bangla', 'ManageController@welcome_bangla')->name('welcome_bangla');



Route::get('/products', 'ProductController@allProduct')->name('all_products');


Route::get('/admin/category/create/main', 'ManageCategoryController@mainCategory');
Route::get('/admin/category/create/sub', 'ManageCategoryController@subCategory');
Route::get('/admin/category/show', 'ManageCategoryController@showCategory');
Route::get('/admin/category/create', 'ManageCategoryController@index');
Route::post('/store-categories', 'ManageCategoryController@store');
Route::get('/admin/category/delete/{id}', 'ManageCategoryController@destroy');
Route::get('/admin/category/edit/{id}', 'ManageCategoryController@edit');


Route::get('/product-details/{id}', 'ManageController@productDetails')->name('product-details');
Route::get('/manage-product','ManageProductController@index');
Route::get('/show-products','ManageProductController@showProduct');
Route::post('/store-product','ManageProductController@store');
Route::get('/edit-product/{id}', 'ManageProductController@edit');
Route::get('/deleteProduct/{id}', 'ManageProductController@destroy');




Route::get('/add_to_cart/{id}', 'CartController@addToCart');
Route::get('/mycart', 'CartController@mycart');
Route::get('/cartItemDeleteAll', 'CartController@cartItemDeleteAll');
Route::post('/update-cart', 'CartController@updateCart');
Route::post('/cartItemDelete', 'CartController@cartItemDelete');
Route::get('/delete/{id}', 'CartController@cartItemDeleteone');


Route::get('/checkout', 'ManageOrder@checkout');
Route::post('/confirm-order', 'ManageOrder@addToOrders');
Route::get('/thankyou', 'ManageOrder@thnx');
Route::get('/getUpazila/{id}', 'ManageOrder@getUpazila');


Route::get('/Infection-Control','ManageController@cidex');


Route::get('/cidex','ManageController@cidex');
Route::get('/SHARPS-CONTAINERS','ManageController@SHARPS_CONTAINERS');
Route::get('/DISINFECTANT-WIPES','ManageController@DISINFECTANT_WIPES');
Route::get('/HAND-HYGIENE','ManageController@HAND_HYGIENE');
Route::get('/STERILIZATION','ManageController@STERILIZATION');
Route::get('/DISINFECTANT-SPRAYS','ManageController@DISINFECTANT_SPRAYS');
Route::get('/HIGH-LEVEL-DISINFECTANTS','ManageController@HIGH_LEVEL_DISINFECTANTS');
Route::get('/INSTRUMENT-CLEANERS','ManageController@INSTRUMENT_CLEANERS');


Route::get('/IV-PRODUCTS','ManageController@IV_PRODUCTS');
