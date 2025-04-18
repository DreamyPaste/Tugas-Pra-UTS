<?php


namespace App\Http\Controllers;


use App\Models\MataKuliah;
use Illuminate\Http\Request;


class MataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matakuliah = MataKuliah::get();


        return view('indexMataKuliah', ['mata_kuliah' => $matakuliah]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createMataKuliah');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        MataKuliah::create($request->toArray());
        return redirect(route('mksemester.index'));
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return MataKuliah::where('id', '=', $id)->first();
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $matakuliah = MataKuliah::where('id', '=', $id)->first();


        return view('createMataKuliah', ['matakuliah' => $matakuliah]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->request->remove('_token');
        $request->request->remove('_method');
        $data = $request->toArray();
       
        MataKuliah::where('id', '=', $id)->update($data);


        return redirect(route('matakuliah.index'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        MataKuliah::where('id', '=', $id)->delete();


        return redirect(route('matakuliah.index'));
    }
}