<?php

namespace App\Http\Controllers\Admin;
use App\Models\Apm;
use App\Models\AreaApm;
use App\Models\KriteriaApm;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
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
	public function store(Request $r){

		$this->validate($r, [
			'id_area' => 'required',
			'area_rb' => 'required',
			'penilaian' => 'required',
			'a' => 'required',
			'b' => 'required',
			'c' => 'required',
			'id_kriteria' => 'required',
			'bobot' => 'required',
		]);
		$apm['id_area'] = $r->id_area;
    	$apm['area_rb'] = $r->area_rb;
		$apm['penilaian'] = $r->penilaian;
    	$apm['a'] = $r->a;
		$apm['b'] = $r->b;
    	$apm['c'] = $r->c;
		$apm['nilai'] = NULL;
    	$apm['id_kriteria'] = $r->id_kriteria;
		$apm['bobot'] = $r->bobot;
		$apm['skor'] = NULL;
		$no = $r->id_kriteria.".";
		$apm['panduan_eviden'] = $no;
		$apm['catatan_eviden'] = '-';
		$apm['slug'] = Str::slug($r->penilaian, '-');
		Apm::create($apm);

    	return redirect()->route('kategori');
	
    	// $apm->id_area = $r->id_area;
    	// $apm->area_rb = $r->area_rb;
		// $apm->penilaian = $r->penilaian;
    	// $apm->a = $r->a;
		// $apm->b = $r->b;
    	// $apm->c = $r->c;
		// $apm->nilai = $r->nilai;
    	// $apm->id_kriteria = $r->id_kriteria;
		// $apm->bobot = $r->bobot;
		// if($r->nilai=='A'){
        //     $hasil=($r->bobot)/1;
        // }elseif($r->nilai=='B'){
        //     $hasil=($r->bobot)/2;
        // }elseif($r->nilai=='C'){
        //     $hasil=NULL;
        // }
		// $apm->skor = $hasil;
		// $no = $r->id_kriteria.".".$id_apm;
		
		// $apm->panduan_eviden = $no;

    	// $apm->save();

    	// return redirect()->route('admin/kategori');
	}
}
