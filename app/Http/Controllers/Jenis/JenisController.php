<?php

namespace App\Http\Controllers\Jenis;

use App\Http\Requests\JenisRequest;
use App\Models\Jenis;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateRequest;

class JenisController extends Controller
{
    public function jenis(){
        $data['jenis'] = Jenis::get();
        return view('jenis.jenis', $data);
    }

    public function tambah(){
        return view('jenis.tambahjenis');
    }
    public function simpan(JenisRequest $r) {
        if($r->validated()){
            Jenis::create([
                'jenis' => $r->jenis,
                'deskripsi' => $r->deskripsi
            ]);
            return redirect('jenis')->with('pesan','input data berhasil');
        }
    }

    public function editjenis($id){
        $data['jenis']=jenis::where('id',$id)->first();
        return view('jenis.editjenis',$data);
    } 

    public function update(UpdateRequest $r,$id){
        if($r->validated()){
            $data['jenis'] = $r->jenis;
            $data['deskripsi'] = $r->deskripsi;

            jenis::where('id',$id)->update($data);
            return redirect('jenis');
    }
}
        public function hapus($id){
            jenis::where('id',$id)->delete();

            return back();
        }
}
