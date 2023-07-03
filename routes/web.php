

<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\admin\NewsController;
use App\Http\Controllers\admin\MenyuController;

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


/* Route::get('/',[SiteController::class,'welcome']);
Route::get('/article',[SiteController::class,'article']);
Route::get('/contact',[SiteController::class,'contact']);
Route::get('/list',[SiteController::class,'list']);
 */


 Route::get('/',[SiteController::class,'welcome']);
 Route::auto('/', SiteController::class,);





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


/* Route::prefix('admin/')->name('admin.')->middleware(['auth','admin'])->group(function(){
 */

Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

/* admin panel start*/

    Route::resources([

        '/posts' => PostController::class,
        '/news'  => NewsController::class,
        '/menyu'  => MenyuController::class,

    ]);
/*
}); */



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




