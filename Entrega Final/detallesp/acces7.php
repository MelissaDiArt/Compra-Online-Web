<!DOCTYPE html>
<html lang="es">
        
    <link rel="stylesheet" type="text/css" href="all.css">
	<script src="detalles.js" charset="utf-8"></script>
	<?php require 'navigation-bar.php'; ?>
	
    <body onload="cambiarp(0,1,0,'','','','')">
        <div id="ci" style="display: none">TAKAMIKURA/</div> <!-- carpeta imagenes -->
        <div class="cuerpo" onclick="oc('droplist')">
            <div class="cu_cabecera">
                <div class="nombre">
                    <h1>Newskillgaming-TAKAMIKURA</h1>
                </div>
                <div class="imagen">
                    <div class="ip">
                        <div class="img" style="background-image: url('img/TAKAMIKURA/foto1-1.jpg')"><button class="bt" onclick="cambiarp(0,1,0,'','','','')"></button></div>
                        <div class="img" style="background-image: url('img/TAKAMIKURA/foto2-1.jpg')"><button class="bt" onclick="cambiarp(0,2,4,'blue','black','green','red')"></button></div>
                        <div class="img" style="background-image: url('img/TAKAMIKURA/foto3-1.jpg')"><button class="bt" onclick="cambiarp(0,3,0,'','','','')"></button></div>
                        <div class="img" style="background-image: url('img/TAKAMIKURA/foto4-1.jpg')"><button class="bt" onclick="cambiarp(0,4,0,'','','','')"></button></div>
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
                        <h3>160.50€</h3>
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
                        <div class="est estm"></div>
                        <div class="est estno"></div>
                    </div>
                    <div class="comprar">
                        <form action="../add_product.php" method="get">
                            <button type="sumbit" name="id" value="28" style="width: 100%; background-color: #a18951;"><div class="imgcomprar"></div><h3>Comprar</h3></button>
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
                    <h3>Silla Gaming Newskillgaming-TAKAMIKURA/h3>
                    <ul class="espec">

                    </ul>
                    <h3>Especificaciones de micrófono:</h3>
                    <ul>
                        <li>Colores disponibles: Negro / Negro-Rojo / Negro-Azul / Negro-Verde</li>
                        <li>Reposabrazos ergonómico y multifuncional</li>
                        <li>Base de metal</li>
                        <li>Ángulo de respaldo ajustable</li>
                        <li>Función balancín</li>
                        <li>Cojines ergonómicos</li>
                        <li>Estructura metálica</li>
                        <li>Relleno de 50Kg/m3 de alta calidad</li>
                        <li>Pistón de gas clase 4 (hasta 150KG)</li>
                        <li>Ruedas de 60mm acabadas en nylon</li>
                        <li>Altura: 125cm a 133cm</li>
                        <li>Anchura del asiento: 48cm a 56cm</li>
                        <li>Anchura máxima: 70cm</li>
                        <li>Peso: 20Kg</li>
                    </ul>
                    <h3>Contenido del producto:</h3>
                    <ul>
                      <li>Silla TAKAMIKURA</li>
                      <li>Cojín cervical trapezoidal</li>
                      <li>Cojín lumbar rectangular</li>
                      <li>Instrucciones de montaje</li>
                      <li>Herramienta de montaje</li>
                    </ul>
                </div>
                <div class="cu_carac cu_in">
                  <p>TAKAMIKURA ha sido ideada bajo estos tres preceptos. Con ella proveemos a los jugadores de total confort y posterior satisfacción durante las largas horas de juego, entrenamientos y competiciones.</p>
              </div>
                <div class="cu_opi cu_in">
                    <div class="opi">
                        <div class="opiimg">
                            <img src="img/user.png" alt="Usurio"/>
                        </div>
                        <div class="tex">
                            <p>es una silla muy fácil de montar me a llegado hace minutos y ya esta montada un diez para su servicio y productos y embalaje.</p>
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
                                <div class="est estno"></div>
                            </div>
                        </div>
                        <div class="opibar"></div>
                    </div>
                    <div class="opi opiult">
                        <div class="opiimg">
                            <img src="img/user1.png" alt="Usurio"/>
                        </div>
                        <div class="tex">
                            <p>Se nota los materiales de primera calidad, mejor compra no podia a ver hecho, tengo problemas de espalda y esto es lo q necesitaba, ajustable a cada momento situacion y necesidad. </p>
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
