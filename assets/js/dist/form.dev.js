"use strict";

$(function () {
  // Your web app's Firebase configuration  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyBPfb0JjIxZrV_WUUKPycuhC6j5PvgcNuE",
    authDomain: "lp-olozfera.firebaseapp.com",
    databaseURL: "https://lp-olozfera.firebaseio.com",
    projectId: "lp-olozfera",
    storageBucket: "lp-olozfera.appspot.com",
    messagingSenderId: "986581798326",
    appId: "1:986581798326:web:c59f3efed908d60f250517",
    measurementId: "G-2W6T0VGX5X"
  }; // Initialize Firebase

  firebase.initializeApp(firebaseConfig);
  /*-------------------------------
      Validación Jquery Validate
  ---------------------------------*/

  /*$('form #telefono').keypress(function (e) {
      if (isNaN(this.value + String.fromCharCode(e.charCode)))
          return false;
  }).on("cut copy paste", function (e) {
      e.preventDefault();
  });
   $("form").on("change keyup", function () {
      var form = $(this);
      var btn = form.find("#enviar");
       if (validarFormulario(form)) {
          btn.attr("disabled", false);
          console.log("habilitado");
      } else {
          btn.attr("disabled", true);
          console.log("deshabilitado");
      }
  });
  */

  var validarFormulario = function validarFormulario(form) {
    form.validate({
      rules: {
        "nombre": {
          required: true
        },
        "correo": {
          required: true,
          email: true
        },
        "telefono": {
          required: true,
          digits: true,
          minlength: 10,
          maxlength: 15
        }
      },
      messages: {
        "nombre": {
          required: "El campo es obligatorio"
        },
        "correo": {
          required: "El campo es obligatorio",
          email: "Ingresa un email válido"
        },
        "telefono": {
          required: "El campo es obligatorio",
          digits: "Ingresa números solamente",
          minlength: "Mínimo {0} dígitos",
          maxlength: "Máximo {0} dí­gitos"
        }
      }
    });
    return form.valid();
  };
  /*-------------------------------
      Control de validación
  ---------------------------------*/


  $('#enviar').click(function () {
    var form = $('#formulario-hero');
    var btn = form.find('#enviar');
    btn.prop('disabled', true);

    if (validarFormulario(form)) {
      var datos = form.serializeObject();
      datos = obtener_utms(datos);
      var id = new Date();
      firebase.database().ref("lpJoaquina/" + id).set({
        nombre: datos.nombre,
        ciudad: datos.ciudad,
        correo: datos.correo,
        telefono: datos.telefono,
        utmCampaign: datos.utm_campaign ? datos.utm_campaign : "null",
        utmContent: datos.utm_content ? datos.utm_content : "null",
        utmMedium: datos.utm_medium ? datos.utm_medium : "null",
        utmTerm: datos.utm_term ? datos.utm_term : "null",
        utmSource: datos.utm_source ? datos.utm_source : "null"
      });
      enviarExcel(datos);
      enviarFormulario(form.attr('action'), datos, btn);
      console.log('datos enviados');
      form.submit(); //echo('enviados');
    } else {
      btn.prop('disabled', false);
    }
  });
  $('#enviar-m').click(function () {
    var form = $('#formu');
    var btn = form.find('#enviar-m');
    btn.prop('disabled', true);

    if (validarFormulario(form)) {
      var datos = form.serializeObject();
      datos = obtener_utms(datos);
      var id = new Date();
      firebase.database().ref("lpJoaquina/" + id).set({
        nombre: datos.nombre,
        ciudad: datos.ciudad,
        correo: datos.correo,
        telefono: datos.telefono,
        utmCampaign: datos.utm_campaign ? datos.utm_campaign : "null",
        utmContent: datos.utm_content ? datos.utm_content : "null",
        utmMedium: datos.utm_medium ? datos.utm_medium : "null",
        utmTerm: datos.utm_term ? datos.utm_term : "null",
        utmSource: datos.utm_source ? datos.utm_source : "null"
      });
      enviarExcel(datos);
      enviarFormulario(form.attr('action'), datos, btn);
      console.log('datos enviados');
      form.submit(); //echo('enviados');
    } else {
      btn.prop('disabled', false);
    }
  });
  /*    Formato Json
  ---------------------------*/

  $.fn.serializeObject = function () {
    var o = {};
    this.find("[name]").each(function () {
      o[this.name] = this.value;
    });
    return o;
  };
  /*    ENVIAR FORMULARIO
  ---------------------------*/


  var enviarFormulario = function enviarFormulario(form, datos, btn) {
    //var form="#formulario-hero";
    console.log(datos); // console.log(form+datos+btn);

    $.ajax({
      url: form,
      type: 'POST',
      data: datos,
      dataType: "json",
      success: function success(r) {
        if (r.error == false) {
          msj = "¡Gracias por dejar tus datos, un asesor se contactará en breve contigo!";
          $(location).attr('href', '/gracias');
        } else {
          msj = "Hubo un error al procesar la solicitud, recarga la página o intentalo mas tarde";
        }

        resultado(form, btn, msj);
      },
      error: function error(xhr) {
        console.log(xhr.status);
        msj = "Hubo un error al procesar la solicitud, recarga la página o intentalo mas tarde";
        resultado(form, btn, msj);
      }
    });
  };

  var resultado = function resultado(form, btn, msj) {
    $('.form').val(msj); //form[0].reset();

    $("#formulario-hero")[0].reset();
    $("#formu")[0].reset();
    console.log(msj);
  };

  function enviarExcel(datos) {
    var url = "https://script.google.com/macros/s/AKfycbwBj_HxXBtY2Lx9Glz4RGNpP6iKBvy6VJH15mc1-GqTmUa1U7jL/exec";
    $.ajax({
      url: url,
      method: "GET",
      data: datos,
      dataType: "JSON",
      success: function success(r) {
        console.log(r);
      },
      error: function error(xhr) {
        console.log(xhr.status);
        console.log(xhr.responseText);
      }
    });
  }
  /*    OBTENER VARIABLES UTM
  ---------------------------*/


  var obtener_utms = function obtener_utms(datos) {
    var utms = ['utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content'];

    for (var _i = 0, _utms = utms; _i < _utms.length; _i++) {
      utm = _utms[_i];
      datos[utm] = getParameterByName(utm);
    }

    return datos;
  };

  function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "null" : decodeURIComponent(results[1].replace(/\+/g, " "));
  }
});