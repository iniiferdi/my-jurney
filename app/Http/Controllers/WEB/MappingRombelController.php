<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use App\Models\Anggota_rombel;
use App\Models\Rombel;
use App\Models\User;
use Illuminate\Http\Request;

class MappingRombelController extends Controller
{
    public function index(){
        $rombels = Rombel::with('id_user', 'id_semester')->get();
        return view('pages.MappingRombel.index', compact('rombels'));
    }
}
