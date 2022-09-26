<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;

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
    return view('createuser');
});

Route::post('/adduser', [usercontroller::class, 'addUser']);
Route::get('/userdetails', [usercontroller::class, 'userDetails']);
Route::get('/updateuser/{id}', [usercontroller::class, 'updateUser']);
Route::post('/update/{id}', [usercontroller::class, 'update']);
Route::get('/deleteuser/{id}', [usercontroller::class, 'delete']);

