<?php

namespace App\Http\Controllers\Admin;
use App\Models\Buku;
use App\Models\Apm;
use App\Models\AreaApm;
use App\Models\KriteriaApm;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class BukuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $r)
    {
		$search = $r->input('search');
		if ($search) {
			$data['search'] = $search;
			$data['eviden'] = Apm::where('penilaian', 'like', '%'.$search.'%')->orWhere('panduan_eviden', 'like', '%'.$search.'%')->paginate(15);
			return view('admin.buku.index', $data);
		}
		
		$data['search'] = '';
    	$data['eviden'] = Apm::orWhereNull('nilai')->paginate(20);

    	return view('admin.buku.index', $data);
    }

    public function create()
    {
		$data['kategori'] = Kategori::orderBy('kategori')->get();

    	return view('admin.buku.create', $data);
    }

    public function store(Request $r)
    {
		$this->validate($r, [
			'isbn' => 'required',
			'judul' => 'required',
			'id_kategori' => 'required',
			'pengarang' => 'required',
			'penerbit' => 'required',
			'tahun' => 'required',
			'stok' => 'required',
			'image' => 'image',
		]);

		$input = $r->input();

    	//Upload File
    	$uploadedFile = $r->file('image');
    	$ext = $uploadedFile->getClientOriginalExtension();
		$nm_file = rand(111111,999999).".".$ext;
		$destinationPath = public_path('uploaded/buku');
		$upload = $uploadedFile->move($destinationPath, $nm_file);
    	$input['image'] = $nm_file;

    	$buku = Buku::create($input);

    	return redirect()->route('buku');
    }

    public function edit($id)
    {
		$data['area'] = AreaApm::orderBy('id_area','ASC')->get();
    	$data['eviden'] = Apm::find($id);
		$data['kriteria'] = KriteriaApm::orderBy('id_kriteria','ASC')->get();

    	return view('admin.buku.edit', $data);
    }

    public function update(Request $r, $id_apm)
    {
		$apm = Apm::find($id_apm);
    	$apm->id_area = $r->id_area;
    	$apm->area_rb = $r->area_rb;
		$apm->penilaian = $r->penilaian;
    	$apm->a = $r->a;
		$apm->b = $r->b;
    	$apm->c = $r->c;
		$apm->nilai = $r->nilai;
    	$apm->id_kriteria = $r->id_kriteria;
		$apm->bobot = $r->bobot;
		$hasil=NULL;
		if($r->nilai=='A'){
            $hasil=($r->bobot)/1;
        }elseif($r->nilai=='B'){
            $hasil=($r->bobot)/2;
        }elseif($r->nilai=='C'){
            $hasil=NULL;
        }
		$apm->skor = $hasil;
		//sementara

		$no = $r->id_kriteria.".".$id_apm;

		$apm->panduan_eviden = $no;

	    //Upload File
    	// if ($r->hasFile('image')) {
	    // 	$uploadedFile = $r->file('image');
	    // 	$ext = $uploadedFile->getClientOriginalExtension();
		// 	$nm_file = rand(111111,999999).".".$ext;
		// 	$destinationPath = public_path('uploaded/buku');
		// 	$upload = $uploadedFile->move($destinationPath, $nm_file);
	    // 	$input['image'] = $nm_file;
    	// }

		$apm->save();

    	return redirect()->route('buku');
    }

    public function delete(Request $r)
    {
    	Buku::where('id', $r->id)->delete();

    	return redirect()->route('buku');
    }
}
