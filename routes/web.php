<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ShelfController;
use App\Http\Controllers\VerseController;
use App\Models\Category;
use App\Models\Page;
use Illuminate\Support\Facades\Auth;

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
// Route::get('/linkstorage', function () {
//     Artisan::call('storage:link');
// });
Route::group(['middleware' => 'auth'], function () {

    // Route::get('/home', function () {
    //     return view('user.index');
    // })->name('index');
    // Route::get('/', function () {
    //     return view('user.index');
    // })->name('index');
    Route::get('/user/bible/{book}', function ($book) {
        $pages = Page::all();
        return view('user.Old-testament.bible', compact('book', 'pages'));
    })->name('user.bible');
    //categories
    Route::get('/user/category-deutero', function () {
        return view('user.Old-testament.category-deutero');
    })->name('category.deutero');
    Route::get('/user/category-former/{book}', function ($book) {
        return view('user.Old-testament.category-former', compact('book'));
    })->name('category.former');
    Route::get('/user/category-minor/{book}', function ($book) {
        return view('user.Old-testament.category-minor', compact('book'));
    })->name('category.minor');
    Route::get('/user/category-penta', function () {
        return view('user.Old-testament.category-penta');
    })->name('category.penta');
    Route::get('/user/category-tora', function () {
        return view('user.Old-testament.category-tora');
    })->name('category.tora');
    Route::get('/user/category-writing/{book}', function ($book) {
        return view('user.Old-testament.category-writing', compact('book'));
    })->name('category.writing');


    //single
    Route::get('/user/deutero/{book}', function ($book) {
        return view('user.Old-testament.deutero', compact('book'));
    })->name('user.deutero');
    Route::get('/user/former/{book}', function ($book) {
        return view('user.Old-testament.former', compact('book'));
    })->name('user.former');
    Route::get('/user/Old-testament', function () {
        return view('user.Old-testament.Old-testament');
    })->name('old-testament');
    Route::get('/user/penta/{book}', function ($book) {
        return view('user.Old-testament.penta', compact('book'));
    })->name('user.penta');

    Route::get('/user/torah/{book}', function ($book) {
        return view('user.Old-testament.torah', compact('book'));
    })->name('user.torah');
    Route::get('/user/writing/{book}', function ($book) {
        return view('user.Old-testament.writing', compact('book'));
    })->name('user.writing');

    Route::get('/user/minor-prophet/{book}', function ($book) {
        return view('user.Old-testament.minor-prophet', compact('book'));
    })->name('user.minor-prophet');


    //new testament
    Route::get('/user/index/{book}', function ($book) {
        return view('user.new-testament.index', compact('book'));
    })->name('new-testament.index');
    Route::get('/user/new-testament', function () {
        return view('user.new-testament.new-testament');
    })->name('new-testament');
    Route::get('/user/prayer/{book}', function ($book) {
        return view('user.new-testament.prayer', compact('book'));
    })->name('user.prayer');
    Route::get('/user/about-us', function () {
        return view('user.about-us');
    })->name('about-us');
    Route::get('/user/contact-us', function () {
        return view('user.contact-us');
    })->name('contact-us');
    Route::get('/user/subscription', function () {
        return view('user.subscription');
    })->name('subscription');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/home', [ShelfController::class, 'showCategories'])->name('index');
    Route::get('/index', [ShelfController::class, 'showCategories'])->name('index');
    

});

Route::get('/show/{category}/{book?}', [ShelfController::class, 'toggle'])->name('show');

Route::post('/show/bookdata', [ShelfController::class, 'getBook'])->name('getBook');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', [ShelfController::class, 'showCategories'])->name('index');
    Route::get('/login', [AuthController::class, 'loginView'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/register', [AuthController::class, 'registerView'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::get('/forgot-password', function () {
        return view('auth.forgot-password');
    })->name('forgot-password');
    Route::get('/succesful', function () {
        return view('auth.succesful');
    })->name('succesful');
    Route::get('/verification', function () {
        return view('auth.verification');
    })->name('verification');
    Route::get('/new-password', function () {
        return view('auth.new-password');
    })->name('new-password');
    
    
    //  Route::get('/home', [ShelfController::class, 'showCategories'])->name('index');
    Route::get('/index', [ShelfController::class, 'showCategories'])->name('index');
    // Route::get('/show/{category}/{book?}', [ShelfController::class, 'toggle'])->name('show');

    
});
Route::group(['middleware' => 'is.admin'], function () {

    Route::get('/category/index', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/create', [CategoryController::class, 'store'])->name('category.create');
    Route::get('/category/delete/{category}', [CategoryController::class, 'destroy'])->name('category.delete');
    Route::get('/category/edit/{category}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/edit/{category}', [CategoryController::class, 'update'])->name('category.edit');


    //books
    Route::get('/book/index', [BookController::class, 'index'])->name('book.index');
    Route::get('/book/create', [BookController::class, 'create'])->name('book.create');
    Route::post('/book/create', [BookController::class, 'store'])->name('book.create');
    Route::get('/book/delete/{book}', [BookController::class, 'destroy'])->name('book.delete');
    Route::get('/book/edit/{book}', [BookController::class, 'edit'])->name('book.edit');
    Route::post('/book/edit/{book}', [BookController::class, 'update'])->name('book.edit');

    //pages
    Route::get('/page/index/{book}', [PageController::class, 'index'])->name('page.index');
    Route::get('/page/create/{book}', [PageController::class, 'create'])->name('page.create');
    Route::post('/page/create/{book}', [PageController::class, 'store'])->name('page.create');
    Route::get('/page/delete/{page}', [PageController::class, 'destroy'])->name('page.delete');
    Route::get('/page/edit/{page}', [PageController::class, 'edit'])->name('page.edit');
    Route::post('/page/edit/{page}', [PageController::class, 'update'])->name('page.edit');

    //chapters
    Route::get('/chapter/index/{book}', [ChapterController::class, 'index'])->name('chapter.index');
    Route::get('/chapter/create/{book}', [ChapterController::class, 'create'])->name('chapter.create');
    Route::post('/chapter/create/{book}', [ChapterController::class, 'store'])->name('chapter.create');
    Route::get('/chapter/delete/{chapter}', [ChapterController::class, 'destroy'])->name('chapter.delete');
    Route::get('/chapter/edit/{chapter}', [ChapterController::class, 'edit'])->name('chapter.edit');
    Route::post('/chapter/edit/{chapter}', [ChapterController::class, 'update'])->name('chapter.edit');

    //verse
    Route::get('/verse/index/{chapter}', [VerseController::class, 'index'])->name('verse.index');
    Route::get('/verse/create/{chapter}', [VerseController::class, 'create'])->name('verse.create');
    Route::post('/verse/create/{chapter}', [VerseController::class, 'store'])->name('verse.create');
    Route::get('/verse/delete/{verse}', [VerseController::class, 'destroy'])->name('verse.delete');
    Route::get('/verse/edit/{verse}', [VerseController::class, 'edit'])->name('verse.edit');
    Route::post('/verse/edit/{verse}', [VerseController::class, 'update'])->name('verse.edit');
});
