<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jawabanModel;

class jawabanController extends Controller
{
    public function index() {
        $jawaban = jawabanModel::semua();
        return view('jawaban.index', compact('jawaban')); //compact sama saja seperti memberi array assosiatif
    }

    public function create() {
        return view('jawaban.form');
    }

    public function store($id, Request $request) {
        $dataa = $request->all();
        unset($dataa["_token"]);
        $jawaban = jawabanModel::simpan($dataa);
        return redirect('pertanyaan/{id}');
    }

    public function showa($id) {
        $tampila = jawabanModel::tampila($id);
        return view('pertanyaan.show', compact('tampila'));
    }
}
