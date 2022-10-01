<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin.login');
    }
    
    public function dashboard()
    {
        return view('admin.index');
    }
    
    public function adminslider()
    {
        return view('admin.slider');
    }
    
    public function adminabout()
    {
        return view('admin.about');
    }
    
    public function adminservice1()
    {
        return view('admin.service_1');
    }
    
    public function adminservice2()
    {
        return view('admin.service_2');
    }

    public function admintestimonial()
    {
        return view('admin.testimonial');
    }

    public function admincontact()
    {
        return view('admin.contact');
    }

}
