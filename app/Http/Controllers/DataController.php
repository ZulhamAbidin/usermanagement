<?php
namespace App\Http\Controllers;
use App\Models\data;
use Illuminate\Http\Request;
// use Yajra\DataTables\Facades\DataTables;
use Datatables;
class DataController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
    {
        /* if(!auth()->check() || auth()->user()->name !== 'astriayuningsih') {
            abort(403);
        } */
        
        if(request()->ajax()) {
        return datatables()->of(data::select('*'))
        ->addColumn('action', 'data.action')
        ->rawColumns(['action'])
        ->addIndexColumn()
        ->make(true); }
        return view('data.index');
    }


public function create()
    {
         return view('data.create');
    }


public function store(Request $request)
    {
        $request->validate([
        'nama' => 'required',
        'alamat' => 'required',
        'nik' => 'required',
        'jenis' => 'required',
        'pendidikan' => 'required',
        'jurusan' => 'required',
        'hari' => 'required'
    ]);
        $data = new Data;
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->nik = $request->nik;
        $data->jenis = $request->jenis;
        $data->pendidikan = $request->pendidikan;
        $data->jurusan = $request->jurusan;
        $data->hari = $request->hari;
        $data->save();
        return redirect()->route('data.index')
        ->with('success','Company has been created successfully.');
        }

public function show(Data $company)
    {
      return view('data.show',compact('company'));
    } 


public function edit(Data $company)
    {
        return view('data.edit',compact('company'));
    }


public function update(Request $request, $id)
    {
        $request->validate([
        'nama' => 'required',
        'alamat' => 'required',
        'nik' => 'required',
        'jenis' => 'required',
        'pendidikan' => 'required',
        'jurusan' => 'required',
        'hari' => 'required'
        ]);
        $data = Data::find($id);
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->nik = $request->nik;
        $data->jenis = $request->jenis;
        $data->pendidikan = $request->pendidikan;
        $data->jurusan = $request->jurusan;
        $data->hari = $request->hari;
        $data->save();
        return redirect()->route('data.index')
        ->with('success','Company Has Been updated successfully');
        }

public function destroy(Request $request)
    {
        $com = Data::where('id',$request->id)->delete();
        return Response()->json($com);
    }

}