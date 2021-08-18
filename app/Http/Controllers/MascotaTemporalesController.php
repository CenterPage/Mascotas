<?php

namespace App\Http\Controllers;

use App\MascotaTemporal;
use Illuminate\Http\Request;

class MascotaTemporalesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('show');
    }

    public function index()
    {
        $mascotas = MascotaTemporal::where('estado_qr', NULL)->latest()->paginate();

        return view('mascotaTemporales.index', compact('mascotas'));
    }

    public function create()
    {
        return view('mascotaTemporales.create');
    }

    public function store(Request $request)
    {
        $mascota = MascotaTemporal::create( $request->all() );

        return redirect()->route('mimascotas.index')->with('status', $mascota->nombre . ' fue registrado!');
    }

    public function show(MascotaTemporal $mimascota)
    {
        return view('mascotaTemporales.show', compact('mimascota'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(MascotaTemporal $mimascota)
    {
        $mimascota->estado_qr = 1;
        $mimascota->save();
        return back();
    }
}
