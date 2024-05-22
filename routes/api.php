<?php
 
 use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\AuthController;
 
 Route::group(['middleware' => 'api', 'prefix' => 'auth'], function () {
     Route::controller(AuthController::class)->group(function () {
         Route::post('/register', 'register')->name('register');
         Route::post('/login', 'login')->name('login');
         Route::post('/logout', 'logout')->middleware('auth:api')->name('logout');
         Route::post('/refresh', 'refresh')->middleware('auth:api')->name('refresh');
         Route::post('/me', 'me')->middleware('auth:api')->name('me');
     });
 });
 