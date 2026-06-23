<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\IssueController;
use App\Http\Controllers\TagController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/issues/{issue}/attach-tag',
    [IssueController::class, 'attachTag'])
    ->name('issues.attachTag');

Route::resource('projects', ProjectController::class);
Route::resource('issues', IssueController::class);
Route::resource('tags', TagController::class);