<?php
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\SpecialDealController\SpecialDealController;
use App\Http\Controllers\SpecialDealCategoryController\SpecialDealCategoryController;
use App\Http\Controllers\TouristAttractionCategoryController\TouristAttractionCategoryController;
use App\Http\Controllers\HomeController\HomeController;
use App\Http\Controllers\ServiceController\ServiceController;
use App\Http\Controllers\ActivityController\ActivityController;
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

//*********หลังบ้านจัดการแบนเนอร์**********
Route::get('viewBanner', [HomeController::class, 'viewBanner']);
Route::get('addBanner', [HomeController::class, 'addBanner']);
Route::get('editBanner', [HomeController::class, 'editBanner']);

//*********end หลังบ้านจัดการแบนเนอร์**********



// Route::get('login', [LoginController::class, 'showLogin']);
Route::get('resetPassword', [ResetPasswordController::class, 'showResetPassword']);//view ใส่รหัสผ่านใหม่เมื่อลืมรหัสผ่าน






Route::get('sendEmail', [ForgotPasswordController::class, 'showSentEmail']);//view ตอบกลับว่าส่งไปอีเมล์ไหนเมื่อลืมรหัสผ่าน
Route::get('forgotPassword', [ForgotPasswordController::class, 'showForgotPassword']);//view หน้าให้ใส่อีเมล์เมื่อลืมรหัสผ่าน
Route::get('linkEmail', [ForgotPasswordController::class, 'linkReset']);//view หน้านี้ถูกส่งไปยังอีเมล์




Route::get('showSpecialDeal', [SpecialDealController::class, 'showSpecialDeal']);//navbar view ดีลสุดพิเศษ

Route::get('viewSpecialDeal', [SpecialDealController::class, 'viewSpecialDeal']);// หลังบ้านโชว์ตาราง ดีลสุดพิเศษ
Route::get('addSpecialDeal', [SpecialDealController::class, 'addSpecialDeal']);//หลังบ้านเพิ่มดีลสุดพิเศษ
Route::get('editSpecialDeal', [SpecialDealController::class, 'editSpecialDeal']);//หลังบ้านแก้ไขดีลสุดพิเศษ



//*********หลังบ้านจัดการหมวดหมู่ดีลสุดพิเศษ**********
Route::get('viewSpecialDealCategory', [SpecialDealCategoryController::class, 'viewSpecialDealCategory']);// ตาราง จัดการหมวดหมู่ดีลสุดพิเศษ
Route::get('addSpecialDealCategory', [SpecialDealCategoryController::class, 'addSpecialDealCategory']);// เพิ่มข้อมูล หมวดหมู่ดีลสุดพิเศษ
Route::get('editSpecialDealCategory', [SpecialDealCategoryController::class, 'editSpecialDealCategory']);// แก้ไขข้อมูล หมวดหมู่ดีลสุดพิเศษ
//********end หลังบ้านจัดการหมวดหมู่ดีลสุดพิเศษ***********



//******************หน้าบ้าน สถานที่ยอดฮิต******************
Route::get('showTouristAttraction', [TouristAttractionController::class, 'showTouristAttraction']);//navbar view สถานที่ยอดฮิต
Route::get('showTouristAttractionDescription', [TouristAttractionController::class, 'touristAttractionDescription']);//view รายละเอียดสถานที่ยอดฮิตเมื่อคลิก
//******************end หน้าบ้าน สถานที่ยอดฮิต******************

//******************หลังบ้าน สถานที่ยอดฮิต******************
Route::get('viewTouristAttraction', [TouristAttractionController::class, 'viewTouristAttraction']);//navbar view สถานที่ยอดฮิต
Route::get('addTouristAttraction', [TouristAttractionController::class, 'addTouristAttraction']);//navbar view สถานที่ยอดฮิต
Route::get('editTouristAttraction', [TouristAttractionController::class, 'editTouristAttraction']);//navbar view สถานที่ยอดฮิต
//******************end หลังบ้าน สถานที่ยอดฮิต******************

//*********หลังบ้านจัดการหมวดหมู่สถานที่ยอดฮิต**************
Route::get('viewTouristAttractionCategory', [TouristAttractionCategoryController::class, 'viewTouristAttractionCategory']);// ตาราง จัดการหมวดหมู่สถานที่ยอดฮิต
Route::get('addTouristAttractionCategory', [TouristAttractionCategoryController::class, 'addTouristAttractionCategory']);// เพิ่มข้อมูล หมวดหมู่สถานที่ยอดฮิต
Route::get('editTouristAttractionCategory', [TouristAttractionCategoryController::class, 'editTouristAttractionCategory']);// แก้ไขข้อมูล หมวดหมู่สถานที่ยอดฮิต
//*********end หลังบ้านจัดการหมวดหมู่สถานที่ยอดฮิต***********


//******************หน้าบ้าน หน้ารวมกิจกรรม******************
Route::get('showActivity', [ActivityController::class, 'showActivity']);//navbar view หน้ารวมกิจกรรม
//******************end หน้าบ้าน หน้ารวมกิจกรรม******************


//******************หน้าบ้านหน้าบริการต่างๆ ******************
Route::get('showService', [ServiceController::class, 'showService']);//navbar view หน้าบริการต่างๆ
//******************end หน้าบ้าน หน้ารวมกิจกรรม******************


//******************หน้าบ้าน หน้าบทความ******************
Route::get('showArticle', [ArticleController::class, 'showArticle']);//navbar view หน้าบทความ
Route::get('showArticleDescription', [ArticleController::class, 'showArticleDescription']);//view รายละเอียดบทความเมื่อคลิกเลือกบทความ
//******************end หน้าบ้าน หน้าบทความ******************


//****************** หน้าบ้าน หน้าติดต่อ******************
Route::get('showContactUs', [ContactUsController::class, 'showContactUs']);//navbar view ติดต่อ
//******************end หน้าบ้าน หน้าติดต่อ******************

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');







