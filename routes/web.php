<?php
//AGGIUNGO MANUALMENTE LA USE Al CONTROLLER PageController
use App\Http\Controllers\Guest\PageController;
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


//collego una rotta che avra come url '/',
//Questa rotta viene gestita dal controller PageController,
//Piu precisamente dalla 'public function index()' all'interno di PageController
Route::get('/', [PageController::class, 'index'])->name('welcome');

Route::get('/info', [PageController::class, 'info'])->name('info');
