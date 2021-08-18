<div class="col-md-3 mt-2">
    <div class="list-group">
        <a href="{{ route('mismascotas.index') }}"
            class="list-group-item list-group-item-action
                {{ request()->routeIs('mismascotas.index') ? 'active' : '' }}"

        >
            Mis Mascotas
        </a>
{{--         <a href="{{ route('solicitudes.create') }}" class="list-group-item list-group-item-action
            {{ request()->routeIs('solicitudes.create') ? 'active' : '' }}"
        >
            Subir Solicitud
        </a> --}}
        <a href="{{ route('mismascotas.create') }}"
            class="list-group-item list-group-item-action
                {{ request()->routeIs('mismascotas.create') ? 'active' : '' }}"

        >
            Nueva Mascota
        </a>
        {{-- <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a> --}}
    </div>
</div>
