<?php


namespace App\Http\Controllers;

use App\Models\MkSemester;
use App\Models\MataKuliah;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MkSemesterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $mk_semester = MkSemester::with(['mahasiswa', 'mataKuliah'])->get();

         return view('IndexMkSemester', compact('mk_semester'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createMkSemester');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'mahasiswa_id' => 'required|exists:table_mahasiswa,id',  
            'mk_id' => 'required|exists:table_mata_kuliah,id',
        ]);

        MkSemester::create([
            'mahasiswa_id' => $request->mahasiswa_id,
            'mk_id' => $request->mk_id,
        ]);

        return redirect(route('mksemester.index'));
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return MkSemester::where('id', '=', $id)->first();
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $mksemester = MkSemester::where('id', '=', $id)->first();


        return view('createMkSemester', ['mksemester' => $mksemester]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->request->remove('_token');
        $request->request->remove('_method');
        $data = $request->toArray();
       
        MkSemester::where('id', '=', $id)->update($data);


        return redirect(route('mksemester.index'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        MkSemester::where('id', '=', $id)->delete();


        return redirect(route('mksemester.index'));
    }
}