<?php

namespace App\Http\Controllers\search;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MascotaTemporal;

class SearchMascotaTemporalesController extends Controller
{
    public function index(Request $request)
    {
        $mascotas = MascotaTemporal::where('nombre_mascota', 'like', '%'. $request->search .'%')->latest()->paginate();

        return view('mascotaTemporales.search', compact('mascotas'));
    }
}
