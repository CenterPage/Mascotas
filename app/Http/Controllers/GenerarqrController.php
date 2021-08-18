<?php

namespace App\Http\Controllers;

use App\Mascota;
use Illuminate\Http\Request;

class GenerarqrController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('show');
    }

    public function index()
    {
        $mascotas = Mascota::where('estado_qr', 0)->latest()->paginate();

        return view('admin.mascotas.index', compact('mascotas'));
    }

    public function create()
    {
        // $tipos = Tipo::all();

        // return view('admin.mascotas.create', compact('tipos'));
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Mascota $listadomascota)
    {
        // $this->authorize('view', $listadomascota);

        return view('admin.mascotas.show', compact('listadomascota'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Mascota $listadomascota)
    {
        $listadomascota->estado_qr = 1;
        $listadomascota->save();
        return back();
    }
}
