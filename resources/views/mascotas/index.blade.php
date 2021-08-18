@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row align-items-start">
        <div class="col-md-1"></div>

        @include('partials.nav-left')

        <div class="col-md-8">
            <div class="d-flex flex-row flex-wrap">
                @forelse($mascotas as $mascota)
                    <div class="card ml-1 mt-1" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset($mascota->foto) }}" alt="Card image cap"
                            style="height: 200px;">
                        {{-- <span class="bg-secondary rounded text-center text-white " style="width: 4rem;">Canino</span> --}}
                        <div class="card-body">
                            <h5 class="card-title text-capitalize">
                                {{ Illuminate\Support\Str::title($mascota->nombre) }}
                            </h5>
                            <p class="card-text">
                                {{ Illuminate\Support\Str::limit(
                                    Illuminate\Support\Str::lower(
                                        $mascota->caracteristicas), 90, '...'
                                    ) }}
                            </p>
                            <a href="{{ route('mismascotas.show', $mascota) }}" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                @empty
                    <strong>Aún no tienes mascotas registradas.</strong>
                @endforelse
            </div>
            <div class="overflow-auto mt-2">
                {{ $mascotas->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
