<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TrainArticleController;
use App\Http\Controllers\TrainNewsController;
use App\Http\Controllers\TrainDetailsController;
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

Route::get('/',[PagesController::class, 'index'] );
Route::get('/trainDetails',[PagesController::class, 'trainDetails'] );
Route::get('/trainNews',[PagesController::class, 'trainNews'] );
Route::get('/trainDetails/details/{id}',[PagesController::class, 'traindetailsExt']);
Route::get('/trainDetails/detailssearch',[TrainDetailsController::class,'searchdetails']);
Route::get('/trainNews/details/{id}',[PagesController::class, 'trainnewsExt']);
Route::get('/trainNews/newssearch',[TrainNewsController::class,'searchnews']);
Route::get('/trainArticle',[PagesController::class, 'trainArticle'] );
Route::get('/trainArticle/articlesearch',[TrainArticleController::class,'searcharticle']);
Route::get('/trainArticle/details/{id}',[PagesController::class, 'trainarticleExt']);
Route::get('/aboutUs',[PagesController::class, 'aboutUs'] );


//admin controll
Route::get('/adminlogin',[AdminController::class, 'adminlogin'])->name('login');
Route::post('/adminloginfunc',[AdminController::class, 'loginfunc']);
Route::get('/adminregister',[AdminController::class, 'create'] );
Route::post('/adminauth', [AdminController::class, 'store']);
Route::get('/admindashboard',[AdminController::class, 'show'])->middleware('auth');
Route::post('/adminlogout',[AdminController::class, 'exit'])->middleware('auth');
//admin crud
Route::resource('admin/trainnews', TrainNewsController::class)->middleware('auth');
Route::resource('admin/trainarticle', TrainArticleController::class)->middleware('auth');
Route::resource('admin/traindetails', TrainDetailsController::class)->middleware('auth');