<?php
use App\Models\Customers; 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\Customercontroller;


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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/demo', function(){
	echo "Good moring , Hello megha";
});
Route::get('/tt', function(){
	return view('demo2');
});
Route::view('demo2','/tt1');
Route::any('/test/test21', function(){
	echo "testing";
	return view('test2');
});

Route::get('/demo2/{name}/{id?}/comment/{commentid?}', function($name='megha', $id = null , $commentid=null){
	echo $name. "";
	echo $id;
	echo $commentid;
	$pp=55;
	$demo="<h1>Welcome my page </h1>";

	$data = compact('name','id','demo','pp','commentid');//compact function is used to display array as a parameter variable
	print_r($data);
	//return view('demo1')->with($data);
	return"<h1>Hello  how r u</h1>".view('demo1')->with($data);


});

Route::get('/demo6/{id}', function(string $id ){
	if($id)
	{
		return "<h1>Post id :".$id."</h1>";
	}
	else
	{
		return "<h1> No Id  found</h1>";
	}


})->whereNumber('id');
Route::get('/demo34/{name}', function($name='ganesh'){
	$data=compact('name');
	print_r($data);
	return view('demo3')->with($data);
});
Route::get('/demo8',[DemoController::class,'index']);
Route::get('/demo7',[DemoController::class,'abc']);
Route::get('/demo8',[DemoController::class,'abc']);
Route::resource('/photo',PhotoController::class);


Route::get('/demo9',SingleActionController::class);
Route::get('/demo12',[RegistrationController:: class,'index']);
Route::post('/demo12',[RegistrationController:: class,'register']);
Route::get('/customer',function(){

$customer=Customers::all();//Customers modelname
echo"<pre>";
print_r($customer->toArray());

});
Route::get('/customer',[Customercontroller::class,'index']);
Route::post('/customer',[Customercontroller::class,'store']);
Route::get('/customer/view',[Customercontroller::class,'view']);
Route::get('/navigation',[Customercontroller::class,'navigateview']);


