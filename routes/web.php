<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\productController;
use App\Http\Controllers\user_signup;
use App\Http\Controllers\viewController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\DataCollector\DataCollector;

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

// Route::get('/admin', function () {
//     return view('adminAnalytics');
// });
// Route::get('/signup', function () {
//     return view('signup');
// });
// Route::get('/login', function () {
//     return view('login');
// });
Route::get('/blog', 'App\Http\Controllers\usersignup@fetchnews');

Route::get('/About', function () {
    return view('About');
});
Route::get('/donate', function () {
    return view('donate');
});


Route::get('/signup', function () {
    return view('signup');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/', [viewController::class, 'mainView']);
Route::get('/main', [viewController::class, 'mainView']);
Route::get('/product', [productController::class, 'index']);
Route::get('/signup', [user_signup::class, 'checkSessionSignup']);
Route::get('/login', [user_signup::class, 'checkSessionLogin']);

Route::post('/signup',[user_signup::class, 'signup']);

Route::post('/login',[user_signup::class, 'login']);
Route::get('/admin', [DataController::class, 'getData']);

Route::get('/logout',[user_signup::class, 'logout']);
Route::get('/admin', [DataController::class, 'checkSessionSignup']);
Route::post('/admin', [DataController::class, 'adminLogin']);
Route::get('/adminLogout', [DataController::class, 'adminLogout']);
Route::get('/adminAnalytics.html', [DataController::class, 'checkSessionSignup']);

Route::get('/analyticsAdd', [DataController::class, 'add']);
Route::get('/analyticDelete', [DataController::class, 'delete']);
Route::get('/analyticsManage', [DataController::class, 'manage']);
Route::get('/analyticsAdd.html', [DataController::class, 'add']);
Route::get('/analyticDelete.html', [DataController::class, 'delete']);
Route::get('/analyticsManage.html', [DataController::class, 'manage']);

Route::get('/api/get-live-curve-chart-data', 'DataController@getLiveChartData')->name('live.curve.chart.data');

//CRUD Opetation controllers
Route::get("/product",[productController::class,'index']);
Route::get("/product/{page}",[productController::class,'append']);
Route::post("/product",[productController::class,'search']);
Route::put('/update-product/{productId}', 'productController@updateProduct');

//CRUD Opetation controllers
Route::get('/search/{term}', [productController::class, 'searchSuggestion']);
Route::get('/searchProd/{term}', [productController::class, 'searchProduct']);
Route::delete('/delProd/{term}', [productController::class, 'deleteProduct']);
// Route::put('/update-product/{productId}', 'productController@updateProduct');

Route::post('/analyticsAdd', [productController::class, 'insertProducts']);
Route::post('/analyticsUpdate', [productController::class, 'updateProducts']);
