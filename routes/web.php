<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\chefController;
use App\Http\Controllers\FAQSController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\menuController;
use App\Http\Controllers\sizeController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BLOGSController;
use App\Http\Controllers\chefsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\termsController;
use App\Http\Controllers\optionController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\privacyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\SERVICESController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\SettingHomeController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\RESERVATIONSController;
use App\Http\Controllers\privacyPolicyController;
use App\Http\Controllers\termsConditionController;
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
Route::middleware('Visit')->group(function () {
Route::get('/', [homeController::class, 'index'])->name('home');
} );
Route::get('/privacy_policy', [privacyPolicyController::class, 'index'])->name('privacy_policy');
Route::get('/terms_condition', [termsConditionController::class, 'index'])->name('terms_condition');
Route::post('/reviews', [ReviewController::class, 'store'])->middleware('auth')->name('reviews.store');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/delete-user', [ProfileController::class, 'delete_user'])->name('delete_user');
    Route::get('/update-password', [ProfileController::class, 'update_password'])->name('update_password');
    Route::get('/profile-details', [ProfileController::class, 'index'])->name('profile');
    Route::get('/My_Orders', [ProfileController::class, 'My_Orders'])->name('My_Orders');
    Route::get('/order_invoice/{id} ', [ProfileController::class, 'order_invoice'])->name('order_invoice');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/wishlist/{product}', [WishlistController::class, 'addToWishlist'])->name('wishlist.add');
    Route::delete('/wishlist/{Wishlist}', [WishlistController::class, 'removeFromWishlist'])->name('wishlist.remove');
    Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index');
});

require __DIR__ . '/auth.php';

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/visit-chart-data', [AdminController::class, 'getVisitChartData'])->name('visit-chart-data');
});


Route::post('/cart/{product}', [CartController::class, 'addToCart'])->name('cart.add');
Route::delete('/cart/{cartItem}', [CartController::class, 'remove'])->name('cart.remove');
Route::patch('/cart/{cartItem}', [CartController::class, 'update'])->name('cart.update');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('/place-order', [CheckoutController::class, 'placeOrder'])->name('place-order');
Route::get('/Factorys', [CheckoutController::class, 'Factory'])->name('Factory');

Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
Route::get('/Reservations/list', [RESERVATIONSController::class, 'list'])->name('list_Reservations');
Route::resource('/about', aboutController::class);
Route::resource('/menu', menuController::class);
Route::resource('/Reservations', RESERVATIONSController::class); 
Route::resource('/SERVICES', SERVICESController::class);
Route::get('/SERVICES_list', [SERVICESController::class, 'list'])->name('list_SERVICES');
Route::resource('/BLOGS', BLOGSController::class);
Route::resource('/contact', contactController::class);
Route::resource('/chef', chefsController::class);
Route::resource('/FAQ', FAQController::class);
Route::resource('Categories', CategoryController::class);
Route::resource('products', ProductController::class);
Route::resource('sizes', sizeController::class);
Route::resource('options', optionController::class);
Route::resource('Articles', ArticleController::class);
Route::resource('chefs', chefController::class);
Route::resource('Testimonial', TestimonialController::class);
Route::resource('Information', InformationController::class);
Route::resource('faqs',FAQSController::class);
Route::delete('/faq/delete-all', [FAQSController::class, 'destroyAll'])->name('faq.destroy-all');
Route::delete('/contact', [contactController::class, 'destroyAll'])->name('contact.destroy-all');
Route::resource('privacypolicy',privacyController::class);
Route::resource('termsCondition',termsController::class);
Route::get('/about_list', [aboutController::class ,'list'])->name('about_list');
Route::resource('Home',SettingHomeController::class);
Route::resource('Settings',SettingController::class);

Route::get('/search',[ProductController::class, 'search']);