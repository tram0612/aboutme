<?php

namespace App\Http\Controllers\Aboutme;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutmeNewsController extends Controller
{
    public function news(){
    	return view('aboutme.news.news');
    }
    public function detail(){
    	return view('aboutme.news.detail');
    }
}
