<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Sex;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    public function show(){
        $categories = Category::with('subcategories')->get();
        return response()->json($categories);
    }

    public function showSexes()
    {
        $sexes = Sex::all();
        return response()->json($sexes);
    }
}
