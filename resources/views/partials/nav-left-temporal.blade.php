<div class="col-md-3 mt-2">
    <div class="list-group">
        <a href="{{ route('mimascotas.index') }}"
            class="list-group-item list-group-item-action
                {{ request()->routeIs('mimascotas.index') ? 'active' : '' }}"

        >
            Mis Mascotas
        </a>
{{--         <a href="{{ route('solicitudes.create') }}" class="list-group-item list-group-item-action
            {{ request()->routeIs('solicitudes.create') ? 'active' : '' }}"
        >
            Subir Solicitud
        </a> --}}
        <a href="{{ route('mimascotas.create') }}"
            class="list-group-item list-group-item-action
                {{ request()->routeIs('mimascotas.create') ? 'active' : '' }}"

        >
            Nueva Mascota
        </a>
        {{-- <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a> --}}
    </div>
</div>
