<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\PertanyaanModel;

class PertanyaanController extends Controller
{
    //
    public function index(){
        $pertanyaan = PertanyaanModel::get_all();
        // dd($pertanyaan);
        return view('pertanyaan.index', compact('pertanyaan')); //masukin nilai array ass
    }

    public function create(){
    	return view('pertanyaan.create');
    }

    public function store(Request $request){
    	//dd($request->all());
    	
    	$data = $request->all();
    	unset($data["_token"]);
    	$pertanyaan = PertanyaanModel::save($data);
    	// dd($pertanyaan);
    	if ($pertanyaan) {
    		return redirect('/pertanyaan');
    	}
    }

    public function show($id){
        $pertanyaan = PertanyaanModel::find_by_id($id);
        return view('pertanyaan.show',compact('pertanyaan'));
    }

    public function edit($id){
        $pertanyaan = PertanyaanModel::find_by_id($id);
        return view('pertanyaan.edit',compact('pertanyaan'));
    }

    public function update($id, Request $request){
        $pertanyaan = PertanyaanModel::update($id, $request->all());
        return redirect ('/pertanyaan');
    }

    public function destroy($id){
        $delete = PertanyaanModel::destroy($id);
        return redirect('/pertanyaan');
    }
}
