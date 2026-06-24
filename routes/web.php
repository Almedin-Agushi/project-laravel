<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\IssueController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('welcome');
});

Route::post('/issues/{issue}/attach-tag',
    [IssueController::class, 'attachTag'])
    ->name('issues.attachTag');
    
    Route::post('/issues/{issue}/comments',
    [CommentController::class, 'store'])
    ->name('comments.store');

Route::get('/', [DashboardController::class, 'index']);

Route::resource('projects', ProjectController::class);
Route::resource('issues', IssueController::class);
Route::resource('tags', TagController::class);