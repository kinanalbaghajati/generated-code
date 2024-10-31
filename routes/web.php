<?php

use App\Http\Controllers\Backend\ContentController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    return view('backend/index_dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::middleware(['permission:roles_tab'])->prefix('roles')->controller(RoleController::class)->group(function () {
        Route::get('role/index', 'index')->name('role.index');
        Route::get('/role/show/{id}', 'show')->name('roles.show');
        Route::post('/role/store', 'store')->name('roles.store');
        Route::get('/role/create', 'create')->name('roles.create');
        Route::get('/role/edit/{id}', 'edit')->name('roles.edit');
        Route::post('/role/update/{id}', 'update')->name('roles.update');
        Route::delete('/role/destroy/{id}', 'destroy')->name('roles.destroy');
    });


    Route::middleware(['permission:admin_tab'])->prefix('admins')->controller(UserController::class)->group(function() {
        Route::get('admins', 'index')->name('admins.index');
        Route::post('admins/store', 'store')->name('admins.store');
        Route::post('admins/update/{id}', 'update')->name('admins.update');
        Route::delete('admins/destroy/{id}', 'destroy')->name('admins.destroy');
    });

    Route::prefix('receipts')->controller(InvoiceController::class)->group(function() {
        Route::get('receipt', 'index')->name('invoice.index')->middleware(['permission:invoices_all']);
        Route::get('receipt/create', 'create')->name('invoice.create')->middleware(['permission:invoices_add']);
        Route::post('receipt/insert', 'store')->name('invoice.insert')->middleware(['permission:invoices_add']);
        Route::post('receipt/update/{id}', 'update')->name('invoice.update')->middleware(['permission:invoices_all']);
        Route::delete('receipt/delete/{id}', 'destroy')->name('invoice.destroy')->middleware(['permission:invoices_all']);
    });

});

require __DIR__.'/auth.php';
