<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/user/save', [UserController::class, 'save'])->name('user.save');
Route::post('/user/check', [UserController::class, 'check'])->name('user.check');
Route::get('/user/logout', [UserController::class, 'logout'])->name('user.logout');
Route::get('/user/profile', [UserController::class, 'profile'])->name('user.profile');
Route::get('/user/login', [UserController::class, 'login'])->name('user.login');
Route::get('/user/profile', [UserController::class, 'profile'])->name('user.profile');
Route::get('/user/register', [UserController::class, 'register'])->name('user.register');
Route::get('/user/profileview', [UserController::class, 'profile'])->name('user.profileview');
Route::get('/user/profileedit', [UserController::class, 'edit'])->name('user.profileedit');
Route::get('/user/chats', [UserController::class, 'chats'])->name('user.chats');
Route::put('/user/updateProfile', [UserController::class, 'updateProfile'])->name('user.updateProfile');
Route::get('/user/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');

Route::post('/admin/save', [AdminController::class, 'save'])->name('admin.save');
Route::post('/admin/check', [AdminController::class, 'check'])->name('admin.check');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
Route::get('/admin/profileview', [AdminController::class, 'profile'])->name('admin.profileview');
Route::get('/admin/profileedit', [AdminController::class, 'edit'])->name('admin.profileedit');
Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');
Route::get('/admin/register', [AdminController::class, 'register'])->name('admin.register');
Route::get('/admin/chats', [AdminController::class, 'chats'])->name('admin.chats');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::put('/admin/updateProfile', [AdminController::class, 'updateProfile'])->name('admin.updateProfile');


Route::get('/admin/fetch-messages', [ChatController::class, 'fetchMessages'])->name('admin.fetchMessages');
Route::post('/admin/send-message', [ChatController::class, 'sendMessage'])->name('admin.sendMessage');


Route::get('/fetch-messages', [ChatController::class, 'fetchMessagesFromUserToAdmin'])->name('fetch.messagesFromSellerToAdmin');
Route::post('/send-message', [ChatController::class, 'sendMessageFromUserToAdmin'])->name('send.Messageofsellertoadmin');