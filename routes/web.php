<?php
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\SpecialDealController\SpecialDealController;
use App\Http\Controllers\SpecialDealCategoryController\SpecialDealCategoryController;
use App\Http\Controllers\TouristAttractionCategoryController\TouristAttractionCategoryController;
use App\Http\Controllers\HomeController\HomeController;
use App\Http\Controllers\ArticleController\ArticleController;
use App\Http\Controllers\TouristAttractionController\TouristAttractionController;
use App\Http\Controllers\ContactUsController\ContactUsController;




use Illuminate\Support\Facades\Auth;
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
Auth::routes();
Route::get('/', [HomeController::class, 'home']);//navbar view หน้าหลัก

// Route::get('login', [LoginController::class, 'showLogin']);
Route::get('resetPassword', [ResetPasswordController::class, 'showResetPassword']);//view ใส่รหัสผ่านใหม่เมื่อลืมรหัสผ่าน






Route::get('sendEmail', [ForgotPasswordController::class, 'showSentEmail']);//view ตอบกลับว่าส่งไปอีเมล์ไหนเมื่อลืมรหัสผ่าน
Route::get('forgotPassword', [ForgotPasswordController::class, 'showForgotPassword']);//view หน้าให้ใส่อีเมล์เมื่อลืมรหัสผ่าน
Route::get('linkEmail', [ForgotPasswordController::class, 'linkReset']);//view หน้านี้ถูกส่งไปยังอีเมล์




Route::get('specialDeal', [SpecialDealController::class, 'showDeal']);//navbar view ดีลสุดพิเศษ

Route::get('viewSpecialDeal', [SpecialDealController::class, 'viewDeal']);// หลังบ้านโชว์ตาราง ดีลสุดพิเศษ
Route::get('addSpecialDeal', [SpecialDealController::class, 'addDeal']);//หลังบ้านเพิ่มดีลสุดพิเศษ
Route::get('editSpecialDeal', [SpecialDealController::class, 'editDeal']);//หลังบ้านแก้ไขดีลสุดพิเศษ



//*********หลังบ้านจัดการหมวดหมู่ดีลสุดพิเศษ**********
Route::get('viewSpecialDealCategory', [SpecialDealCategoryController::class, 'viewSpecialDealCategory']);// ตาราง จัดการหมวดหมู่ดีลสุดพิเศษ
Route::get('addSpecialDealCategory', [SpecialDealCategoryController::class, 'addSpecialDealCategory']);// เพิ่มข้อมูล หมวดหมู่ดีลสุดพิเศษ
Route::get('editSpecialDealCategory', [SpecialDealCategoryController::class, 'editSpecialDealCategory']);// แก้ไขข้อมูล หมวดหมู่ดีลสุดพิเศษ
//********end หลังบ้านจัดการหมวดหมู่ดีลสุดพิเศษ***********



//******************หน้าบ้าน สถานที่ยอดฮิต******************
Route::get('showTouristAttraction', [TouristAttractionController::class, 'ShowTouristAttraction']);//navbar view สถานที่ยอดฮิต
Route::get('descriptionTouristAttraction', [TouristAttractionController::class, 'DescriptionTouristAttraction']);//view รายละเอียดสถานที่ยอดฮิตเมื่อคลิก
//******************end หน้าบ้าน สถานที่ยอดฮิต******************
//*********หลังบ้านจัดการหมวดหมู่สถานที่ยอดฮิต**********
Route::get('viewTouristAttractionCategory', [TouristAttractionCategoryController::class, 'viewTouristAttractionCategory']);// ตาราง จัดการหมวดหมู่สถานที่ยอดฮิต
Route::get('addTouristAttractionCategory', [TouristAttractionCategoryController::class, 'addTouristAttractionCategory']);// เพิ่มข้อมูล หมวดหมู่สถานที่ยอดฮิต
Route::get('editTouristAttractionCategory', [TouristAttractionCategoryController::class, 'editTouristAttractionCategory']);// แก้ไขข้อมูล หมวดหมู่สถานที่ยอดฮิต
//********end หลังบ้านจัดการหมวดหมู่สถานที่ยอดฮิต***********




Route::get('article', [ArticleController::class, 'showArticle']);//navbar view หน้าบทความ
Route::get('descriptionArticle', [ArticleController::class, 'showDescriptionArticle']);//view รายละเอียดบทความเมื่อคลิกเลือกบทความ


Route::get('contactUs', [ContactUsController::class, 'showContactUs']);//navbar view ติดต่อ


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');







