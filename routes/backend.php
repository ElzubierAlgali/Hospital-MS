<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\DashboardController;
/*
|--------------------------------------------------------------------------
| Web Backend
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dashboard/admin',[DashboardController::class,'index']);

Route::get('/dashboard/user', function () {
    return view('dashboard.user.dashboard');
})->middleware(['auth'])->name('dashboard.user');

require __DIR__.'/auth.php';

