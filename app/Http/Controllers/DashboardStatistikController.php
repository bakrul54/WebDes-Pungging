<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardStatistikController extends Controller
{
    public function index()
    {
        return view('dashboard.statistik.index', [
            'title' => 'statistik'
        ]);
    }
}
