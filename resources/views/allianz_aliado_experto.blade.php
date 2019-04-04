@extends('layouts.app')
@section('content')
<div class="container-fluid h-100" id="jump-to-start">
  <div class="row h-100">
    <div class="" id="agradecimiento-logo">
      <img class="d-block" src="{{ asset('logos/logo.png') }}">
    </div>
    <div class="col-md-7 nopadding align-self-center">
      <div class="row text-center">
        @if ($errors->any())
        <div class="alert alert-danger col-sm-12 text-center">
          <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
          </ul>
        </div>
        @endif
      </div>
      <div class="row">
          <div class="aliado-experto col-md-12 text-center">
              <h2 class="text-allianz"><strong>Allianz es el aliado experto</strong></h2>
              <p>Para ofrecerte el respaldo necesario para cuidar a los que amas, tu salud y tu patrimonio.</p>
              <p><strong>Selecciona los productos que quieres cotizar</strong></p>
          </div>
      </div>
      <div class="row">
        {{ Form::open(array('name' => 'form', 'route' => 'allianz.aliado.update')) }}
        <input type="hidden" name="tipo_documento" value="{{ $contact->tipo_documento }}">
        <input type="hidden" name="cedula" value="{{ $contact->cedula }}">
        <input type="hidden" name="nombres" value="{{ $contact->nombres }}">
        <input type="hidden" name="apellidos" value="{{ $contact->apellidos }}">
        <input type="hidden" name="celular" value="{{ $contact->celular }}">
        <input type="hidden" name="correo" value="{{ $contact->correo }}">
        <input type="hidden" name="director" value="{{ $contact->director }}">
        <input type="hidden" name="correo_director" value="{{ $contact->correo_director }}">
        <div class="row">
          <div class="checkbox-salud checkbox-group col-sm-12 text-center">
              <div class="custom-control custom-checkbox input-group-prepend">
                <input type="checkbox" class="custom-control-input" id="salud" name="salud" value="1">
                <label class="custom-control-label" for="salud">Seguro de Salud</label>
                <div class="glyphicon glyphicon-info-sign hidden-buttons" data-target="#carouselExampleIndicators" data-slide-to="0"></div>
                <a href="#ancla-salud"><div class="glyphicon glyphicon-info-sign display-buttons"></div></a>
              </div>
          </div>
          <div class="checkbox-vida checkbox-group col-sm-12 text-center">
              <div class="custom-control custom-checkbox input-group-prepend">
                <input type="checkbox" class="custom-control-input" id="vida" name="vida" value="1">
                <label class="custom-control-label" for="vida">Seguro de Vida</label>
                <div class="glyphicon glyphicon-info-sign hidden-buttons" data-target="#carouselExampleIndicators" data-slide-to="1"></div>
                <a href="#ancla-vida"><div class="glyphicon glyphicon-info-sign display-buttons"></div></a>
              </div>
          </div>
          <div class="checkbox-hogar checkbox-group col-sm-12 text-center">
              <div class="custom-control custom-checkbox input-group-prepend">
                <input type="checkbox" class="custom-control-input" id="hogar" name="hogar" value="1">
                <label class="custom-control-label" for="hogar">Seguro de Hogar</label>
                <div class="glyphicon glyphicon-info-sign hidden-buttons" data-target="#carouselExampleIndicators" data-slide-to="2"></div>
                <a href="#ancla-hogar"><div class="glyphicon glyphicon-info-sign display-buttons"></div></a>
              </div>
          </div>
          <div class="checkbox-autos checkbox-group col-sm-12 text-center">
              <div class="custom-control custom-checkbox input-group-prepend">
                <input type="checkbox" class="custom-control-input" id="autos" name="autos" value="1">
                <label class="custom-control-label" for="autos">Seguro de Autos</label>
                <div class="glyphicon glyphicon-info-sign hidden-buttons" data-target="#carouselExampleIndicators" data-slide-to="3"></div>
                <a href="#ancla-autos"><div class="glyphicon glyphicon-info-sign display-buttons"></div></a>
              </div>
          </div>
        </div>
        <div class="terminos col-sm-12 text-center">
          <input type="checkbox" class="custom-control-input" id="terminos" name="terminos_condiciones" value="1">
          <label class="custom-control-label" for="terminos"><a href="https://www.allianz.co/legales/politica-proteccion-datos/" target="_blank">Acepto términos y condiciones</a></label>
        </div>
        <div class="datos col-sm-12 text-center">
          {{ Form::button( 'Solicitar cotización', array('type' => 'submit', 'name' => 'enviar', 'id' => 'enviar', 'class' => 'btn btn-primary bg-allianz', 'disabled' => 'disabled')) }}
        </div>
          {{ Form::close() }}
      </div>
      <div class="row">
      </div>
    </div>
    <div class="col-md-5 nopadding h-100" id="slider">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active h-100 salud">
            <img class="d-block w-100" src="{{ asset('img/Salud.jpg') }}" alt="First slide">
            <div class="bg-salud">
              <h2><strong>Seguro de Salud</strong></h2>
              <p><span class="glyphicon glyphicon-ok"></span>Acceso directo a todas las especialidades.</p>
              <p><span class="glyphicon glyphicon-ok"></span>Puedes hacer uso de nuestra red de más de 4.100 médicos, laboratorios e instituciones médicas disponibles en todo el país.</p>
              <p><span class="glyphicon glyphicon-ok"></span>Asistencia médica en el exterior: Cobertura internacional desde 60 a 180 días.</p>
              <p><span class="glyphicon glyphicon-ok"></span>Terapias físicas sin copago.<br>En maternidad cuentas con citas y ecografías sin límite, libre elección de clínica para el parto, y el menor periodo de carencia para cobertura de embarazo en todos los planes de salud privada.</p>
              <p><span class="glyphicon glyphicon-ok"></span>Aseguradora <strong>#1</strong> de satisfacción en clientes.</p>
            </div>
          </div>
          <div class="carousel-item h-100 vida">
            <img class="d-block w-100" src="{{ asset('img/Vida.jpg') }}" alt="Second slide">
            <div class="bg-vida">
              <h2><strong>Seguro de Vida</strong></h2>
              <p><span class="glyphicon glyphicon-ok"></span>Diferentes posibilidades de protección, acordes con tus necesidades de aseguramiento.</p>
              <p><span class="glyphicon glyphicon-ok"></span>Te ofrecemos la posibilidad de modificar la cobertura según la necesidad y el momento de la vida en que te encuentras.</p>
              <p><span class="glyphicon glyphicon-ok"></span>Soluciones para brindarte la confianza que necesitas para cuidar a los que más amas.</p>
            </div>
          </div>
          <div class="carousel-item h-100 hogar">
            <img class="d-block w-100" src="{{ asset('img/Hogar.jpg') }}" alt="Third slide">
            <div class="bg-hogar">
              <h2><strong>Seguro de Hogar</strong></h2>
              <p><span class="glyphicon glyphicon-ok"></span>Coberturas que protegen tu vivienda y tus bienes.</p>
              <p><span class="glyphicon glyphicon-ok"></span>El valor a asegurar para la vivienda es su valor comercial.</p>
              <p><span class="glyphicon glyphicon-ok"></span>El valor a asegurar en contenidos corresponde a un valor global.</p>
              <p><span class="glyphicon glyphicon-ok"></span>Además ofrecemos un deducible único para hurto, y el menor del mercado en caso de terremoto.</p>
              <p><span class="glyphicon glyphicon-ok"></span>Auxilio funerario sin valor adicional.</p>
              <p><span class="glyphicon glyphicon-ok"></span>Asistencia Mascotas.</p>
              <p><span class="glyphicon glyphicon-ok"></span>incluye una protección por responsabilidad civil en caso de daños a terceros, por ejemplo daños que cause la empleada doméstica y que le puedan pasar a ella, daños que la mascota cause a otros, daños a la copropiedad, etc.</p>
            </div>
          </div>
          <div class="carousel-item h-100 autos">
            <img class="d-block w-100" src="{{ asset('img/Autos.jpg') }}" alt="Four slide">
            <div class="bg-autos">
              <h2><strong>Seguro de Autos</strong></h2>
              <p><span class="glyphicon glyphicon-ok"></span>Atención y asistencia oportuna siempre que lo necesites.</p>
              <p><span class="glyphicon glyphicon-ok"></span>La cobertura RCE más alta del mercado.</p>
              <p><span class="glyphicon glyphicon-ok"></span>Sin cobro de deducible en caso de pérdida total, y deducible fijo de 900 mil en casos de pérdida parcial.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
      </div>
    </div>
    <div id="portafolio" class="col-md-12">
      <div class="bg-salud" id="ancla-salud">
        <h2><strong>Seguro de Salud</strong></h2>
        <img class="d-block w-100" src="{{ asset('img/Salud.jpg') }}">
        <div class="content">
          <p><span class="glyphicon glyphicon-ok"></span>Acceso directo a todas las especialidades.</p>
          <p><span class="glyphicon glyphicon-ok"></span>Puedes hacer uso de nuestra red de más de 4.100 médicos, laboratorios e instituciones médicas disponibles en todo el país.</p>
          <p><span class="glyphicon glyphicon-ok"></span>Asistencia médica en el exterior: Cobertura internacional desde 60 a 180 días.</p>
          <p><span class="glyphicon glyphicon-ok"></span>Terapias físicas sin copago.<br>En maternidad cuentas con citas y ecografías sin límite, libre elección de clínica para el parto, y el menor periodo de carencia para cobertura de embarazo en todos los planes de salud privada.</p>
          <p><span class="glyphicon glyphicon-ok"></span>Aseguradora <strong>#1</strong> de satisfacción en clientes.</p>
        </div>
      </div>
      <div class="bg-vida" id="ancla-vida">
        <h2><strong>Seguro de Vida</strong></h2>
        <img class="d-block w-100" src="{{ asset('img/Vida.jpg') }}">
        <div class="content">
          <p><span class="glyphicon glyphicon-ok"></span>Diferentes posibilidades de protección, acordes con tus necesidades de aseguramiento.</p>
          <p><span class="glyphicon glyphicon-ok"></span>Te ofrecemos la posibilidad de modificar la cobertura según la necesidad y el momento de la vida en que te encuentras.</p>
          <p><span class="glyphicon glyphicon-ok"></span>Soluciones para brindarte la confianza que necesitas para cuidar a los que más amas.</p>
        </div>
      </div>
      <div class="bg-hogar" id="ancla-hogar">
        <h2><strong>Seguro de Hogar</strong></h2>
        <img class="d-block w-100" src="{{ asset('img/Hogar.jpg') }}">
        <div class="content">
          <p><span class="glyphicon glyphicon-ok"></span>Coberturas que protegen tu vivienda y tus bienes.</p>
          <p><span class="glyphicon glyphicon-ok"></span>El valor a asegurar para la vivienda es su valor comercial.</p>
          <p><span class="glyphicon glyphicon-ok"></span>El valor a asegurar en contenidos corresponde a un valor global.</p>
          <p><span class="glyphicon glyphicon-ok"></span>Además ofrecemos un deducible único para hurto, y el menor del mercado en caso de terremoto.</p>
          <p><span class="glyphicon glyphicon-ok"></span>Auxilio funerario sin valor adicional.</p>
          <p><span class="glyphicon glyphicon-ok"></span>Asistencia Mascotas.</p>
          <p><span class="glyphicon glyphicon-ok"></span>incluye una protección por responsabilidad civil en caso de daños a terceros, por ejemplo daños que cause la empleada doméstica y que le puedan pasar a ella, daños que la mascota cause a otros, daños a la copropiedad, etc.</p>
        </div>
      </div>
      <div class="bg-autos" id="ancla-autos">
        <h2><strong>Seguro de Autos</strong></h2>
        <img class="d-block w-100" src="{{ asset('img/Autos.jpg') }}">
        <div class="content">
          <p><span class="glyphicon glyphicon-ok"></span>Atención y asistencia oportuna siempre que lo necesites.</p>
          <p><span class="glyphicon glyphicon-ok"></span>La cobertura RCE más alta del mercado.</p>
          <p><span class="glyphicon glyphicon-ok"></span>Sin cobro de deducible en caso de pérdida total, y deducible fijo de 900 mil en casos de pérdida parcial.</p>
        </div>
      </div>
    </div>
    <a href="#jump-to-start"><span class="jump-to-start" style="display: block;">↑</span></a>
  </div>
</div>
@endsection