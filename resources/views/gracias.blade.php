@extends('layouts.app')

<div class="container-fluid">
    <div class="row">
        <div class="" id="agradecimiento-logo">
            <img class="d-block" src="{{ asset('logos/logo.png') }}">
        </div>
        <div class="col-md-7 nopadding align-self-center">
            @if(!empty($success))
                <div class="alert alert-success text-center"> {{ $success }}</div>
            @endif
            <div class="d-block d-sm-none" id="image-agradecimiento">
                <img class="d-block w-25 mx-auto" src="{{ asset('img/agradecimiento-min.jpg') }}">
            </div>
            <div class="text-center">
            	<h3>Agradecemos la confianza que has depositado en nosotros</h3>
            	<p>Gracias por registrarte, pronto serás contactado por tu asesor de seguros Allianz.</p>
            	<p><strong>Te invitamos a seguir explorando Allianz.</strong></p>
            </div>
            <div class="row justify-content-center spacing-button">
                <div class="col-lg-3 col-md-3 col-xs-12">
                	<a href="https://www.allianz.co/" id="ir-allianz" class="btn btn-primary btn-lg btn-block bg-allianz">Ir a allianz.co</a>
                </div>
            </div>
        </div>
        <div class="col-md-5 nopadding d-none d-sm-block">
        	<img class="d-block w-100" src="{{ asset('img/agradecimiento.jpg') }}">
        </div>
    </div>
</div>