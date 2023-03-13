<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Models\Project;
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
    return view('welcome');

});

Route::get('getAllProjects', [ProjectController::class,'getAllProjects']);

Route::get('insertProject', [ProjectController::class,'insertProject']);

Route::get('crearRegistro', [ProjectController::class,'crearRegistro']);

Route::get('updateProject', [ProjectController::class,'updateProject']);

Route::get('executionProject', [ProjectController::class,'executionProject']);

Route::get('nameInactivosProject', [ProjectController::class,'nameInactivosProject']);

Route::get('deleteProject', [ProjectController::class,'deleteProject']);




