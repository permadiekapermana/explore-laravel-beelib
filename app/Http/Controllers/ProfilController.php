<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    //
    public function SelayangPandang(){
		return view('SelayangPandang');
	}
 
	public function VisiMisi(){
		return view('VisiMisi');
	}
 
	public function StrukturOrganisasi(){
		return view('StrukturOrganisasi');
	}
}
