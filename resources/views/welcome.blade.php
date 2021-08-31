@extends('layouts.app')

@section('content')
    <header class="space">
        <div class="container pb-4 pt-4">
          <div class="row align-items-center">
            <div class="col-sm-12 col-md-7 text-banner">
                <h1 class="text-white font-weight-bold">Ordenanza Municipal <br>N°003-2021-MDC</h1>
                <p class="text-white  lead">En resumen estipula que las personas que posean felinos y canes, deberán registrarlos. Esta ordenanza tiene como objetivo controlar la tenencia de animales e identificar a los responsables en casos de perdidas, maltratos o ataques.</p>
                <a href="https://municastilla.gob.pe/Docmuni/ca_ordenanzas/2021-003.pdf" class="btn btn-outline-light" target="_blank">
                    Ver más
                </a>
            </div>
            <div class="col-sm-12 col-md-5 d-none d-md-block mt-4">
                <img src="img/img-banner-2.svg"
                alt="imagen referencial"
                class="img-fluid "
                >
            </div>
          </div>
        </div>
        <img src="img/onda-down.png"
        class="onda-down"
        alt="onda-down"
        />
    </header>

<div class="container mt-5 mb-4">
    <div class="row">
        <div class="col-12 col-lg-6 img-block-tres">
            <img class="img-fluid img-home" src="{{ asset('img/pasos.svg') }}" alt="Desarrollo Web">
        </div>
        <div class="col-12 col-lg-6 my-auto">
            <h1 class="display-4 text-secondary text-center font-weight-bold">Sigue los pasos</h1>
                <h4 class="text-secondary pt-3 font-weight-bold">
                    1.- Realiza el pago por cada mascota
                </h4>
                <p class="lead">
                    Acercate a nuestras oficinas de rentas ubicada frente a la Plaza Montero y realiza el pago de S/. 22 por mascota.
                </p>
                <h4 class="text-secondary font-weight-bold">
                    2.- Registra tus datos
                </h4>
                <p class="lead">
                    Ingresa tus datos en nuestro <a href="https://mascotas.municastilla.gob.pe/register">portal web</a>.
                </p>
                <h4 class="text-secondary font-weight-bold">3.- Registra tu mascota</h4>
                <p class="lead">
                    Ingresa los datos de tu mascota con sus respectivas solicitudes.
                </p>
                <h4 class="text-secondary font-weight-bold">4.- Entrega del carne</h4>
                <p class="lead">
                    Se te entregará un carne de identificación animal con los datos de tu mascota.
                </p>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
header {
    background: #059669;
    background: -webkit-linear-gradient(to right, #10B981, #059669);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #10B981, #059669);

}
    .onda-down {
        width: 100%;
        background: #059669;
        background: -webkit-linear-gradient(to right, #10B981, #059669);
        background: linear-gradient(to right, #10B981, #059669);
    }
</style>
@endpush
