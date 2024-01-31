<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CodeDecryptController;
use App\Http\Controllers\LcdController;
use App\Http\Controllers\WinningTicketController;
use App\Http\Controllers\EarningStatsController;
use App\Http\Controllers\TimeCounterController;

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
    return redirect('/code_breaker');
});

Route::get('code_breaker', [CodeDecryptController::class, 'index'])->name('codeBreaker');
Route::get('lcd', [LcdController::class, 'index'])->name('lcd');
Route::post('lcd_number', [LcdController::class, 'showNumber'])->name('lcdNumber');
Route::get('winning_tickets', [WinningTicketController::class, 'index'])->name('winningTickets');
Route::get('earning_stats', [EarningStatsController::class, 'index'])->name('earningStats');
Route::get('time_counter', [TimeCounterController::class, 'index'])->name('timeCounter');

