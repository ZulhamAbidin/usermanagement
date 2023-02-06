<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Stroge;
use App\Models\document;

class documentcontroller extends Controller
{
    public function uploaddocument()
    {
        return view('/document/index');
    }

    public function store(Request $request)
    {
        $data = new document();
        $file = $request->file;
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $request->file->move('assets', $filename);
        $data->file = $filename;
        $data->nama = $request->nama;
        $data->description = $request->description;
        $data->save();
        return redirect('/document/show')->with('success', 'Document Berhasil Disimpan');
    }

    public function show(Request $request)
    {

        $document = document::latest();

        if(request('search')){
            $document->where('nama', 'like', '%' . request('search') . '%')
            ->orWhere('description', 'like', '%' . request('search') . '%')
            ->orderBy('id', 'desc');
        }

        return view('/document/show', [
            "document" => $document->paginate(8)
        ]);


        // $request = $request->search;
        // $document = document::where('nama', 'LIKE', '%' . $request . '%')
        //     ->orWhere('description', 'LIKE', '%' . $request . '%')
        //     ->orderBy('id', 'desc')
        //     ->paginate(2);
        // return view('/document/show', compact('document'));
    }

    public function download(Request $request, $file)
    {
        return response()->download(public_path('assets/' . $file));
    }

    public function view($id)
    {
        $data = document::find($id);

        return view('/document/view', compact('data'));
    }

    public function delete($id)
    {
        $data = document::find($id);
        $data->delete();
        return redirect('document/show/')->with('succes', 'Data Berhasil Dihapus');
    }
}