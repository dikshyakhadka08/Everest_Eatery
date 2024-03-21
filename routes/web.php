<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RerserveController;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\AddCartController;
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\SubscriptionController;

use App\Http\Controllers\SearchSortController;
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
Route::get("/",[HomeController::class,"index"]);

Route::get('/about', [HomeController::class, 'about']);

Route::get('/foodmenu', [HomeController::class, 'foodmenu'])
    ->name('foodmenu')
    ->middleware('checkUserRole:0');
    
Route::post('/subscribe', [SubscriptionController::class, 'subscribe'])->name('subscribe');

Route::get("/customers",[AdminController::class,"customer"])->middleware('AllAdmin');

Route::post("/tablereserve",[RerserveController::class,"tablereserve"]);

Route::get("/deletemenu/{id}",[AdminController::class,"deletemenu"])->middleware('AllAdmin');
 
Route::post("/uploadchef",[ChefController::class,"uploadchef"])->middleware('login');

Route::group(['middleware' => 'SuperAdmin'], function () {
Route::get("/displayreservation",[RerserveController::class,"displayreservation"]);
});

Route::delete('/deletecustomer', [AdminController::class, 'deletecustomerr'])->name('deletecustomerr');

Route::get("/displaychef",[ChefController::class,"displaychef"])->middleware('AllAdmin');

Route::get("/updatechef/{id}", [ChefController::class, "updatechef"]);

Route::put("/updatedadminchef/{id}", [ChefController::class, "updatedadminchef"])->middleware('AllAdmin');

Route::get("/menu",[AdminController::class,"menu"])->middleware('AllAdmin');

Route::get("/deletechef/{id}",[ChefController::class,"deletechef"])->middleware('AllAdmin');

Route::post("/addcart/{id}",[AddCartController::class,"addcart"]);

Route::get("/displaycart/{id}",[AddCartController::class,"displaycart"]);

Route::post("/importfood",[AdminController::class,"import"])->middleware('AllAdmin');

Route::post("/confirmorder",[HomeController::class,"confirmorder"]);

Route::get("/deletecustomer/{id}",[AdminController::class,"deletecustomer"])->middleware('AllAdmin');

Route::get("/updatemenu/{id}",[AdminController::class,"updatemenu"])->middleware('AllAdmin');

Route::post("/updated/{id}",[AdminController::class,"updated"])->middleware('AllAdmin');

Route::get("/remove/{id}",[AddCartController::class,"remove"]);
 
Route::get("/redirects",[HomeController::class,"redirects"]);

Route::get("/ordergiven",[AdminController::class,"ordergiven"])->middleware('AllAdmin');

Route::get("/search",[AdminController::class,"search"])->middleware('AllAdmin');

Route::get("/searchfood",[SearchSortController::class,"searchfood"]);

Route::get('/filterfood', [SearchSortController::class,"filterfood"]);

Route::get("/sortmenu", [SearchSortController::class, "sortMenu"]);

Route::get("/confirmorder", [AddCartController::class, "confirmOrder"]);

Route::get('/test403', function () {
    abort(403);
});
Route::get('/test503', function () {
    abort(503);
});
Route::get('/test419', function () {
    return view('test419'); // This view contains a form with a CSRF token
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Admin-specific routes
    Route::middleware(['admin.access'])->group(function () {
        Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    });
});

