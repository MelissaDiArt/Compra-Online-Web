<!DOCTYPE html>
<html lang="es">
        
    <link rel="stylesheet" type="text/css" href="all.css">
	<script src="detalles.js" charset="utf-8"></script>
	<?php require 'navigation-bar.php'; ?>
	
    <body onload="cambiarp(0,1,0,'','','','')">
        <div id="ci" style="display: none">Steelteclado/</div> <!-- carpeta imagenes -->
        <div class="cuerpo" onclick="oc('droplist')">
            <div class="cu_cabecera">
                <div class="nombre">
                    <h1>Steelseries-APEX M800</h1>
                </div>
                <div class="imagen">
                    <div class="ip">
                        <div class="img" style="background-image: url('img/Steelteclado/foto1-1.jpg')"><button class="bt" onclick="cambiarp(0,1,0,'','','','')"></button></div>
                        <div class="img" style="background-image: url('img/Steelteclado/foto2-1.jpg')"><button class="bt" onclick="cambiarp(0,2,0,'','','','')"></button></div>
                        <div class="img" style="background-image: url('img/Steelteclado/foto3-1.jpg')"><button class="bt" onclick="cambiarp(0,3,0,'','','','')"></button></div>
                        <div class="img" style="background-image: url('img/Steelteclado/foto4-1.jpg')"><button class="bt" onclick="cambiarp(0,4,0,'','','','')"></button></div>
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
                        <h3>159.95€</h3>
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
                            <div class="bdis bdis3 bdissi"></div>
                            <div class="bdis bdis4 bdisno"></div>
                        </div>
                    </div>
                    <div class="valor">
                        <h3>Valoracion:</h3>
                        <div class="est est1 estsi"></div>
                        <div class="est estsi"></div>
                        <div class="est estsi"></div>
                        <div class="est estsi"></div>
                        <div class="est estm"></div>
                    </div>
                    <div class="comprar">
                        <form action="../add_product.php" method="get">
                            <button type="sumbit" name="id" value="25" style="width: 100%; background-color: #a18951;"><div class="imgcomprar"></div><h3>Comprar</h3></button>
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
                    <h3>Teclado Steelseries-APEX M800</h3>
                    <ul class="espec">
                      <li>Diseño: Bajo Perfil</li>
                      <li>Los procesadores duales</li>
                      <li>Puertos USB: 2 puertos USB 2.0 Hub</li>
                      <li>Teclas Macro ergonómicamente técnicos: 6</li>
                      <li>Apoyo totalmente anti-ghosting</li>
                      <li>N-Key Roll Over: 256 Clave</li>
                      <li>Iluminación: Per-clave LEDs RGB</li>
                      <li>Teclas dedicadas medios</li>
                      <li>Teclas completamente programables</li>
                      <li>Sistema de gestión de cables</li>
                      <li>Peso: 1390 g, 3,06 lb</li>
                      <li>Altura: 174 mm, 6,85 mm</li>
                      <li>Ancho: 510 mm, en 20.08</li>
                      <li>Pies de goma intercambiables</li>
                      <li>Longitud del cable: 2 m, 6,5 pies</li>

                    </ul>

                    <h3>Contenido de la caja:</h3>
                    <ul>

                        <li>Apex M800</li>
                        <li>Pies de goma intercambiables</li>
                        <li>Guía de inicio rápido</li>

                    </ul>
                </div>

                <div class="cu_carac cu_in">
                <p>El torneo de grado Apex M800 es teclado para juegos mecánicos más rápido y programable del mundo. Se le da la respuesta y el personal de control rápido para dominar sus juegos favoritos </p>
                </div>
                <div class="cu_opi cu_in">
                    <div class="opi">
                        <div class="opiimg">
                            <img src="img/user.png" alt="Usurio"/>
                        </div>
                        <div class="tex">
                            <p> El mejor teclado que he probado , llebaba mucho tiempo queriendo comprarlo y me alegro de haberlo hecho. Es un poco costoso pero vale la pena.</p>
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
                            <p>Me encanta el diseño, no hace casi ruido y la iluminación es perfecta.</p>
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
