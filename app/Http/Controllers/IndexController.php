<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return inertia('Home');
    }

    public function catalog()
    {
        return inertia('Catalog');
    }
}
