@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row align-items-start">
        <div class="col-md-1"></div>

        @include('partials.nav-left')

        <div class="col-md-8">
            <div class="d-flex flex-row flex-wrap">
                <form action="{{ route('mismascotas.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    @include('mascotas.form', [
                        'mismascota' => new App\Mascota,
                        'btn' => 'Registrar'
                    ])


                </form>
            </div>
        </div>
    </div>
</div>
@endsection
