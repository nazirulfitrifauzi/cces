<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataFeedController;
use App\Http\Controllers\DashboardController;
use App\Http\Livewire\Profile;

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

Route::redirect('/', 'login');

Route::middleware('auth')->group(function () {

    // DEMO
    Route::get('/json-data-feed', [DataFeedController::class, 'getDataFeed'])->name('json_data_feed');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::fallback(function() {
        return view('pages/utility/404');
    });

    Route::get('/profile' , Profile::class)->name('profile');

    // DEV
    Route::middleware('role:superadmin|admin')->prefix('users')->as('users:')->group(
        base_path('routes/web/users.php'),
    );

    Route::middleware('role:superadmin|admin')->prefix('clients')->as('clients:')->group(
        base_path('routes/web/clients.php'),
    );

    Route::middleware('role:superadmin|admin')->prefix('projects')->as('projects:')->group(
        base_path('routes/web/projects.php'),
    );

    Route::middleware('role:superadmin|admin|staff|client')->prefix('tickets')->as('tickets:')->group(
        base_path('routes/web/tickets.php'),
    );
});