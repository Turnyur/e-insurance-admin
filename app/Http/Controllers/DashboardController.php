<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $authenticatedAdmin = auth()->user();
        $pageTitle = "Admin Dashboard | ". env('APP_NAME');
        return view('dashboard.index', compact('pageTitle', 'authenticatedAdmin'));
    }
}
