<?php

namespace App\Http\Controllers\Admin;
use App\Models\Buku;
use App\Models\Apm;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class DashboardController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['apmsa'] = Apm::where('nilai', 'A')->count();
        $data['apmsb'] = Apm::where('nilai', 'B')->count();
        $data['apmsc'] = Apm::where('nilai', 'C')->count();

        $data['bobot'] = Apm::where('bobot', 'A')->count();
        $data['skor'] = DB::table('apms')->count('skor');
        $data['jumlah_data'] = Apm::count();

        $data['kepemimpinan'] = Apm::where('nilai', 'A')->where('id_kriteria','1')->count();
        $data['jumkepemimpinan'] = Apm::where('id_kriteria','1')->count();

        $data['cusfo'] = Apm::where('nilai', 'A')->where('id_kriteria','2')->count();
        $data['jumcusfo'] = Apm::where('id_kriteria','2')->count();

        $data['proman'] = Apm::where('nilai', 'A')->where('id_kriteria','3')->count();
        $data['jumproman'] = Apm::where('id_kriteria','3')->count();

        $data['strapla'] = Apm::where('nilai', 'A')->where('id_kriteria','4')->count();
        $data['jumstrapla'] = Apm::where('id_kriteria','4')->count();

        $data['resman'] = Apm::where('nilai', 'A')->where('id_kriteria','5')->count();
        $data['jumresman'] = Apm::where('id_kriteria','5')->count();

        $data['docsystem'] = Apm::where('nilai', 'A')->where('id_kriteria','6')->count();
        $data['jumdocsystem'] = Apm::where('id_kriteria','6')->count();

        $data['peres'] = Apm::where('nilai', 'A')->where('id_kriteria','7')->count();
        $data['jumperes'] = Apm::where('id_kriteria','7')->count();
        return view('admin.dashboard.index', $data);
    }
}
