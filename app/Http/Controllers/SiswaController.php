<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = siswa::paginate(3);

        return view('siswa/list', compact('siswa'));
    }
    public function detail()
    {
        $siswa = siswa::paginate(5);

        return view('admin/detail', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'namaLengkap' =>'required|min:5',
            'tempatLahir' =>'required|min:2',
            'tanggalLahir'=>'required|date',
            'alamat' =>'required|min:2',
            'asalSekolah' =>'required|min:2',
            'email' =>'required|email',
            'foto' => 'required|image|mimes:jpeg,png,jpg',
            'scanKk' => 'required|image|mimes:jpeg,png,jpg',
            
        ]);
        $image = $request->file('foto');
        $image->storeAs('public/storage', $image->hashName());

        $image2 = $request->file('scanKk');
        $image2->storeAs('public/storage', $image2->hashName());


        siswa::create([
            'namaLengkap'=> $request->namaLengkap,
            'tempatLahir'=> $request->tempatLahir,
            'tanggalLahir'=> $request->tanggalLahir,
            'alamat'=> $request->alamat,
            'asalSekolah'=> $request->asalSekolah,
            'email'=> $request->email,
            'foto'=> $image->hashName(),
            'scanKk'=> $image2->hashName(),
        ]);

        return redirect()->route('siswa2.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $siswa = siswa::findOrFail($id);

        return view('admin/show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa)
    {
        //
    }
}
