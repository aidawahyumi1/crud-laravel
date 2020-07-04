<?php   

namespace App\models;
use Illuminate\Support\Facades\DB;

class JawabanModel {
    public static function get_all(){
        $jawaban = DB::table('jawaban')->get();
        return $jawaban;
    }

    public static function find($pertanyaan_id){
        $jawaban = DB::table('jawaban')->get()
        ->where('pertanyaan_id','=', $pertanyaan_id);
        return $jawaban;
    }

    public static function save($data){
        $new_jawaban = DB::table('jawaban')->insert($data);
        return $new_jawaban;
    }

}


