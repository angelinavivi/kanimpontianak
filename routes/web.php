<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasporController;
use App\Http\Controllers\StafController;
use App\Models\Paspor;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
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

// Route::get('/paspor', function () {
//    return view('staf.tabelpaspor');
// });

//dasboard admin
//untuk tambah admin, detail admin, edit admin

Route::get('password-hash', function(){
    return Hash::make('12345678');
});

Route::group(['prefix' => 'admin'], function(){
    Route::get('/dashboard',[AdminController::class, 'index'])->name('admin.dashboard');
   
    Route::get('/profile', [AdminController::class, 'showprofile'])->name('admin.showprofile');
    Route::get('edit/{id}', [AdminController::class, 'editadmin'])->name('admin.editadmin');
    Route::put('/editadmin/{id}', [AdminController::class, 'updateadmin'])->name('admin.updateadmin');



    Route::get('/staf', [AdminController::class, 'tabelstaf'])->name('admin.tabelstaff');
    Route::get('/staf/tambah', [AdminController::class, 'tambahstaf'])->name('admin.tambahstaff');
    Route::post('/staf', [AdminController::class, 'storestaf'])->name('admin.storestaf');

    Route::get('/editstaf/{id}', [AdminController::class, 'editstaf'])->name('admin.editstaf');
    Route::post('/updatestaf/{id}', [AdminController::class, 'update'])->name('admin.update');

    Route::get('/editakun/{id}', [AdminController::class, 'editakun'])->name('admin.editakun');
    Route::put('/updateakun/edit/{id}', [AdminController::class, 'updateakun'])->name('admin.updateakun');

    
    Route::delete('/staf/delete/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');
    
    Route::get('/staf/detail/{id}',[AdminController::class, 'show'])->name('admin.show');


    Route::get('/paspor', [AdminController::class, 'tabelpaspor'])->name('admin.tabelpaspor');
    Route::get('/paspor/detail/{id}',[AdminController::class, 'showpaspor'])->name('admin.showpaspor');

    Route::get('/admin/logout', [AdminController::class, 'logoutadmin'])->name('admin.logout');
    
});


Route::group(['prefix' => 'staf'], function(){
//dashboard staff
    Route::get('/dashboard',[StafController::class, 'index'])->name('staf.dashboard');

    Route::get('/logout', [StafController::class, 'logoutstaf'])->name('staf.logout');

    //my profil staff
    Route::get('/detailstaf', [StafController::class, 'detailprofil'])->name('staf.detailprofil');
    Route::get('/edit/{id}', [StafController::class, 'edit'])->name('staf.edit');
    Route::post('/editstaf/{id}', [StafController::class, 'updatestaf'])->name('staf.updatestaf');

    //tabel paspor dari sisi staf
    Route::get('/paspor', [StafController::class, 'tabelpaspor'])->name('staf.tabelpaspor');
    Route::get('/paspor/tambah', [StafController::class, 'tambahpaspor'])->name('staf.tambahpaspor');
    Route::post('/paspor', [StafController::class, 'storepaspor'])->name('staf.storepaspor');
    Route::get('/paspor/detail/{id}',[StafController::class, 'showpaspor'])->name('staf.showpaspor');
    Route::delete('/paspor/delete/{id}', [StafController::class, 'destroypaspor'])->name('staf.destroypaspor');

    // routes/web.php
    Route::post('/updatepaspor/{id}', [StafController::class, 'updatePaspor'])->name('staf.updatepaspor');
    Route::get('/editpaspor/{id}', [StafController::class, 'editpaspor'])->name('staf.editpaspor');

    Route::put('/updatpemohon/{id}', [StafController::class, 'updatepemohon'])->name('staf.updatepemohon');
    Route::get('/editpemohon/{id}', [StafController::class, 'editpemohon'])->name('staf.editpemohon');
});



//login admin dan staff
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/', [LoginController::class, 'authenticate'])->name('login');


//login staf
// Route::get('/loginstaf', [LoginController::class, 'indexstaf'])->name('staf.login');
// Route::post('/loginstaf', [LoginController::class, 'authenticatestaf'])->name('staf.login');

// //registrasi admin
// Route::get('/regis', [AdminController::class, 'tambahadmin'])->name('admin.tambahadmin');
// Route::post('/admin', [AdminController::class, 'storeadmin'])->name('admin.storeadmin');


//untuk tabel staf, detail staf, edit staf, hapus staf
// Route::group(['prefix' => 'staf', 'middleware' => 'admin'], function(){
//     Route::get('/', [AdminController::class, 'tabelstaf'])->name('staf.tabelstaff');
//     Route::get('/tambah', [AdminController::class, 'tambahstaf'])->name('staf.tambahstaff');
//     Route::post('/staf', [AdminController::class, 'storestaf'])->name('staf.storestaf');
//     Route::get('edit/{id}', [AdminController::class, 'editstaf'])->name('staf.editstaf');
//     Route::put('/edit/{id}', [AdminController::class, 'update'])->name('staf.update');
//     Route::delete('/delete/{id}', [AdminController::class, 'destroy'])->name('staf.destroy');
//     Route::get('detail/{id}',[AdminController::class, 'show'])->name('staf.show');
// });

//untuk tabel paspor, detail paspor
// Route::get('/admin/paspor', [AdminController::class, 'tabelpaspor'])->name('admin.tabelpaspor');
// Route::get('/admin/paspor/detail/{id}',[AdminController::class, 'showpaspor'])->name('admin.showpaspor');

//logout admin


//logout staf






