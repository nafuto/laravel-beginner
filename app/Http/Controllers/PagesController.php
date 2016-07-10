<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function home(){
    	$people = ['One', 'Two', 'Three'];

    	return view('welcome', compact('people'));
    }
}
