<?php

namespace App\Http\Controllers\search;

use App\Mascota;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchMascotaController extends Controller
{
    public function index(Request $request)
    {
        $mascotas = Mascota::where('nombre', 'like', '%'. $request->search .'%')->latest()->paginate();

        return view('admin.mascotas.search', compact('mascotas'));
    }
}
