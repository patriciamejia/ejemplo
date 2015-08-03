(function($) {

	//VARIABLES
	$contenedor = $('.content-paso');

	var paginas = ["index.html",
					"index-2.html",
					"index-3.html",
					"index-4.html",
					"index-5.html"
					];
	var preguntas = [0,0,0,0,0];
	var respuestas =  ['rounded-18','rounded-22','rounded-25','rounded-22','rounded-25'];
	pos = 0;

	eventos();
 
	function eventos() {
		//VARIABLES
		$cuestionario = $('.cuestionario-m');
		$opciones = $('.cuadro-pregunta');
		$envio = $('.envio input');
		$feedback = $('.feedback');
		$casos = $('.casos li');

		$opciones.on('click', function(e) {

			//Eliminar la clase active de todos los cuadros y activarla en el cuadro actual
			$opciones.removeClass('active');
			$(this).addClass('active');

			//Buscar el checkbox dentro del cuadro y permitir que se active o desactive cuando se hace click en cualquier parte
			$checkbox = $(this).find('input');

			if ($checkbox.prop("checked")) {
				$checkbox.prop("checked", false);
				$(this).removeClass('active');
			}
			else {
				$checkbox.prop("checked", true);
			}

			e.preventDefault();
		});

		$envio.on('click', function(e) {

			$respuesta = $cuestionario.find('.active');

			$seleccionada = $respuesta.find('input').attr("id");

			$feedback.removeClass('success error warning');

			mensaje = $respuesta.find('.respuesta').text();

			if(!$seleccionada) {
				$feedback.addClass('warning');
				$feedback.html("<p>No has marcado ninguna opción.</p>");
			} 
			else if($seleccionada == respuestas[pos]) {
				$feedback.addClass('success');
				$feedback.html("<p>Respuesta Correcta: "+mensaje+"</p>");
				preguntas[pos] = 1;
				$casos.parent().find("li:nth-child("+ (pos + 1) +")").addClass('check');
			}
			else {
				$feedback.addClass('error');
				$feedback.html("<p>Respuesta Incorrecta: "+mensaje+"</p>");
			}

			if(pos == 1) {
				if($seleccionada == 'rounded-21') {
				$feedback.removeClass('success error warning');
				$feedback.addClass('success');
				$feedback.html("<p>Respuesta Correcta: "+mensaje+"</p>");
				preguntas[pos] = 1;
				$casos.parent().find("li:nth-child("+ (pos + 1) +")").addClass('check');
				}
			}

			e.preventDefault();
		});
	}

	$casos.on('click', function(e) {

		$casos.removeClass('listo');
		$(this).addClass('listo');

		pos = $(this).index();

		$contenedor.hide().load(paginas[pos] + " .content-paso", function() {
			eventos();
		}).fadeIn();

		e.preventDefault();
	});

})(jQuery);
