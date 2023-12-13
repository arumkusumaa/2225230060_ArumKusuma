<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembelajaran; // Pastikan untuk memasukkan model Pembelajaran

class PembelajaranController extends Controller
{
    // Menampilkan data dalam bentuk tabel
    public function index()
    {
        $pembelajarans = Pembelajaran::all();
        return view('pembelajaran.index', compact('pembelajarans'));
    }

    // Menampilkan form input data
    public function create()
    {
        return view('pembelajaran.create');
    }

    // Menyimpan data dari form input ke database
    public function store(Request $request)
    {
        Pembelajaran::create($request->all());
    return Redirect::to('/pembelajaran')->with('success', 'Data berhasil disimpan');
    }

    // Menampilkan form edit data
    public function edit($id)
    {
        $pembelajaran = Pembelajaran::find($id);
        return view('pembelajaran.edit', compact('pembelajaran'));
    }

    // Menyimpan perubahan dari form edit ke database
    public function update(Request $request, $id)
    {
        Pembelajaran::find($id)->update($request->all());
    return Redirect::to('/pembelajaran')->with('success', 'Data berhasil diperbarui');
    }

    // Menghapus data dari database
    public function destroy($id)
    {
        Pembelajaran::find($id)->delete();
    return Redirect::to('/pembelajaran')->with('success', 'Data berhasil dihapus');
    }
}

