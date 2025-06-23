<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pasien;
use Illuminate\View\View;

class PasienController extends Controller
{
    public function list(): View
	{
		$data = Pasien::all();
		return view('pasien.list', [ 'data' => $data ]);
	}
}
