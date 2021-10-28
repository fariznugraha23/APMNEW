<?php

namespace App\Http\Controllers\Admin;
use App\Models\LhkpnLhkasn;
use App\Models\Status_LhkpnLhkasn;
use App\Models\Jabatan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB, PDF;

class TransaksiController extends Controller
{
    public function index()
    {
        $data['lhk'] = LhkpnLhkasn::orderBy('id', 'desc')->paginate(10);
        
        return view('admin.transaksi.index', $data);
       
    }
    public function create()
    {
		$data['status'] = Status_LhkpnLhkasn::orderBy('id')->get();
        $data['jabatan'] = Jabatan::orderBy('id')->get();
    	return view('admin.transaksi.create', $data);
    }
    public function store(Request $r){
    $this->validate($r, [
        'nama' => 'required',
        'jabatan' => 'required',
        'link_dokumen' => 'required',
        'status' => 'required',
    ]);
    $lhk['nama'] = $r->nama;
    $lhk['jabatan'] = $r->jabatan;
    $lhk['link_dokumen'] = $r->link_dokumen;
    $lhk['status'] = $r->status;

    LhkpnLhkasn::create($lhk);
    return redirect()->route('transaksi');
    }
    public function edit($id)
    {
		$data['status'] = Status_LhkpnLhkasn::orderBy('id','ASC')->get();
        $data['jabatan'] = Jabatan::orderBy('id','ASC')->get();
    	$data['lhk'] = LhkpnLhkasn::find($id);
		
    	return view('admin.transaksi.edit', $data);
    }
    public function update(Request $r, $id)
    {
		$lhk = LhkpnLhkasn::find($id);
    	$lhk->nama = $r->nama;
    	$lhk->jabatan = $r->jabatan;
		$lhk->link_dokumen = $r->link_dokumen;
        $lhk->status = $r->status;
    	
	   

		$lhk->save();

    	return redirect()->route('transaksi');
    }
    public function destroy($id)
    {
        $lhk = LhkpnLhkasn::find($id);
        $lhks = LhkpnLhkasn::where('id',$lhk->id)->delete();
    	return redirect()->route('transaksi');
    }
    // public function pdf()
    // {
    //     //Get Data
    //     $data['transaksi'] = Transaksi::with('buku', 'user')->get();
        
    //     //Cetak PDF
    //     $tgl = date('Y-m-d');
    //     $nama = 'transaksi-'.$tgl.'.pdf';
    //     $pdf = PDF::loadView('admin.transaksi.pdf', $data);
    //     return $pdf->download($nama);	
    // }
}
