<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() 
    {
        return view('dashboard');
    }

    public function create($category)
    {
        return view('creer', [
            'category' => $category,
            'categories' => Category::all(),
        ]);
    }
}

