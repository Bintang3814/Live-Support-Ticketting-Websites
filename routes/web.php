<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SummaryController;
use App\Http\Controllers\TeknisiController;
use App\Http\Controllers\TicketsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataMasterController;

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
    return view('welcome');
})->middleware('auth');

Route::middleware(['only_guest'])->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'authenticating']);
    Route::get('register', [AuthController::class, 'register']);
    Route::post('register', [AuthController::class, 'registerProcess']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('logout', [AuthController::class, 'logout']);

    Route::get('dashboard', [DashboardController::class, 'index'])->middleware('only_admin');

    Route::get('home', [UserController::class, 'index'])->middleware('only_user');

    Route::get('teknisi', [TeknisiController::class, 'index'])->middleware('only_teknisi');

    Route::get('tickets', [TicketsController::class, 'index']);
    Route::get('tickets-add', [TicketsController::class, 'add']);

    Route::get('summary', [SummaryController::class, 'index']);

    Route::get('master', [DataMasterController::class, 'index']);
    Route::get('user', [DataMasterController::class, 'user']);
    Route::get('add-user', [DataMasterController::class, 'adduser']);
    Route::post('add-user', [DataMasterController::class, 'storeuser']);

    Route::get('objek', [DataMasterController::class, 'objek']);
    Route::get('add-objek', [DataMasterController::class, 'addobjek']);
    Route::post('add-objek', [DataMasterController::class, 'storeobjek']);
    Route::get('update-object/{slug}', [DataMasterController::class, 'editobjek']);
    Route::put('update-object/{slug}', [DataMasterController::class, 'updateobjek']);
    Route::get('delete-object/{slug}', [DataMasterController::class, 'deleteobjek']);
    Route::get('remove-object/{slug}', [DataMasterController::class, 'removeobjek']);
    Route::get('deleted-objek', [DataMasterController::class, 'deletedobjek']);
    Route::get('restore-objek/{slug}', [DataMasterController::class, 'restoreobjek']);

    Route::get('lokasi', [DataMasterController::class, 'lokasi']);
    Route::get('add-lokasi', [DataMasterController::class, 'addlokasi']);
    Route::post('add-lokasi', [DataMasterController::class, 'storelokasi']);

    Route::get('teknik', [DataMasterController::class, 'teknik']);
});
