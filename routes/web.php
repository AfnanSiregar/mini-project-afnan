<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ClientController;
use App\Models\Project;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource('/', ProjectController::class);
Route::resource('project', ProjectController::class);
Route::resource('klien', ClientController::class);
Route::delete('/selected-project', [ProjectController::class, 'deleteCheckedProjects'])->name('project.deleteSelected');
Route::post('/post/multi-delete', [ProjectController::class, 'multiDelete'])->name('post.multi-delete');
Route::post('/search', [ProjectController::class, 'search']);
