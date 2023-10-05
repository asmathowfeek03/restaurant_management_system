<?php

use Illuminate\Support\Facades\Route;

// Import the HomeController class from the App\Http\Controllers namespace
use \App\Http\Controllers\HomeController;


// Import the AdminController class from the App\Http\Controllers namespace
use \App\Http\Controllers\AdminController;

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

/*AdminControllers */

// Display a list of users
Route::get("/users", [AdminController::class,"user"]);

// Add users 
Route::post("/adduser", [AdminController::class,"adduser"]);

// Delete a user with the given ID
Route::get("/deleteuser/{id}", [AdminController::class,"deleteuser"]);



// Display the breakfast menu
Route::get("/breakfastmenu", [AdminController::class,"breakfastmenu"]);

// Display the lunch menu
Route::get("/lunchmenu", [AdminController::class,"lunchmenu"]);

// Display the dinner menu
Route::get("/dinnermenu", [AdminController::class,"dinnermenu"]);

// Display the cake items
Route::get("/foodmenu", [AdminController::class,"foodmenu"]);




// Delete a cake item with the given ID
Route::get("/deletemenu/{id}", [AdminController::class,"deletemenu"]);

// Delete a breakfast menu item with the given ID
Route::get("/deletebmenu/{id}", [AdminController::class,"deletebmenu"]);

// Delete a lunch menu item with the given ID
Route::get("/deletelmenu/{id}", [AdminController::class,"deletelmenu"]);

// Delete a dinner menu item with the given ID
Route::get("/deletedmenu/{id}", [AdminController::class,"deletedmenu"]);



// Upload cake item information
Route::post("/uploadfood", [AdminController::class,"upload"]);

// Upload breakfast item information
Route::post("/uploadbreakfast", [AdminController::class,"uploadbreakfast"]);

// Upload lunch item information
Route::post("/uploadlunch", [AdminController::class,"uploadlunch"]);

// Upload dinner item information
Route::post("/uploaddinner", [AdminController::class,"uploaddinner"]);





// View the update form for a specific cake item with the given ID
Route::get("/updateview/{id}", [AdminController::class,"updateview"]);

// View the update form for a specific breakfast item with the given ID
Route::get("/updatebview/{id}", [AdminController::class,"updatebview"]);

// View the update form for a specific lunch item with the given ID
Route::get("/updatelview/{id}", [AdminController::class,"updatelview"]);

// View the update form for a specific dinner item with the given ID
Route::get("/updatedview/{id}", [AdminController::class,"updatedview"]);




// Update a specific cake item with the given ID
Route::post("/update/{id}", [AdminController::class,"update"]);

// Update a specific breakfast item with the given ID
Route::post("/updateb/{id}", [AdminController::class,"updateb"]);

// Update a specific lunch item with the given ID
Route::post("/updatel/{id}", [AdminController::class,"updatel"]);

// Update a specific dinner item with the given ID
Route::post("/updated/{id}", [AdminController::class,"updated"]);





// Make a reservation
Route::post("/reservation", [AdminController::class,"reservation"]);

// View reservations
Route::get("/viewreservation", [AdminController::class,"viewreservation"]);




// View the list of chefs
Route::get("/viewchef", [AdminController::class,"viewchef"]);

// Update a chef's information with the given ID
Route::get("/updatechef/{id}", [AdminController::class,"updatechef"]);

// Delete a chef with the given ID
Route::get("/deletechef/{id}", [AdminController::class,"deletechef"]);

// Update chef information with the given ID
Route::post("/updatefoodchef/{id}", [AdminController::class,"updatefoodchef"]);

// Upload chef information
Route::post("/uploadchef", [AdminController::class,"uploadchef"]);




/*HomeControllers */
Route::get("/", [HomeController::class,"index"]);

Route::get("/redirects", [HomeController::class,"redirects"]);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
