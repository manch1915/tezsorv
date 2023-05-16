<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request){
        return inertia('Home');
    }
    public function catalog(Request $request){
        return inertia('Catalog');
    }
    public function wysiwyg(Request $request){
        return inertia('NeoEditor');
    }
}
