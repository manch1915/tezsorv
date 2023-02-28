<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function getPhysics(){
        $cheatSheets = Category::where('name', 'Physics')
            ->first()
            ->cheatSheets()
            ->limit(3)
            ->get();
        return inertia('Subjects/Subject', compact('cheatSheets'));
    }
}
