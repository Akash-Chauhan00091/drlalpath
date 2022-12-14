<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function index()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function service()
    {
        return view('frontend.service');
    }

    public function branches()
    {
        return view('frontend.branches');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

}
