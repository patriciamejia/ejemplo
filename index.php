<?php 
/**
 * @todo : verificamos la existencia de un parametro get id.
 * @var  : id
 */
define('URL_RETURN','http://miscursos.somosbelcorp.com/course/view.php?id=');
$id = isset($_GET['id']);
$retornar = !empty($id) ? '<a class="lnk-return enlace" href="'.URL_RETURN.$id.'">REGRESAR AL CURSO</a>' : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ganancia</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="titulo">
		<p class="title">¿Cómo cobrar? <?= $retornar;?></p>
		<p class="ejercicio">Resolvamos los siguientes casos</p>
	</div>
	<div class="bg">
		<div class="casos">
			<ul>
				<li class="cuadro-default listo"><p class="caso-p">CASO 1</p></li>
				<li class="cuadro-default"><p class="caso-p">CASO 2</p></li>
				<li class="cuadro-default"><p class="caso-p">CASO 3</p></li>
				<li class="cuadro-default"><p class="caso-p">CASO 4</p></li>
				<li class="cuadro-default"><p class="caso-p">CASO 5</p></li>
			</ul>
		</div>

		<div class="content-paso">
			<div class="paso-3">
				<span class="paso-numero paso-numero-3">1</span>
				<div class="paso-bg">
					<p class="paso-bg-parrafo">Claudia tiene un cliente el cual le pidió crédito. Esta es<br>la primera vez que ella le vende a este cliente ¿Qué le recomiendas?</p>
				</div>
				<div class="cuestionario-m">
					<div class="cuestionario-col">
						<div class="col-left">
						<img src="img/circle-1.png"/>
						</div>
						<div class="col-right">
							<div class="cuadro-pregunta">
								<div class="rounded rounded-pag-3">
									<input type="radio" value="None" id="rounded-18" name="grupo-3">
									<label for="rounded-18"></label>
								</div>
								<p class="parrafo-h">a. No darle crédito y decirle amablemente que el pago es contra entrega</p>
								<div class="respuesta">Dado que recién empiezas con el negocio no
								es recomendable dar crédito a tus clientes porque aún
								estas formando tu capital de negocio.</div>
							</div>
							<div class="cuadro-pregunta">
								<div class="rounded rounded-pag-3">
									<input type="radio" value="None" id="rounded-19" name="grupo-3">
									<label for="rounded-19"></label>
								</div>
								<p class="parrafo-h">b. Darle crédito y rezar para que le pague</p>
								<div class="respuesta">No es recomendable que cuando recién
								empiezas con tu negocio dar crédito a tus clientes,
								especialmente si no tienes la certeza que te van a pagar.</div>
							</div>
							<div class="cuadro-pregunta">
								<div class="rounded rounded-pag-3">
									<input type="radio" value="None" id="rounded-20" name="grupo-3">
									<label for="rounded-20"></label>
								</div>
								<p class="parrafo-height">c. No venderle</p>
								<div class="respuesta">Uno nunca debe perder una venta. Conversa con
								el cliente para quedar un plan de pago antes de entregarle el
								producto. Recuerda ser siempre amable con tu cliente.</div>
							</div>
						</div>
					</div>
					<div class="envio">
						<input class="comprobar-2" type="submit" value="COMPROBAR RESPUESTA">
					</div>
					<div class="feedback">
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="js/script.js" type="text/javascript"></script>
</body>
</html>