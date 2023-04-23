<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    public function show(){
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $categoriesWithSubcategories = $categories->map(function ($category) use ($subcategories) {
            $categorySubcategories = $subcategories->where('category_id', $category->id)->all();
            $category->subcategories = $categorySubcategories;
            return $category;
        });
        return response()->json($categoriesWithSubcategories);
    }
}
