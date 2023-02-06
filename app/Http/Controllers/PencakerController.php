<?php

namespace App\Http\Controllers;

use App\Models\data;
use Illuminate\Http\Request;

class PencakerController extends Controller
{
     public function index(Request $request)
    {

        // return view('Dashboard.data.index', [
        //     "datamhs" => data::all()
        // ]);

        $keyword = $request->keyword;
        $data = data::where('nama_lengkap', 'LIKE', '%' . $keyword . '%')
            ->orWhere('alamat_domisili', 'LIKE', '%' . $keyword . '%')
            ->orWhere('tanggal_pengesahan', 'LIKE', '%' . $keyword . '%')
            ->orWhere('jenis_kelamin', 'LIKE', '%' . $keyword . '%')
            ->orWhere('pendidikan_terakhir', 'LIKE', '%' . $keyword . '%')
            ->orWhere('jurusan', 'LIKE', '%' . $keyword . '%')
            ->orderBy('id', 'ASC')
            ->paginate(5);
        return view('pencaker.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new data();
        return view('pencaker.create', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DataRequest $request)
    {
        $model = new data();
        $model->nama_lengkap = $request->nama_lengkap;
        $model->alamat_domisili = $request->alamat_domisili;
        $model->tanggal_pengesahan = $request->tanggal_pengesahan;
        $model->jenis_kelamin = $request->jenis_kelamin;
        $model->pendidikan_terakhir = $request->pendidikan_terakhir;
        $model->jurusan = $request->jurusan;
        $model->save();
        return redirect('pencaker')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // [ "title" => "Edit"];
        $model = data::find($id);
        return view('pencaker.edit', compact('model'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DataRequest $request, $id)
    {
        $model = data::find($id);
        $model->nama_lengkap = $request->nama_lengkap;
        $model->tanggal_pengesahan = $request->tanggal_pengesahan;
        $model->alamat_domisili = $request->alamat_domisili;
        $model->jenis_kelamin = $request->jenis_kelamin;
        $model->pendidikan_terakhir = $request->pendidikan_terakhir;
        $model->jurusan = $request->jurusan;
        $model->save();
        return redirect('pencaker')->with('success', 'Data Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = data::find($id);
        $model->delete();
        return redirect('pencaker')->with('success', 'Data Berhasil Dihapus');
    }

}
