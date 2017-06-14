<!DOCTYPE html>
<html lang="es">
        
    <link rel="stylesheet" type="text/css" href="all.css">
	<script src="detalles.js" charset="utf-8"></script>
	<?php require 'navigation-bar.php'; ?>
	
    <body onload="cambiarp(0,1,0,'','','','')">
        <div id="ci" style="display: none">RazerFIREFLY/</div> <!-- carpeta imagenes -->
        <div class="cuerpo" onclick="oc('droplist')">
            <div class="cu_cabecera">
                <div class="nombre">
                    <h1>Razer-Firefly</h1>
                </div>
                <div class="imagen">
                    <div class="ip">
                        <div class="img" style="background-image: url('img/RazerFIREFLY/foto1-1.jpg')"><button class="bt" onclick="cambiarp(0,1,0,'','','','')"></button></div>
                        <div class="img" style="background-image: url('img/RazerFIREFLY/foto2-1.jpg')"><button class="bt" onclick="cambiarp(0,2,0,'','','','')"></button></div>
                        <div class="img" style="background-image: url('img/RazerFIREFLY/foto3-1.jpg')"><button class="bt" onclick="cambiarp(0,3,0,'','','','')"></button></div>
                        <div class="img" style="background-image: url('img/RazerFIREFLY/foto4-1.jpg')"><button class="bt" onclick="cambiarp(0,4,0,'','','','')"></button></div>
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
                        <h3>70.95€</h3>
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
                            <button type="sumbit" name="id" value="27" style="width: 100%; background-color: #a18951;"><div class="imgcomprar"></div><h3>Comprar</h3></button>
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
                    <h3>ALfombrilla Razer Firefly</h3>
                    <ul class="espec">

                      <li>Acabado microtexturizado para un juego equilibrado</li>
                      <li>Iluminación personalizable Chroma</li>
                      <li>Sincronización de colores entre dispositivos</li>
                      <li>Próximamente: Reactivo & onda</li>
                      <li>Base de caucho antideslizante</li>
                      <li>Con habilitación Razer Synapse (para la iluminación personalizable Chroma)</li>
                      <li>Tamaño aproximado: 355 mm / 13,98” (longitud) x 255 mm / 10,04” (anchura) x 4 mm / 0,16” (altura)</li>
                      <li>Peso aproximado: 380 g / 0,84 lb</li>


                    </ul>

                    <h3>Requisitos del sistema</h3>
                    <ul>
                      <li>Windows® 10 / Windows® 8 / Windows® 7 / Mac OS X (v10.8 - 10.11)</li>
                      <li>100 MB de espacio libre en disco duro </li>
                      <li>Conexión a Internet</li>
                      <li>Registro en Razer Synapse, descarga de software, aceptación de licencia y conexión a Internet para activar todas las características del producto y para realizar las actualizaciones de software.</li>

                    </ul>

                    <h3>Conenido de la caja</h3>
                    <ul>
                        <li>Firefly</li>
                        <li>Guía de inicio rápido</li>
                        <li>*Ratón no incluido.</li>

                    </ul>
                </div>

                <div class="cu_carac cu_in">
                <p>A fin de conseguir el equilibrio perfecto entre control y velocidad, Razer Firefly ofrece un sólido acabado microtexturizado que te da el más alto grado de precisión y velocidad. La superficie precisa y coherente garantiza que todos los movimientos del ratón se transfieran al cursor, por lo que dispondrás de la máxima precisión durante los duelos más exigentes en los juegos de acción.</p>
                </div>
                <div class="cu_opi cu_in">
                    <div class="opi">
                        <div class="opiimg">
                            <img src="img/user.png" alt="Usurio"/>
                        </div>
                        <div class="tex">
                            <p>He adquirido este producto, pues tenia una alfombrilla de esas cutres de regalo destrozada, que decir, el tamaño, grande, pero me gusta.El ratón va que vuela, se desliza muy suave. </p>
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
                            <p>Me ha resultado muy cómoda y evidentemente durará mucho más que una alfombrilla normal.</p>
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
                </div>
            </div>
        </div>
    </body>
    
    <?php require 'footer.php'; ?>
    
</html>
