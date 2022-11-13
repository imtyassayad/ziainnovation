<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Setting;
use App\Mail\ContactMail;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
    public function index()
    {
        $arr['service'] = Service::orderBy('id','asc')->limit(3)->get();
        return view('web.index')->with($arr);
    }
    public function about()
    {
        return view('web.about');
    }
    public function service()
    {
        $arr['service'] = Service::orderBy('id','desc')->get();
        return view('web.service')->with($arr);
    }
    public function serviceShow()
    {
        //
    }
    public function projects()
    {
        $arr['projects'] = Project::orderBy('id','desc')->where('status',1)->get();
       return view('web.projects')->with($arr);
    }

    public function projectfilter($id)
    {
        $arr['projects']=Project::where('service_id', $id)->get();
        return view('web.projects')->with($arr);
    }

    public function products()
    {
        return view('web.products');
    }
    public function productShow($id)
    {
        $arr['name'] = $id;
        return view('web.product')->with($arr);
    }
    public function contact()
    {
        return view('web.contact');
    }
    public function contactmail(Request $request)
    {

        // return $request;

        $s = Setting::find(1);
        $admin = $s->email_one;
        $data = [
            'fname' => $request->firstname,
            'lname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message
        ];

        Mail::to($admin)->send(new ContactMail($data));
        return back()->with('success', 'Email sent seccuessfully');
    }
}

