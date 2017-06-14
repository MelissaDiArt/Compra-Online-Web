<!DOCTYPE html>
<html lang="es">
        
    <link rel="stylesheet" type="text/css" href="all.css">
	<script src="detalles.js" charset="utf-8"></script>
	<?php require 'navigation-bar.php'; ?>
	
    <body onload="cambiarp(0,1,0,'','','','')">
        <div id="ci" style="display: none">MarioBros/</div> <!-- carpeta imagenes -->
        <div class="cuerpo" onclick="oc('droplist')">
            <div class="cu_cabecera">
                <div class="nombre">
                    <h1>New Super Mario Bros</h1>
                </div>
                <div class="imagen">
                    <div class="ip">
                        <div class="img" style="background-image: url('img/MarioBros/foto1-1.jpg')"><button class="bt" onclick="cambiarp(0,1,0,'','','','')"></button></div>
                        <div class="img" style="background-image: url('img/MarioBros/foto2-1.jpg')"><button class="bt" onclick="cambiarp(0,2,0,'','','','')"></button></div>
                        <div class="img" style="background-image: url('img/MarioBros/foto3-1.jpg')"><button class="bt" onclick="cambiarp(0,3,0,'','','','')"></button></div>
                        <div class="img" style="background-image: url('img/MarioBros/foto4-1.jpg')"><button class="bt" onclick="cambiarp(0,4,0,'','','','')"></button></div>
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
                        <h3>23.90€</h3>
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
                            <div class="bdis bdis4 bdissi"></div>
                        </div>
                    </div>
                    <div class="valor">
                        <h3>Valoracion:</h3>
                        <div class="est est1 estsi"></div>
                        <div class="est estsi"></div>
                        <div class="est estsi"></div>
                        <div class="est estno"></div>
                        <div class="est estno"></div>
                    </div>
                    <div class="comprar">
                        <form action="../add_product.php" method="get">
                            <button type="sumbit" name="id" value="16" style="width: 100%; background-color: #a18951;"><div class="imgcomprar"></div><h3>Comprar</h3></button>
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
                    <h3>Videojuego New Super Mario Bros </h3>
                    <ul class="espec">
                      <h3>Características generales:</h3>
                      <li>Fecha de Lanzamiento:20-noviembre-2009</li>
                      <li>Pegi:+3</li>
                      <li>Plataforma: Wii U</li>
                      <li>Distribuidores: Nintendo </li>
                      <li>Género: Aventuras</li>
                      <li>Categoría: Wii U</li>
                      <li>Subcategoría: Juegos</li>


                    </ul>
                </div>

                <div class="cu_carac cu_in">
                <p>New Super Mario Bros. Wii combina la acción de los juegos clásicos de plataformas con el poder de la consola Wii para crear una nueva experiencia que puede ser disfrutada en solitario o con amigos y familiares.<br>
                Guía a Mario a través de mundos llenos de aventuras con el mando de Wii, y decide si quieres salvar a la Princesa Peach tú solo o con algo de ayuda de tus amigos. New Super Mario Bros. Wii permite hasta a cuatro jugadores tomar parte en la acción a la vez, creando un caos total ya que podéis jugar colaborando o compitiendo a la hora de montar a lomos de Yoshi, hacerse con los preciados potenciadores...  </p>
              </div>
                <div class="cu_opi cu_in">
                    <div class="opi">
                        <div class="opiimg">
                            <img src="img/user.png" alt="Usurio"/>
                        </div>
                        <div class="tex">
                                <p>El juego está muy bien, me ha dado muchas horas de diversión familiar.</p>
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
                          <p>El juego está bien. Acorde a lo esperado. El problema es que a los pocos días de comprar el juegi, éste bajó de precio  </p>
                            <div class="reco">
                                <h3>Recomendarias este producto:</h3>
                                <div class="disp"></div>
                            </div>
                            <div class="valor">
                                <h3>Valoracion:</h3>
                                <div class="est est1 estsi"></div>
                                <div class="est estsi"></div>
                                <div class="est estm"></div>
                                <div class="est estno"></div>
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
