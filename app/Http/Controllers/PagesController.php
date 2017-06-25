<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        $data = array(
            'title' => 'Homepage',
            'macros' => ['Carb', 'Protein', 'Fat']
        );
        return view('home')->with($data);
    }

    public function meals(){
        return view('meals');
    }

    public function create(){
        return view('create');
    }
}
