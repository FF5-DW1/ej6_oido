<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfileController;
//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;
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

Route::get('/', function () {
    return view('auth/login');
});

Route::post('/login', [AuthenticatedSessionController::class], 'create');


Route::get('/signup', function(){
    return view('signup');
})->name('signup');

Route::post( '/signup', function (Request $request) {
    $validatedData = $request->validate([
        'name'      => 'required',
        'fname'     => 'required',
        'username'  => 'required',
        'email'     => 'required|email',
        'password'  => 'required|min:6|confirmed',
    ]);
    $user = User::create([
        'name'      => $validatedData['name'],
        'fname'     => $validatedData['surname'],
        'username'  => $validatedData['username'],
        'email'     => $validatedData['email'],
        'password'  => Hash::make($validatedData['password']),
    ]);
    return view('feed');
})->name('signup');

Route::get('/feed', function () {
    $userName = 'Maria';
    return view('feed')->with('userName', $userName);
})->name('feed');

Route::get('/snippet', function () {
    return view('snippet.snippet');
});

Route::get('/snippet/create', [Snippet::class, "create"]);
Route::post('/snippet/create', [Snippet::class, "store"]);

Route::get('/setting', function () {
    return view('setting');
})->name('setting');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/logout', [LoginController::class], 'logout');


require __DIR__.'/auth.php';

