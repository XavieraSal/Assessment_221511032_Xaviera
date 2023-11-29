<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::all();
        return view('index', compact('barangs'));
    }

    public function create()
    {
        return view('insertBarang');
    }

    public function store(Request $request)
    {
        $request->validate([
            'KodeBarang'=> 'required|string',
            'NamaBarang' => 'required|string',
            'Satuan' => 'required|in:Pcs,Bungkus,Lusin,Dus', // Enumerated values
            'HargaSatuan' => 'required|integer',
            'Stok' => 'required|integer',
        ]);

        Barang::create($request->all());

        return redirect()->route('index')->with('success', 'Barang added successfully!');
    }


    public function edit($id)
    {
        $barang = Barang::findOrFail($id);

        return view('edit', compact('barang'));
    }

    // app/Http/Controllers/BarangController.php

public function update(Request $request, $id)
{
    $request->validate([
        'KodeBarang'=> 'required|string',
        'NamaBarang' => 'required|string',
        'Satuan' => 'required|in:Pcs,Bungkus,Lusin,Dus', // Enumerated values
        'HargaSatuan' => 'required|integer',
        'Stok' => 'required|integer',
    ]);

    $barang = Barang::findOrFail($id);
    $barang->update([
        'KodeBarang' => $request->KodeBarang,
        'NamaBarang' => $request->NamaBarang,
        'HargaSatuan' => $request->HargaSatuan,
        'Stok' => $request->Stok,
        'Satuan' => $request->Satuan,
    ]);

    return redirect()->route('index')->with('success', 'Barang Updated');
}

public function destroy($id)
{
    $barang = Barang::findOrFail($id);
    $barang->delete();

    return redirect()->route('index')->with('success', 'Barang deleted successfully!');
}




}
