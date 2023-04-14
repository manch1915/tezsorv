<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //TODO duznel ayza redirectin momenty
    public function index(Request $request){
//        if ($request->user()) {
//            return redirect()->route('main');
//        }
        $user = auth()->user();
        return inertia('Home', compact('user'));
    }
    public function catalog(Request $request){
//        if ($request->user()) {
//            return redirect()->route('main');
//        }
        return inertia('Catalog');
    }
}
