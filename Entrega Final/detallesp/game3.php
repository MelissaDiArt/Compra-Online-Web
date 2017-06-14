<!DOCTYPE html>
<html lang="es">
        
    <link rel="stylesheet" type="text/css" href="all.css">
	<script src="detalles.js" charset="utf-8"></script>
	<?php require 'navigation-bar.php'; ?>
	
    <body onload="cambiarp(0,1,3,'blue','green','grey','')">
        <div id="ci" style="display: none">GTAV/</div> <!-- carpeta imagenes -->
        <div class="cuerpo" onclick="oc('droplist')">
            <div class="cu_cabecera">
                <div class="nombre">
                    <h1>Grand Theft Auto V</h1>
                </div>
                <div class="imagen">
                    <div class="ip">
                        <div class="img" style="background-image: url('img/GTAV/foto1-1.jpg')"><button class="bt" onclick="cambiarp(0,1,3,'blue','green','grey','')"></button></div>
                        <div class="img" style="background-image: url('img/GTAV/foto2-1.jpg')"><button class="bt" onclick="cambiarp(0,2,0,'','','','')"></button></div>
                        <div class="img" style="background-image: url('img/GTAV/foto3-1.jpg')"><button class="bt" onclick="cambiarp(0,3,0,'','','','')"></button></div>
                        <div class="img" style="background-image: url('img/GTAV/foto4-1.jpg')"><button class="bt" onclick="cambiarp(0,4,0,'','','','')"></button></div>
                    </div>
                    <div class="ig">
                        <div id="bdf" style="display: none"></div>
                        <div id="bdc" style="display: none"></div>
                        <div id="bdcol" style="display: none"></div>
                        <ul class="color">
                            <li class="cd"><div class="cdp"></div><button onclick="cambiarcol(0,1)"></button></li>
                            <li class="cd"><div class="cdp"></div><button onclick="cambiarcol(0,2)"></button></li>
                            <li class="cd"><div class="cdp"></div><button onclick="cambiarcol(0,3)"></button></li>
                            <li class="cd"><div class="cdp"></div><button onclick="cambiarcol(0,4)"></button></li>
                        </ul>
                    </div>
                </div>
                <div class="precio">
                    <div class="mon">
                        <h3>42.96€</h3>
                        <p>/unidad</p>
                    </div>
                    <div class="envio">
                        <div class="disp"></div>
                        <h3>Envio en 24 horas</h3>
                    </div>
                    <div class="disponibilidad">
                        <h3>Disponibilidad:</h3>
                        <div class="barradisp">
                            <div class="bdis bdis1 bdissi"></div>
                            <div class="bdis bdis2 bdissi"></div>
                            <div class="bdis bdis3 bdisno"></div>
                            <div class="bdis bdis4 bdisno"></div>
                        </div>
                    </div>
                    <div class="valor">
                        <h3>Valoracion:</h3>
                        <div class="est est1 estsi"></div>
                        <div class="est estsi"></div>
                        <div class="est estsi"></div>
                        <div class="est estsi"></div>
                        <div class="est estsi"></div>
                    </div>
                    <div class="comprar">
                        <form action="../add_product.php" method="get">
                            <button type="sumbit" name="id" value="15" style="width: 100%; background-color: #a18951;"><div class="imgcomprar"></div><h3>Comprar</h3></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="cu_barra">
                <li class="bob"><h3>Especificaciones</h3><button onclick="bcol(1,'cu_espec')"></button>
                <li class="bob"><h3>Caracteristicas</h3><button onclick="bcol(2,'cu_carac')"></button>
                <li class="bob"><h3>Opiniones</h3><button onclick="bcol(3,'cu_opi')"></button>
            </div>
            <div class="cu_info">
                <div class="cu_espec cu_in">
                    <h3>Videojuego Grand Theft Auto V</h3>
                    <ul class="espec">
                      <li>Grand Theft Auto V ya está disponible en PlayStation®4, Xbox One y pc para una nueva generación entera de jugadores. Los jugadores que visiten Los Santos y el condado de Blaine en PS4 y Xbox One probarán un modo en primera persona completamente nuevo y la posibilidad de jugar hasta 30 personas en GTA Online, así como un amplio abanico de importantes mejoras técnicas y visuales entre las que se incluyen armas, vehículos, actividades y animales nuevos, un tráfico más denso, daño y efectos climáticos mejorados. Los jugadores disfrutarán también de una gran actualización de la banda sonora, que incorpora más de 100 canciones adicionales, y de mucho más.

Además de un mayor número de jugadores, Grand Theft Auto Online incluye todas las mejoras de juego y contenido creados por Rockstar que se han publicado desde su lanzamiento para PS3 y Xbox 360. Los jugadores actuales de GTA Online podrán transferir sus progresos a PlayStation®4 o Xbox One y acceder además a nuevo contenido exclusivo para GTA V y GTA Online.</li>

                    </ul>
                    <ul>
                      <h3>Requerimientos:</h3>
                      <li>Sistema operativo: Windows 8.1 64 Bit, Windows 8 64 Bit, Windows 7 64 Bit Service Pack 1, Windows Vista 64 Bit Service Pack 2* (*tarjeta de vídeo NVIDIA recomendada para Windows Vista)</li>
                      <li>Procesador: Intel Core 2 Quad CPU Q6600 @ 2.40GHz (4 CPUs) / AMD Phenom 9850 Quad-Core procesador (4 CPUs) @ 2.5GHz</li>
                      <li>Memoria: 4GB</li>
                      <li>Tarjeta de vídeo: NVIDIA 9800 GT 1GB / AMD HD 4870 1GB (DX 10, 10.1, 11)</li>
                      <li>Tarjeta de sonido: 100% DirectX 10 compatible</li>
                      <li>Espacio HDD: 65GB</li>
                      <li>Unidad DVD</li>

                    </ul>
                </div>

                <div class="cu_carac cu_in">
                <p>Los Santos, una extensa y soleada metrópolis llena de gurús de autoayuda, aspirantes a estrellas y famosos en decadencia, en su día la envidia del mundo occidental, lucha ahora por mantenerse a flote en una era de incertidumbre económica y "realities" baratos.
                  En medio de la confusión, tres criminales muy diferentes barajan sus probabilidades de supervivencia y de éxito: Franklin, un estafador callejero en busca de oportunidades de verdad y mucho dinero; Michael, profesional ex convicto, cuyo retiro no es tan prometedor como él hubiera esperado; y Trevor, un maníaco violento motivado por la posibilidad de encontrar drogas baratas y el próximo atraco importante. Agotadas las opciones, esta banda lo arriesgará todo en una serie de atrevidos y peligrosos atracos que marcarán sus vidas.
                  El mundo abierto más grande, más dinámico y más diverso jamás creado. Grand Theft Auto V combina historia y jugabilidad de una nueva forma. Los jugadores entran y salen repetidamente de las vidas de los tres personajes principales, participando en todos los aspectos de la historia entrelazada del juego.
                  Los sellos de esta rompedora saga están presentes en todo el juego, desde una increíble atención al detalle hasta el oscuro sentido del humor de Grand Theft Auto sobre la cultura moderna. Además, se ha dado un nuevo y más ambicioso enfoque al multijugador de mundo abierto.</p>

                <div class="cu_opi cu_in">
                    <div class="opi">
                        <div class="opiimg">
                            <img src="img/user.png" alt="Usurio"/>
                        </div>
                        <div class="tex">
                            <p>Ha sido una compra genial muy barato y recomendado para comprarlo por aqui desde luego. Y la transacción salio genial y no hubo ningun tipo de fallo. Excelenteeee.</p>
                                <div class="reco">
                                <h3>Recomendarias este producto:</h3>
                                <div class="disp"></div>
                            </div>
                            <div class="valor">
                                <h3>Valoracion:</h3>
                                <div class="est est1 estsi"></div>
                                <div class="est estsi"></div>
                                <div class="est estsi"></div>
                                <div class="est estsi"></div>
                                <div class="est estsi"></div>
                            </div>
                        </div>
                        <div class="opibar"></div>
                    </div>
                    <div class="opi opiult">
                        <div class="opiimg">
                            <img src="img/user1.png" alt="Usurio"/>
                        </div>
                        <div class="tex">
                          <p>Esta muy bien hecho el juego ,tiene muy buenos graficos y es una pasada la cantidad de cosas que puedes hacer.</p>
                            <div class="reco">
                                <h3>Recomendarias este producto:</h3>
                                <div class="disp"></div>
                            </div>
                            <div class="valor">
                                <h3>Valoracion:</h3>
                                <div class="est est1 estsi"></div>
                                <div class="est estsi"></div>
                                <div class="est estsi"></div>
                                <div class="est estsi"></div>
                                <div class="est estm"></div>
                            </div>
                        </div>
                        <div class="opibar"></div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    
    <?php require 'footer.php'; ?>
    
</html>
