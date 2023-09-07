<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

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

Route::view('/', 'providers.main.index');
Route::view('/ad', 'auth.auth');
Route::get('a',function (){
 return   Hash::make(123456789);
});
Route::get('admin/profile',function (){
    return  auth('admin')->user();
});
Route::get('user/profile',function (){
    return auth('user')->user();
});
Route::get('employees/profile',function (){
    return auth('employee')->user();
});
Route::prefix('employees')->middleware('auth:employee')->group(function (){

     Route::prefix('steps')->group(function (){
         Route::get('/',[\App\Http\Controllers\Provider\Step\StepController::class,'index']);
         Route::post('/store',[\App\Http\Controllers\Provider\Step\StepController::class,'salon'])->name('store.salon');
         Route::post('/details/store',[\App\Http\Controllers\Provider\Step\StepController::class,'details'])->name('store.details');
         Route::post('/images',[\App\Http\Controllers\Provider\Step\StepController::class,'images'])->name('store.images');
         Route::post('/services',[\App\Http\Controllers\Provider\Step\StepController::class,'service'])->name('store.services');
         Route::post('/employees',[\App\Http\Controllers\Provider\Step\StepController::class,'employee'])->name('store.employees');
         Route::post('/time',[\App\Http\Controllers\Provider\Step\StepController::class,'time'])->name('store.time');
         Route::post('/pay',[\App\Http\Controllers\Provider\Step\StepController::class,'pay'])->name('store.pay');
     });

     Route::prefix('operation')->name('operation.')->controller(\App\Http\Controllers\Provider\operation\OperationController::class)->group(function (){
         Route::get('/' , 'index' )->name('index');
         Route::post('/add_user' , 'add_user' )->name('add_user');
         Route::post('/update_status' , 'update_status' )->name('update_status');
         Route::get('service' , 'service' )->name('getdata.service') ;
         Route::get('tabor' , 'tabor' )->name('getdata.tabor') ;
         Route::get('finished' , 'finished' )->name('getdata.finished') ;
         Route::get('canceled' , 'canceled' )->name('getdata.canceled') ;
         Route::get('no_show_up' , 'no_show_up' )->name('getdata.no_show_up') ;
     });
});

Route::prefix('admins')->middleware('auth:admin')->group(function (){

    Route::prefix('orders')->name('order.')->group(function (){
        Route::get('/',[\App\Http\Controllers\Admin\Order\OrderController::class,'index'])->name('index');
        Route::get('/getdata',[\App\Http\Controllers\Admin\Order\OrderController::class,'getdata'])->name('getdata');
        Route::post('/update_status',[\App\Http\Controllers\Admin\Order\OrderController::class,'update_status'])->name('update_status');

    });
});



