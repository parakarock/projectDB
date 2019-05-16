<?php
// use DB;
use Illuminate\Support\Facades\Input;
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
Route::resource('case','CaseController');
Route::resource('home','HomeController');
Route::resource('car','CarController');
Route::resource('user','UserController');
Route::resource('brand','BrandController');
Route::resource('transfer','TransferController');
Auth::routes();
Route::get('/','HomeController@index');

Route::get('all','HomeController@index2');
Route::get('case','CaseController@index');
Route::get('welcome','HomeController@index');


Route::any('/search',function(){
    $q = Input::get( 'q' );
	if($q != ""){
		 $data = DB::table('Car')
                ->join('Brand','Brand.Brand_ID','=','Car.Brand')
                ->select('Car.Car_Licence','Car.Car_Color','Brand.Brand_Name')
                ->where('Car.Car_Licence','LIKE','%'.$q.'%')->get();

    if(count($data) > 0)
        return view('home.welcome')->withDetails($data)->withQuery ( $q );
	}
    return view('home.welcome')->withMessage('No Details found. Try to search again !');
});
Route::any('/search2',function(){
    $q = Input::get( 'q' );
	if($q != ""){
		 $data = DB::table('Car')
                ->join('Brand','Brand.Brand_ID','=','Car.Brand')
                ->select('Car.Car_Licence','Car.Car_Color','Brand.Brand_Name')
                ->where('Car.Car_Licence','LIKE','%'.$q.'%')->get();

    if(count($data) > 0)
        return view('home.all')->withDetails($data)->withQuery ( $q );
	}
    return view('home.all')->withMessage('No Details found. Try to search again !');
});

