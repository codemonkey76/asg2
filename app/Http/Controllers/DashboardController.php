<?php

namespace App\Http\Controllers;

use App\Traits\InteractsWithBanner;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    use InteractsWithBanner;

    public function show(Request $request)
    {
        return view('dashboard');
    }

    public function home(Request $request)
    {
        return view('dashboard');
    }
}
