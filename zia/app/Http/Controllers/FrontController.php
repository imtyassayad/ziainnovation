<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('web.index');
    }

    public function about()
    {
        return view('web.about');
    }
    public function service()
    {
        //
    }
    public function serviceShow()
    {
        //
    }
    public function projects()
    {
        //
    }
    public function products()
    {
        //
    }
    public function proudctShow()
    {
        //
    }
    public function contact()
    {
        //
    }
}

