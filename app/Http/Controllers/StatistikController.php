<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\Statistik;

class StatistikController extends Controller
{

    // public function index(): Response
    // {
    //     dd('index');
    // }

    // public function index()
    // {
    //     return view('/statistik');
    // }

    public function showChart()
    {
        $statistics = Statistik::all();
        $labels = $statistics->pluck('dusun');
        $data = $statistics->pluck('jumlah');
        $title = "Statistik"; // Menambahkan variabel title dengan isi "Statistik"
        return view('statistik', compact('title', 'labels', 'data'));
    }


    // public function index()
    // {
    //     $surats = Surat::all();
    //     return view('dashboard.surat.index', ['surats' => $surats]);
    // }

    // public function show($id)
    // {
    //     $surat = Surat::findOrFail($id);
    //     return view('dashboard.surat.show', compact('surat'));
    // }

    public function create(): Response
    {
        dd('index');
    }

    public function store(Request $request)
    {
        dd ('store');
    }

    public function edit(string $id): Response
    {
        dd('edit');
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        dd('update');
    }

}
