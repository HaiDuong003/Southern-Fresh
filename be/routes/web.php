<?php

use App\Http\Controllers\CMS\DashboardController;
use App\Http\Controllers\CMS\EmployeeController;
use App\Http\Controllers\CMS\UserController;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use \App\Http\Middleware\CheckLogin;
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
        Route::get('/employee/list', [EmployeeController::class, 'listEmployee'])->name('listEmployee');
        Route::get('/employee/list/fillter', [EmployeeController::class, 'filterEmployee'])->name('filterEmployee');
        Route::get('/employee/detail/{id}', [EmployeeController::class, 'detailEmployee'])->name('detailEmployee');
        Route::get('/employee/edit/{id}', [EmployeeController::class, 'editEmployeeForm'])->name('editEmployee');
        Route::put('/employee/edit/{id}', [EmployeeController::class, 'editEmployee'])->name('editEmployee');
        Route::get(
            '/employee/add',
            function () {
                return view('managements.employee.add');
            }
        )->name('addEmployee');
    });
});
