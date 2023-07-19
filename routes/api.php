<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\VisitorController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\SiteInfoController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductListController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/getvisitor',[VisitorController::class,'GetVisitorDetails']);

Route::post('/sendcontactform',[ContactController::class,'sendContactForm']);

Route::get('/siteinfo',[SiteInfoController::class,'GetSiteInfo']);

Route::get('/allcategories',[CategoryController::class,'AllCategories']);

Route::get('/productlistbyremark/{remark}',[ProductListController::class,'ProductListByRemark']);
