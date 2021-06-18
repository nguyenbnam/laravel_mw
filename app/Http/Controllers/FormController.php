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
    public function show()
    {
        unset($_SESSION);
        $arr = array();
        // echo '<pre>';
        array_shift($_POST);
        // print_r($_POST);die;
        // echo $_SESSION['token'];die;
        $arr = $_POST;
        // array_push($arr, $_POST);
        // print_r($arr); die;
        return view('getForm', ['arr' => $arr]);
    }
}
