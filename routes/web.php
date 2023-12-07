<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\Book;
use App\Http\Controllers\ReviewController;
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

Route::get('/', function (Illuminate\Http\Request $request) {
    $categoryId = $request->query('category');
    
    if($categoryId == 0) { 
        $books = Book::latest()->with('category')->paginate(8);
    } else {
        $books = Book::where('category_id', $categoryId)->latest()->with('category')->paginate(9);
    }
    return view('layouts.index', [
        'books' => $books
    ]);
});

Route::get('/book/{book}', function (Book $book) {
    return view('components.book', [
        'book' => $book
    ]);
});


Route::get('/dashboard', function () {
    if (Auth::check()) {
        return Redirect::to('/')->with('success', 'Sign in successfully');
    }
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('admin/books/create', [BookController::class, 'create'])->middleware('admin');
Route::post('admin/add', [BookController::class, 'store'])->middleware('admin');
Route::get('admin/delete/{book}', [BookController::class, 'delete'])->middleware('admin');
Route::get('admin/books/{book}/edit', [BookController::class, 'edit'])->middleware('admin');
Route::post('admin/{book}/update', [BookController::class, 'update'])->middleware('admin');

Route::middleware(['auth'])->group(function () {
    Route::get('/reviews/{book}/create', [ReviewController::class, 'create']);
    Route::post('/reviews/{book}/store', [ReviewController::class, 'store']);
});

require __DIR__.'/auth.php';
