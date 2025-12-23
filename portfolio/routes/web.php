<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Models\Project;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// Home Page
Route::get('/', function () {
    return Inertia::render('Home', [
        'featuredProjects' => Project::where('featured', true)
            ->where('status', 'published')
            ->orderBy('order')
            ->get(),
    ]);
})->name('home');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/style-guide', function () {
    return Inertia::render('StyleGuide');
})->name('styleguide');

// Portfolio Public Pages (temporales - luego crearemos las páginas)
Route::get('/projects', function () {
    return Inertia::render('Projects', [
        'projects' => Project::where('status', 'published')
            ->orderBy('featured', 'desc')
            ->orderBy('order')
            ->get(),
    ]);
})->name('projects');

Route::get('/about', function () {
    return Inertia::render('About', [
        'skills' => \App\Models\Skill::orderBy('category')->orderBy('order')->get(),
        'experiences' => \App\Models\Experience::orderBy('order')->get(),
        'education' => \App\Models\Education::orderBy('order')->get(),
    ]);
})->name('about');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
