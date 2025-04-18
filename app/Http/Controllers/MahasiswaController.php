<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::get();

        return view('indexMahasiswa', ['mahasiswas' => $mahasiswa]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createMahasiswa');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Mahasiswa::create($request->toArray());

        return redirect(route('mahasiswa.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Mahasiswa::where('id', '=', $id)->first();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::where('id', '=', $id)->first();

        return view('createMahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->request->remove('_token');
        $request->request->remove('_method');
        $data = $request->toArray();
        
        Mahasiswa::where('id', '=', $id)->update($data);

        return redirect(route('mahasiswa.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Mahasiswa::where('id', '=', $id)->delete();

        return redirect(route('mahasiswa.index'));
    }
}
