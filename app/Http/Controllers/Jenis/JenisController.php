<?php

namespace App\Http\Controllers\Jenis;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jenis;

class JenisController extends Controller
{
    public function jenis(){
        $data['jenis'] = Jenis::get();
        return view('jenis.jenis', $data);
    }
}
