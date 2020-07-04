<?php   

namespace App\models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class PertanyaanModel {
    public static function get_all(){
        $pertanyaan = DB::table('pertanyaan')->get();
        return $pertanyaan;
    }

    public static function save($data){
        $new_pertanyaan = DB::table('pertanyaan')
        					->insert([
        						'judul'=>$data["judul"],
					    		'isi'=>$data["isi"],
					    		'created_at' => Carbon::now(),
					    		'updated_at' => Carbon::now()
        					]);
        return $new_pertanyaan;
    }

    public static function find_by_id($id){
        $pertanyaan = DB::table('pertanyaan')->where('id', $id)->get();
        return $pertanyaan;
    }

    public static function update($id,$request){
    	$pertanyaan= DB::table('pertanyaan')
				    	->where('id',$id)
				    	->update([
				    		'judul'=>$request["judul"],
				    		'isi'=>$request["isi"],
				    		'updated_at' => Carbon::now()
				    	]);
    	return $pertanyaan;
    }

    public static function destroy($id){
    	$delete = DB::table('pertanyaan')
    				->where('id',$id)
    				->delete();
    	return $delete;
    }

}


