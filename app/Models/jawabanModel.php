<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class jawabanModel {
    public static function semua() {
        $a = DB::table('jawaban')->get();
        return $a;
    }

    public static function simpan($dataa) {
        $a_baru = DB::table('jawaban')->insert($dataa);
        return $a_baru;
    }

    public static function tampila($id){
        $tampila = DB::table('jawaban')->where('id', $id)->get();
        return $tampila;
    }
}