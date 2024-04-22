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
    
    public function showChart()
    {
        $statistiks = Statistik::all();
        $labels = $statistiks->pluck('pendidikan');
        $data = $statistiks->pluck('jumlah');
        $title = "Statistik"; // Menambahkan variabel title dengan isi "Statistik"
        return view('statistik', compact('title', 'labels', 'data'));
    }

    public function index()
    {
        $statistiks = Statistik::all();
        return view('dashboard.statistik.index', [
            'title' => 'dbStatistik', // Menambahkan variabel $title
            'statistiks' => $statistiks, // Mengirimkan data statistik ke view
        ]);
    }

    public function edit($id)
    {
        $statistik = Statistik::findOrFail($id); // Mengambil data statistik berdasarkan ID

        return view('dashboard.statistik.edit', [
            'title' => 'Edit Data Statistik',
            'statistik' => $statistik,
        ]);
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang diterima dari form
        $request->validate([
            'pendidikan' => 'required',
            'jumlah' => 'required|integer',
        ]);

        // Mengambil data statistik berdasarkan ID
        $statistik = Statistik::findOrFail($id);

        // Mengupdate data statistik berdasarkan data yang diterima dari form
        $statistik->update([
            'pendidikan' => $request->pendidikan,
            'jumlah' => $request->jumlah,
        ]);

        // Redirect ke halaman yang sesuai dengan kebutuhan aplikasi Anda
        return redirect()->route('dashboard.statistik')->with('success', 'Data statistik berhasil diperbarui.');
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

    // public function edit(string $id): Response
    // {
    //     dd('edit');
    // }

    // public function update(Request $request, string $id): RedirectResponse
    // {
    //     dd('update');
    // }

}
