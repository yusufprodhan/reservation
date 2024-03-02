<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\UserHomeController;
use App\Http\Controllers\User\OrderController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\CustomerOrderController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\Admin\InvoiceController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\IndexController;
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


//Route::get('/', function () {
//    return view('auth.login');
//});

Route::get('/', [IndexController::class,'index'])->name('index');
Route::get('/about-us', [IndexController::class,'aboutUs'])->name('about-us');
Route::get('/services', [IndexController::class,'services'])->name('services');
Route::get('/price', [IndexController::class,'price'])->name('price');
Route::get('/workflow', [IndexController::class,'workflow'])->name('workflow');
Route::get('/services/{slug}', [IndexController::class,'singleService'])->name('services.slug');
Route::get('/contact', [IndexController::class,'contact'])->name('contact');

Auth::routes(['verify' => true]);
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');


//admin routes
Route::middleware(['auth', 'role:administrator'])->group(function () {
    Route::get('admin', [AdminHomeController::class, 'index'])->name('admin');
    Route::get('admin/profile', [AdminHomeController::class, 'profile'])->name('admin.profile');
    Route::post('admin/profile/update', [AdminHomeController::class, 'profileUpdate'])->name('admin.profile.update');

    //customers
    Route::get('admin/users', [CustomerController::class, 'index'])->name('admin.users');
    Route::get('admin/user/list', [CustomerController::class, 'getCustomerList'])->name('admin.user.list');
    Route::get('admin/user/{id}', [CustomerController::class, 'show'])->name('admin.user.show');
    Route::post('admin/user/update', [CustomerController::class, 'update'])->name('admin.user.update');

    //customer orders
    Route::get('admin/orders',[CustomerOrderController::class,'index'])->name('admin.orders');
    Route::get('admin/order/review',[CustomerOrderController::class,'index'])->name('admin.order.review');
    Route::get('admin/order/pending',[CustomerOrderController::class,'index'])->name('admin.order.pending');
    Route::get('admin/order/received',[CustomerOrderController::class,'index'])->name('admin.order.received');
    Route::get('admin/order/invoiced',[CustomerOrderController::class,'index'])->name('admin.order.invoiced');
    Route::get('admin/order/processing',[CustomerOrderController::class,'index'])->name('admin.order.processing');
    Route::post('admin/order/finalizing',[CustomerOrderController::class,'index'])->name('admin.order.finalizing');
    Route::get('admin/order/completed',[CustomerOrderController::class,'index'])->name('admin.order.completed');
    Route::get('admin/order/paid',[CustomerOrderController::class,'index'])->name('admin.order.paid');
    Route::get('admin/order/downloaded',[CustomerOrderController::class,'index'])->name('admin.order.downloaded');
    Route::get('admin/order/redo',[CustomerOrderController::class,'index'])->name('admin.order.redo');
    Route::get('admin/order/closed',[CustomerOrderController::class,'index'])->name('admin.order.closed');
    Route::get('admin/order/canceled',[CustomerOrderController::class,'index'])->name('admin.order.canceled');
    Route::get('admin/order/todays',[CustomerOrderController::class,'index'])->name('admin.order.todays');
    Route::get('admin/order/valid',[CustomerOrderController::class,'index'])->name('admin.order.valid');
    Route::get('admin/order/banned',[CustomerOrderController::class,'index'])->name('admin.order.banned');

    Route::post('admin/order/output',[CustomerOrderController::class,'orderFinalizing'])->name('admin.order.output');

    Route::get('admin/order/list', [CustomerOrderController::class, 'getOrderList'])->name('admin.order.list');
    Route::get('admin/order/{id}',[CustomerOrderController::class,'show'])->name('admin.order.show');
    Route::post('admin/order/status/update',[CustomerOrderController::class,'updateOrderStatus'])->name('admin.order.status.update');
    //invoice
    Route::resource('invoice', InvoiceController::class,['as' => 'admin']);
});

//user routes
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('home', [UserHomeController::class, 'index'])->name('home');

    //order
    Route::get('order/invoiced',[OrderController::class,'index'])->name('home.order.invoiced');
    Route::get('order/payments',[OrderController::class,'index'])->name('home.order.payments');
    Route::get('order/redo',[OrderController::class,'index'])->name('home.order.redo');
    Route::post('order/redo',[OrderController::class,'addRedo'])->name('home.order.redo');
    Route::resource('order', OrderController::class,['as' => 'home']);
    Route::get('home/order/list',[OrderController::class,'list'])->name('home.order.list');

    //profile
    Route::get('home/profile',[UserHomeController::class, 'showProfile'])->name('home.profile');
    Route::post('home/profile/update',[UserHomeController::class, 'updateProfile'])->name('home.profile.update');
});

