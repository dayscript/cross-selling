@extends('layouts.app')
<div class="container-fluid">
    <div class="row">
        <h3>Cross Selling</h3>
        <p><strong>De: </strong>{{ $data['director'] }}</p>
        <p><strong>Celular: </strong>{{ $data['celular'] }}.</p>
        <p><strong>Correo: </strong>{{ $data['correo'] }}.</p>
    </div>
</div>