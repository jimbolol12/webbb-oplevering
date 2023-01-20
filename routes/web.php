<?php

use App\Http\Controllers\EventsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TicketsController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [PagesController::class, 'showHome'])->name('home');

Route::get('/about-us', [PagesController::class, 'viewAboutUs'])->name('about-us');
Route::get('/contact', [PagesController::class, 'viewContact'])->name('contact');
Route::get('/tickets', [TicketsController::class, 'listTickets'])->name('listTickets')->middleware('auth');
Route::get('/add-event', [EventsController::class, 'addEvent'])->name('add-event')->middleware('admin');
Route::get('/delete-event{eventId}', [EventsController::class, 'deleteEvent'])->name('delete-event');
Route::get('/add-event-form', [PagesController::class, 'addEvent'])->name('add-event-form')->middleware('admin');
Route::post('/add-event-form', [EventsController::class, 'processAddEvent'])->name('save-event-form');
Route::get('/events', [EventsController::class, 'listEvents'])->name('list-events')->middleware('auth');
Route::get('/change-event-form{eventId}', [EventsController::class, 'changeEvent'])->name('change-event-form')->middleware('admin');
Route::post('/change-event-form{eventId}', [EventsController::class, 'processChangeEvent'])->name('save-change-event-form');

Route::get('/testroute2', [PagesController::class, 'showTest2']);

require __DIR__.'/auth.php';
