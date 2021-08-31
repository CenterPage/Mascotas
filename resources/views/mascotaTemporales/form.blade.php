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
                    value="{{ old('raza', $mimascota->raza) }}"
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
                    value="{{ old('sexo', $mimascota->sexo) }}"
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
                name="nombre_mascota"
                class="form-control @error('nombre_mascota') is-invalid @enderror"
                value="{{ old('nombre_mascota', $mimascota->nombre_mascota) }}"
                id="inputAddress"
                placeholder="Ejm: Lucky"
                required
            >

                @error('nombre_mascota')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputCity">Fecha Nacimiento</label>
                <input type="date"
                    name="fecha_nacimiento"
                    min="2010-01-01" max="2030-12-31"
                    required
                    class="form-control @error('fecha_nacimiento') is-invalid  @enderror"
                    value="<?php date("Y-m-d")?>" {{-- REEMPLAZA EL date("Y-m-d") POR DATE("", strtotime) --}}
                    id="inputCity"
                >

                @error('fecha_nacimiento')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Tipo</label>
                <input type="text"
                    name="tipo"
                    class="form-control @error('tipo') is-invalid @enderror"
                    value="{{ old('tipo', $mimascota->tipo) }}"
                    id="inputAddress"
                    placeholder="Ejm: Lucky"
                    required
                >

                @error('tipo')
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
                    value="{{ old('color', $mimascota->color) }}"
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

    </fieldset>

    <fieldset class="aside p-3 shadow-sm rounded boder-1 mt-3">
        <legend class="text-legend">
            Dueño
        </legend>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Nombre</label>
                <input type="text"
                    name="nombre_adulto"
                    class="form-control @error('nombre_adulto') is-invalid  @enderror"
                    value="{{ old('nombre_adulto', $mimascota->nombre_adulto) }}"
                    id="inputEmail4"
                    placeholder="Ejm: Lola"
                    required
                >

                @error('nombre_adulto')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="form-group col-md-6">
                <label for="inputEmail4">Apellidos</label>
                <input type="text"
                    name="apellidos_adulto"
                    class="form-control @error('apellidos_adulto') is-invalid  @enderror"
                    value="{{ old('apellidos_adulto', $mimascota->apellidos_adulto) }}"
                    id="inputEmail4"
                    placeholder="Ejm: Lola"
                    required
                >

                @error('apellidos_adulto')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="form-group col-md-6">
                <label for="inputEmail4">Celular</label>
                <input type="text"
                    name="celular"
                    class="form-control @error('celular') is-invalid  @enderror"
                    value="{{ old('celular', $mimascota->celular) }}"
                    id="inputEmail4"
                    placeholder="Ejm: 980751862"
                    required
                >

                @error('celular')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="form-group col-md-6">
                <label for="inputEmail4">Dirección</label>
                <input type="text"
                    name="direccion"
                    class="form-control @error('direccion') is-invalid  @enderror"
                    value="{{ old('direccion', $mimascota->direccion) }}"
                    id="inputEmail4"
                    placeholder="Ejm: Los Tallanes"
                    required
                >

                @error('direccion')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
        </div>

    </fieldset>

    <fieldset class="aside p-3 shadow-sm rounded boder-1 mt-3">
        <legend class="text-legend">
            Solicitudes
        </legend>

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
                    value="{{ old('foto', $mimascota->foto) }}"
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

            @if (request()->routeIs('mimascotas.create'))

            @else
                <div class="mt-3">
                    <img
                        src="{{ asset($mimascota->foto) }}"
                        alt="{{ $mimascota->nombre }}"
                        class="img-thumbnail"
                        style="width: 250px; height: 150px;"
                    >
                </div>
            @endif

            <div class="form-group mt-4">
                <label for="inputCity">Fecha Emisión</label>
                <input type="date"
                    name="fecha_emision"
                    min="2015-01-01" max="2030-12-31" required
                    class="form-control @error('fecha_emision') is-invalid  @enderror"
                    value="<?php echo date("Y-m-d"); ?>"
                    id="inputCity"
                    required
                >

                @error('fecha_emision')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
        </div>

    </fieldset>

    <div class="form-group mt-3">
        <button type="submit" class="btn btn-primary">{{ $btn }}</button>
    </div>
