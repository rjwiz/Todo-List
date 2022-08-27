<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function search(Request $request){
        $categories = Category::all();
        return view('search', compact('categories'));
    }
    public function add(Request $request){
        return view('add');
    }
    public function create(Request $request){
        $form = $request->all();
        Category::create($form);
        return redirect('/home');
    }
}
