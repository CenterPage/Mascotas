@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="col-sm d-flex justify-content-center flex-column align-items-center mb-3">
        <li class="list-group-item border-0 m-0 pt-0 text-center"><strong>CÉDULA DE IDENTIFICICACIÓN ANIMAL</strong></li>
        <img
            src="{{ asset($listadomascota->foto) }}"
            alt="{{ $listadomascota->nombre }}"
            class='img-thumbnail' style="width: 250px; height: 150px;"
        >

    </div>

    @guest

    @else
        @if (optional(auth()->user()->admin_since == 1))
            <div class="d-flex justify-content-center align-items-center mb-3">
                <div class="form-check">
                    <form  method="POST" action="{{ route('listadomascotas.destroy', $listadomascota) }}">
                        @csrf @method('DELETE')
                            <input class="form-check-input"
                                name="estado_qr"
                                type="checkbox"
                                value="1"
                                {{ old('estado_qr', $listadomascota->estado_qr) == 1 ? 'checked' : '' }}
                                id="defaultCheck1"
                                onchange="this.form.submit()"
                            >
                            <label class="form-check-label" for="defaultCheck1">
                                Código QR Generado
                            </label>
                    </form>
                </div>
            </div>
        @endif
    @endguest

    <div class="d-flex justify-content-center flex-column align-items-center">
        <ul class="list-group col-md-3">
            <li class="list-group-item color-box-header">
                <strong>MI MASCOTA</strong>
            </li>
            <li class="list-group-item color-box">
                <strong>Nombre:</strong> {{ Illuminate\Support\Str::title($listadomascota->nombre) }}
            </li>
            <li class="list-group-item color-box">
                <strong>F. Nacimiento:</strong> {{ Carbon\Carbon::parse($listadomascota->fecha_nac)->format('Y-m-d') }}
            </li>
            <li class="list-group-item color-box">
                <strong>Tipo:</strong> {{ ($listadomascota->tipo->nombre) }}
            </li>
            <li class="list-group-item color-box">
                <strong>Raza:</strong> {{ Illuminate\Support\Str::title($listadomascota->raza) }}
            </li>
            <li class="list-group-item color-box">
                <strong>Sexo:</strong> {{ Illuminate\Support\Str::title($listadomascota->sexo) }}
            </li>
            <li class="list-group-item color-box">
                <strong>Color:</strong> {{ Illuminate\Support\Str::title($listadomascota->color) }}</li>
        </ul>
        <ul class='list-group col-md-3 mt-3'>
            <li class="list-group-item color-box-header"><strong>ADULTO RESPONSABLE</strong></li>
            <li class="list-group-item color-box">
                <strong>Nombre:</strong> {{ Illuminate\Support\Str::title($listadomascota->user->name) }}
            </li>
            <li class="list-group-item color-box">
                <strong>Apellidos:</strong> {{ Illuminate\Support\Str::title($listadomascota->user->apellidos) }}
            </li>
            <li class="list-group-item color-box">
                <strong>Celular:</strong> {{ $listadomascota->user->celular }}
            </li>
            <li class="list-group-item color-box">
                <strong>Dirección:</strong> {{ Illuminate\Support\Str::title($listadomascota->user->direccion) }}
            </li>
            <li class="list-group-item color-box">
                <strong>F. Emisión:</strong> {{ Carbon\Carbon::parse($listadomascota->created_at)->format('Y-m-d') }}
            </li>
        </ul>
    </div>
</div>
@endsection
