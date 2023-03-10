<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Events\PingChannel\PingEvent;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/** 
 * Load Controllers
 */
use App\Http\Controllers\AuthController;


/** 
 * Set up Routes
 */
Route::get('/ping', function() {
    broadcast(new PingEvent());
    return [ 
        "status" => "ok", 
        "message" => "pong"
    ];
});

Route::prefix("/auth")
     ->group(function() {
        Route::get("/login",  [AuthController::class, 'login']);
        Route::get("/logout", [AuthController::class, 'logout']);
        Route::get("/user",   [AuthController::class, 'user'])
             ->middleware("auth");
     });

Route::middleware('auth')->group(function() {
  
});

