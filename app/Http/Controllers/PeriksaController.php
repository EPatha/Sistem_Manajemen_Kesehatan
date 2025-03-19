<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Periksa;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PeriksaController extends Controller
{
    public function create()
    {
        $dokter = User::where('role', 'dokter')->get();
        return view('periksa.create', compact('dokter'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_dokter' => 'required|exists:users,id',
            'tgl_periksa' => 'required|date',
        ]);

        Periksa::create([
            'id_pasien' => Auth::id(),
            'id_dokter' => $request->id_dokter,
            'tgl_periksa' => $request->tgl_periksa,
            'catatan' => '',
            'biaya_periksa' => 150000,
        ]);

        return redirect()->route('dashboard')->with('success', 'Janji periksa berhasil dibuat.');
    }
}

