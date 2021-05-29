<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class controllerdimas extends Controller
{
    public function anggota()
    {
        $anggota = DB:: table('anggota')->get();
        return view('anggota0203',['anggota' => $anggota]);
    }
}
