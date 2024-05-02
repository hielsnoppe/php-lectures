<?php

use App\Http\Controllers\CountriesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/register/success', function () {
    return view('register_success');
});

Route::post("/register", [UserController::class, 'register']);




// Hier geht's los:

Route::get("/profile", [UserProfileController::class, 'view']);
Route::get("/profile/edit", [UserProfileController::class, 'edit']);
Route::post("/profile/edit", [UserProfileController::class, 'update']);




// Countries
/*

// Step 0: Create route
Route::get('/countries/name', function () {

    // Step 1: Return static text
    // return 'Hello from countries!';

    // Step 2: Return view
    return view('countries_by_name');
});
*/

// Step 3: Use controller
// Route::get('/countries/name', [CountriesController::class, 'name']);

// Step 4: Add path parameter
Route::get('/countries/name/{name}', [CountriesController::class, 'name']);