<?php

use App\Http\Controllers\PortofolioController;
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

Route::get('/', function () {
    return view('portofolio.index');
});
Route::get('pmi-connect-details', function () {
    return view('portofolio.pmi-details');
});
Route::get('drugwise-details', function () {
    return view('portofolio.drugwise-details');
});
Route::get('blog-details', function () {
    return view('portofolio.blog-details');
});
Route::get('stockify-details', function () {
    return view('portofolio.stockify-details');
});



