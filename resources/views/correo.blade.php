@extends('layouts.app')
<div class="container-fluid">
    <div class="row">
    	<p>Nuestro cliente <strong>{{ $data['nombres'] }}</strong> identificado con <strong>{{ $data['tipo_documento'] }}</strong> número <strong>{{ $data['cedula'] }}</strong> cuyo teléfono de contacto es <strong>{{ $data['celular'] }}</strong> y con correo electrónico <strong>{{ $data['correo'] }}</strong> confirmó interés en adquirir los siguientes seguros adicionales:</p>
    	@if (isset($data['salud']))
        <p><strong>Salud, </strong></p>
        @endif
    	@if (isset($data['vida']))
        <p><strong>Vida, </strong></p>
        @endif
    	@if (isset($data['hogar']))
        <p><strong>Hogar, </strong></p>
        @endif
    	@if (isset($data['autos']))
        <p><strong>Autos, </strong></p>
        @endif
    </div>
</div>