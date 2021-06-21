<?php

namespace App\Http\Controllers;

session_start();

use App\Http\Requests\FormRequestName;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class FormController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function show(Request $request, FormRequestName $req)
    {
        $input = $request->except('_token'); // dung ngoai tru thang dau
        return view('getForm', ['arr' => $input]);//->with('name', 'nguyen ba nam')->with('email', 'nguyen@gamil.com');
    }
}
