<?php

namespace App\Http\Controllers;

use App\Models\DataKaryawan;
use App\Models\Jabatan;
use App\Models\Status;
use App\Models\Pendidikan;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;

class DataKaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataKaryawan = DataKaryawan::all();
        return view('data.index', ['dataKaryawan' => $dataKaryawan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatan = Jabatan::all();
        $status = Status::all();
        $pendidikan = Pendidikan::all();
        return view('data.create', compact('jabatan', 'status', 'pendidikan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "nama" => "required",
            "alamat" => "required",
            "umur" => "required",
            "jenis_kelamin" => "required",
            "no_telepon" => "required",
            "tanggal_lahir" => "required",
            "jabatan_id" => "required",
            "status_id" => "required",
            "pendidikan_id" => "required",
            "tanggal_masuk" => "required"
        ]);
        $karyawan = DataKaryawan::create($validatedData);
        $request->session()->flash('pesan', "Data {$validatedData['nama']} berhasil disimpan");
        return redirect('/dataKaryawan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DataKaryawan  $dataKaryawan
     * @return \Illuminate\Http\Response
     */
    public function show($dataKaryawan)
    {
        $dataKaryawan = DataKaryawan::findOrFail($dataKaryawan);
        return view('data.show', ['dataKaryawan' => $dataKaryawan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DataKaryawan  $dataKaryawan
     * @return \Illuminate\Http\Response
     */
    public function edit(DataKaryawan $dataKaryawan)
    {
        $jabatan = Jabatan::all();
        $status = Status::all();
        $pendidikan = Pendidikan::all();
        $dataKaryawan->find($dataKaryawan->id);
        return view('data.edit', [
                'dataKaryawan' => $dataKaryawan,
                'jabatan' => $jabatan,
                'status' => $status,
                'pendidikan' => $pendidikan
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DataKaryawan  $dataKaryawan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            "nama" => "required",
            "alamat" => "required",
            "umur" => "required",
            "jenis_kelamin" => "required",
            "no_telepon" => "required",
            "tanggal_lahir" => "required",
            "jabatan_id" => "required",
            "status_id" => "required",
            "pendidikan_id" => "required",
            "tanggal_masuk" => "required"
        ]);
        $dataKaryawan = DataKaryawan::findOrFail($id);
        $dataKaryawan->update($request->all());
        $request->session()->flash('pesan', "Data {$validatedData['nama']} berhasil di update");
        return redirect('/dataKaryawan'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DataKaryawan  $dataKaryawan
     * @return \Illuminate\Http\Response
     */
    public function destroy($dataKaryawan)
    {
        $dataKaryawan = DataKaryawan::findorFail($dataKaryawan)->delete();
        return redirect('/dataKaryawan');
    }
}
