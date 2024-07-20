<?php

namespace App\Http\Controllers\Hewan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HewanController extends Controller
{
    public function Hewan(){
        $data['hewan'] = DB::table('hewan') 
        ->join('jenis', 'hewan.id_jenis', '=', 'jenis.id_jenis')
        ->get();


        return view('hewan.hewan', $data);
    }

    public function tambahhewan(){
        $data['jenis'] = DB::table('jenis')
        ->get();
        return view('hewan.tambahhewan', $data);

    }
}
