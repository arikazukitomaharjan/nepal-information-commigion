<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::group(['middleware' => 'admin'], function () {


    /**************** Dynamic Contents **************************/
    Route::resource('dynamic-contents', 'DynamicContentController');

    /**************** Album **************************/
    Route::resource('albums', 'AlbumController');


    /**************** Photos ************************/
    Route::resource('photos', 'PhotoController', ['except' => 'show']);
    Route::get('photo-album/{albumID}/{page?}', 'PhotoController@getPhotosByAlbum');


    /*************** Profiles *******************/
   
    /*************** ArtCategories ***************/
    Route::resource('categories', 'CategoryController');
    
    Route::get('getParentCategories', 'CategoryController@getParentCategories');


    /*************** Sliders ***************/
    Route::resource('sliders', 'SliderController');


    /*************** Article ************************/
    Route::resource('articles', 'ArticleController', ['except' => 'show']);
    Route::get('articlesExport', 'ArticleController@export');
    
    Route::get('articlesImportFileSelect', 'ArticleController@import');
    Route::post('articlesImportData', ['as' =>'importData','uses' => 'ArticleController@importData']);

    /*************** Users ************************/
    Route::resource('users', 'UserController');
    Route::get('userstatus/{id}/{status}', 'UserController@changeStatus');
    
    Route::post('updateProfile', ['as'=>'updateProfile','uses' =>'UserController@updateProfile'] );
    
    /***************Information Officers****************************/
    Route::resource('infoOfficers','InfoOfficerController');
    Route::get('infoOfficerImportFileSelect', 'InfoOfficerController@import');
    Route::post('importData', ['as' =>'importInfoOfficerData','uses' => 'InfoOfficerController@importData']);
        
    /*************Office*************************************/
    Route::resource('offices','OfficeController');
Route::post('image/upload','ImageController@uploadMultipleImage');

Route::get('photo_delete/{id}',['as'=>'photo_delete','uses'=>'PhotoController@destroy']);
Route::get('articles_delete/{ids}', 'ArticleController@destroy');

Route::post(
    'article/search','ArticleController@articleSearch');

Route::post(
    'categoryBy/search',
    array(
        'as' => 'category.search',
        'uses' => 'CategoryController@categorySearch'
    )
);

Route::post(
    'slider/search',
    array(
        'as' => 'slider.search',
        'uses' => 'SliderController@sliderSearch'
    )
);

Route::post(
    'dynamic/search',
    array(
        'as' => 'dynamic.search',
        'uses' => 'DynamicContentController@dynamicSearch'
    )
);

Route::post(
    'office/search',
    array(
        'as' => 'office.search',
        'uses' => 'OfficeController@OfficeSearch'
    )
);
Route::post(
    'infoOffice/search',
    array(
        'as' => 'infooffice.search',
        'uses' => 'InfoOfficerController@infoOfficeSearch'
    )
);

Route::post(
    'album/search',
    array(
        'as' => 'album.search',
        'uses' => 'AlbumController@albumSearch'
    )
);


Route::resource('important_links','ImportantLinkController');

});


/* for Multilanguage support and switching */
Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect']
], function () {

    /***************    Front End   *********************************************/
    Route::get('/', 'FrontEndController@index');
    Route::get('/home', 'FrontEndController@index');
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('articles/{id}/{category}', 'ArticleController@getArticlesByCategory');
    Route::get('articleDescription/{id}', 'ArticleController@getSingleArticleById');
    Route::get('displayPdfContent/{documents}', 'ArticleController@displayPdfContent');

    /*************** Dynamic Content ************************/
    Route::resource('dynamic-contents', 'DynamicContentController', ['only' => 'show']);
    Route::resource('articles', 'ArticleController', ['only' => 'show']);
    Route::resource('photos', 'PhotoController', ['only' => 'show']);

Route::get('importantLinks/getAll', 'ImportantLinkController@getAllImportantLinks');
Route::get('contactUs','FrontEndController@contact');

Route::get('showBiodata/{id}','DynamicContentController@showBiodata');

Route::get('whatWeDo','FrontEndController@getDetailsForWhatWeDo');
Route::get('procedureToRequest','FrontEndController@getDetailsProcedureToRequest');
Route::get('rightsToKnow','FrontEndController@getDetailsRightsToKnow');


Route::get('aboutus', 'DynamicContentController@displayContentOfAboutUs');
Route::get('staffDetails', 'DynamicContentController@displayStaffDetails');
Route::get('getAllSliderContents', 'SliderController@getAllSliderContents');


/******************Search MOdule**********************************************/
   
    Route::get('searchInfoOfficersByOthers', 'InfoOfficerController@searchInfoOfficersByOthers');
    Route::get('searchInfoOfficersByDistrict', 'InfoOfficerController@searchInfoOfficersByDistrict');
    Route::get('getInfoOfficerDetailsByDistrict/{value}', 'InfoOfficerController@getInfoOfficerDetailsByDistrict');
    Route::get('getInfoOfficerDetailsByCentral/', 'InfoOfficerController@getInfoOfficerDetailsByCentral');
    Route::get('getInfoOfficerDetailsByOthers/{value}', 'InfoOfficerController@getInfoOfficerDetailsByOthers');

   

});
Route::post('search', ['as' =>'posts.search','uses' => 'ArticleController@postSearch']);
Route::post('contact_request',['as'=>'contact_request','uses'=>'FrontEndController@postContactFormRequest']);


