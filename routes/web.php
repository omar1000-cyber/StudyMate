<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;

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
Route::controller(FrontEndController::class)->group(function(){

    Route::get('/','index')->name('home');

    Route::get('/about','about');

    Route::get('/courses','courses');

    Route::get('/team' , 'team');

    Route::get('/contact' , 'contact');

    Route::get('/testimonial' , 'testimonial');

    Route::get('/find_mates' , 'find_friends');

    Route::get('/registration' , 'registration');

    Route::get('/sign_up' , 'sign_up');

//    Route::get('/form sign_up#' , 'login_now');
//
//    Route::get('/book_library' , 'book_library');
//
//    Route::get('/projects' , 'projects');
//
//    Route::get('/profile' , 'profile');
});

//
//Route::get('/courses',function (){
//    return view('frontend.courses');
//});
//
//
//Route::get('/team',function (){
//    return view('frontend.team');
//});
//
//
//Route::get('/contact',function (){
//    return view('frontend.contact');
//});
//
//
//Route::get('/testimonial',function (){
//    return view('frontend.testimonial');
//});
//
//
//Route::get('/find_mates',function () {
//     if( $_GET != null){
//         $query = $_GET['q'];
//
//         return view('frontend.table_view');
//     }
//    return view('frontend.find_friends');
//});
//
//
//Route::get('/registration',function (){
//
//    return view('frontend.registration');
//});
//
//
//Route::get('/form sign_up',function (){
//    return view('frontend.sign_up');
//});
//
//
//
//Route::get('/form sign_up#',function (){
//    if( $_GET != null){
//        $query = $_GET['/registration'];
//
//        return view('frontend.sign_up');
//    }
//    return view('frontend.login_now');
//});
//
//
//Route::get('/book_library',function (){
//    return view('frontend.book_library');
//});
//
//
//Route::get('/projects',function (){
//    return view('frontend.projects');
//});
//
//Route::get('/profile',function (){
//    $username = $_GET['username'];
//    //TODO query database with username
//    return view('frontend.profile');
//});
