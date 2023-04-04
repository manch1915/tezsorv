<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return inertia('Dashboard/HomeView');
    }
    public function cheatsheet()
    {
        return inertia('Dashboard/CheatSheet');
    }
    public function tables()
    {
        return inertia('Dashboard/TablesView');
    }
    public function forms()
    {
        return inertia('Dashboard/FormsView');
    }
    public function ui()
    {
        return inertia('Dashboard/UiView');
    }
    public function responsive()
    {
        return inertia('Dashboard/ResponsiveView');
    }
    public function style()
    {
        return inertia('Dashboard/StyleView');
    }
    public function profile()
    {
        return inertia('Dashboard/ProfileView');
    }
    public function error()
    {
        return inertia('Dashboard/ErrorView');
    }
}
