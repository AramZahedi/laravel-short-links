<?php

use App\Http\Controllers\ShowLinkController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

/*
 ******************************************
 *            Single Short Link
 ******************************************
 */
Route::prefix('{link:short}')->group(function () {
    /*
     ******************************************
     *                Show Link
     ******************************************
     */
    Route::get('/', [ShowLinkController::class, 'show'])
        ->name('links.single.show');
});
