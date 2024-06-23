<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderDetailController;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[ProductController::class,'index'])->middleware('auth')->name('product');
Route::post('/save-products',[ProductController::class, 'save_products'])->name('saveProducts');
Route::get('/delete-products/{id}', [ProductController::class, 'delete_products'])->name('removeProducts');
Route::get('/update-products/{id}', [ProductController::class, 'update_products'])->name('updateProducts');
Route::post('/save-updated-products', [ProductController::class, 'save_updated_products'])->name('saveUpdatedProducts');


Route::get('/supplier',[SupplierController::class,'index'])->middleware('auth')->name('supplier');
Route::post('/save-suppliers',[SupplierController::class, 'save_suppliers'])->name('saveSuppliers');
Route::get('/delete-suppliers/{id}', [SupplierController::class, 'delete_suppliers'])->name('removeSuppliers');
Route::get('/update-suppliers/{id}', [SupplierController::class, 'update_suppliers'])->name('updateSuppliers');
Route::post('/save-updated-suppliers', [SupplierController::class, 'save_updated_suppliers'])->name('saveUpdatedSuppliers');

Route::get('/category',[CategoryController::class,'index'])->middleware('auth')->name('category');
Route::post('/save-categories',[CategoryController::class, 'save_categories'])->name('saveCategories');
Route::get('/delete-categories/{id}', [CategoryController::class, 'delete_categories'])->name('removeCategories');
Route::get('/update-categories/{id}', [CategoryController::class, 'update_categories'])->name('updateCategories');
Route::post('/save-updated-categories', [CategoryController::class, 'save_updated_categories'])->name('saveUpdatedCategories');

Route::get('/order',[OrderController::class,'index'])->middleware('auth')->name('order');
Route::post('/save-orders',[OrderController::class, 'save_orders'])->name('saveOrders');
Route::get('/delete-orders/{id}', [OrderController::class, 'delete_orders'])->name('removeOrders');
Route::get('/update-orders/{id}', [OrderController::class, 'update_orders'])->name('updateOrders');
Route::post('/save-updated-orders', [OrderController::class, 'save_updated_orders'])->name('saveUpdatedOrders');

Route::get('/customer',[CustomerController::class,'index'])->middleware('auth')->name('customer');
Route::post('/save-customers',[CustomerController::class, 'save_categories'])->name('saveCustomers');
Route::get('/delete-customers/{id}', [CustomerController::class, 'delete_customers'])->name('removeCustomers');
Route::get('/update-customers/{id}', [CustomerController::class, 'update_customers'])->name('updateCustomers');
Route::post('/save-updated-customers', [CustomerController::class, 'save_updated_customers'])->name('saveUpdatedCustomers');

Route::get('/orderdetail',[OrderDetailController::class,'index'])->middleware('auth')->name('orderdetail');
Route::post('/save-orderdetails',[OrderDetailController::class, 'save_categories'])->name('saveOrderDetails');
Route::get('/delete-orderdetails/{id}', [OrderDetailController::class, 'delete_orderdetails'])->name('removeOrderDetails');
Route::get('/update-orderdetails/{id}', [OrderDetailController::class, 'update_orderdetails'])->name('updateOrderdetails');
Route::post('/save-updated-orderdetails', [OrderDetailController::class, 'save_updated_orderdetails'])->name('saveUpdatedOrderDetails');

Route::get('/login',[AuthController::class,'index'])->name('login');
Route::post('/login',[AuthController::class,'login'])->name('login.submit');
Route::get('/logout',[AuthController::class,'logout'])->middleware('auth')->name('logout');

Route::get('/register',[AuthController::class,'registration'])->name('registration');
Route::post('/register',[AuthController::class,'register'])->name('register');