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
        $data['apms'] = Apm::where('nilai', 'A')->count();
        $data['bobot'] = Apm::where('bobot', 'A')->count();
        $data['skor'] = DB::table('apms')->count('skor');
        $data['jumlah_data'] = Apm::count();
        return view('admin.dashboard.index', $data);
    }
}
