<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\JawabanModel;

class JawabanController extends Controller
{
    //
    public function index($pertanyaan_id){
        $jawaban = JawabanModel::find($pertanyaan_id);
        // dd($pertanyaan_id);
        // dd($jawaban);
        return view('jawaban.index', compact('jawaban'),['pertanyaan_id'=>$pertanyaan_id]);
    }


    public function store(Request $request){
        // dd($request->all());
        $data = $request->all();
        unset($data["_token"]);
        $jawaban = JawabanModel::save($data);
        // dd($jawaban);
        if ($jawaban) {
            return redirect('/pertanyaan');
        }
    }
}
