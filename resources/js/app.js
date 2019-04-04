
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import $ from 'jquery';
window.$ = window.jQuery = $;

$(document).ready(()=>{
    $('#terminos').on('change', function() {
            if ($(this).is(':checked') ) {
                console.log('O');
                $( "#enviar" ).prop( "disabled", false );
            }else{
                $( "#enviar" ).prop( "disabled", true );
            }
    });
})

$(document).ready(()=>{
  //FIJAR BOTON 
  if ($(window).width() <= 576) $('#enviar').addClass('fixed-bottom w-100');
  else $('#enviar').removeClass('fixed-bottom w-100');

  //OCULAR EL SLIDER
  if ($(window).width() <= 576) $('#slider').addClass('d-none');
  else $('#slider').removeClass('d-none');

  //MUESTRA EL PORTAFOLIO
  if ($(window).width() > 576) $('#portafolio').addClass('d-none');
  else $('#portafolio').removeClass('d-block');

  //MUESTRA LOS BOTONES PARA LAS ANCLAS
  if ($(window).width() > 576) $('.display-buttons').addClass('d-none');
  else $('.display-buttons').removeClass('d-block');

  //OCULTA BOTONES DE LOS CONTROLES DEL SLIDE
  if ($(window).width() <= 576) $('.hidden-buttons').addClass('d-none');
  else $('.hidden-buttons').removeClass('d-block');

  //SALTAR ARRIBA
  if ($(window).width() > 576) $('.jump-to-start').addClass('d-none');
  else $('.hidden-buttons').removeClass('d-block');

  //FIJAR BOTON AGRADECIMIENTO
  if ($(window).width() <= 576) $('#ir-allianz').addClass('fixed-bottom w-100');
  else $('#ir-allianz').removeClass('fixed-bottom w-100');

  //FIJAR BOTON AGRADECIMIENTO
  if ($(window).width() > 576) $('#agradecimiento-logo').addClass('position-absolute');
  else $('#ir-allianz').removeClass('position-absolute');

});

require('./bootstrap');

window.Vue = require('vue');



/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});
