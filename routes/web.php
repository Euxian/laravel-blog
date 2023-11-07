<?php

use App\Http\Controllers\BlogController;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\User;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardBlogController;

Route::get('/', function () {
    return view('home',[
        'title' => 'home',
        'active' => 'home'

    ]);

});

Route::get('/about', function () {
    return view('about',[
        'title' => 'about',
        'active' => 'about',
        'name' => 'Naruto',
        'email' => 'cuy@gmail.com',
        'images' => 'naruto.jpg'
    ]);
});

// menu blog
Route::get('/blog',
[BlogController::class, 'Index'] );

// single post
Route::get('/blog/{post:slug}',
[BlogController::class, 'show']);

// list per category
Route::get('/categories/{category:slug}', 
function (Category $category)
{return view('blog', 
    [
    'title'=>"Post By Category : $category->name",
    'active' => 'category',
    'post'=>$category->blog->load('category', 'user'),
]);
});

// all category
Route::get('/categories', function(){
    return view('allcategory',[
        'title'=>'All Category',
        'active' => 'category',
        'categories'=>Category::all()
    ]);
});

// list per user
Route::get('/authors/{user}', function(User $user){
    return view('blog',[
        'title'=>"Post By User : $user->name",
        'active' => 'category',
        'post'=>$user->blog->load('category', 'user')
    ]);
});

//Untuk Login
Route::get('/login',[LoginController::class, 'Index'] )->name('login')->middleware('guest');

//Untuk Registrasi
Route::get('/registrasi',[RegistrasiController::class, 'Index'] );

//Untuk Registrasi
Route::post('/registrasi',[RegistrasiController::class, 'Store'] )->middleware('guest');

// FORM LOGIN
Route::post('/login',[LoginController::class, 'Authenticate'] );

// LOGOUT
Route::post('/logout',[LoginController::class, 'Logout'] );

// DASHBOARD
Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

// Menjalankan Resource
Route::resource('/dashboard/blog', DashboardBlogController::class)->middleware('auth');
