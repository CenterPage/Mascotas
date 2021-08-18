@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="col-sm d-flex justify-content-center flex-column align-items-center mb-3">
        <li class="list-group-item border-0 m-0 pt-0 text-center"><strong>CÉDULA DE IDENTIFICICACIÓN ANIMAL</strong></li>
        <img
            src="{{ asset($mismascota->foto) }}"
            alt="{{ $mismascota->nombre }}"
            class="img-thumbnail" style="width: 250px; height: 150px;"
        >

    </div>
    <div class="">
        <a href="{{ route('mismascotas.edit', $mismascota) }}" class="d-flex justify-content-center mb-3">Editar</a>
    </div>
    <div class="row justify-content-center">
        <ul class="list-group col-md-3">
            <li class="list-group-item color-box-header"><strong>MI MASCOTA</strong></li>
            <li class="list-group-item color-box">
                <strong>Nombre:</strong> {{ Illuminate\Support\Str::title($mismascota->nombre) }}
            </li>
            <li class="list-group-item color-box">
                <strong>F. Nacimiento:</strong> {{ Carbon\Carbon::parse($mismascota->fecha_nac)->format('Y-m-d') }}
            </li>
            <li class="list-group-item color-box">
                <strong>Tipo:</strong> {{ $mismascota->tipo->nombre }}
            </li>
            <li class="list-group-item color-box">
                <strong>Raza:</strong> {{ Illuminate\Support\Str::title($mismascota->raza) }}
            </li>
            <li class="list-group-item color-box">
                <strong>Sexo:</strong> {{ Illuminate\Support\Str::title($mismascota->sexo) }}
            </li>
            <li class="list-group-item color-box">
                <strong>Color:</strong> {{ Illuminate\Support\Str::title($mismascota->color) }}
            </li>
        </ul>
        <ul class="list-group col-md-3">
            <li class="list-group-item color-box-header"><strong>ADULTO RESPONSABLE</strong></li>
            <li class="list-group-item color-box">
                <strong>Nombre:</strong> {{ Illuminate\Support\Str::title($mismascota->user->name) }}
            </li>
            <li class="list-group-item color-box">
                <strong>Apellidos:</strong> {{ Illuminate\Support\Str::title($mismascota->user->apellidos) }}
            </li>
            <li class="list-group-item color-box">
                <strong>Celular:</strong> {{ $mismascota->user->celular }}
            </li>
            <li class="list-group-item color-box">
                <strong>Dirección:</strong> {{ Illuminate\Support\Str::title($mismascota->user->direccion) }}
            </li>
            <li class="list-group-item color-box">
                <strong>F. Emisión:</strong> {{ Carbon\Carbon::parse($mismascota->created_at)->format('Y-m-d') }}
            </li>
        </ul>
    </div>
</div>
@endsection
