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

//User
// Route::get('/',"HomeController@index");
// Route::get('/trang-chu', "HomeController@index");

Route::get('/tim-bai-viet',"AdminController@searchPostAdmin");

Route::get('/',"HomeController@index");
Route::get('/trang-chu', "ProductController@listProduct");

Route::get('/chi-tiet-dich-vu', "HomeController@detailServiceMassage");
Route::get('/danh-sach-san-pham', "ProductController@allProduct");
Route::get('/chi-tiet-san-pham-{productId}', "ProductController@detailProduct");
Route::get('/chinh-sach-hoan-tra', "HomeController@returnPolicy");
Route::get('/chinh-sach-thanh-toan', "HomeController@paymentPolicy");
Route::get('/chinh-sach-nhan-hang', "HomeController@receivePolicy");
Route::get('/ve-chung-toi', "HomeController@aboutUs");

Route::get('/san-pham-theo-danh-muc-{id}', "HomeController@productCategory");
Route::get('/search-home', "ProductController@searchFrontend");


//Admin
Route::get('/admin', "AdminController@index");
Route::get('/admin-login', "AdminController@login");
Route::post('/admin-login', "AdminController@dashboard");
Route::get('/admin-logout', "AdminController@logout");

//Product Management
Route::get('/quan-ly-san-pham', "ProductManagementController@indexAdmin");
Route::get('/them-san-pham', "ProductManagementController@viewAddProduct");
Route::post('/save-product', "ProductManagementController@saveProduct");
Route::get('/cap-nhat-san-pham/{productId}', "ProductManagementController@viewUpdateProduct");
Route::get('/xoa-san-pham/{productId}', "ProductManagementController@deleteProduct");
Route::get('/them-anh-{productId}', "ProductManagementController@addImageProduct");

Route::post('/save-multi-image', "ProductManagementController@saveMultiImage");
Route::get('/delete-multi-image-{imageId}', "ProductManagementController@deleteMultiImage");

//Category Management
Route::get('/quan-ly-danh-muc', "CategoryManagementController@showAllCategoryProduct");
Route::get('/them-danh-muc', "CategoryManagementController@viewAddCategory");
Route::post('/save-category', "CategoryManagementController@saveCategory");
Route::get('/cap-nhat-danh-muc/{categoryProductId}', "CategoryManagementController@viewUpdateCategory");
Route::get('/xoa-danh-muc/{categoryProductId}', "CategoryManagementController@deleteCategory");

//Brand Management
Route::get('/quan-ly-thuong-hieu', "BrandManagementController@showAllBrandProduct");
Route::get('/them-thuong-hieu', "BrandManagementController@viewAddBrand");
Route::post('/save-brand', "BrandManagementController@saveBrand");
Route::get('/cap-nhat-thuong-hieu/{brandProductId}', "BrandManagementController@viewUpdateBrand");
Route::get('/xoa-thuong-hieu/{brandProductId}', "BrandManagementController@deleteBrand");

//Cart Management
Route::post('/save-cart', "CartController@saveCart");
Route::get('/gio-hang', "CartController@showCart");
Route::get('/delete-cart-{cartId}', "CartController@deleteCart");
Route::post('/update-cart', "CartController@updateCart");
Route::post('/add-cart-ajax', "CartController@addCartAjax");
//Checkout and Place Order

Route::get('/login-checkout', "CheckoutController@loginCheckout");
Route::get('/checkout-{id_user}', "CheckoutController@checkout");
Route::post('/place-order', "CheckoutController@placeOrder");
Route::get('/ket-qua-dat-hang-{id}', "CheckoutController@resultPlaceOrder");
Route::get('/checkout', "CheckoutController@checkoutNoLogin");

//user login
Route::post('/register-user', "UserManagementController@registerUser");
Route::get('/log-out-user', "UserManagementController@logoutUser");

Route::post('/login-user', "UserManagementController@loginUser");

//Order Management
Route::get('/quan-ly-don-hang', "OrderManagementController@showOrder");
Route::get('/cap-nhat-don-hang-{id}', "OrderManagementController@updateOrder");
Route::post('/save-edit-order', "OrderManagementController@saveEditOrder");
Route::get('/xoa-don-hang-{id}', "OrderManagementController@deleteOrder");
Route::get('/tra-cuu-don-hang', "OrderManagementController@userCheckOder");
Route::get('/search-order', "OrderManagementController@searchOrder");

Route::get('/theo-doi-don-hang-bang-so-dien-thoai-{sdt}', "OrderManagementController@checkOrderByPhone");
Route::get('/theo-doi-don-hang-{id}', "OrderManagementController@userCheckOrderById");
//Posts Management
// Route::get('/dich-vu-massage', "PostsController@listServiceMassage");
Route::get('/dich-vu-massage', "HomeController@index");

Route::get('/tim-kiem-bai-viet', "PostsController@searchPost");
Route::get('/tin-tuc', "PostsController@homePost");
Route::get('/{ha}/bai-viet-{tieude}', "PostsController@detailPost");
Route::get('/{ha}/danh-muc-{hi}', "PostsController@listCategoryById");
Route::get('/quan-ly-bai-viet', "PostsController@postsManagement");
Route::get('/them-bai-viet', "PostsController@addPost");
Route::post('/save-post', "PostsController@savePost");
Route::get('/cap-nhat-bai-viet-{id}', "PostsController@updatePost");
Route::get('/xoa-bai-viet-{id}', "PostsController@deletePost");

Route::get('/send-mail', "HomeController@sendMail");

/** Shipment */

Route::get('/quan-ly-van-chuyen', "DeliveryController@deliveryManagement");
Route::post('/select-delivery', "DeliveryController@deliverySelect");
Route::post('/select-feeship', "DeliveryController@feeshipSelect");
Route::post('/insert-delivery', "DeliveryController@deliveryInsert");
Route::post('/update-feeship', "DeliveryController@deliveryUpdate");
Route::post('/calculate-feeship', "CheckoutController@feeshipCalculate");


/** UI admin */

Route::get('/quan-ly-banner', "BannerController@bannerManagement");
Route::get('/them-banner', "BannerController@add");
Route::post('/save-banner', "BannerController@save");
Route::get('/xoa-banner/{id}', "BannerController@delete");
Route::get('/cap-nhat-banner/{id}', "BannerController@viewUpdate");

Route::get('/gioi-thieu', "HomeController@aboutUs");

Route::get('/cai-dat', "AdminController@setting");
Route::post('/save-ganeral-info', "AdminController@saveGaneralInfo");


Route::get('/quan-ly-chu-dau-tu', "VendorController@vendorManagement");
Route::get('/them-chu-dau-tu', "VendorController@add");
Route::post('/save-vendor', "VendorController@save");
Route::get('/cap-nhat-chu-dau-tu/{id}', "VendorController@viewUpdate");


Route::get('/quan-ly-san-pham-chu-luc', "FlagShipController@flagShipManagement");
Route::get('/home-quan-li-thong-tin-chung', "AdminController@setting");
Route::get('/home-quan-li-banner', "AdminController@bannerHome");

Route::get('/home-quan-li-nha-dau-tu', "AdminController@vendorHome");
Route::get('/home-quan-li-thuong-hieu', "AdminController@brandHome");

Route::get('/home-quan-li-meta-seo', "AdminController@metaSeoHome");
Route::post('/save-ganeral-meta', "AdminController@saveGaneralMeta");


Route::get('/page-gioi-thieu', "AboutUsController@home");
Route::get('/edit-page-gioi-thieu-{id}', "AboutUsController@page");
Route::post('/save-page-aboutus', "AboutUsController@save");

Route::get('/tuyen-dung', "HomeController@recruit");

Route::get('/lien-he', "HomeController@contact");

Route::get('/quan-ly-tuyen-dung', "RecruitController@listRecruit");
Route::get('/them-tin-tuyen-dung', "RecruitController@addRecruit");
Route::post('/save-recruit','RecruitController@saveCruit');
Route::get('/cap-nhat-tin-tuyen-dung/{id}', "RecruitController@updateRecruitById");

Route::get('/searchPostAjax','PostsController@ajaxSearchPosts');
Route::get('/xoa-tin-tuyen-dung/{id}', "RecruitController@delRecruit");

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/not-found',  function () {
    return view('pages.notFound',
    ['meta_keywords' => 'Địa ốc thiên phú',
    'meta_desc'=>'Địa ốc thiên phú',
    'meta_title'=>'Địa ốc thiên phú',
    'info'=> App\GaneraInfo::get()
]);
});