<?php
namespace App\Models;
use Illuminate\Support\Facades\DB;

class ArtikelModel{

    public static function get_all(){
        $artikel = DB::table('artikel')->get();
        return $artikel;
    }

    public static function save($data){
        $artikel = DB::table('artikel')->insert($data);
        return $artikel;
    }

    public static function find_by_id($id){
        $artikel = DB::table('artikel')->where('id', $id) ->first();
        return $artikel;
    }

    public static function update($id, $artikel){
        $artikel = DB::table('artikel')->where('id', $id)->update($artikel);

    return $artikel;
    }

    public static function delete($id){
        $artikel = DB::table('artikel')->where('id', $id)->delete();
        return $artikel;
    }
}
