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

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', function () 
{
    return 'hello world';
});
// route có thư mục con
Route::get('hello/bro', function () 
{
    return 'hello world, laravel';
});

Route::any('submit-form', function () 
{
    return ' press submit here';
});

// route có  tham số
Route::get('khoa-hoc/{monhoc}', function ($monhoc) 
{
    return 'chào mừng đến với khóa học:'. $monhoc;
});

Route::get('khoa-hoc/{monhoc}/{thoigian}', function ($monhoc, $thoigian) 
{
    return 'chào mừng đến với khóa học:'. $monhoc. '. lúc: '.$thoigian;
});

Route::get('khoa-hoc/{monhoc?}', function ($monhoc='lavavel') 
{
    return 'chào mừng đến với khóa học:'. $monhoc;
});

// thêm điều kiện cho tham số
Route::get('thongtin/{ten}/{tuoi}', function ($ten, $tuoi) 
{
    return 'chào mừng bạn '. $ten. ' có '.$tuoi. ' tuổi';
})-> where(['ten'=>'[a-zA-Z-]+', 'tuoi'=>'[0-9]{0,2}']);

// truyền giá trị cho view
Route::get('call-view', function () 
{
    return view('text');
});

Route::get('call-view2', function () 
{
    $hoten = 'thanh';
    $admin = 'admin';
    return view('text',compact('hoten', 'admin'));
});

// gọi controller trong route
Route::get('test1-controller', 'Controller@showInfo');
Route::get('test2-controller', 'Controller2@showInfo2');

// tạo định danh cho route
Route::get('ho-chi-minh', ['as'=>'hcm', function ()
{
    return "hồ chí minh city here";
}]);

// tạo nhóm cho 1 route
Route:: group(['prefix'=>'thuc-don'], function()
{
    Route::get('bun-bo', function()
    {
        echo 'đây là trang bán bún bò';
    });
    Route::get('bun-mam', function()
    {
        echo 'đây là trang bán bún mắm';
    });
    Route::get('bun-rieu', function()
    {
        echo 'đây là trang bán bún riêu';
    });
});


//////-VIEW-////////// view nằm trong resources
// phân cấp thư mục trong view
Route::get('goi-view', function()
{
    return view('layout.sub.view');
});

Route::get('goi-layout', function()
{
    return view('layout.sub.layout'); //các thư mục con được nối với nhau bằng dấu .
});
// view share
View::share('tenbien','lập trình Laravel');
// view composer- chưa chạy được
View::composer('layout.sub.layout', function($view)
{
    $view->with('thôngtin', 'đây là trang thiết kế layout');
});
// kiểm tra sự tồn tại của một view
Route::get('check-view', function()
{
    if(view()->exists('layout.sub.layout'))
    {
        echo 'view tồn tại';
    } else
    {
        echo 'view KHÔNG tồn tại';
    }
});


// excercise
// bài 11.1 LOGIN
Route::get('/login', function()
{
    return view('login.login');
});
Route::post('/login', function(Illuminate\Http\Request $request)
{    
    if($request->username == 'admin' && $request->password == 'admin')
    {
        return view('login.welcome_login');
    }
    else
    {
    return view('login.login_error');
    }
});

// BAI 11.2 chiết khấu
Route::get('/discount', function()
{
    return view('ProductDiscount.discount');
});
Route::post('/discount', function(Illuminate\Http\Request $request)
{
    $decscription = $request->description;
    $price = $request->price;
    $discountPercent = $request->discountPercent;
    $discountAmount;
    $discountPrice ;
    return view('ProductDiscount.showResult', compact(['decscription', 'price','discountPercent',
    'discountAmount', 'discountPrice']));
});

// bài 11.3 từ điển
Route::get('dictionary', function ()
{
    return view('tudien.dictionary');
});
Route::post('dictionary', function(Illuminate\Http\Request $request)
{
    $english = $request->word;
    $vietnam = '';   
    $array = array('computer'=>'máy tính', 'hello'=>'xin chào', 'cup'=>'ly, tách');
    foreach($array as $key=>$value)
    {
        if ($english === $key)
        {
            $vietnam = $value;   
            return view('tudien.result', compact('english','vietnam'));     
        }                                              
    }
    return 'đang cập nhật';    
});