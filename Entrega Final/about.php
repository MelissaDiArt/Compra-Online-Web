<!doctype html>
<html lang="es">
	<link rel="stylesheet" type="text/css" href="about.css">
	
	<?php require 'navigation-bar.php'; ?>
	
	<script>
		function initMap() {
			var mapDiv = document.getElementById('map');
			var map = new google.maps.Map(mapDiv, {
				center: {lat: 28.482785, lng: -16.321384},
				zoom: 17}
			);
		}
	</script>

	<body>
		<h1>¿Quiénes Somos?</h1>
		<p class="info">
			E-Commerce nace en 2016. Desde el primer momento, apostamos por la venta online de informática, algo que en aquellos años era todavía difícil de asimilar. La idea principal era, y sigue siendo a día de hoy, poder ofrecer a todos los amantes de la informática y las nuevas tecnologías productos específicos a precios asequibles sin renunciar a la calidad. Todo, manteniendo la esencia del pequeño comercio, estando cerca de los clientes y ofreciendo un trato personalizado. Hicimos de esas máximas nuestra filosofía y pronto conseguimos ganarnos la confianza de los consumidores.<br><br>Tras un comienzo fulgurante, en muy poco tiempo, www.E-Commerce.com se afianzó como punto de referencia en la venta online de productos informáticos y tecnológicos en España, contando con miles de compradores en su primer año de vida en la red.<br><br>Gracias a nuestro esfuerzo diario, al trato personal y directo y a nuestro servicio postventa nos hemos posicionado como la tienda online española de informática y tecnología más visitada.<br><br>
		</p>

		<div class="center">
			<div id="map"></div>
			<script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>
		</div>

	</body>

	<?php require 'footer.php'; ?>

</html>
