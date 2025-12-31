<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

// الصفحة الرئيسية
Route::get('/', [TaskController::class, 'home'])->name('home');

// قائمة المهام
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');

// صفحة إضافة مهمة
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');

// حفظ المهمة (POST)
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');

// صفحة عرض مهمة واحدة
Route::get('/tasks/{id}', [TaskController::class, 'show'])->name('tasks.show');

