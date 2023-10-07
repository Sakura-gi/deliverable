<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RackController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController; 
use Illuminate\Support\Facades\Route;

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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/', [RackController::class, 'index'])->name('racks.index');
    Route::get('/racks/create', [RackController::class, 'create'])->name('racks.create');
    Route::post('/racks/create',[RackController::class,'store']);
    Route::get('/racks/stock',[RackController::class,'stock']);
    Route::get('/racks/favorites',[RackController::class,'favorites']);
    Route::get('/racks/{post}',[RackController::class,'show']);
    Route::get('/posts/{post}', [RackController::class, 'edit']);
    Route::put('/posts/{post}', [RackController::class, 'update']);
    
    // user一覧を表示するページのルーティングを書く。
    
  
    
    Route::get('/users',[UserController::class,'index']);
    Route::get('users/edit',[UserController::class,'edit']);
    Route::get('/users/stock',[UserController::class,'stock']);
    Route::get('/users/{user}',[UserController::class,'show']);
    Route::put('/users/{user}',[UserController::class,'update']);
    
    Route::get('/categories/select', [CategoryController::class,'select']);
    Route::get('/categories', [CategoryController::class,'categories']);
    Route::get('/categories/{category}', [CategoryController::class,'index']);
    
   


    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
