<?php

namespace App\Http\Controllers;

use App\Models\InputAspirasi;
use App\Models\Aspirasi;
use App\Models\Kategori;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AspirasiController extends Controller
{
    public function list(Request $request)
    {
        $query = InputAspirasi::with(['siswa', 'kategori', 'aspirasi']);

        if ($request->date) {
            $query->whereDate('created_at', $request->date);
        }
        if ($request->month) {
            $query->whereMonth('created_at', $request->month);
        }
        if ($request->nis) {
            $query->where('nis', $request->nis);
        }
        if ($request->kategori) {
            $query->where('id_kategori', $request->kategori);
        }

        $data = [
            'aspirasi' => $query->orderBy('created_at', 'desc')->get(),
            'kategori' => Kategori::all(),
            'siswa' => Siswa::all(),
        ];

        return view('aspirasi.list', $data);
    }

    public function status()
    {
        $data = [
            'menunggu' => Aspirasi::where('status', 'Menunggu')->count(),
            'proses' => Aspirasi::where('status', 'Proses')->count(),
            'selesai' => Aspirasi::where('status', 'Selesai')->count(),
            'ditolak' => Aspirasi::where('status', 'Ditolak')->count(),
            'aspirasi' => Aspirasi::with(['inputAspirasi', 'kategori'])->get()
        ];

        return view('aspirasi.status', $data);
    }

    public function feedback()
    {
        $data = [
            'feedback' => Aspirasi::whereNotNull('feedback')
                ->with(['inputAspirasi', 'admin'])
                ->get()
        ];

        return view('aspirasi.feedback', $data);
    }

    public function history()
    {
        $data = [
            'history' => Aspirasi::with(['inputAspirasi', 'kategori', 'admin'])
                ->orderBy('updated_at', 'desc')
                ->get()
        ];

        return view('aspirasi.history', $data);
    }
}