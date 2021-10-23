<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegistrationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('admin', [RegistrationController::class, 'index']);


// ALTER USER 'root'@'localhost' IDENTIFIED WITH caching_sha2_password BY '!*Sdpldb@99!*';
// CREATE USER 'sdpl'@'localhost' IDENTIFIED WITH caching_sha2_password BY '!*Sdpldb@99!*';



