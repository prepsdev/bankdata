<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Dashboard';

        return view('dashboard', compact('title'));
    }

    public function topik()
    {
        $title = 'Topik';

        return view('topik', compact('title'));
    }

    public function data()
    {
        $title = 'Data';

        return view('data', compact('title'));
    }
}
