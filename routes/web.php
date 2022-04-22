<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;
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
//
//Route::get('/', function () {
//    return view('frontend.index');
//});

Route::get('/dashboard', static function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


//Administratin routing
Route::controller(AdminController::class)->group(function () {
    Route::get('/admin', 'index');
    Route::get('/multipurpose', 'multipurpose');
    Route::get('/ecommerce', 'ecommerce')->name('Панель управления электронной коммерцией');
    Route::get('/projects', 'projects')->name('Проэкты');
    Route::get('/online-courses', 'online_courses')->name('Онлайн курсы');
    Route::get('/marketing', 'marketing')->name('Маркетинг');
    Route::get('/bidding', 'bidding')->name('Торги');
    Route::get('/logistics', 'logistics')->name('Логистика');
    Route::get('/delivery', 'delivery')->name('Доставка');
    Route::get('/website-analytics', 'website_analytics')->name('Доставка');
    Route::get('/finance-performance', 'finance-performance')->name('Доставка');
});

//Frontend routing
Route::controller(FrontController::class)->group(function () {
    Route::get('/', 'index')->name('Главная');
    Route::get('/contacts', 'contacts')->name('Контакты');
    Route::get('/about', 'about')->name('О нас');
    Route::get('/portfolio', 'portfolio')->name('Портфолио');
    Route::get('/single-portfolio', 'singleportfolio')->name('Портфолио');
    Route::get('/services', 'services')->name('Сервисы');
    Route::get('/single-service', 'singleservice')->name('Сервис');
    Route::get('/classic-blog', 'classicblog')->name('Классичечкий блог');
    Route::get('/modern-blog', 'modernblog')->name('Модернизированный блог');
    Route::get('/blog-post', 'blogpost')->name('Блог пост');
    Route::get('/typography', 'typography')->name('Типография');
    Route::get('/buttons', 'buttons')->name('Кнопки');
    Route::get('/forms', 'forms')->name('Формы');
    Route::get('/tabs-and-accordions', 'tabsandaccordions')->name('Табы и аккордеоны');
    Route::get('/progress-bars', 'progressbars')->name('Индикаторы выполнения');
    Route::get('/tables', 'tables')->name('Таблицы');
    Route::get('/grid-system', 'grid')->name('Cистема сетки');
    Route::get('/404-page', 'error404')->name('Ошибка 404');
    Route::get('/503-page', 'error503')->name('Ошибка 503');
    Route::get('/under-construction', 'underconstruction')->name('В разработке');
    Route::get('/coming-soon', 'comingsoon')->name('Скоро');
    Route::get('/privacy-policy', 'privacy')->name('Политика конфиденциальности');
    Route::get('/search-results', 'searchres')->name('Результаты поиска');

});

require __DIR__ . '/auth.php';
