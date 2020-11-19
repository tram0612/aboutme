<?php

namespace App\Http\Controllers\Aboutme;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutmeProjectController extends Controller
{
    public function project(){
    	return view('aboutme.project');
    }
}
