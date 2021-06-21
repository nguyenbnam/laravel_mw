<?php

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
use App\Http\Controllers\UserController;
use App\Http\Controllers\FormController;
use Illuminate\Http\Request;
use App\Models\User;
// name dung de goi lai cai route đó - và cái name này thì n phải là duy nhất
/**
 * ngoài ra thì nó còn kiểu đặt n vào trong biến
 * để return ??
 * Route::get('/user/{id}/profile', function ($id) {
 *    //
 * })->name('profile');

 * $url = route('profile', ['id' => 1, 'photos' =>'yes']);
 */
Route::get('/user', [UserController::class, 'index'])->name('abc');
Route::get('/', function () {
    return redirect()->route('abc');
});

// Đôi khi, mình có thể muốn chỉ định các giá trị mặc định cho toàn bộ yêu cầu cho các tham số URL, chẳng hạn như ngôn ngữ hiện tại. Để thực hiện điều này, bạn có thể sử dụng phương pháp URL :: defaults.

// Route::redirect('/here', '/there'); mặc định là trả về 302 status code
Route::view('/a', 'test', ['name' => 'nguyen ba nam']); // name là biến cho cái trang html đo
// cách lấy id trên router
Route::get('/user/{id}', function (Request $request, $id) {
    return 'id User: ' . $id;
});
Route::get('/af', function(){
    return 'dau cat moi';
})->name('');
// cai đặt mặc định name cho thằng name kia với dấu ? cuối

// Route::get('/user/{name?}', function ($name = null) {
//     return $name;
// });

// chính quy cho id kiểu regex;
// Route::get('/user/{name}', function ($name) {
//     echo 'rengular - regex với cái id đc viết từ A-Z và từ a-z';
// })->where('name', '[A-Za-z]+');
//
/**
 * kiểu chính quy có hàm sẵn:
 * - whereNumber(''): là với id là số
 * - whereAlpha(''): là với id là chữ từ A-Za-z
 * - whereAlpharNumberic: cả chữu và số
 * Route::get('/user/{id}/{name}', function ($id, $name) {
 * //
 * })->whereNumber('id')->whereAlpha('name');
 * Route::get('/user/{name}', function ($name) {
 *  //
 * })->whereAlphaNumeric('name');
 * Route::get('/user/{id}', function ($id) {
 *   //
 * })->whereUuid('id');
 *
 */
// Route::get('/user/{id}/{name}', function ($id, $name) {
//     //
// })->whereNumber('id')->whereAlpha('name');
// Route::get('/user/{name}', function ($name) {
//     //
// })->whereAlphaNumeric('name');
// Route::get('/user/{id}', function ($id) {
//     //
// })->whereUuid('id');

// cái này cho phép ghi các dấu '/' ở phía trước và chỉ được hỗ trợ trong cái route cuốicungf cái này vẫn trong regex:
Route::get('/search/{search}', function ($search) {
    return $search;
})->where('search', '.*');

// kiem tra cai route hien tại từ 1 cái middleware, dùng hàm named để check
/**
 * Handle an incoming request.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  \Closure  $next
 * @return mixed
 */
// public function handle($request, Closure $next)
// {
//     if ($request->route()->named('profile')) {
//         //
//     }
//     return $next($request);
// }


// thao tác để đi qua cái trung gian  vàn n sẽ đc kiểm  tra lân lượt theo thứ tự trong mảng
Route::middleware(['first', 'second'])->group(function () {
    Route::get('/b', function () {
        // Uses first & second middleware...
        return ' group 1';
    });

    Route::get('/c', function () {
        // Uses first & second middleware...
        return ' group 2';
    });
    // Route::get('/d', function () {
    //     // Uses first & second middleware...
    //     return ' group 3';
    // });
});

// subdomain
Route::domain('{account}.example.com')->group(function () {
    Route::get('users/{id}', function ($account, $id) {
        return 'subdomain';
    });
});
use App\Models\Post;
use GuzzleHttp\Middleware;

Route::get('/posts/{post:slug}', function (Post $post) {
    return $post;
});

Route::get('/form', [FormController::class, 'index'])->name('indexForm');
Route::post('/form', [FormController::class, 'show']);


// dung middleware
Route::get('/aa/{id}', function ($id) {
    return  'ngu nhu bo';
})->middleware('validate_token')->name('use');


//prefix = group
Route::prefix('post')->name('post.')->group(function ()
{
   Route::get('title', function ()
   {
       return 'title trong route post';
   });
   Route::get('content', function ()
   {
       return 'content in the post route';
   });
});

// Actions Handled By Resource Controller

// use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PostController;
// use Illuminate\Support\Facades\Redirect;
// Route::resource('photos', PhotoController::class);
// Route::resources([       // viet resources với nhiều route - dung resource thì n giống với kiểu n sẽ auto loading các action trong cái controller đó
//     'photos' => PhotoController::class,
//     'posts' => PostController::class,
// ]);

// Route::resource('photos', PhotoController::class)
//         ->missing(function (Request $request) {
//             return Redirect::route('photos.create');
//         });

// Route::resource('photos', PhotoController::class)->only([
//     'index', 'show'
// ]);
// Route::resource('photos', PhotoController::class)->except([
//     'create', 'store', 'update', 'destroy'
// ]);
// Route::apiResource('photos', PhotoController::class); //
// Route::apiResources([
//     'photos', PhotoController::class,
//     'post', PostController::class
// ]);

Route::get('/v', function () {
    // Retrieve a piece of data from the session...
    $value = session('key');

    // Specifying a default value...
    $value = session('key', 'default');

    // Store a piece of data in the session...
    session(['key' => 'value']);
    echo '<pre>';
    var_dump($value);
    print_r(session('key'));
    // return view('welcome');
});

// validate
Route::get('post/create', [PostController::class, 'create']);
Route::post('post', [PostController::class, 'store']);




