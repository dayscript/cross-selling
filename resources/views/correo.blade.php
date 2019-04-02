@extends('layouts.app')
<div class="container-fluid">
    <div class="row">
    	<p>Nuestro cliente {{ $data['nombres'] }} identificado con {{ $data['tipo_documento'] }} {{ $data['cedula'] }} y cuyo teléfono de contacto es {{ $data['celular'] }} confirmó interés en adquirir los siguientes seguros adicionales:</p>
        <p><strong>{{ $data['salud'] }}</strong></p>
        <p><strong>{{ $data['vida'] }}</strong></p>
        <p><strong>{{ $data['hogar'] }}</strong></p>
        <p><strong>{{ $data['autos'] }}</strong></p>
    </div>
</div>