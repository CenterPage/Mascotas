<?php

namespace App\Http\Controllers;

use App\Mascota;
use App\Solicitude;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\SolicitudRequest;

class SolicitudeController extends Controller
{
    public function create()
    {
        $mascotas = DB::table('mascotas')
                    ->whereNotExists(function ($query) {
                        $query->select(DB::raw(1))
                            ->from('solicitudes')
                            ->whereRaw('solicitudes.id = mascotas.solicitude_id');
                   })
                    ->where('user_id', auth()->id())
                   ->get();

        return view('solicitudes.create', compact('mascotas'));
    }

    public function store(SolicitudRequest $request, Solicitude $solicitude, Mascota $mascota)
    {
        // dd($mascota);
        $solicitude->create([
            'solicitud' => '/storage/'.request()->file('solicitud')->store('solicitudes', 'public'),
            'foto' => '/storage/'.request()->file('foto')->store('fotos', 'public'),
            'user_id' => auth()->id(),
        ]);

        $mascota->update([
            'mascota_id' => $request->mascota_id
        ])
        ->where('mascota_id', $request->mascota_id);

        return back()->with('status', 'Solicitudes adjuntadas para su mascota!');
    }
}
