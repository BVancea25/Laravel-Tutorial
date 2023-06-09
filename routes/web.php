<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
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

//all listings
Route::get('/', [ListingController::class,'index']);


//show create form
Route::get('/listings/create', [ListingController::class,'create']);

//store listing
Route::post('/listings',[ListingController::class,'store']);

//1 listings
Route::get('/listings/{listing}',[ListingController::class,'show']);