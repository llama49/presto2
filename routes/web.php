<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AnnouncementsController;

Route::get('/', [PublicController::class , 'homepage'])->name('welcome');

Route::get('create/announcements', [AnnouncementsController::class , 'createAnnouncements'])->name('create.announcements')->middleware('auth');

Route::get('show/announcements/{announcement}', [AnnouncementsController::class , 'showAnnouncements'])->name('show.announcements');

/* Rotta per vedere tutti gli articoli */
Route::get('index/announcements/', [AnnouncementsController::class , 'indexAnnouncements'])->name('index.announcements');

Route::get('index/categories/{category}', [CategoryController::class, 'indexCategory'])->name('index.category');


/* torre revisore */
Route::get('/revisor/home', [RevisorController::class, 'index'])->name('revisor.index');

/* accetta annuncio */
Route::patch('accepted/announcement{announcement}', [RevisorController::class, 'acceptAnnouncement'])->name('revisor.accept_Announcement');

/* rifiuta annuncio */
Route::patch('refuses/announcement{announcement}', [RevisorController::class, 'refusesAnnouncement'])->name('revisor.refuses_Announcement');
