<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class pertanyaanModel {
    public static function semua() {
        $q = DB::table('pertanyaan')->get();
        return $q;
    }

    public static function simpan($dataq) {
        $q_baru = DB::table('pertanyaan')->insert($dataq);
        return $q_baru;
    }

    public static function tampil($id){
        $tampil = DB::table('pertanyaan')->where('id', $id)->first();
        return $tampil;
    }

    public static function update($id, $request) {
        $update = DB::table('pertanyaan')
            ->where('id', $id)
            ->update([
                'judul' => $request["judul"],
                'isi' => $request["isi"],
            ]);
        return $update;
    }

    public static function destroy($id) {
        $delete = DB::table('pertanyaan')->where('id', $id)->delete();
        return $delete;
    }
}