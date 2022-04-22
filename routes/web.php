<?php

use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\FrontPageController;
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
Route::controller(AdminPageController::class)->group(function () {
    Route::get('/admin', 'index');
    Route::get('/multipurpose', 'multipurpose')->name('Многоцелевой');
    Route::get('/ecommerce', 'ecommerce')->name('Панель управления электронной коммерцией');
    Route::get('/projects', 'projects')->name('Проэкты');
    Route::get('/online-courses', 'online_courses')->name('Онлайн курсы');
    Route::get('/marketing', 'marketing')->name('Маркетинг');
    Route::get('/bidding', 'bidding')->name('Торги');
    Route::get('/logistics', 'logistics')->name('Логистика');
    Route::get('/delivery', 'delivery')->name('Доставка');
    Route::get('/website-analytics', 'website_analytics')->name('Аналитика сайта');
    Route::get('/finance-performance', 'finance_performance')->name('Финансовая эффективность');
    Route::get('/store-analytics', 'store_analytics')->name('Аналитика магазина');
    Route::get('/social', 'social')->name('Социальное');
    Route::get('/crypto', 'crypto')->name('Крипто');
    Route::get('/school', 'school')->name('Школа');
    Route::get('/podcast', 'podcast')->name('Подкаст');
    Route::get('/landing', 'landing')->name('Посадка');
    Route::get('/overview', 'overview_user_profile')->name('Обзор');
    Route::get('/projects', 'projects_user_profile')->name('Проэкты');
    Route::get('/campaigns', 'campaigns_user_profile')->name('Компании');
    Route::get('/documents', 'documents_user_profile')->name('Документы');
    Route::get('/followers', 'followers_user_profile')->name('Последователи');
    Route::get('/activity', 'activity_user_profile')->name('Мероприятия');
    Route::get('/home', 'home_blog')->name('Блог главная');
    Route::get('/post', 'post_blog')->name('Сообщение блога');
    Route::get('/pricing-1', 'pricing_1')->name('Цена 1');
    Route::get('/pricing-2', 'pricing_2')->name('Цена 2');
    Route::get('/careers-list', 'careers_list')->name('Список проффесий');
    Route::get('/careers-apply', 'careers_apply')->name('Карьера');
    Route::get('/faq-classic', 'faq_classic')->name('Классические');
    Route::get('/faq-extended', 'faq_extended')->name('Расширенные');
    Route::get('/about_us', 'about_us')->name('О нас');
    Route::get('/contact_us', 'contact_us')->name('Связаться с нами');
    Route::get('/our_team', 'our_team')->name('Наша команда');
    Route::get('/licenses', 'licenses')->name('Лицензии');
    Route::get('/sitemap', 'sitemap')->name('Карта сайта');
    Route::get('/overview_account', 'overview_account')->name('Обзор');
    Route::get('/settings_account', 'settings_account')->name('Настройки');
    Route::get('/security_account', 'security_account')->name('Безопасность');
    Route::get('/billing_account', 'billing_account')->name('Выставление счетов');
    Route::get('/statements_account', 'statements_account')->name('Заявления');
    Route::get('/referrals_account', 'referrals_account')->name('Рефералы');
    Route::get('/api_keys_account', 'api_keys_account')->name('Ключи API');
    Route::get('/logs_account', 'logs_account')->name('Журналы');
    Route::get('/sing_in', 'sing_in')->name('Войти');
    Route::get('/sing_up', 'sing_up')->name('Выйти');
    Route::get('/two_steps', 'two_steps')->name('Два шага');
    Route::get('/password_reset', 'password_reset')->name('Сброс пароля');
    Route::get('/new_password', 'new_password')->name('Новый пароль');
});

//Frontend routing
Route::controller(FrontPageController::class)->group(function () {
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
