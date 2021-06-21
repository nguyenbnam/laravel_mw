<?php
namespace App\Http\Controllers;
session_start();

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class FormController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function show(Request $request)
    {
        $arr = array();
        // echo '<pre>';
        array_shift($_POST);
        // print_r($_POST);die;
        // echo $_SESSION['token'];die;
        $arr = $_POST;
        // array_push($arr, $_POST);
        // print_r($arr); die;
        // var_dump($request->except('_token'));die;
        // var_dump($request->validate([
        //     'name' => ['required', 'unique:posts', 'max:255'],
        //     'email' => ['required'],
        // ]));die;
        return view('getForm', ['arr' => $arr])->with('name', 'nguyen ba nam')
                                               ->with('email', 'nguyen@gamil.com');
    }
}
