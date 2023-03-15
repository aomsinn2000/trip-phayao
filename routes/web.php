<?php

use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;


use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController\HomeController;
use App\Http\Controllers\ServiceController\ServiceController;
use App\Http\Controllers\ActivityController\ActivityController;
use App\Http\Controllers\ArticleController\ArticleController;
use App\Http\Controllers\PackageTourController\PackageTourController;
use App\Http\Controllers\TouristAttractionController\TouristAttractionController;
use App\Http\Controllers\ContactUsController\ContactUsController;
use App\Http\Controllers\DestinationFolderController\DestinationFolderController;
use App\Http\Controllers\SpecialDealController\SpecialDealController;
use App\Http\Controllers\SpecialDealCategoryController\SpecialDealCategoryController;
use App\Http\Controllers\TouristAttractionCategoryController\TouristAttractionCategoryController;
use App\Models\SpecialDealCategory\SpecialDealCategory;
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
//  Login
// Route::get('login', [LoginController::class, 'showLogin']);
// Route::post('handle', [LoginController::class, 'handle']);
// Route::get('logout', [LoginController::class, 'logout']);
// end Login
// ลืมรหัสผ่าน
Route::post('sendEmail', [ForgotPasswordController::class, 'showSentEmail']); //view ตอบกลับว่าส่งไปอีเมล์ไหนเมื่อลืมรหัสผ่าน
Route::post('forgotPassword', [ForgotPasswordController::class, 'showForgotPassword']); //view หน้าให้ใส่อีเมล์เมื่อลืมรหัสผ่าน
Route::post('linkEmail', [ForgotPasswordController::class, 'linkReset']); //view หน้านี้ถูกส่งไปยังอีเมล์
Route::post('resetPassword', [ResetPasswordController::class, 'showResetPassword']);
// รีรหัสผ่าน

// หน้า HOME
Route::get('/', [HomeController::class, 'home']); //navbar view หน้าหลัก

//*********หลังบ้านจัดการแบนเนอร์**********
Route::prefix('/home-banners')->group(function () {
    Route::get('/', [HomeController::class, 'viewBanner']);
    Route::get('/add', [HomeController::class, 'addBanner']);
    Route::post('/create', [HomeController::class, 'createHomeBanner']);
    Route::post('/delete', [HomeController::class, 'deleteHomeBanner']);
    Route::get("/edit/{id}", [HomeController::class, 'editBanner']);
    Route::post("/delete/{id}", [HomeController::class, 'deleteHomeBannerById']);
    Route::post("/save-update/{id}", [HomeController::class, 'saveUpdateHomeBanner']);

    Route::get('/count', [HomeController::class, 'countHomeBanner']);
    Route::post('/switch-status', [HomeController::class, 'switchHomeBanner']);
    Route::post('/home-banner-all-datatable', [HomeController::class, 'homeBannerAllDataTable']);
    Route::post('/home-banner-on-datatable', [HomeController::class, 'homeBannerOnDataTable']);
    Route::post('/home-banner-off-datatable', [HomeController::class, 'homeBannerOffDataTable']);
});
//*********end หลังบ้านจัดการแบนเนอร์**********


//*********หน้าบ้านโฟลเดอร์**********

Route::prefix('/destinationfolders')->group(function () {
    Route::get('/', [DestinationFolderController::class, 'showDestinationFolder']);
    Route::get('/description', [DestinationFolderController::class, 'showDestinationFolderDescription']);
});
//*********end หน้าบ้านโฟลเดอร์**********
//*********หลังบ้านโฟลเดอร์**********
Route::prefix('/destination-folders')->group(function () {
    Route::get('/', [DestinationFolderController::class, 'viewDestinationFolder']);
    Route::get('/add', [DestinationFolderController::class, 'addDestinationFolder']);
    Route::post('/create', [DestinationFolderController::class, 'createDestinationFolder']);
    Route::post('/delete', [DestinationFolderController::class, 'deleteDestinationFolder']);
    Route::get("/edit/{id}", [DestinationFolderController::class, 'editDestinationFolder']);
    Route::post("/delete/{id}", [DestinationFolderController::class, 'deleteDestinationFolderById']);
    Route::post("/save-update/{id}", [DestinationFolderController::class, 'saveUpdateDestinationFolder']);

    Route::get('/count', [DestinationFolderController::class, 'countDestinationFolder']);
    Route::post('/switch-status', [DestinationFolderController::class, 'switchDestinationFolder']);
    Route::post('/destination-folder-all-datatable', [DestinationFolderController::class, 'destinationFolderAllDataTable']);
    Route::post('/destination-folder-on-datatable', [DestinationFolderController::class, 'destinationFolderOnDataTable']);
    Route::post('/destination-folder-off-datatable', [DestinationFolderController::class, 'destinationFolderOffDataTable']);
    Route::post('/destination-folder-trash-datatable', [DestinationFolderController::class, 'destinationFolderTrashDataTable']);
});
//*********end หลังบ้านโฟลเดอร์**********

// ดีลพิเศษ หน้าบ้าน
// Route::get('specialdeals', [SpecialDealController::class, 'showSpecialDeal']); //navbar view ดีลสุดพิเศษ
Route::prefix('/specialdeals')->group(function () {
    Route::get('/', [SpecialDealController::class, 'showSpecialDeal']); //navbar view หน้าบทความ
    Route::get('/description', [SpecialDealController::class, 'showSpecialDealDescription']); //view รายละเอียดบทความเมื่อคลิกเลือกบทความ
});



//*********หลังบ้านจัดการดีลสุดพิเศษ**********
Route::prefix('/special-deals')->group(function () {
    Route::get('/', [SpecialDealController::class, 'viewSpecialDeal']); //หน้าshow ดีลสุดพิเศษ
    Route::get('/add', [SpecialDealController::class, 'addSpecialDeal']); //ไปหน้าพิ่มดีลสุดพิเศษ
    Route::post('/create', [SpecialDealController::class, 'createSpecialDeal']); //function เพิ่มข้อมูลดีลพิเศษ
    Route::post('/delete', [SpecialDealController::class, 'deleteSpecialDeal']); //ลบดีลพิเศษ
    Route::post("/delete/{id}", [SpecialDealController::class, 'deleteSpecialDealById']);
    Route::get("/edit/{id}", [SpecialDealController::class, 'editSpecialDeal']); //ไปหน้าแก้ไขดีลสุดพิเศษ
    Route::post('/delete-image', [SpecialDealController::class, 'deleteSpecialDealImage']);
    Route::post("/save-update/{id}", [SpecialDealController::class, 'updateSpecialDeal']);

    Route::get('/count', [SpecialDealController::class, 'countSpecialDeal']);
    Route::post('/switch-status', [SpecialDealController::class, 'switchSpecialDeal']);
    Route::post('/special-deal-all-datatable', [SpecialDealController::class, 'specialDealAllDataTable']);
    Route::post('/special-deal-on-datatable', [SpecialDealController::class, 'specialDealOnDataTable']);
    Route::post('/special-deal-off-datatable', [SpecialDealController::class, 'specialDealOffDataTable']);

    // ตัวคำนวนจริง
    Route::post('/calculate', [SpecialDealController::class, 'calculateByAjax']);
    // endตัวคำนวนจริง
});
//********* end หลังบ้านจัดการดีลสุดพิเศษ**********

//*********หลังบ้านจัดการหมวดหมู่ดีลสุดพิเศษ**********
Route::prefix('/special-deal-categories')->group(function () {
    Route::get('/', [SpecialDealCategoryController::class, 'viewSpecialDealCategory']); // ตาราง จัดการหมวดหมู่ดีลสุดพิเศษ
    Route::get('/add', [SpecialDealCategoryController::class, 'addSpecialDealCategory']); // ไปหน้าเพิ่มข้อมูล หมวดหมู่ดีลสุดพิเศษ

    Route::post('/create', [SpecialDealCategoryController::class, 'createSpecialDealCategory']); //เพิ่ม
    Route::post('/delete', [SpecialDealCategoryController::class, 'deleteSpecialDealCategory']); //ลบ
    Route::post("/delete/{id}", [SpecialDealCategoryController::class, 'deleteSpecialDealCategoryById']);
    Route::get("/edit/{id}", [SpecialDealCategoryController::class, 'editSpecialDealCategory']); // ไปหน้าแก้ไขข้อมูล หมวดหมู่ดีลสุดพิเศษ
    Route::post("/save-update/{id}", [SpecialDealCategoryController::class, 'updateSpecialDealCategory']);

    Route::get('/count', [SpecialDealCategoryController::class, 'countSpecialDealCategory']);
    Route::post('/switch-status', [SpecialDealCategoryController::class, 'switchSpecialDealCategory']);
    Route::post('/specialdeal-category-all-datatable', [SpecialDealCategoryController::class, 'specialDealCategoryAllDataTable']);
    Route::post('/specialdeal-category-on-datatable', [SpecialDealCategoryController::class, 'specialDealCategoryOnDataTable']);
    Route::post('/specialdeal-category-off-datatable', [SpecialDealCategoryController::class, 'specialDealCategoryOffDataTable']);
    Route::post('/specialdeal-category-trash-datatable', [SpecialDealCategoryController::class, 'specialDealCategoryTrashDataTable']);
});
//********end หลังบ้านจัดการหมวดหมู่ดีลสุดพิเศษ***********

//******************หน้าบ้าน สถานที่ยอดฮิต******************
Route::prefix('/touristattractions')->group(function () {
    Route::get('/', [TouristAttractionController::class, 'showTouristAttraction']); //navbar view สถานที่ยอดฮิต
    Route::get('/description', [TouristAttractionController::class, 'showTouristAttractionDescription']); //view รายละเอียดสถานที่ยอดฮิตเมื่อคลิก
    Route::get('/tags', [TouristAttractionController::class, 'showTouristAttractionTags']);
});
//******************end หน้าบ้าน สถานที่ยอดฮิต**************

//******************หลังบ้าน สถานที่ยอดฮิต******************
Route::prefix('/tourist-attractions')->group(function () {
    Route::get('/', [TouristAttractionController::class, 'viewTouristAttraction']); //navbar view สถานที่ยอดฮิต
    Route::get('/add', [TouristAttractionController::class, 'addTouristAttraction']); //navbar view สถานที่ยอดฮิต
    Route::post('/create', [TouristAttractionController::class, 'createTouristAttraction']);
    Route::post('/delete', [TouristAttractionController::class, 'deleteTouristAttraction']);
    Route::post("/delete/{id}", [TouristAttractionController::class, 'deleteTouristAttractionById']);
    Route::get("/edit/{id}", [TouristAttractionController::class, 'editTouristAttraction']); //navbar view สถานที่ยอดฮิต
    Route::post('/delete-image', [TouristAttractionController::class, 'deleteTouristAttractionImage']);
    Route::post("/save-update/{id}", [TouristAttractionController::class, 'saveUpdateTouristAttraction']);

    Route::get('/count', [TouristAttractionController::class, 'countTouristAttraction']);
    Route::post('/switch-status', [TouristAttractionController::class, 'switchTouristAttraction']);
    Route::post('/tourist-attraction-all-datatable', [TouristAttractionController::class, 'touristAttractionAllDataTable']);
    Route::post('/tourist-attraction-on-datatable', [TouristAttractionController::class, 'touristAttractionOnDataTable']);
    Route::post('/tourist-attraction-off-datatable', [TouristAttractionController::class, 'touristAttractionOffDataTable']);
});
//******************end หลังบ้าน สถานที่ยอดฮิต******************



//*********หน้าบ้าน หมวดหมู่สถานที่ยอดฮิต**********
Route::prefix('touristattractioncategories')->group(function () {
    Route::get('/', [TouristAttractionCategoryController::class, 'showTouristAttractionCategoryHome']); // ตาราง จัดการหมวดหมู่สถานที่ยอดฮิตนที่ยอดฮิต
});
//*********end หน้าบ้าน หมวดหมู่สถานที่ยอดฮิต**********


//*********หลังบ้านจัดการหมวดหมู่สถานที่ยอดฮิต**********
Route::prefix('tourist-attraction-categories')->group(function () {
    Route::get('/', [TouristAttractionCategoryController::class, 'viewTouristAttractionCategory']); // ตาราง จัดการหมวดหมู่สถานที่ยอดฮิต
    Route::get('/add', [TouristAttractionCategoryController::class, 'addTouristAttractionCategory']); // เพิ่มข้อมูล หมวดหมู่สถานที่ยอดฮิต
    Route::post('/create', [TouristAttractionCategoryController::class, 'createTouristAttractionCategory']);
    Route::get("/edit/{id}", [TouristAttractionCategoryController::class, 'editTouristAttractionCategory']); // แก้ไขข้อมูล หมวดหมู่สถานที่ยอดฮิต
    Route::post('/delete', [TouristAttractionCategoryController::class, 'deleteTouristAttractionCategory']);
    Route::post("/delete/{id}", [TouristAttractionCategoryController::class, 'deleteTouristAttractionCategoryById']);
    Route::post("/save-update/{id}", [TouristAttractionCategoryController::class, 'saveUpdateTouristAttractionCategory']);

    Route::get('/count', [TouristAttractionCategoryController::class, 'countTouristAttractionCategory']);
    Route::post('/switch-status', [TouristAttractionCategoryController::class, 'switchTouristAttractionCategory']);
    Route::post('/switch-popular', [TouristAttractionCategoryController::class, 'switchPopularTouristAttractionCategory']);
    Route::post('/touristattraction-category-all-datatable', [TouristAttractionCategoryController::class, 'touristAttractionCategoryAllDataTable']);
    Route::post('/touristattraction-category-on-datatable', [TouristAttractionCategoryController::class, 'touristAttractionCategoryOnDataTable']);
    Route::post('/touristattraction-category-off-datatable', [TouristAttractionCategoryController::class, 'touristAttractionCategoryOffDataTable']);
    Route::post('/touristattraction-category-trash-datatable', [TouristAttractionCategoryController::class, 'touristAttractionCategoryTrashDataTable']);
});
//********end หลังบ้านจัดการหมวดหมู่สถานที่ยอดฮิต***********


//******************หน้าบ้าน หน้ารวมกิจกรรม******************
Route::prefix('activities')->group(function () {
    Route::get('/', [ActivityController::class, 'showActivity']);
    Route::get('/description', [ActivityController::class, 'showActivityDescription']);
});
//******************end หน้าบ้าน หน้ารวมกิจกรรม******************
//******************หลังบ้าน หน้ารวมกิจกรรม******************
Route::prefix('activity-manages')->group(function () {
    Route::get('/', [ActivityController::class, 'viewActivity']);
    Route::get('/add', [ActivityController::class, 'addActivity']);
    Route::get('/edit/{id}', [ActivityController::class, 'editActivity']);
});
//******************end หลังบ้าน หน้ารวมกิจกรรม******************


//******************หน้าบ้าน แพ็คเกจทัวร์******************
Route::prefix('packagetours')->group(function () {
    Route::get('/', [PackageTourController::class, 'showPackageTour']);
    Route::get('/description', [PackageTourController::class, 'showPackageTourDescription']);
});
//******************หน้าบ้าน แพ็คเกจทัวร์******************
//******************หลังบ้าน แพ็คเกจทัวร์******************
Route::prefix('package-tours')->group(function () {
    Route::get('/', [PackageTourController::class, 'viewPackageTour']);
    Route::get('/add', [PackageTourController::class, 'addPackageTour']);
    Route::get('/edit/{id}', [PackageTourController::class, 'editPackageTour']);
});
//******************หลังบ้าน แพ็คเกจทัวร์******************






//******************หน้าบ้านหน้าบริการต่างๆ ******************
Route::prefix('services')->group(function () {
    Route::get('/', [ServiceController::class, 'showService']);
    Route::get('/category', [ServiceController::class, 'showServiceCategory']);
    Route::get('/description', [ServiceController::class, 'showServiceDescription']);
});
//******************end หน้าบ้านหน้าบริการต่างๆ******************

//******************หลังบ้านหน้าบริการต่างๆ ******************
Route::prefix('service-manages')->group(function () {
    Route::get('/', [ServiceController::class, 'viewService']);
    Route::get('/add', [ServiceController::class, 'addService']);
    Route::get("/edit/{id}", [ServiceController::class, 'editService']);
});
//******************end หลังบ้านหน้าบริการต่างๆ******************









//******************หน้าบ้าน หน้าบทความ******************
Route::prefix('/articles')->group(function () {
    Route::get('/', [ArticleController::class, 'showArticle']); //navbar view หน้าบทความ
    Route::get('/description', [ArticleController::class, 'showArticleDescription']); //view รายละเอียดบทความเมื่อคลิกเลือกบทความ
});
//******************end หน้าบ้าน หน้าบทความ******************
//******************หลังบ้าน หน้าบทความ******************
Route::prefix('/article-manages')->group(function () {
    Route::get('/', [ArticleController::class, 'viewArticle']);
    Route::get('/add', [ArticleController::class, 'addArticle']);
    Route::get('/edit/{id}', [ArticleController::class, 'editArticle']);
});
//******************end หลังบ้าน หน้าบทความ******************

//****************** หน้าบ้าน หน้าติดต่อ******************
Route::get('/contactus', [ContactUsController::class, 'showContactUs']); //navbar view ติดต่อ
//******************end หน้าบ้าน หน้าติดต่อ******************


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
