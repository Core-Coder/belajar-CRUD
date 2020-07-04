<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pertanyaanModel;
use App\Models\jawabanModel;

class pertanyaanController extends Controller
{
    public function index() {
        $pertanyaan = pertanyaanModel::semua();
        return view('pertanyaan.index', compact('pertanyaan')); //compact sama saja seperti memberi array assosiatif
    }

    public function create() {
        return view('pertanyaan.form');
    }

    public function store(Request $request) {
        $dataq = $request->all();
        unset($dataq["_token"]);
        $pertanyaan = pertanyaanModel::simpan($dataq);
        return redirect('pertanyaan');
    }

    // public function show($id){
    //     $tampil = pertanyaanModel::tampil($id);
    //     return view('pertanyaan.show', compact('tampil'));
    // }

    public function edit($id) {
        $pertanyaan = pertanyaanModel::tampil($id);
        return view('pertanyaan.edit', compact('pertanyaan'));
    }

    public function update($id, Request $request) {
        $update = pertanyaanModel::update($id, $request->all());
        return redirect('pertanyaan');
    }

    public function destroy($id) {
        $delete = pertanyaanModel::destroy($id);
        return redirect('pertanyaan');
    }
}