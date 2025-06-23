<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pemeriksaan;
use App\Models\Pasien;
use Illuminate\View\View;

class PemeriksaanController extends Controller
{
    public function list(): View
	{
		$data = Pemeriksaan::all();
		return view('pemeriksaan.list', [ 'data' => $data ]);
	}
	
	public function list_pasien($id): View
	{
		$data = Pemeriksaan::where("id_pasien",$id)->get();
		$dataPasien = Pasien::find($id);
		return view('pemeriksaan.kategori', [ 'data' => $data, 'kategori'=>$dataPasien ]);
	}
	
	public function detail($id): View
	{
		$data = Pemeriksaan::find($id);
	return view('pemeriksaan.detail', [ 'data' => $data ]);
	}
}
