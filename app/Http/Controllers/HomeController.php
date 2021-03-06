<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'projects' => \App\Models\Project::paginate(6),
        ];
        
        return view('home', $data);
    }

    public function contacts()
    {
        return view('contacts.index');
    }
}
