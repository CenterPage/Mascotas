@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row align-items-start">
        <div class="col-md-1"></div>

        @include('partials.nav-left-temporal')

        <div class="col-md-6">
            <div class="d-flex flex-row flex-wrap">
                <form action="{{ route('mimascotas.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    @include('mascotaTemporales.form', [
                        'mimascota' => new App\MascotaTemporal,
                        'btn' => 'Registrar'
                    ])


                </form>
            </div>
        </div>
    </div>
</div>
@endsection
