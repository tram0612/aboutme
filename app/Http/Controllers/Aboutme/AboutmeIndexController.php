<?php

namespace App\Http\Controllers\Aboutme;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutmeIndexController extends Controller
{
    
    public function index(){
    	return view('aboutme.index.index');
    }
}
