
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

//window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//Vue.component('example-component', require('./components/ExampleComponent.vue'));

//const app = new Vue({
//    el: '#app'
//});


//require('./bootstrap');

//window.Vue = require('vue');

$(document).ready(function() {

	$(".formaddcard").on("submit", function(ev) {
		// body...
		ev.preventDefault();

		var $form = $(this);

		var $button = $form.find("[type='submit']");

		// Peticion ajax
		$.ajax({
			url: $form.attr("action"),
			method: $form.attr("method"),
			data: $form.serialize(),
			dataType: "JSON",
			beforeSend: function(){
				$button.val("Cargando...");
			},
			success: function(data){
				//$button.css("background-color","#00c853").val("Agregado");
				//$('#button-car-add').css("background-color","#FFF").val("Nuevo producto agregado");
				//$('#text-data').html('Tienes '+data.products_count + ' productos en tu carrito');
				//$(".count_data_card").html(data.products_count + " productos");
				//$('.count').html(data.products_count);

				setTimeout(function(){
					restartButton($button);
					swal({
					  title: "PRODUCTO AGREGADO",
					  text: "¡Tu producto esta en tu carrito de compras!",
					  icon: "success",
					  buttons: false,
					  closeOnClickOutside: false,
					  closeOnEsc: false,
					  timer: 2000,
					});
				},200);
			},
			error: function(err) {
				// body...
				//$button.css("background-color","#d50000").val("Error Not Found");

				 //setTimeout(function(){
					//restartButton($button);
				//},2000);
			}
		});
		return false;
	});

	function restartButton($button){
		$button.css("background-color","#2196F3").val("Agregar al Carrito");
		$('#button-car-add').css("background-color","#ecebeb");
		$(".circle_shopping_cart").html("Agregado al Carrito").removeClass("highlight");
	};
});
