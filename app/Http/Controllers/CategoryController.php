<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

    public function indexCategory(Category $category){

        $announcements = $category->announcements;
        return view('categories.index', compact('announcements', 'category'));
    }
}
