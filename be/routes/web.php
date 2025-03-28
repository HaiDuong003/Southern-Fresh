<?php

use App\Http\Controllers\CMS\DashboardController;
use App\Http\Controllers\CMS\EmployeeController;
use App\Http\Controllers\CMS\ManagerController;
use App\Http\Controllers\CMS\UserController;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use \App\Http\Middleware\CheckLogin;
use App\Services\CMS\EmployeeService;

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

// Route::get('/', function () {
//     return view('index');
// })->name('/');
// Route::get('/', [DashboardController::class, 'index'])->middleware('checklogin')->name('home');


// login
Route::prefix('login')
    ->group(function () {
        Route::get('', [UserController::class, 'loginForm'])->name('login');
        Route::post('', [UserController::class, 'login'])->name('user.login');
    });
Route::post('/register', [UserController::class, 'register'])->name('register');
Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');

// Route::prefix('posts')
//     ->as('posts')
//     ->group(function () {
//         Route::get('', [UserController::class, 'showPost'])->name('');
//         Route::get('/add', [UserController::class, 'addPost'])->name('.add');
//     });

Route::middleware(['checklogin'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [UserController::class, 'profileUser'])->name('profile');
    Route::prefix('admin')->group(function () {
        Route::prefix('/employee')->group(function () {
            Route::get('/list', [EmployeeController::class, 'listEmployee'])->name('listEmployee');
            Route::get('/list/fillter', [EmployeeController::class, 'filterEmployee'])->name('filterEmployee');
            Route::get('/detail/{id}', [EmployeeController::class, 'detailEmployee'])->name('detailEmployee');
            Route::get('/edit/{id}', [EmployeeController::class, 'editEmployeeForm'])->name('editEmployee');
            Route::put('/edit/{id}', [EmployeeController::class, 'editEmployee'])->name('editEmployee');
            Route::get('/add', [EmployeeController::class, 'addEmployeeForm'])->name('addEmployee');
            Route::post('/add', [EmployeeController::class, 'addEmployee'])->name('addEmployee');
            Route::delete('/delete/{id}', [EmployeeController::class, 'deleteEmployee'])->name('deleteEmployee');
        });
        Route::prefix('/manager')->group(function () {
            Route::get('/list', [ManagerController::class, 'listManager'])->name('listManager');
            Route::get('/list/fillter', [ManagerController::class, 'filterManager'])->name('filterManager');
        });
    });
});
