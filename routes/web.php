<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\connectController;
use App\Http\Controllers\loginconnect;
use App\Http\Controllers\addnewController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;


Route::get('/', function () {
    return view('welcome');
});

//Login Details================================================================================
Route::get('/login',[connectController::class,'veiwlogin'])->middleware('alreadyLoggedIn');

Route::get('/signup',[connectController::class,'veiwsignup']);

Route::post('/savelogin',[loginconnect::class,'storelogin'])->name('savelogin');

Route::post('/checklogin',[loginconnect::class,'checklogin'])->name('checklogin');

Route::get('/logout',[loginconnect::class,'logout']);



//Home Page===================================================================================
Route::get('/home',[connectController::class,'veiwhome'])->middleware('isLoggedIn');


//Post Details================================================================================

Route::get('/postdetails',[connectController::class,'veiwpostdetails']);

route::get('/postdetails', function () {
    $tags = App\models\tag::all();
    $categories = App\models\category::all();
    $posts = App\models\post::all();
    return view('postdetails')->with('tag', $tags)->with('category', $categories)->with('post', $posts);
});

route::post('/savepost',[PostController::class,'store']);

Route::get('/searchpost',[PostController::class,'searchpost']);


//Tag section=================================================================================

Route::get('/tag',[connectController::class,'veiwtags']);

route::post('/savetag',[TagController::class,'store']);

route::get('/tag', function () {
    $data=App\models\tag::all();
    return view('tag')->with('tag',$data);

});

Route::get('/searchtag',[TagController::class,'searchtag']);

route::get('/deletetag/{id}',[TagController::class,'deletetag']);

route::get('/updatetag/{id}',[TagController::class,'updatetagmethod']);

route::post('/saveupdatetag',[TagController::class,'update']);


//Category section=================================================================================

Route::get('/category',[connectController::class,'veiwcategory']);

route::post('/savecategory',[CategoryController::class,'store']);

route::get('/category', function () {
    $data=App\models\category::all();
    return view('category')->with('category',$data);

});

Route::get('/searchcategory',[CategoryController::class,'searchcategory']);

route::get('/deletecategory/{id}',[CategoryController::class,'deletecategory']);

route::get('/updatecategory/{id}',[CategoryController::class,'updatecategorymethod']);

route::post('/saveupdatecategory',[CategoryController::class,'update']);



//All Post===================================================================

Route::get('/allpost',[connectController::class,'veiwallpost']);

route::get('/allpost', function () {
    $posts = App\models\post::all();
    return view('allpost')->with('post', $posts);
});

route::get('/deletepost/{id}',[PostController::class,'deletepost']);

route::get('/updatepost/{id}',[PostController::class,'updatepostmethod']);

route::post('/saveupdatepost',[PostController::class,'update']);


