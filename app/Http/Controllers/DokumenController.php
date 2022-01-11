<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DokumenController extends Controller
{
    //
    public function PeraturanDaerah(){
        return view('PeraturanDaerah', ["title" => 'Dokumen']);
    }
}
