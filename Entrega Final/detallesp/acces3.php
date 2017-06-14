<!DOCTYPE html>
<html lang="es">
        
    <link rel="stylesheet" type="text/css" href="all.css">
	<script src="detalles.js" charset="utf-8"></script>
	<?php require 'navigation-bar.php'; ?>
	
    <body onload="cambiarp(0,1,0,'','','','')">
        <div id="ci" style="display: none">logicaltavoz/</div> <!-- carpeta imagenes -->
        <div class="cuerpo" onclick="oc('droplist')">
            <div class="cu_cabecera">
                <div class="nombre">
                    <h1>Logitech-Speakers Z213</h1>
                </div>
                <div class="imagen">
                    <div class="ip">
                        <div class="img" style="background-image: url('img/logicaltavoz/foto1-1.jpg')"><button class="bt" onclick="cambiarp(0,1,0,'','','','')"></button></div>
                        <div class="img" style="background-image: url('img/logicaltavoz/foto2-1.jpg')"><button class="bt" onclick="cambiarp(0,2,0,'','','','')"></button></div>
                        <div class="img" style="background-image: url('img/logicaltavoz/foto3-1.jpg')"><button class="bt" onclick="cambiarp(0,3,0,'','','','')"></button></div>
                        <div class="img" style="background-image: url('img/logicaltavoz/foto4-1.jpg')"><button class="bt" onclick="cambiarp(0,4,0,'','','','')"></button></div>
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
                        <h3>35.99€</h3>
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
                        <div class="est estno"></div>
                    </div>
                    <div class="comprar">
                        <form action="../add_product.php" method="get">
                            <button type="sumbit" name="id" value="24" style="width: 100%; background-color: #a18951;"><div class="imgcomprar"></div><h3>Comprar</h3></button>
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
                    <h3>Altavoces Logitech-Multimedia Speakers Z213</h3>
                    <ul class="espec">

                      <li>Alimentación: 7 vatios RMS/14 W (potencia de cresta)</li>
                      <li>Respuesta de frecuencia: 65 Hz – 20 kHz</li>
                      <li><h4>Altavoces satélite:</h4></li>
                      <li>2 vatios (RMS) x 1,5 en 4 ohmios a 1 kHz, con distorsión armónica total (THD) del 10%</li>
                      <li>Transductor cóncavo de 5 cm</li>
                      <li><h4>Subwoofer:</h4></li>
                      <li>4 vatios (RMS) en 4 ohmios a 100 Hz, con distorsión armónica total (THD) del 10%</li>
                      <li>Control de graves integrado</li>
                      <li>Transductor cóncavo con salida inferior de 10 cm</li>
                      <li><h4>Control remoto con cable:</h4></li>
                      <li>Controles de volumen y encendido</li>
                      <li>Toma de auriculares de 3,5 mm</li>
                      <li><h4>Conexiones:</h4></li>
                      <li>Entrada: entrada auxiliar de 3,5 mm</li>
                      <li>Salidas: toma de auriculares de 3,5 mm</li>

                      <li><h4>Dimensiones de los altavoces (Al x An x Pr):</h4></li>
                      <li>Altavoces satélite: 14,2 cm x 7,9 cm x 7,6 cm</li>
                      <li>Subwoofer: 18,3 cm x 13 cm x 19,3 cm</li>
                      <li>Peso del producto: 1,76 kg</li>
                      <li>Longitud del cable: 1,5 m</li>
                      <li>Longitud del cable entre satélite y subwoofer: 1,5 m</li>

                    </ul>

                    <h3>Requisitos del sistema:</h3>
                    <ul>

                        <li>Ordenadores Windows® y Mac® OS</li>
                        <li>Smartphones</li>
                        <li>Tablets</li>
                        <li>Reproductores de MP3</li>

                    </ul>
                </div>

                <div class="cu_carac cu_in">
                <p>Disfruta de un sonido envolvente con este nuevo altavoz. Gracias a su diseño sencillo pero elegante nos hemos centrado en la calidad del sonido haciendo de este todo una experiencia.</p>
                </div>
                <div class="cu_opi cu_in">
                    <div class="opi">
                        <div class="opiimg">
                            <img src="img/user.png" alt="Usurio"/>
                        </div>
                        <div class="tex">
                            <p>Estoy muy contento con estos altavoces, son pequeños pero son bastante potentes. el diseño es bastante elegante, el subwofer es ajustable, los altavoces suenan bastante bien y son baratos. </p>
                            <div class="reco">
                                <h3>Recomendarias este producto:</h3>
                                <div class="disp"></div>
                            </div>
                            <div class="valor">
                                <h3>Valoracion:</h3>
                                <div class="est est1 estsi"></div>
                                <div class="est estsi"></div>
                                <div class="est estsi"></div>
                                <div class="est estm"></div>
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
                            <p>Altavoces sencillos pero con muy buen sonido, claramente una gran opción si quieres lo mejor en calidad precio </p>
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
