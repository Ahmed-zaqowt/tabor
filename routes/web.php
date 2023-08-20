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
    Route::get('steps',[\App\Http\Controllers\Provider\Step\StepController::class,'index']);
    Route::post('steps/store',[\App\Http\Controllers\Provider\Step\StepController::class,'salon'])->name('store.salon');
    Route::post('steps/details/store',[\App\Http\Controllers\Provider\Step\StepController::class,'details'])->name('store.details');

});
