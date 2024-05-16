<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

    public function indexCategory(Category $category){

        $announcements = $category->announcements;
        $announcements = $announcements->sortByDesc('created_at')->where('is_accepted', true);
        return view('categories.index', compact('announcements', 'category'));
    }
}
