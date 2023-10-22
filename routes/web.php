<?php

use App\Http\Controllers\MucLuongController;
use App\Http\Controllers\ViTriController;
use App\Http\Controllers\PhongBanController;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuanLyNhanSuController;
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

// Route::get('/', function () {
//     return view('trangchu.trangchu');
// });
// Route::get('/tc', function () {
//     return view('welcome');
// });
// Route::get('/nv', function () {
//     return view('ttnhanvien');
// });
// Route::get('/pb', function () {
//     return view('ttphongban');
// });
// Route::get('/vt', function () {
//     return view('vitri');
// });
// Route::get('/', function () {
//     return view('trangchu');
// });

// Route::get('/tc', function () {
//     return view('trangchu.trangchu');
// });
Route::get('/', [QuanLyNhanSuController::class, 'TrangChu'])->name('trangchu');
Route::get('/tc', [QuanLyNhanSuController::class, 'TrangChu'])->name('trangchu');
Route::get('/nv', [QuanLyNhanSuController::class, 'indexNV'])->name('nhanvien');
Route::get('/pb', [QuanLyNhanSuController::class, 'indexPB'])->name('phongban');
Route::get('/vt', [QuanLyNhanSuController::class, 'indexVT'])->name('vitri');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // route mức lương
    Route::get('/mucluong', [MucLuongController::class, 'index'])->name('mucluong.index');
    Route::get('/mucluong', [MucLuongController::class, 'search'])->name('mucluong.index');
    Route::get('/mucluong/create', [MucLuongController::class, 'create']);
    Route::post('/mucluong', [MucLuongController::class, 'store']);
    Route::get('/mucluong/{id}/edit', [MucLuongController::class, 'edit']);
    Route::post('/mucluong/{id}', [MucLuongController::class, 'update']);
    Route::get('/mucluong/{id}', [MucLuongController::class, 'show']);
    Route::delete('/mucluong/{id}', [MucLuongController::class, 'destroy']);

    // route vị trí
    Route::get('/vitri', [ViTriController::class, 'index'])->name('vitri.index');
    Route::get('/vitri', [ViTriController::class, 'search'])->name('vitri.index');
    Route::get('/vitri/create', [ViTriController::class, 'create']);
    Route::post('/vitri', [ViTriController::class, 'store']);
    Route::get('/vitri/{id}/edit', [ViTriController::class, 'edit']);
    Route::post('/vitri/{id}', [ViTriController::class, 'update']);
    Route::get('/vitri/{id}', [ViTriController::class, 'show']);
    Route::delete('/vitri/{id}', [ViTriController::class, 'destroy']);


    // route Phòng ban
    Route::get('/phongban', [PhongBanController::class, 'index'])->name('phongban.index');
    Route::get('/phongban', [PhongBanController::class, 'search'])->name('phongban.index');
    Route::get('/phongban/create', [PhongBanController::class, 'create']);
    Route::post('/phongban', [PhongBanController::class, 'store']);
    Route::get('/phongban/{id}/edit', [PhongBanController::class, 'edit']);
    Route::post('/phongban/{id}', [PhongBanController::class, 'update']);
    Route::get('/phongban/{id}', [PhongBanController::class, 'show']);
    Route::delete('/phongban/{id}', [PhongBanController::class, 'destroy']);

    // route nhân viên
    Route::get('/nhanvien', [NhanVienController::class, 'index'])->name('nhanvien.index');
    Route::get('/nhanvien', [NhanVienController::class, 'search'])->name('nhanvien.index');
    Route::get('/nhanvien/create', [NhanVienController::class, 'create']);
    Route::post('/nhanvien', [NhanVienController::class, 'store']);
    Route::get('/nhanvien/{id}/edit', [NhanVienController::class, 'edit']);
    Route::post('/nhanvien/{id}', [NhanVienController::class, 'update']);
    Route::get('/nhanvien/{id}', [NhanVienController::class, 'show']);
    Route::delete('/nhanvien/{id}', [NhanVienController::class, 'destroy']);
});

require __DIR__ . '/auth.php';
