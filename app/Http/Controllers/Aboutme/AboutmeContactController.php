<?php

namespace App\Http\Controllers\Aboutme;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutmeContactController extends Controller
{
    public function contact(){
    	return view('aboutme.contact');
    } 
}
