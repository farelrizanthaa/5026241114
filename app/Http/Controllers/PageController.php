<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function menu()
    {
        return view('menu');
    }
    public function welcome()
    {
        return view('welcome');
    }
    public function blog()
    {
        return view('blog');
    }
    public function index()
    {
        return view('index');
    }
    public function intro()
    {
        return view('intro');
    }
    public function linktree()
    {
        return view('linktree');
    }
    public function makeoverInstagram()
    {
        return view('makeoverInstagram');
    }
    public function news()
    {
        return view('news');
    }
    public function pertemuan4()
    {
        return view('pertemuan4');
    }
    public function pertemuan5()
    {
        return view('pertemuan5');
    }
    public function responsive()
    {
        return view('responsive');
    }
    public function template()
    {
        return view('template');
    }
}
