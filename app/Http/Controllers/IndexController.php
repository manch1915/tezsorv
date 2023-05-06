<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //TODO duznel ayza redirectin momenty
    public function index(Request $request){
        $user = auth()->user();
        return inertia('Home', compact('user'));
    }
    public function catalog(Request $request){
        return inertia('Catalog');
    }
    public function wysiwyg(Request $request){
        return inertia('NeoEditor');
    }
}
