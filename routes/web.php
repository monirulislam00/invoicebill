<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Api\InvoiceController;
use Illuminate\Support\Str;
use App\Models\User;
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
    if (session()->has('userId')) {
        $role = User::find(session('userId'));
        if ($role = "admin");
        return view("welcome", ["role" => $role]);
    }
    return view("welcome");
});

Route::get('dashboard', function () {
    return view('user.dashboard');
})->middleware(['auth', 'verified', 'role:user'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post("/api/create-invoice", [InvoiceController::class, "store"])->name('invoice.store');
    Route::get("pdf/view/{id}", [InvoiceController::class, "watchPdf"])->name('pdf.view');
});

require __DIR__ . '/auth.php';
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminDestroy'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/add/user', [UserController::class, 'AddUser'])->name('add.user');
    Route::post('/store/user', [UserController::class, 'StoreUser'])->name('store.user');
    Route::get('/all/user', [UserController::class, 'AllUser'])->name('all.user');
});
Route::get('/admin/login', [AdminController::class, 'AdminLogin']);


Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'UserDashboard'])->name('user.dashboard');
});


Route::get('/test', function () {
    p(session()->all());
});
