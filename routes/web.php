<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\welcomeController;

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

/* Route::get('/', function () {
  return view('welcome');

  try {
DB::connection()->getPdo();
echo 'Yey, it worked';
} catch (\Exception $e) {
die("Could not connect to the database. Please check your configuration. error:" . $e );
}
});*/
Route::get('/', [welcomeController::class, 'index']);
Route::get('/about', [welcomeController::class, 'about']);
Route::get('/blog', [welcomeController::class, 'blog']);
Route::get('/details', [welcomeController::class, 'details']);
Route::get('/contact', [welcomeController::class, 'contact']);
