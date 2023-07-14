

<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\admin\NewsController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\MessageController;
use App\Http\Controllers\admin\AuditController;

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
    return view('welcome');
});

Route::auto('/', SiteController::class);

Route::prefix('admin/')->name('admin.')->middleware('auth')->group(function()
{
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::resources([
        '/categories' => CategoryController::class,
        '/posts' => PostController::class,
        '/messages' => MessageController::class,
        '/logins' => LoginController::class,
        '/audits' => AuditController::class,
    ]);
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




