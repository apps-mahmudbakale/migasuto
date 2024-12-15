<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\FormFieldController;
use App\Http\Controllers\FormResponseController;
use App\Http\Controllers\GoogleMeetController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\OnboardingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::get('forms', [FormController::class, 'index'])->name('forms.index');
    Route::get('onboard', [OnboardingController::class, 'index'])->name('onboard.index');
    Route::get('onboard-create', [OnboardingController::class, 'create'])->name('onboard.create');
    Route::post('onboard', [OnboardingController::class, 'store'])->name('onboard.store');
    Route::post('onboard-cfo', [OnboardingController::class, 'fractional_cfo'])->name('onboard.cfo');
    Route::post('onboard-leadership', [OnboardingController::class, 'leadership'])->name('onboard.leadership');

    // Routes for creating a form
    Route::get('forms/create', [FormController::class, 'create'])->name('forms.create');
    Route::post('forms', [FormController::class, 'store'])->name('forms.store');

// Routes for creating form fields (after form creation)
    Route::get('forms/{form}/fields/create', [FormController::class, 'createFields'])->name('form-fields.create');
    Route::post('forms/{form}/fields', [FormController::class, 'storeFields'])->name('form-fields.store');
    Route::post('forms/{form}/answers', [FormController::class, 'storeAnswers'])->name('form-answers.store');
    Route::get('forms/{form}', [FormController::class, 'show'])->name('forms.show');
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/schedule-meeting', [GoogleMeetController::class, 'index'])->name('schedule-meeting-form');
    Route::post('/schedule-meeting', [GoogleMeetController::class, 'scheduleMeeting'])->name('schedule-meeting');
    Route::get('/notes', [NoteController::class, 'index'])->name('notes.index');
    Route::post('/notes/upload', [NoteController::class, 'upload'])->name('notes.upload');
    Route::get('/notes/download/{note}', [NoteController::class, 'download'])->name('notes.download');


});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
