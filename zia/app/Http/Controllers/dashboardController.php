<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class dashboardController extends Controller
{
    public function index()
    {

        return view('back.index');
    }
}
