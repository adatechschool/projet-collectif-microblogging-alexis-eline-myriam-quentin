<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//création de la route pour afficher la page /posts, le contenu s'affiche grâce à la fonction getAllPosts
Route::middleware('auth')->group(function () {
    Route::get('/posts', [PostController::class, 'getAllPosts'])->name('getAllPosts');
    // Création de la route pour afficher la page /posts/{id}, le contenu s'affiche grâce à la fonction getOnePost

    Route::get('/posts/{id}', [PostController::class, 'getOnePost']);
    // Création de la route pour afficher la page /posts/createPost, le contenu s'affiche grâce à la fonction createPost
    // Route::post('/posts/newpost', [PostController::class, 'store']);
    // Route::get('/posts/newpost', [PostController::class, 'createPost'])->name('createPost');
    Route::get('/newpost', [PostController::class, "createPost"])->middleware(['auth', 'verified'])->name('createPost');
    Route::post('/newpost', [PostController::class, "store"])->middleware(['auth', 'verified'])->name('store');


    Route::get('/dashboard', [PostController::class, 'getPostByUser'])->name('dashboard');
});

Route::middleware('auth')->group(function () {

    //création de la route pour afficher la page /posts, le contenu s'affiche grâce à la fonction getAllPosts
    Route::get('/users', [UserController::class, 'getAllUsers'])->name('users');
    // Création de la route pour afficher la page /posts/{id}, le contenu s'affiche grâce à la fonction getOnePost
    Route::get('/users/{id}', [UserController::class, 'getOneUser']);
});


// test // 
Route::redirect('/', '/posts');


require __DIR__ . '/auth.php';
