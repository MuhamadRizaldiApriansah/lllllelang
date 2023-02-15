<?php

namespace App\Http\Controllers;
use App\Models\history;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HistoryController extends Controller
{
    public function index()
    {
        $his = DB::table('history_lelang')
        ->join('tb_lelang', 'history_lelang.id_lelang', '=', 'tb_lelang.id_lelang')
        ->join('tb_masyarakat', 'history_lelang.id_user', '=', 'tb_masyarakat.id_user')
        ->join('tb_barang', 'tb_lelang.id_barang', '=', 'tb_barang.id_barang')
        ->select('history_lelang.*', 'tb_barang.nama_barang AS nama_barang', 'tb_masyarakat.nama_lengkap AS nama_lengkap')
        ->orderBy('id_history', 'desc')
        ->get();
        
        return view('history', compact('his'));
    }
}
