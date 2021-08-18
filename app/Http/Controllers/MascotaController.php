<?php

namespace App\Http\Controllers;

use App\Http\Requests\MascotaRequest;
use App\Mascota;
use App\Tipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MascotaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $mascotas = Mascota::where('user_id', auth()->id())->latest()->paginate();

        return view('mascotas.index', compact('mascotas'));
    }

    public function create()
    {
        $mascotas = Mascota::where('user_id', auth()->id())->get();

        $tipos = Tipo::all();

        return view('mascotas.create', compact('mascotas', 'tipos'));
    }

    public function store(MascotaRequest $request)
    {
        $mascota = Mascota::create( $request->all() );

        return redirect()->route('mismascotas.index')->with('status', $mascota->nombre . ' fue registrado!');
    }

    public function show(Mascota $mismascota)
    {
        return view('mascotas.show', compact('mismascota'));
    }

    public function edit(Mascota $mismascota)
    {
        $tipos = Tipo::all();

        return view('mascotas.edit', compact('mismascota', 'tipos'));
    }

    public function update(MascotaRequest $request, Mascota $mismascota)
    {
        // dd($mismascota->foto);
        // $mismascota->url = \Str::slug($request->nombre) . "-{$request->fecha_nac}";
        // OJO que si cambias el nombre también cambia la url y cuando generes el QR no saldran los datos

        $mismascota->fill( $request->validated() );


        if ($request->hasFile('foto')) {
            if ($mismascota->foto != null) {
                Storage::delete($mismascota->foto);
            }

            $mismascota->update([
                'foto' => '/storage/'.request()->file('foto')->store('fotos', 'public')
            ]);
        }

        if ($request->hasFile('solicitud')) {
            if ($mismascota->solicitud != null) {
                Storage::delete($mismascota->solicitud);
            }

            $mismascota->update([
                'solicitud' => '/storage/'.request()->file('solicitud')->store('fotos', 'public')
            ]);
        }

        $mismascota->save();


        return redirect()->route('mismascotas.index')->with('status', $mismascota->nombre . ' fue Actualziado!');
    }

    public function destroy(Mascota $mismascota)
    {
        // dd($mismascota);
    }
}
