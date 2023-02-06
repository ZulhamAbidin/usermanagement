<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use DataTables;

class CountriesController extends Controller
{
    //COUNTRIES LIST
    public function index(){
        return view('countries-list');
    }

    //ADD NEW COUNTRY
    public function addCountry(Request $request){
         $validator = \Validator::make($request->all(),[
             'nik'=>'required|unique:countries',
             'nama_lengkap'=>'required',
             'alamat_domisili'=>'required',
             'jenis_kelamin'=>'required',
             'pendidikan_terakhir'=>'required',
             'jurusan'=>'required',
         ]);

         if(!$validator->passes()){
              return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);
         }else{
             $country = new Country();
             $country->nik = $request->nik;
             $country->nama_lengkap = $request->nama_lengkap;
             $country->alamat_domisili = $request->alamat_domisili;
             $country->jenis_kelamin = $request->jenis_kelamin;
             $country->pendidikan_terakhir = $request->pendidikan_terakhir;
             $country->jurusan = $request->jurusan;
             $query = $country->save();

             if(!$query){
                 return response()->json(['code'=>0,'msg'=>'Something went wrong']);
             }else{
                 return response()->json(['code'=>1,'msg'=>'New Country has been successfully saved']);
             }
         }
    }

    // GET ALL COUNTRIES
    public function getCountriesList(Request $request){
          $countries = Country::all();
          return DataTables::of($countries)
                              ->addIndexColumn()
                              ->addColumn('actions', function($row){
                                  return '<div class="btn-group">
                                                <button class="btn btn-sm btn-primary" data-id="'.$row['id'].'" id="editCountryBtn">Update</button>
                                                <button class="btn btn-sm btn-danger" data-id="'.$row['id'].'" id="deleteCountryBtn">Delete</button>
                                          </div>';
                              })
                              ->addColumn('checkbox', function($row){
                                  return '<input type="checkbox" name="country_checkbox" data-id="'.$row['id'].'"><label></label>';
                              })
                         
                              ->rawColumns(['actions','checkbox'])
                              ->make(true);
    }

    //GET COUNTRY DETAILS
    public function getCountryDetails(Request $request){
        $country_id = $request->country_id;
        $countryDetails = Country::find($country_id);
        return response()->json(['details'=>$countryDetails]);
    }

    //UPDATE COUNTRY DETAILS
    public function updateCountryDetails(Request $request){
        $country_id = $request->cid;

        $validator = \Validator::make($request->all(),[
            'nik'=>'required|unique:countries,nik,'.$country_id,
            'nama_lengkap'=>'required',
            'alamat_domisili'=>'required',
            'jenis_kelamin'=>'required',
            'pendidikan_terakhir'=>'required',
            'jurusan'=>'required'
        ]);

        if(!$validator->passes()){
               return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);
        }else{
             
            $country = Country::find($country_id);
            $country->nik = $request->nik;
            $country->nama_lengkap = $request->nama_lengkap;
            $country->alamat_domisili = $request->alamat_domisili;
            $country->jenis_kelamin = $request->jenis_kelamin;
            $country->pendidikan_terakhir = $request->pendidikan_terakhir;
            $country->jurusan = $request->jurusan;
            $query = $country->save();

            if($query){
                return response()->json(['code'=>1, 'msg'=>'Country Details have Been updated']);
            }else{
                return response()->json(['code'=>0, 'msg'=>'Something went wrong']);
            }
        }
    }

    // DELETE COUNTRY RECORD
    public function deleteCountry(Request $request){
        $country_id = $request->country_id;
        $query = Country::find($country_id)->delete();

        if($query){
            return response()->json(['code'=>1, 'msg'=>'Country has been deleted from database']);
        }else{
            return response()->json(['code'=>0, 'msg'=>'Something went wrong']);
        }
    }


    public function deleteSelectedCountries(Request $request){
       $country_ids = $request->countries_ids;
       Country::whereIn('id', $country_ids)->delete();
       return response()->json(['code'=>1, 'msg'=>'Countries have been deleted from database']); 
    }


}