<!doctype html>

<html lang="es">
	
	<?php require 'navigation-bar.php'; ?>

	<body>

		<div class="slideshow" onclick="oc('droplist')">
			<img src="img/5.jpg" align="middle">
   			<img src="img/6.jpg" align="middle">
   			<img src="img/7.jpg" align="middle">
		</div>
		<script>
			$(function(){
				$('.slideshow img:gt(0)').hide();
					setInterval(function(){
					$('.slideshow :first-child').fadeOut()
					.next('img').fadeIn()
					.end().appendTo('.slideshow');},
					3000);
			});
		</script>
		
		<!--PRUEBA PARA LA PARTE DE NOVEDADES-->
		<div id="lista_novedades">
			
			<h2 id="titulo_novedades"><strong>ÚLTIMAS NOVEDADES</strong></h2>
			
			<ul class="rig columns-3">
				
				<a href="detallesp/DPS41TB.php"><li>
					<img src="img/consoles/ps4-1.jpg"/>
					<h3>Sony PS4 Playstation 4 1TB</h3>
					<p>Nuevo modelo, ahora con 1TB de disco duro. Con el doble de capacidad, experimenta hasta dónde puede llegar tu experiencia.</p>
					<p>OFERTA 389€ por tiempo limitado, válido hasta el 15 de Junio de 2016</p>
				</li></a>
				
				<a href="detallesp/DXBOXONE1TB.php"><li>
					<img src="img/consoles/xbox1-1.jpg"/>
					<h3>Microsoft Xbox One 1TB</h3>
					<p>Sumérgete en la experiencia One con el mejor centro multimedia para toda la familia.</p>
					<p>Ahora por sólo 310€. Expande para más información</p>
				</li></a>
					
				<a href="detallesp/DXBOXONE1TBEC.php"><li>
					<img src="img/consoles/xbox1elite-1.jpg"/>
					<h3>Xbox One 1Tb + Controller Elite</h3>
					<p>¿De verdad aún no has probado el nuevo Elite Controller?</p>
					<p>489€</p>
				</li></a>
				
				<a href="detallesp/game9.php"><li>
					<img src="img/games/tw3.jpg"/>
					<p>Sobrevive a la cacería salvaje en la aclamada obra de CD Project Red. Mejor juego por los Video Game Awards 2015.</p>
					<p>44.90€</p>
				</li></a>
				
				<a href="detallesp/game2.php"><li>
					<img src="img/games/fallout4.jpg"/>
					<p>Explora una Boston postapocalíptica en el nuevo RPG de mundo abierto de Bethesda, los creadores de Skyrim y Fallout 3.</p>
					<p>45.95€</p>
				</li></a>
				
				<a href="detallesp/game6.php"><li>
					<img src="img/games/quantumbreak.jpg"/>
					<p>Lo nuevo de Remedy, un trepidante thriller en el que darás forma al tiempo y lo dominarás para sobrevivir.</p>
					<p>54.93€</p>
				</li></a>
				
			</ul>
			
		</div>

	</body>
	
</html>
