<?php

namespace App\Http\Controllers\Admin;
use App\Models\Apm;
use App\Models\AreaApm;
use App\Models\KriteriaApm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KategoriController extends Controller
{
    public function index(Request $r) {
        $search = $r->input('search');
		if ($search) {
			$data['apms'] = Apm::where('penilaian', 'like', '%'.$search.'%')->orWhere('panduan_eviden', 'like', '%'.$search.'%')->paginate();
			return view('admin.kategori.index', $data);
		}
    	$data['apms'] = Apm::orderBy('id_apm', 'desc')->paginate(20);
    	return view('admin.kategori.index', $data);
    }
	public function create()
    {
		$data['kriteria'] = KriteriaApm::orderBy('id_kriteria','ASC')->get();
		$data['area'] = AreaApm::orderBy('id_area','ASC')->get();
    	return view('admin.kategori.create', $data);
    }
}
