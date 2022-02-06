<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

// ログイン有効
Auth::routes();
// ログイン無効
// Auth::routes([‘register’ => false]);

// Route::get('/home', 'HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
| 1) User 認証不要
|--------------------------------------------------------------------------
*/
Route::get('/', function () { return redirect('/'); })->name('login');

/*
|--------------------------------------------------------------------------
| 2) User ログイン後
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => 'auth:user'], function() {
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');
    Route::get('/', 'Auth\LoginController@index')->name('user.home');
});

/*
|--------------------------------------------------------------------------
| 3) Admin 認証不要
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin'], function() {
    // Route::get('/', function () { return redirect('/admin/home'); });
    // Route::get('home',     'Admin\HomeController@index')->name('admin.home');
    Route::get('login',     'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login',    'Admin\LoginController@login');
});

/*
|--------------------------------------------------------------------------
| 4) Admin ログイン後
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function() {
    Route::post('logout', 'Admin\LoginController@adminLogout')->name('admin.logout');
    Route::get('home', 'Admin\HomeController@index')->name('admin.home');
    Route::get('/', function () { return redirect('/admin/home'); });

});


Route::group(['prefix' => '/', 'middleware' => 'auth'], function() {
    // コミュニティ
    Route::get('/', 'User\CommunityController@index')->name('community');
    Route::get('/community/genre', 'User\CommunityController@communitygenre')->name('communitygenre');
    Route::get('/community/genre/list', 'User\CommunityController@communitylist')->name('communitylist');
    Route::get('/community/genre/list/detail', 'User\CommunityController@communitydetail')->name('communitydetail');

    // Route::get('/community/ps', 'User\CommunityController@comPs')->name('ps4/5');
    // Route::get('/community/psv', 'User\CommunityController@comPsv')->name('psv');
    // Route::get('/community/vr', 'User\CommunityController@comVr')->name('vr');
    // Route::get('/community/xbox', 'User\CommunityController@comXbox')->name('xbox');
    // Route::get('/community/switch', 'User\CommunityController@comSwitch')->name('switch');
    // Route::get('/community/3ds', 'User\CommunityController@comDs')->name('3ds');
    // Route::get('/community/pc', 'User\CommunityController@comPc')->name('pc');
    // Route::get('/community/other', 'User\CommunityController@comOther')->name('other');

    // お知らせ
    Route::get('/notice', 'User\NoticeController@notice')->name('notice');
    Route::get('/notice/nice-partner', 'User\NoticeController@noticeNice')->name('notice/nice-partner');
    Route::get('/notice/chat', 'User\NoticeController@noticeChat')->name('notice/chat');

    // いいね
    Route::get('/nice/from-partner', 'User\NiceController@nicePartner')->name('nice/from-partner');
    Route::get('/nice/from-me', 'User\NiceController@niceMe')->name('nice/from-me');
    // チャット
    Route::get('/chat', 'User\ChatController@chat')->name('chat');

    // プロフィール
    Route::get('/profile', 'User\ProfileController@index')->name('profile');

    Route::get('/profile/create', 'User\ProfileController@add')->name('profile/add');
    Route::post('/profile/create', 'User\ProfileController@create')->name('profile/create');

    Route::get('/profile/edit', 'User\ProfileController@edit')->name('profile/edit');
    Route::post('/profile/edit', 'User\ProfileController@edit')->name('profile/edit');
    // ステータス
    Route::get('/status', 'User\StatusController@status')->name('status');
    // お問い合わせ
    Route::get('/contact', 'User\ContactController@contact')->name('contact');

});

Route::group(['prefix' => '/admin', 'middleware' => 'auth'], function() {

});
