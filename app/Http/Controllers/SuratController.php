<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\Surat;

class SuratController extends Controller
{
    public function showInputForm()
    {
        $title = 'layanan';
        return view('layanan', compact('title'));
    }

    // public function index(): Response
    // {
    //     dd('index');
    // }

    public function index()
    {
        $surats = Surat::all();
        return view('dashboard.surat.index', ['surats' => $surats]);
    }

    public function show($id)
    {
        $surat = Surat::findOrFail($id);
        return view('dashboard.surat.show', compact('surat'));
    }

    public function create(): Response
    {
        dd('index');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'jenis_surat' => 'required',
            'informasi' => 'required',
            'nama' => 'required',
            'NIK' => 'required|string|max:20',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'pekerjaan' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required|string|max:20',
        ]);

        Surat::create($validatedData);

        return redirect()->route('layanan.input-surat')->with('success', 'Surat berhasil disimpan!');
    }

    // public function show(): Response
    // {
    //     $title = 'layanan';
    //     return response()->view('layanan', compact('title'));
    // }

    public function edit(string $id): Response
    {
        dd('edit');
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        dd('update');
    }

    public function destroy($id)
    {
        $surat = Surat::findOrFail($id);
        $surat->delete();
        return redirect()->route('dashboard.surat.index')->with('success', 'Surat berhasil dihapus');
    }

    // public function destroy(string $id): RedirectResponse
    // {
    //     dd('store');
    // }
}
