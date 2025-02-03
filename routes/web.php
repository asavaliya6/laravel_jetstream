<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TeamInvitationController;

use App\Livewire\Posts;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/posts', Posts::class)->middleware('auth')->name('posts');

// Route::get('posts', Posts::class)->middleware('auth');

// Route::middleware(['auth'])->group(function () {
//     Route::resource('tasks', TaskController::class);
// });

Route::post('/team/invite', [TeamInvitationController::class, 'invite'])->name('team-invite');
Route::get('/team/invitations/{invitation}/accept', [TeamInvitationController::class, 'accept'])->name('team-invitations.accept');
