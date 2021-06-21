<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LangController extends Controller
{
    //
    private $langActive = [
        'vi',
        'en',
    ];
    public function changeLang(Request $request, $lang)
    {
        /**
         *
         * in_array: kiểm tra trong mảng có tồn tại giá trị $lang hay không, nếu có trả về true, không ó trả về false;
         * in_array ( mixed $needle , array $haystack [, bool $strict = FALSE ] ) = in_array(<giá trị cần kiểm tra>, <mảng cần kiểm tra>); // nó có 3 thông số nhưng cái cuối thì mặc định là FALSE;
         */
        if (in_array($lang, $this->langActive)) {
            $request->session()->put(['lang' => $lang]);
            return redirect()->back();
        }
    }
}
