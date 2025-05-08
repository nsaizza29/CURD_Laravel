<?php

namespace App\Http\Controllers;

use App\Models\Kurir;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class KurirController extends Controller
{
    public function index()
    {
        $kurir = Kurir::latest()->paginate(5);
        return view('kurir.index', compact('kurir'));
    }

    public function create()
    {
        return view('kurir.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kurir' => 'required|min:5',
            'telepon' => 'required|min:12',
            'wilayah_operasi' => 'required|min:5'
        ]);

        Kurir::create([
            'nama_kurir' => $request->nama_kurir,
            'telepon' => $request->telepon,
            'wilayah_operasi' => $request->wilayah_operasi
        ]);

        return redirect()->route('kurir.index')->with('success', 'Kurir created successfully.');
    }

    public function show($id)
    {
        $kurir = Kurir::findOrFail($id);
        return view('kurir.show', compact('kurir'));
    }

    public function edit(String $id)
    {
        $kurir = Kurir::findOrFail($id);
        return view('kurir.edit', compact('kurir'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'nama_kurir' => 'required|min:5',
            'telepon' => 'required|min:12',
            'wilayah_operasi' => 'required|min:5'
        ]);

        $kurir = Kurir::findOrFail($id);

        
        $kurir->update([
            'nama_kurir' => $request->nama_kurir,
            'telepon' => $request->telepon,
            'wilayah_operasi' => $request->wilayah_operasi
        ]);

        return redirect()->route('kurir.index')->with('success', 'Kurir update successfully');
    }

    public function destroy($id): RedirectResponse
    {
        $kurir = Kurir::findOrFail($id);
        $kurir->delete();

        return redirect()->route('kurir.index')->with('success', 'Kurir deleted successfully');
    }
    
}