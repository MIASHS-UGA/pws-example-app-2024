<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home()
    {
        $tasks = [
	        'Aller faire les courses',
	        'Aller à la gym'
	    ];
	    return view('home',[
	        'tasks' => $tasks,
	        'title' => 'Home'
	    ]);
    }
    public function about()
    {
        return view('about',[
            'title' => 'About'
        ]);
    }
    public function contact()
    {
        return view('contact');
    }
}
