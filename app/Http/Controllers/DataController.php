<?php
           
namespace App\Http\Controllers;
            
use App\Models\Data;
use Illuminate\Http\Request;
use DataTables;
          
class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
     
        if ($request->ajax()) {
  
            $data = Data::latest()->get();
  
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
   
                          $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editProduct">Edit</a>';
                        
                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip" data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct" >Delete</a>';    
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        
        return view('/data.index');
    }
       
   
    public function store(Request $request)
    {

        Data::updateOrCreate([
                    'id' => $request->id 
                ],
                [
                    'nama_lengkap' => $request->nama_lengkap,
                    // 'nik' => $request->nik,
                    'alamat_domisili' => $request->alamat_domisili, 
                    'jenis_kelamin' => $request->jenis_kelamin,  
                    'pendidikan_terakhir' => $request->pendidikan_terakhir, 
                    'jurusan' => $request->jurusan, 
                    'tanggal_pengesahan' => $request->tanggal_pengesahan
                ]);        
     
        return response()->json(['success'=>'Product saved successfully.']);
        // return datatables()->of(YourData::all())->toJson();
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Data::find($id);
        return response()->json($product);
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Data::find($id)->delete();
        // return redirect('document/show/')->with('succes', 'Data Berhasil Dihapus');
        return response()->json(['success'=>'Product deleted successfully.']);
    }


        public function cetakForm()
    {
        return view('/cetak/cetak-pekerja-form');
    }

    public function cetakPekerjaPertanggal($tglawal, $tglakhir)
    {
        $cetakPertanggal = data::whereBetween('tanggal_pengesahan', [$tglawal, $tglakhir])->get();
        return view('/cetak/cetak-pekerja-pertanggal', compact('cetakPertanggal'));
    }

   
    public function exportexcel()
    {
        return Excel::download(new dataexport, 'data.xlsx');
    }
}