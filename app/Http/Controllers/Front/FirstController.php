<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
class FirstController extends Controller
{
    public function __construct()
    {
       $this -> middleware('auth')->except('hello');
    }
    public function hello()
    {
        return view('hello');

    }  public function hello1()
    {
        return view('hello');
    }
}
