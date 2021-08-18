    <fieldset class="aside p-3 shadow-sm rounded boder-1">
        <legend class="text-legend">
            Mi Mascota
        </legend>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Raza</label>
                <input type="text"
                    name="raza"
                    class="form-control @error('raza') is-invalid  @enderror"
                    value="{{ old('raza', $mismascota->raza) }}"
                    id="inputEmail4"
                    placeholder="Ejm: Labrador"
                    required
                >

                @error('raza')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Sexo</label>
                <input type="text"
                    name="sexo"
                    class="form-control @error('sexo') is-invalid  @enderror"
                    value="{{ old('sexo', $mismascota->sexo) }}"
                    id="inputPassword4"
                    placeholder="Ejm: Hembra"
                    required
                >

                @error('sexo')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Nombre</label>
            <input type="text"
                name="nombre"
                class="form-control @error('nombre') is-invalid @enderror"
                value="{{ old('nombre', $mismascota->nombre) }}"
                id="inputAddress"
                placeholder="Ejm: Lucky"
                required
            >

                @error('nombre')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputCity">Fecha Nacimiento</label>
                <input type="date"
                    name="fecha_nac"
                    min="2015-01-01" max="2030-12-31" required
                    class="form-control @error('fecha_nac') is-invalid  @enderror"
                    value="<?php
                            echo $_SERVER["REQUEST_URI"] ?
                            date("Y-m-d", strtotime($mismascota->fecha_nac)) :
                            date("Y-m-d", strtotime("+1 year"));
                        ?>"
                    id="inputCity"
                    required
                >

                @error('fecha_nac')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Tipo</label>
                <select id="inputState" name="tipo_id" required class="form-control @error('tipo_id') is-invalid  @enderror">
                    <option selected>Selecciona</option>
                    @foreach($tipos as $tipo)
                        <option value="{{ $tipo->id }}"
                            {{ old('tipo_id', $mismascota->tipo_id) == $tipo->id ? 'selected' : '' }}
                        >
                            {{ $tipo->nombre }}
                        </option>
                    @endforeach
                </select>

                @error('tipo_id')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="color">Color</label>
                <input type="text"
                    name="color"
                    class="form-control @error('color') is-invalid  @enderror"
                    value="{{ old('color', $mismascota->color) }}"
                    placeholder="Ejm: Negro - blanco"
                    id="color"
                    required
                >

                @error('color')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress2">Características</label>
            <textarea name="caracteristicas" class="form-control @error('caracteristicas') is-invalid  @enderror" id="inputAddress2" cols="30" rows="3" required >
                {{ $mismascota->caracteristicas }}
            </textarea>

                @error('caracteristicas')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
        </div>

        @if (request()->routeIs('mismascotas.create') == false)
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputState">Estado</label>
                    <select id="inputState" name="estado" required class="form-control @error('estado') is-invalid  @enderror">
                        <option selected>Selecciona</option>
                        <option value="1"
                            {{ old('estado', $mismascota->estado) == 1 ? 'selected' : '' }}
                        >
                            Vivo
                        </option>
                        <option value="0"
                            {{ old('estado', $mismascota->estado) == 0 ? 'selected' : '' }}
                        >
                            Fallecido
                        </option>
                    </select>

                    @error('estado')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
            </div>
        @endif
    </fieldset>

    <fieldset class="aside p-3 shadow-sm rounded boder-1 mt-3">
        <legend class="text-legend">
            Solicitudes
        </legend>

        <div class="form-group">
            <label for="exampleFormControlFile1">Mis Solicitudes</label>
            <span
                class="cursor"
                data-toggle="tooltip"
                data-placement="top" title="Adjunta un solo archivo en formato PDF que contenga las solicitudes"
            >
            @include('icons.icon-readme')
            </span>
{{--             <input type="file" name="solicitud" class="form-control-file @error('solicitud') is-invalid  @enderror" id="exampleFormControlFile1"> --}}
            <div class="custom-file">
                <input
                    type="file"
                    name="solicitud"
                    class="custom-file-input"
                    value="{{ old('foto', $mismascota->solicitud) }}"
                >
                <label class="custom-file-label">
                    Seleciona un archivo PDF
                </label>
            </div>

            @error('solicitud')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror

            @if (request()->routeIs('mismascotas.create') == false)
                <div class="mt-3">
                    <a href="{{ asset($mismascota->solicitud) }}" target="_blank">Ver Solicitud</a>
                </div>
            @endif

        </div>

        <div class="form-group">
            <label for="exampleFormControlFile1">Foto Mascota</label>
            <span
                class="cursor"
                data-toggle="tooltip"
                data-placement="top" title="Adjunta la foto de tu mascota en formato .JPG"
            >
            @include('icons.icon-readme')
            </span>
            {{-- <input type="file" name="foto" class="form-control-file @error('foto') is-invalid  @enderror" id="exampleFormControlFile1"> --}}
            <div class="custom-file">
                <input
                    type="file"
                    name="foto"
                    class="custom-file-input"
                    value="{{ old('foto', $mismascota->foto) }}"
                >
                <label class="custom-file-label">
                    Seleciona una foto JPG
                </label>
            </div>

            @error('foto')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror

            @if (request()->routeIs('mismascotas.create'))

            @else
                <div class="mt-3">
                    <img
                        src="{{ asset($mismascota->foto) }}"
                        alt="{{ $mismascota->nombre }}"
                        class="img-thumbnail"
                        style="width: 250px; height: 150px;"
                    >
                </div>
            @endif
        </div>

    </fieldset>

    <div class="form-group mt-3">
        <button type="submit" class="btn btn-primary">{{ $btn }}</button>
    </div>
