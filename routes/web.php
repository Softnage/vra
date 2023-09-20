<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AdmissionFormController;
use App\Http\Controllers\AdmissionNoticeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use App\Models\News;
use App\Models\Event;

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
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('news.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/event/{event}', [EventController::class, 'details'])->name('details');
Route::get('/new/{news}', [NewsController::class, 'Details'])->name('newsDetails');
Route::get('about', [PagesController::class, 'about'])->name('about');
Route::get('admission_process', [PagesController::class, 'admission_process'])->name('admission_process');
Route::get('archived', [PagesController::class, 'archived'])->name('archived');
Route::get('co_curricular_activities', [PagesController::class, 'co_curricular_activities'])->name('co_curricular_activities');
Route::get('contact', [PagesController::class, 'contact'])->name('contact');
Route::get('curriculum', [PagesController::class, 'curriculum'])->name('curriculum');
Route::get('facilities', [PagesController::class, 'facilities'])->name('facilities');
Route::get('faqs', [PagesController::class, 'faqs'])->name('faqs');
Route::get('guidance', [PagesController::class, 'guidance'])->name('guidance');
Route::get('history', [PagesController::class, 'history'])->name('history');
Route::get('photo', [PagesController::class, 'photo'])->name('photo');
Route::get('portal', [PagesController::class, 'portal'])->name('portal');
Route::get('programme_and_time', [PagesController::class, 'programme_and_time'])->name('programme_and_time');
Route::get('school_activities', [PagesController::class, 'school_activities'])->name('school_activities');
Route::get('school_anthem', [PagesController::class, 'school_anthem'])->name('school_anthem');
Route::get('school_calen', [PagesController::class, 'school_calen'])->name('school_calen');
Route::get('school_hymn', [PagesController::class, 'school_hymn'])->name('school_hymn');
Route::get('school_organization', [PagesController::class, 'school_organization'])->name('school_organization');
Route::get('social_guida', [PagesController::class, 'social_guida'])->name('social_guida');
Route::get('spiritual', [PagesController::class, 'spiritual'])->name('spiritual');
Route::get('staff', [PagesController::class, 'staff'])->name('staff');
Route::get('visiting', [PagesController::class, 'visiting'])->name('visiting');
Route::get('welcome_message', [PagesController::class, 'welcome_message'])->name('welcome_message');
Route::get('news_events', [PagesController::class, 'news_events'])->name('news_events');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('events', EventController::class);
    Route::resource('news', NewsController::class);
    Route::resource('admission-forms', AdmissionFormController::class);
    Route::resource('admission-notices', AdmissionNoticeController::class);
});

require __DIR__.'/auth.php';