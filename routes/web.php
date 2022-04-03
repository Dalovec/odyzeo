<?php

use App\Http\Controllers\TicketFormController as TicketFormControllerAlias;
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

Route::get('/', [TicketFormControllerAlias::class, 'create']);

Route::post('/', [TicketFormControllerAlias::class, 'store'])->name('ticket-submit');

Route::get('/tickets', [TicketFormControllerAlias::class, 'view']);

Route::get('/ticket', [TicketFormControllerAlias::class, 'viewIndividual']);
