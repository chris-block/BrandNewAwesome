<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about()
    {

    	$people = [

    		'Taylor', 'Frank', 'Jimmey'
    	];

        return view('pages.about', compact('people') );
    }

    public function contact()
    {

    	$first = 'Chris';

        return view('pages.contact', compact('first'));
    }
}
