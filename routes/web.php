<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipeController;

Route::get('/home', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('contact');
});


Route::get('/produits', function () {
    return view('produits');
});
Route::get('/backend', function () {
    return view('backend');
});
Route::get('/messages', function () {
    return view('messages');
});

Route::get('/equipe', [EquipeController::class, "page_equipe"])->name("equipe");
Route::get('/backend/equipe', [EquipeController::class, "equipe"])->name("backend_equipe");
Route::get("/backend/equipe/create", [EquipeController::class, "create"])->name("create_equipe");
Route::post("/backend/equipe/store", [EquipeController::class, "store"])->name("store_equipe");
Route::delete("/backend/equipe/destroy/{id}", [EquipeController::class, "destroy"])->name("destroy_equipe");