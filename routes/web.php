<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\adminOrderController;
use Illuminate\Http\Request;
Route::get('/', [HomeController::class, 'index']);




Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/404', function () {
    return view('component/404/404');
});
Route::get('/invoice', function () {
    return view('complete');
});




/* admin route */
/* show login page */
Route::get('admin', [AdminController::class, 'index']);
Route::post('admin', [AdminController::class, 'login']);
Route::get('admin-dashbord', [AdminController::class, 'adminDashbord']);
Route::get('/adminout', [AdminController::class, 'adminOut']);

Route::get('category', [CategoryController::class, 'index']);
Route::post('add-main-category', [CategoryController::class, 'add']);
Route::post('add-sub-category', [CategoryController::class, 'addSub']);
Route::get('deletecategory/{id}', [CategoryController::class, 'deletecategory']);
Route::get('deletesubcategory/{id}', [CategoryController::class, 'deletesubcategory']);
Route::post('edit-maincat-name',[CategoryController::class,'editMaincatName']);
Route::post('edit-subcat-name',[CategoryController::class,'editSubcatName']);

Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/{main}', [ProductController::class, 'showMainCategory']);
Route::get('/product/{main}/{sub}/{subid}', [ProductController::class, 'showSubCategory']);
Route::get('manageproduct', [ProductController::class, 'manageproduct']);
Route::get('addproduct', [ProductController::class, 'addproduct']);
Route::post('addproduct', [ProductController::class, 'storeproduct']);
Route::post('/store-updates', [ProductController::class, 'storeUpdates']);
Route::get('testing/{id}', [ProductController::class, 'find_subcat']);
Route::get('/delete/product/', [ProductController::class, 'deleteproduct']);
Route::get('/search/{q?}',[ProductController::class, 'searchList']);

Route::get('/order', [adminOrderController::class, 'index']);


/* claint route */
/* claint request to product */

Route::get('/maincategory/{name}', [ProductController::class, 'show_main_category_product']);
Route::get('/subcategory/{sub}/{id}', [ProductController::class, 'show_sub_category_product']);
Route::get('productinfo/{name}/{id}', [ProductController::class, 'productinfo']);
Route::get('/testmain/{id}', [ProductController::class, 'testmain']);

/* checkout route*/
Route::get('/checkout/{id}', [OrderController::class, 'index']);
Route::get('/checkout', ['middleware'=>'checkout','uses'=>'OrderController@default']);
Route::post('/store', [OrderController::class, 'store']);



# cart route {it used session}
Route::get('/cart', [cartController::class, 'index']);
Route::get('/addcart/{id}', [cartController::class, 'addcart']);
Route::get('/clear-cart', [cartController::class, 'clearCart']);
Route::get('/remove-cart-item/{id}', [cartController::class, 'removeItem']);
Route::post('/updateqty', [cartController::class, 'update']);