<?php


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\GreetringController;
use App\Http\Controllers\MenuController;


Route::get('/azzam', function () {
    return view('welcome');
});

Route::get('/sari', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashbord');
})->middleware(['auth']);

// Route::get('/menu', [MenuController::class, 'index'])->only(['index', 'store', 'edit', 'update', 'destroy', 'create']);


// Route::resource('menu', MenuController::class)->only([
//     'index', 'store', 'edit', 'update', 'destroy', 'create'
// ]);

Route::resource('menu', MenuController::class);



