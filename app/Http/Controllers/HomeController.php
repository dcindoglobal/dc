<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function products()
    {
        return view('products');
    }

    public function services()
    {
        return view('services');
    }

    public function resources()
    {
        return view('resources');
    }

    public function careers()
    {
        return view('careers');
    }

    public function contact()
    {
        return view('contact');
    }
}