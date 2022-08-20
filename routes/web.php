<?php


use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Home',
    [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('About', [
        "title" => "About",
        "name" => "MynameIs",
        "email" => "ryaanizzam@gmail.com",
        "image" => "1.jpg"
    ]) ;
});

Route::get('/blog', [PostController::class,'index']);

//halaman post

Route:: get('posts/{post}',[PostController::class,'show']);



Route::get('/categories/{category:slug}',function(Category  $category){
    return view('
    category',[

        'title' => $category->name,
        'posts' => $category->post,
        'category' => $category->name
    ]);
});


Route::get('/categories',function(){
    return view('categories',[

        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);

}) ;


Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'store']);
Route::post('/logout', [LoginController::class,'logout']);

Route::get('/dashboard',[DashboardController::class,'index'])->middleware('auth');


Route::get('/register', [RegisterController::class,'index'])->middleware('guest');
Route::post('/register', [RegisterController::class,'store']);


