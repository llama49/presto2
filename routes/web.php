<?php

use App\Http\Controllers\AnnouncementsController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class , 'homepage'])->name('welcome');

Route::get('create/announcements', [AnnouncementsController::class , 'createAnnouncements'])->name('create.announcements')->middleware('auth');

