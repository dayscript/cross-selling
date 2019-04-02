@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7 col-md-7">
            <div class="content">
                <div class="section-header">
                    @if (!isset($data->nombre))
                    <h4 class="section-title"><strong>Buen día</strong></h4>
                    @else
                    <h4 class="section-title"><strong>Buen día  {{ $data->nombre }}</strong></h4>
                    @endif
                    <p>Sabemos que te interesa mantener tu tranquilidad, el bienestar de quienes más te importan, y proteger todo aquello que has construido.</p>
                    <p>En <strong>SEGUROS AUTOMONTAÑA LTDA,</strong> como tu asesor de seguros de confianza, te invitamos a conocer los principales beneficios del portafolio de <strong>Seguros Allianz:</strong></p>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12">
                        <div class="services-item bg-salud">
                            <h5><strong>Seguro de Salud</strong></h5>
                            <p>Aseguradora de salud <strong>#1</strong> de satisfacción en clientes, y red de más de 4.100 médicos, laboratorios e instituciones médicas disponibles para usarlas en todo Colombia.</p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-xs-12">
                        <div class="services-item bg-vida">
                            <h5><strong>Seguro de Vida</strong></h5>
                            <p>Soluciones para brindarte la confianza que necesitas para cuidar a los que más amas.</p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-xs-12">
                        <div class="services-item bg-hogar">
                            <h5><strong>Seguro de Hogar</strong></h5>
                            <p>Coberturas que protegen tu vivienda, tus bienes y tu tranquilidad.</p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-xs-12">
                        <div class="services-item bg-autos">
                            <h5><strong>Seguro de Autos</strong></h5>
                            <p>Atención y asistencia oportuna siempre que lo necesites.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center spacing-button">
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        @if (isset($data->id_tomador))
                        <a href="{{ route('allianz.aliado.experto', ['contact' => $data->key]) }}" class="btn btn-primary btn-lg btn-block bg-allianz">
                        Quiero saber más</a>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12">
                        <p><strong>Cordialmente,</strong></p>
                        <p><strong class="text-allianz">SEGUROS AUTOMONTAÑA.</strong><br>
                        <a class="text-allianz" href="https://www.allianz.co/" target="_blank">Allianz Colombia</a> | Agente Comercial de Seguros Bogotá | Teléfono móvil +57 315 396 29 36 | Correo electrónico valeria.rodriguez@allia2.com.co</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection