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
        return view('web.service');
    }
    public function serviceShow()
    {
        //
    }
    public function projects()
    {
       return view('web.projects');
    }
    public function products()
    {
        return view('web.products');
    }
    public function productShow($id)
    {   $arr['name'] = $id;
        return view('web.product')->with($arr);
    }
    public function contact()
    {
        return view('web.contact');
    }
}

