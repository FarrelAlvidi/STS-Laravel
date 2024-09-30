<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jurusan = jurusan::paginate(3);

        return view('siswa/index', compact('jurusan'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'jurusan' =>'required',
            'detail' => 'required',
        ]);
        
        jurusan::create([
            'jurusan'=> $request->jurusan,
            'detail'=> $request->detail,
        ]);

        return redirect()->route('admin2.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $jurusan = jurusan::findOrFail($id);

        return view('siswa/show', compact('jurusan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jurusan $jurusan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jurusan $jurusan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jurusan $jurusan)
    {
        //
    }
}
