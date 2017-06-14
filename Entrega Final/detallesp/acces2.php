<!DOCTYPE html>
<html lang="es">
        
    <link rel="stylesheet" type="text/css" href="all.css">
	<script src="detalles.js" charset="utf-8"></script>
	<?php require 'navigation-bar.php'; ?>
	
    <body onload="cambiarp(0,1,0,'','','','')">
        <div id="ci" style="display: none">RazerNaga/</div> <!-- carpeta imagenes -->
        <div class="cuerpo" onclick="oc('droplist')">
            <div class="cu_cabecera">
                <div class="nombre">
                    <h1>Razer-NAGA EPIC CHROMA</h1>
                </div>
                <div class="imagen">
                    <div class="ip">
                        <div class="img" style="background-image: url('img/RazerNaga/foto1-1.jpg')"><button class="bt" onclick="cambiarp(0,1,0,'','','','')"></button></div>
                        <div class="img" style="background-image: url('img/RazerNaga/foto2-1.jpg')"><button class="bt" onclick="cambiarp(0,2,0,'','','','')"></button></div>
                        <div class="img" style="background-image: url('img/RazerNaga/foto3-1.jpg')"><button class="bt" onclick="cambiarp(0,3,0,'','','','')"></button></div>
                        <div class="img" style="background-image: url('img/RazerNaga/foto4-1.jpg')"><button class="bt" onclick="cambiarp(0,4,0,'','','','')"></button></div>
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
                        <h3>99.95€</h3>
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
                        <div class="est estm"></div>
                        <div class="est estno"></div>
                    </div>
                    <div class="comprar">
                        <form action="../add_product.php" method="get">
                            <button type="sumbit" name="id" value="23" style="width: 100%; background-color: #a18951;"><div class="imgcomprar"></div><h3>Comprar</h3></button>
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
                    <h3>Ratón Razer-Naga Epic Chroma</h3>
                    <ul class="espec">

                      <li>Un total de 19 botones programables optimizados para juegos MMO</li>
                      <li>Retícula para el pulgar con 12 botones mecánicos</li>
                      <li>Rueda de desplazamiento con acción de inclinación</li>
                      <li>Sensor láser 4G de 8200 ppp</li>
                      <li>Base de carga</li>
                      <li>Iluminación Chroma con 16,8 millones de colores personalizables</li>
                      <li>Ultrapolling de 1000 Hz</li>
                      <li>Base ultradeslizante de acústica cero</li>
                      <li>Cable de carga USB de fibra trenzada de 2,1 m</li>
                      <li>Tamaño aproximado:</li>
                      <li>119 mm / 4,68” (largo)</li>
                      <li>75 mm / 2,95” (ancho)</li>
                      <li>43 mm / 1,69” (alto)</li>
                      <li>Peso aproximado: 150 g / 0,33 lb</li>
                      <li>Duración de las pilas: Aprox. 20 hrs. (juego continuo)</li>
                      <li>La expectativa de vida de la batería depende de su uso</li>
                    </ul>

                    <h3>Requisitos del sistema:</h3>
                    <ul>
                        <li>PC o Mac con un puerto USB libre</li>
                        <li>Windows® 10 / Windows® 8 / Windows® 7 / Mac OS X (v10.8 - 10.11)</li>
                        <li>El configurador en el juego solo es compatible con Windows® 10 / Windows® 8 / Windows® 7</li>
                        <li>Conexión a Internet</li>
                        <li>100 MB de espacio libre en disco duro</li>
                        <li>  Registro en Razer Synapse, descarga de software, aceptación de licencia y conexión a Internet para activar todas las características del producto y para realizar las actualizaciones del software. </li>
                    </ul>
                </div>

                <div class="cu_carac cu_in">
                    <p>En cualquier juego MMO, a cuantos más hechizos tengas acceso instantáneamente, más grande será tu <br>El Razer Naga Epic Chroma ofrece un total de 19 botones, incluido la icónica retícula de 12 botones del Razer Naga, para maximizar las acciones a tu disposición. Ahora puedes hacer asignaciones y tener acceso a más capacidades, más macros y más controles. El Razer Naga Epic Chroma hace que pulsar a tiempo el botón correcto sea más fácil que nunca.</br>La tecnología inalámbrica para juegos del Razer Naga Epic Chroma te ofrece movimientos sin limitaciones, sin poner en riesgo el control o la precisión del ratón. <br>Con un índice de respuesta de 1 ms, con cable o inalámbrico, tu Razer Naga Epic Chroma tiene un rendimiento máximo en todo momento. Además, basta conectarlo al puerto USB cuando la batería está baja para que el Razer Naga Epic Chroma se cargue en plena utilización, sin periodos de inactividad.</p>
                </div>
                <div class="cu_opi cu_in">
                    <div class="opi">
                        <div class="opiimg">
                            <img src="img/user.png" alt="Usurio"/>
                        </div>
                        <div class="tex">
                            <p>Las teclas del lateral hacen la edición mucho mas simple, me encanta.</p>
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
                    <div class="opi opiult">
                        <div class="opiimg">
                            <img src="img/user1.png" alt="Usurio"/>
                        </div>
                        <div class="tex">
                            <p>Envio muy rápido, exactamente igual a la foto. Produco 100% recomendado.</p>
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
                </div>
            </div>
        </div>
    </body>
    
    <?php require 'footer.php'; ?>
    
</html>
