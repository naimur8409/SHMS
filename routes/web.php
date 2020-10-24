<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DiseaseController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SerialController;
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

Route::get('/',  [WelcomeController::class, 'index'])->name('welcome');
Route::post('search_doctor',  [WelcomeController::class, 'show'])->name('search.doctor');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::get('serial_list', [SerialController::class, 'index'])->name('serial.list');
Route::get('create_serial', [SerialController::class, 'create'])->name('serial.create');
Route::post('store_serial', [SerialController::class, 'store'])->name('serial.store');
Route::get('edit_serial,{id}, {num}', [SerialController::class, 'edit'])->name('serial.edit');
Route::post('update_serial,{id}', [SerialController::class, 'update'])->name('serial.update');
Route::get('delete_serial,{id}', [SerialController::class, 'destroy'])->name('serial.delete');

Route::get('user_list', [UserController::class, 'index'])->name('user.list');
Route::get('create_user', [UserController::class, 'create'])->name('user.create');
Route::post('store_user', [UserController::class, 'store'])->name('user.store');
Route::get('edit_user,{id}', [UserController::class, 'edit'])->name('user.edit');
Route::post('update_user,{id}', [UserController::class, 'update'])->name('user.update');
Route::get('delete_user,{id}', [UserController::class, 'destroy'])->name('user.delete');

Route::get('doctor_list', [DoctorController::class, 'index'])->name('doctor.list');
Route::get('create_doctor', [DoctorController::class, 'create'])->name('doctor.create');
Route::post('store_doctor', [DoctorController::class, 'store'])->name('doctor.store');
Route::get('edit_doctor,{id}', [DoctorController::class, 'edit'])->name('doctor.edit');
Route::post('store_doctor,{id}', [DoctorController::class, 'update'])->name('doctor.update');
Route::get('delete_doctor,{id}', [DoctorController::class, 'destroy'])->name('doctor.delete');



Route::get('disease_list', [DiseaseController::class, 'index'])->name('disease.list');
Route::get('create_disease', [DiseaseController::class, 'create'])->name('disease.create');
Route::post('store_disease', [DiseaseController::class, 'store'])->name('disease.store');
Route::get('edit_disease,{id}', [DiseaseController::class, 'edit'])->name('disease.edit');
Route::post('store_disease,{id}', [DiseaseController::class, 'update'])->name('disease.update');
Route::get('delete_disease,{id}', [DiseaseController::class, 'destroy'])->name('disease.delete');
