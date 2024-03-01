<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\FormController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    // return view('home');
});
Route::get('/unicode', function(){
    $user = new User();
    $allUser = $user::all();
    dd($allUser);
    // return view('home');
});
Route::get('/product', function(){
    return view('product');
});

// Route::get('/admin/product', function(Request $request){
//     return "Path: " . $request->path();
// });

// Route::get('/admin/product', function(Request $request){
//     return "Url: " . $request->url();
// });
// Route::get('/admin/product', function(Request $request){
//     return "Full Url: " . $request->fullUrl();
// });
// Route::get('/admin/product', function(Request $request){
//     return "Full Url: " . $request->fullUrlWithQuery(['age' => '21']);
// });
// Route::get('/admin/product', function(Request $request){
//     if ($request->is('admin/*')){
//         return "path la admin";
//     } else {
//         return "path khong la admin";
//     }
// });
// Route::get('/admin/product', function(Request $request){
//     return "Method: " . $request->method();
// });

// Route::get('/admin/product', function(Request $request){
//    echo "Method: " . $request->method() . "<br>";
//   if ($request->isMethod('get')){
//     echo "This is GET method HTTP.";
//   }
// });
// Route::get('/userIp', function(Request $request){
//     return "IP address: " . $request->ip();
// });
Route::get('/index', [FormController::class, 'index']);
Route::post('/post', [FormController::class, 'post']);