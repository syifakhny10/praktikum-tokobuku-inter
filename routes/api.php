<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BukuController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::apiResource('kategoris', KategoriController::class);
Route::apiResource('buku', BukuController::class);
// Route::get('/buku/{buku}',[BukuController::class,'show']);
// Route::put('buku/{id}', [BukuController::class, 'update']);
// Route::delete('/buku/{id}', [BukuController::class, 'destroy']);