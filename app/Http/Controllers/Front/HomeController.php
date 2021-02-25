<?php

namespace App\Http\Controllers\Front;
use App\Models\Buku;
use App\Models\Transaksi;
use App\Models\Kategori;
use App\Models\Apm;
use App\Models\File;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class HomeController extends Controller
{
    public function index()
    {
    	// Penting
		$data['kategori'] = Kategori::orderBy('kategori')->get();
		
    	$data['buku'] = Buku::where('stok', '>', 0)->limit(6)->get();
		$data['apms']= Apm::orderBy('id_apm', 'ASC')->get();

    	return view('front.home.index', $data);
    }

    public function pinjam($id)
    {
    	if (Auth::check()) {
    		$check = Transaksi::where('id_user', Auth::user()->id)->where('tgl_kembali', 'Masih dipinjam')->count();
    		if ($check == 5) {
		    	return redirect()->route('home_daftarbuku');
    		} else {
		    	$buku = Buku::find($id);
		    	$buku->stok = $buku->stok - 1;
		    	$buku->save();

		    	$user = Auth::user()->id;

		    	$pinjam = new Transaksi;
		    	$pinjam->id_user = $user;
		    	$pinjam->id_buku = $buku->id;
		    	$pinjam->tgl_pinjam = date('Y-m-d H:i:s');
		    	$pinjam->tgl_kembali = 'Masih dipinjam';
		    	$pinjam->save();

		    	return redirect()->back();
    		}

    	} else {
    		return redirect('/login');
    	}
    }

    public function transaksi()
    {
    	// Penting
		$data['kategori'] = Kategori::orderBy('kategori')->get();

		$data['transaksi'] = Transaksi::where('id_user', Auth::user()->id)->where('tgl_kembali', 'Masih dipinjam')->with('buku', 'user')->get();

    	return view('front.transaksi.index', $data);
    }
 
    public function pengembalian(Request $r)
    {
    	$buku = Buku::find($r->id_buku);
    	$buku->stok = $buku->stok + 1;
    	$buku->save();

    	$pinjam = Transaksi::find($r->id);
    	$pinjam->tgl_kembali = date('Y-m-d H:i:s');
    	$pinjam->save();

    	return redirect()->back();
    }

    public function daftarbuku()
    {
    	// Penting
		$data['kategori'] = Kategori::orderBy('kategori')->get();

    	$data['buku'] = Buku::where('stok', '>', 0)->with('kategori')->paginate(12);

    	return view('front.buku.index', $data);
    }

    public function jenis($jenis_buku)
    {
		// Penting
		$data['kategori'] = Kategori::orderBy('kategori')->get();
		$kategori = Kategori::where('kategori', $jenis_buku)->firstOrFail();

    	$data['buku'] = Buku::where('id_kategori', $kategori->id)->paginate(12);

    	return view('front.buku.index', $data);
    }

    public function pencarian(Request $r)
    {
    	// Penting
		$data['kategori'] = Kategori::orderBy('kategori')->get();

		$data['keyword'] = $r->keyword;
		$data['buku'] = Buku::where('judul', 'LIKE', '%'.$r->keyword.'%')->paginate(12);
    	return view('front.buku.search', $data);
    }

    public function detailbuku($id)
    {
    	// Penting
		$data['kategori'] = Kategori::orderBy('kategori')->get();

		$data['buku'] = Buku::find($id);

		$data['check'] = Transaksi::where('id_user', Auth::id())->where('id_buku', $id)->where('tgl_kembali', 'Masih dipinjam')->get();

    	return view('front.buku.detail', $data);
    }

    public function setting()
    {
    	// Penting
		$data['kategori'] = Kategori::orderBy('kategori')->get();

		$data['member'] = User::find(Auth::id());

		return view('front.setting.index', $data);
    }

    public function settingstore(Request $r)
    {
    	$member = User::find(Auth::id());
    	$member->name = $r->name;
    	$member->email = $r->email;

    	if ($r->password != NULL) {
    		$member->password = bcrypt($r->password);
    	}

	    //Upload File
    	if ($r->hasFile('image')) {
	    	$uploadedFile = $r->file('image');
	    	$ext = $uploadedFile->getClientOriginalExtension();
			$nm_file = rand(111111,999999).".".$ext;
			$destinationPath = public_path('uploaded/member');
			$upload = $uploadedFile->move($destinationPath, $nm_file);
	    	$member->image = $nm_file;
    	}

    	$member->save();

    	return redirect()->route('home');
    }

	//saya
	public function detaileviden($id_apm)
    {
		//saya
		$data['apms'] = Apm::find($id_apm);
		$data['files'] = File::where('id_apm',$id_apm)->get();	
    	return view('front.buku.detail', $data);
    }

	public function editApm($id_apm)
    {
    	// Penting

		$data['apms'] = Apm::find($id_apm);

		return view('front.edit.index', $data);
    }
	public function editApmStore(Request $r,$id_apm)
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

    	// if ($r->password != NULL) {
    	// 	$member->password = bcrypt($r->password);
    	// }

	    //Upload File
    	// if ($r->hasFile('image')) {
	    // 	$uploadedFile = $r->file('image');
	    // 	$ext = $uploadedFile->getClientOriginalExtension();
		// 	$nm_file = rand(111111,999999).".".$ext;
		// 	$destinationPath = public_path('uploaded/member');
		// 	$upload = $uploadedFile->move($destinationPath, $nm_file);
	    // 	$member->image = $nm_file;
    	// }

    	$apm->save();

    	return redirect()->route('home');
    }
	public function uploadEviden(Request $r)
    {
		
        $this->validate($r,[
            'id_apm' => 'required',
            'title' => 'required',
            'pdf' => 'required',
        ]);
			    //Upload File
    	// if ($r->hasFile('image')) {
	    // 	$uploadedFile = $r->file('image');
	    // 	$ext = $uploadedFile->getClientOriginalExtension();
		// 	$nm_file = rand(111111,999999).".".$ext;
		// 	$destinationPath = public_path('uploaded/member');
		// 	$upload = $uploadedFile->move($destinationPath, $nm_file);
	    // 	$member->image = $nm_file;
    	// }
		$file = $r->file('pdf');
		$nama_file = time()."_".$file->getClientOriginalName();
		$tujuan_upload = 'uploaded/file';
		$file->move($tujuan_upload,$nama_file);
		File::create([
            'id_apm' => $r->id_apm,
            'title' => $r->title,
            'name' => $nama_file,
		]);
		
    	return redirect()->back();

		
    }
}