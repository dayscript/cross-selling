@extends('layouts.app')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-7 nopadding align-self-center">
            <div class="text-center">
                <div class="col-md-12">
                    <h4 class="text-allianz"><strong>Allianz es el aliado experto</strong></h4>
                    <p>Para ofrecerte el respaldo necesario para cuidar a los que amas, tu salud y tu patrimonio.</p>
                    <p><strong>Selecciona los productos que quieres cotizar</strong></p>
                </div>
                {{ Form::open(array('route' => 'allianz.aliado.update', $contact->id_tomador)) }}
                <input type="hidden" name="tipo_documento" value="{{ $contact->tipo_documento }}">
                <input type="hidden" name="cedula" value="{{ $contact->id_tomador }}">
                <input type="hidden" name="nombres" value="{{ $contact->nombres }}">
                <input type="hidden" name="apellidos" value="{{ $contact->apellidos }}">
                <input type="hidden" name="celular" value="{{ $contact->celular }}">
                <input type="hidden" name="correo" value="{{ $contact->correo }}">
                <input type="hidden" name="director" value="{{ $contact->director }}">
                <input type="hidden" name="correo_director" value="{{ $contact->correo_director }}">
                <div class="checkbox-salud col-md-4 col-md-offset-4">
                    <div class="custom-control custom-checkbox input-group-prepend">
                      <input type="checkbox" class="custom-control-input" id="salud" name="salud" value="1">
                      <label class="custom-control-label" for="salud">Seguro de Salud</label>
                      <div class="glyphicon glyphicon-info-sign"></div>
                    </div>
                </div>
                <div class="checkbox-vida col-md-4 col-md-offset-4">
                    <div class="custom-control custom-checkbox input-group-prepend">
                      <input type="checkbox" class="custom-control-input" id="vida" name="vida" value="1">
                      <label class="custom-control-label" for="vida">Seguro de Vida</label>
                      <div class="glyphicon glyphicon-info-sign"></div>
                    </div>
                </div>
                <div class="checkbox-hogar col-md-4 col-md-offset-4">
                    <div class="custom-control custom-checkbox input-group-prepend">
                      <input type="checkbox" class="custom-control-input" id="hogar" name="hogar" value="1">
                      <label class="custom-control-label" for="hogar">Seguro de Hogar</label>
                      <div class="glyphicon glyphicon-info-sign"></div>
                    </div>
                </div>
                <div class="checkbox-autos col-md-4 col-md-offset-4">
                    <div class="custom-control custom-checkbox input-group-prepend">
                      <input type="checkbox" class="custom-control-input" id="autos" name="autos" value="1">
                      <label class="custom-control-label" for="autos">Seguro de Autos</label>
                      <div class="glyphicon glyphicon-info-sign"></div>
                    </div>
                </div>
                <div class="terminos col-md-4 col-md-offset-4">
                  <input type="checkbox" class="custom-control-input" id="terminos" name="terminos_condiciones" value="1">
                  <label class="custom-control-label" for="terminos">Acepto términos y condiciones</label>
                </div>
                <div class="datos col-md-4 col-md-offset-4">
                  <input type="checkbox" class="custom-control-input" id="datos" name="tratamiento_datos" value="1">
                  <label class="custom-control-label" for="datos">Acepto tratamiento de datos</label>
                </div>
                <div class="datos col-md-4 col-md-offset-4">
                {{ Form::button( 'Solicitar cotización', array('type' => 'submit', 'class' => 'btn btn-primary bg-allianz' )) }}
                </div>
                {{ Form::close() }}
            </div>
        </div>
        <div class="col-md-5 nopadding h-100">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="{{ asset('img/Salud.jpg') }}" alt="First slide">
              <div class="bg-salud">
                <h5><strong>Seguro de Salud</strong></h5>
                <p><span class="glyphicon glyphicon-ok"></span>Acceso directo a todas las especialidades.</p>
                <p><span class="glyphicon glyphicon-ok"></span>Puedes hacer uso de nuestra red de más de 4.100 médicos, laboratorios e instituciones médicas disponibles en todo el país.</p>
                <p><span class="glyphicon glyphicon-ok"></span>Asistencia médica en el exterior: Cobertura internacional desde 60 a 180 días.</p>
                <p><span class="glyphicon glyphicon-ok"></span>Terapias físicas sin copago.<br>En maternidad cuentas con citas y ecografías sin límite, libre elección de clínica para el parto, y el menor periodo de carencia para cobertura de embarazo en todos los planes de salud privada.</p>
                <p><span class="glyphicon glyphicon-ok"></span>Aseguradora <strong>#1</strong> de satisfacción en clientes.</p>
            </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{ asset('img/Vida.jpg') }}" alt="Second slide">
              <div class="bg-vida">
                <h5><strong>Seguro de Vida</strong></h5>
                <p><span class="glyphicon glyphicon-ok"></span>Diferentes posibilidades de protección, acordes con tus necesidades de aseguramiento.</p>
                <p><span class="glyphicon glyphicon-ok"></span>Te ofrecemos la posibilidad de modificar la cobertura según la necesidad y el momento de la vida en que te encuentras.</p>
                <p><span class="glyphicon glyphicon-ok"></span>Soluciones para brindarte la confianza que necesitas para cuidar a los que más amas.</p>
            </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{ asset('img/Hogar.jpg') }}" alt="Third slide">
              <div class="bg-hogar">
                <h5><strong>Seguro de Hogar</strong></h5>
                <p><span class="glyphicon glyphicon-ok"></span>Coberturas que protegen tu vivienda y tus bienes.</p>
                <p><span class="glyphicon glyphicon-ok"></span>El valor a asegurar para la vivienda es su valor comercial.</p>
                <p><span class="glyphicon glyphicon-ok"></span>El valor a asegurar en contenidos corresponde a un valor global.</p>
                <p><span class="glyphicon glyphicon-ok"></span>Además ofrecemos un deducible único para hurto, y el menor del mercado en caso de terremoto.</p>
                <p><span class="glyphicon glyphicon-ok"></span>Auxilio funerario sin valor adicional.</p>
                <p><span class="glyphicon glyphicon-ok"></span>Asistencia Mascotas.</p>
                <p><span class="glyphicon glyphicon-ok"></span>incluye una protección por responsabilidad civil en caso de daños a terceros, por ejemplo daños que cause la empleada doméstica y que le puedan pasar a ella, daños que la mascota cause a otros, daños a la copropiedad, etc.</p>
            </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{ asset('img/Autos.jpg') }}" alt="Four slide">
              <div class="bg-autos">
                <h5><strong>Seguro de Autos</strong></h5>
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
    </div>
</div>


<!-- 

<div class="row m-0">
    <div class="col-lg-7 section-left">
        <div class="col-lg-12">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-8">
                        <div class="content">
                            <div class="section-header">
                                <h4 class="section-title"><strong>Allianz es el aliado experto</strong></h4>
                                <p>Para ofrecerte el respaldo necesario para cuidar a los que amas, tu salud y tu patrimonio.</p>
                                <p>Selecciona los productos que quieres cotizar</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-xs-12">
                                    {{ Form::open(array('route' => 'allianz.aliado.update', $contact->id_tomador)) }}
                                    {{ Form::text('id_tomador', $contact->id_tomador) }}
                                    <div class="form-group row">
                                        <div class="custom-control custom-checkbox input-group-prepend">
                                          <input type="checkbox" class="custom-control-input" id="customCheck1">
                                          <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                                        </div>
                                        <div class="">
                                            <div class="glyphicon glyphicon-info-sign"></div>
                                        </div>
                                    </div>
<div class="form-group row">
    <div class="col-sm-2">Checkbox</div>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          Example checkbox
        </label>
      </div>
    </div>
  </div>


  <div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="defaultChecked2" checked>
  <label class="custom-control-label" for="defaultChecked2">Default checked</label>
</div>




                                    {{ Form::close() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-5 section-right">
        <div class="">
            <div>
                <img src="{{ asset('img/salud.jpg') }}" class="w-100" alt="alt text">
            </div>
            <div class="services-item bg-salud">
                <h5><strong>Seguro de Salud</strong></h5>
                <p><span class="glyphicon glyphicon-ok"></span>Acceso directo a todas las especialidades.</p>
                <p><span class="glyphicon glyphicon-ok"></span>Puedes hacer uso de nuestra red de más de 4.100 médicos, laboratorios e instituciones médicas disponibles en todo el país.</p>
                <p><span class="glyphicon glyphicon-ok"></span>Asistencia médica en el exterior: Cobertura internacional desde 60 a 180 días.</p>
                <p><span class="glyphicon glyphicon-ok"></span>Terapias físicas sin copago.<br>
                En maternidad cuentas con citas y ecografías sin límite, libre elección de clínica para el parto, y el menor periodo de carencia para cobertura de embarazo en todos los planes de salud privada.</p>
                <p><span class="glyphicon glyphicon-ok"></span>Aseguradora <strong>#1</strong> de satisfacción en clientes.</p>
            </div>
        </div>
    </div>
</div> -->