<?php

namespace App\Http\Controllers\Aboutme;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutmeAboutController extends Controller
{
    public function about(){
    	return view('aboutme.about.about');
    }
}
