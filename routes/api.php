<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\AuthController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Public route
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'login']);


Route::get('/conn', [ConnexionController::class, 'getAll'])->name('conn.getall');


Route::get('/roles', [RoleController::class, 'index']);
Route::get('/roles/{id}', [RoleController::class, 'show']);
Route::get('/roles/search/{libelle}', [RoleController::class, 'search']);
//Route::resource('roles', RoleController::class );

// Protected route
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/roles', [RoleController::class, 'store']);
    Route::put('/roles/{id}', [RoleController::class, 'update']);
    Route::delete('/roles/{id}', [RoleController::class, 'destroy']);
    Route::post('/logout', [AuthController::class, 'logout']);


});


/* Route::get('/roles', [RoleController::class, 'index']);
Route::post('/roles', [RoleController::class, 'store']);  */

/*
Route::get('/roles', function(){
    return 'roles';
});
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
