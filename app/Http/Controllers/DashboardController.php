<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return inertia('HomeView');
    }
    public function tables()
    {
        return inertia('TablesView');
    }
    public function forms()
    {
        return inertia('FormsView');
    }
    public function ui()
    {
        return inertia('UiView');
    }
    public function responsive()
    {
        return inertia('ResponsiveView');
    }
    public function style()
    {
        return inertia('StyleView');
    }
    public function profile()
    {
        return inertia('ProfileView');
    }
    public function login()
    {
        return inertia('LoginView');
    }
    public function error()
    {
        return inertia('ErrorView');
    }
}
