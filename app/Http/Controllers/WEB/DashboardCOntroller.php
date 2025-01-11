<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardCOntroller extends Controller
{
    public function index()
    {
        return view('pages.Dashboard.dashboard');
    }
}
