<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\TeamMemberController;
use App\Http\Controllers\WelcomeController;

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

Route::get('/', [WelcomeController::class, 'welcome']);

Route::get('insertactivities', [ActivityController::class, 'index']);

Route::get('join-tables', [TeamMemberController::class, 'index']);
