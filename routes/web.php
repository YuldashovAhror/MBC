<?php

use App\Http\Controllers\Dashboard\BlogController;
use App\Http\Controllers\Dashboard\FeedbackController;
use App\Http\Controllers\Dashboard\GallaryController;
use App\Http\Controllers\Dashboard\NewPromotionController;
use App\Http\Controllers\Dashboard\ProjectController;
use App\Http\Controllers\Dashboard\ProjectStatusController;
use App\Http\Controllers\Dashboard\ResumeController;
use App\Http\Controllers\Dashboard\StatisticController;
use App\Http\Controllers\Dashboard\TeamController;
use App\Http\Controllers\Dashboard\VacancyCategoryController;
use App\Http\Controllers\Dashboard\VacancyController;
use App\Http\Controllers\Dashboard\ValueController;
use App\Http\Controllers\Dashboard\WordController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\CareerController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\NewsController;
use App\Http\Controllers\Front\ProjectsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/languages/{loc}', function ($loc) {
    if (in_array($loc, ['en', 'ru', 'uz'])) {
        session()->put('locale', $loc);
    }
    return redirect()->back();
});
Route::group(['prefix'=>'dashboard'], function (){
    Route::get('/', [\App\Http\Controllers\Dashboard\BaseController::class, 'index'])->name('dashboard.index');

    Route::name('admin.')->group(function(){
        Route::resource('/blogs', BlogController::class);
        Route::get('/feedback', [FeedbackController::class, 'store']);
        Route::resource('/feedback', FeedbackController::class);
        Route::resource('/gallerys', GallaryController::class);
        Route::resource('/news', NewPromotionController::class);
        Route::resource('/projects', ProjectController::class);
        Route::resource('/status', ProjectStatusController::class);
        Route::resource('/projects', ProjectController::class);
        Route::resource('/statistics', StatisticController::class);
        Route::resource('/teams', TeamController::class);
        Route::resource('/vacancycategory', VacancyCategoryController::class);
        Route::resource('/vacancy', VacancyController::class);
        Route::resource('/values', ValueController::class);
        Route::post('/resume/store/{vacancy}',[ResumeController::class,'store'])->name('resume.store');
        Route::delete('/resume/{id}',[ResumeController::class,'destroy'])->name('resume.destroy');
        Route::get('/resume',[ResumeController::class,'index'])->name('resume');
        Route::resource('/words', WordController::class);
    });
}); 
////// Front route \\\\\\\
Route::get('/about', [AboutController::class, 'index']);
/////// Career \\\\\\\
Route::get('/career', [CareerController::class,'index']);
Route::get('/blog/{slug}', [CareerController::class,'show'])->name('blog.show');
Route::get('/career/{slug}', [CareerController::class,'careersingle'])->name('career.single');
/////// Contacts \\\\\\\
Route::get('/contact', function(){
    return view('front.contact');
});
/////// News \\\\\\\
Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');
////// Projects \\\\\\
Route::get('/projects', [ProjectsController::class, 'index']);
require __DIR__.'/auth.php';