$(function () {
	// Your web app's Firebase configuration  
	// For Firebase JS SDK v7.20.0 and later, measurementId is optional
	var firebaseConfig = {
		apiKey: "AIzaSyBPfb0JjIxZrV_WUUKPycuhC6j5PvgcNuE",
		authDomain: "lp-olozfera.firebaseapp.com",
		databaseURL: "https://lp-olozfera.firebaseio.com",
		projectId: "lp-olozfera",
		storageBucket: "lp-olozfera.appspot.com",
		messagingSenderId: "986581798326",
		appId: "1:986581798326:web:c59f3efed908d60f250517",
		measurementId: "G-2W6T0VGX5X",
	};
	// Initialize Firebase
	firebase.initializeApp(firebaseConfig);
	/*---------------
            Validación
        ---------------*/

	$("form #telefono")
		.keypress(function (e) {
			if (isNaN(this.value + String.fromCharCode(e.charCode))) return false;
		})
		.on("cut copy paste", function (e) {
			e.preventDefault();
		});
	/*----- Habilitar boton solamente cuando este validado el formulario--*/
	$("form").on("change keyup", function () {
		var form = $(this);
		var btn = form.find("#enviar");
		let btnM = $("#enviar-m");

		if (validarFormulario(form)) {
			btn.attr("disabled", false);
			console.log("habilitado");
			btnM.attr("disabled", false);
		} else {
			btn.attr("disabled", true);
			btnM.attr("disabled", true);
			console.log("deshabilitado");
		}
	});

	var validarFormulario = function (form) {
		form.validate({
			rules: {
				nombre: { required: true },
				ciudad: { required: true },
				email: { required: true, email: true },
				telefono: {
					required: true,
					digits: true,
					minlength: 10,
					maxlength: 16,
				}
			},

			messages: {
				nombre: { required: "El campo es obligatorio" },
				ciudad: { required: "El campo es obligatorio"  },
				email: {
					required: "El campo es obligatorio",
					email: "Ingresa un email válido",
				},
				telefono: {
					required: "El campo es obligatorio",
					digits: "Ingresa números solamente",
					minlength: "Mínimo {0} dígitos",
					maxlength: "Máximo {0} dí­gitos",
				}
			},
		});

		return form.valid();
	};

	$("form")
		.find("#enviar")
		.click(function (e) {
			var form = $("#formulario-hero");

			if (validarFormulario(form)) {
				$("#enviar").attr("disabled", "true");

				let datosForm = form.serializeObject();
			/*DATOS A FIREBASE*/
				let id = new Date();
				firebase
					.database()
					.ref("lpJoaquina/" + id)
					.set({
                    nombre: datosForm.nombre,
                    ciudad: datosForm.ciudad,
                    email: datosForm.email,
					telefono: datosForm.telefono,
					mensaje: datosForm.mensaje,
                    utmCampaign: datosForm.utm_campaign ? datosForm.utm_campaign : "null",
                    utmContent: datosForm.utm_content ? datosForm.utm_content : "null",
                    utmMedium: datosForm.utm_medium ? datosForm.utm_medium : "null",
                    utmTerm: datosForm.utm_term ? datosForm.utm_term : "null",
                    utmSource: datosForm.utm_source ? datosForm.utm_source : "null"
                });
                //form.submit();
				enviarExcel(datosForm, form);
			} else {
			}
		});
	$("input[type=radio]").on("change", function () {
		console.log(this.value);
	});

	$("form")
		.find("#enviar-m")
		.click(function (e) {
			var form = $("#formu");

			if (validarFormulario(form)) {
				$("#enviar").attr("disabled", "true");

				let datosForm = form.serializeObject();
			/*DATOS A FIREBASE*/
				let id = new Date();
				firebase
					.database()
					.ref("lpJoaquina/" + id)
					.set({
                    nombre: datosForm.nombre,
                    ciudad: datosForm.ciudad,
                    email: datosForm.email,
					telefono: datosForm.telefono,
					mensaje: datosForm.mensaje,
                    utmCampaign: datosForm.utm_campaign ? datosForm.utm_campaign : "null",
                    utmContent: datosForm.utm_content ? datosForm.utm_content : "null",
                    utmMedium: datosForm.utm_medium ? datosForm.utm_medium : "null",
                    utmTerm: datosForm.utm_term ? datosForm.utm_term : "null",
                    utmSource: datosForm.utm_source ? datosForm.utm_source : "null"
                });
				enviarExcel(datosForm, form);
			} else {
			}
		});

	/*    Formato Json
        ---------------------------*/
	$.fn.serializeObject = function () {
		var o = {};
		this.find("[name]").each(function () {
			if (this.name == "interes") {
				if ($(this).is(":checked")) {
					if ($(this).value == "departamentos") {
						o[this.name] = this.value;
						o["objectId"] = "YzY3NGUyOT";
					} else {
						o[this.name] = this.value;
						o["objectId"] = "ZmE5YTJkNT";
					}
				}
			} else {
				o[this.name] = this.value;
			}
		});
		return o;
	};

	var resultado = function (form, btn, msj) {
		$("#formuario .titulo").val(msj);
		form[0].reset();
		console.log(msj);
	};

	function enviarExcel(datos, form) {
        var url = "https://script.google.com/macros/s/AKfycbzIETV6WuoSnSI5bQ5YGRlIyD5b4jNr-aVvKSlNKyGsnmRLO1NbqKgehw/exec";
		$.ajax({
			url: url,
			method: "GET",
			data: datos,
			dataType: "JSON",
			success: function (r) {
				console.log(r);
				form.submit();
			},
			error: function (xhr) {
				console.log(xhr.status);
				console.log(xhr.responseText);
				form.submit();
			},
		});
	}

	// ---
});

/* OBTENER UTMS/**/

var obtener_utms = function (datos) {
	var utms = [
		"utm_source",
		"utm_medium",
		"utm_campaign",
		"utm_term",
		"utm_content",
	];
	for (utm of utms) {
		datos[utm] = getParameterByName(utm);
	}

	return datos;
};

function getParameterByName(name) {
	name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
	var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
		results = regex.exec(location.search);
	return results === null
		? "null"
		: decodeURIComponent(results[1].replace(/\+/g, " "));
}

var utms = [
	"utm_source",
	"utm_medium",
	"utm_campaign",
	"utm_term",
	"utm_content",
];

var utmFormulario = function () {
	let datos = {};
	datos = obtener_utms(datos);

	document.getElementById("utm_source").value = datos["utm_source"];
	document.getElementById("utm_content").value = datos["utm_content"];
	document.getElementById("utm_campaign").value = datos["utm_campaign"];
	document.getElementById("utm_term").value = datos["utm_term"];
	document.getElementById("utm_medium").value = datos["utm_medium"];

	document.getElementById("utm_source-m").value = datos["utm_source"];
	document.getElementById("utm_content-m").value = datos["utm_content"];
	document.getElementById("utm_campaign-m").value = datos["utm_campaign"];
	document.getElementById("utm_term-m").value = datos["utm_term"];
	document.getElementById("utm_medium-m").value = datos["utm_medium"];
	console.log(datos);
};

utmFormulario();
