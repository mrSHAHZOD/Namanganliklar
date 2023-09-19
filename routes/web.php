

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
use App\Http\Controllers\admin\TagController;

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

Route::get('/', [SiteController::class, 'index'])->name('index');
Route::get('/contact',[SiteController::class, 'contact'])->name('contact');
Route::get('/posts/{id}', [SiteController::class, 'posts'])->name('posts');
Route::get('/article/{id}',[SiteController::class,'article'])->name('article');
Route::post('/messages', [SiteController::class, 'messages'])->name('messages');




Route::prefix('admin/')->name('admin.')->middleware('auth')->group(function()
{
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::resources([
        '/categories' => CategoryController::class,
        '/posts' => PostController::class,
        '/messages' => MessageController::class,
        '/logins' => AuditController::class,
        '/audits' => AuditController::class,
        '/tags' => TagController::class,
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


/*

avtolot  nimaga ishlatiladi
Closure nima vazivani bajaradi
ini_set  nimada ishlatiladi
 :vold - unversal type
Query bn EXsequyit
$this statik funksiya uchun
$self statik bolmagan
null teskshiradigan funksiya   SNullable
evekuent kursor
soft delete nimaga ishlatiladi --- ochirilgan db vaqtinchalik xotiraga saqlaydi
elequent model vazifasini bajaradi



*/

