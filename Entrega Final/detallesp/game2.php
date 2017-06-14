<!DOCTYPE html>
<html lang="es">
        
    <link rel="stylesheet" type="text/css" href="all.css">
	<script src="detalles.js" charset="utf-8"></script>
	<?php require 'navigation-bar.php'; ?>
	
    <body onload="cambiarp(0,1,3,'blue','green','grey','')">
        <div id="ci" style="display: none">Fallout4/</div> <!-- carpeta imagenes -->
        <div class="cuerpo" onclick="oc('droplist')">
            <div class="cu_cabecera">
                <div class="nombre">
                    <h1>Fallout 4</h1>
                </div>
                <div class="imagen">
                    <div class="ip">
                        <div class="img" style="background-image: url('img/Fallout4/foto1-1.jpg')"><button class="bt" onclick="cambiarp(0,1,3,'blue','green','grey','')"></button></div>
                        <div class="img" style="background-image: url('img/Fallout4/foto2-1.jpg')"><button class="bt" onclick="cambiarp(0,2,0,'','','','')"></button></div>
                        <div class="img" style="background-image: url('img/Fallout4/foto3-1.jpg')"><button class="bt" onclick="cambiarp(0,3,0,'','','','')"></button></div>
                        <div class="img" style="background-image: url('img/Fallout4/foto4-1.jpg')"><button class="bt" onclick="cambiarp(0,4,0,'','','','')"></button></div>
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
                        <h3>45.95€</h3>
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
                            <div class="bdis bdis2 bdisno"></div>
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
                            <button type="sumbit" name="id" value="14" style="width: 100%; background-color: #a18951;"><div class="imgcomprar"></div><h3>Comprar</h3></button>
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
                    <h3>Fallout 4</h3>
                    <ul class="espec">
                      <li>Libertad e independencia!  Haz lo que quieras en un gigantesco mundo abierto con cientos de ubicaciones, personajes y misiones. Únete a diversas facciones que ansían hacerse con el poder o ve por tu cuenta. Las decisiones están en tus manos. </li>
                      <li>¡Eres S.P.E.C.I.A.L.! Con el sistema de personajes S.P.E.C.I.A.L. podrás ser quien tú quieras, desde un soldado con servoarmadura a un carismático embaucador. Elige entre cientos de extras y desarrolla tu estilo de juego personal. </li>
                      <li>¡Píxeles de superlujo! El motor gráfico y de iluminación de nueva generación hace que el mundo de Fallout cobre vida como nunca antes lo había hecho. Todas las localizaciones están llenas de detalles dinámicos, desde los bosques destruidos de la Commonwealth a las ruinas de Boston.  </li>
                      <li>¡Violencia y V.A.T.S.! Los intensos combates en primera o tercera persona pueden ralentizarse con el nuevo sistema dinámico de tiro asistido de Vault-Tec (V.A.T.S.), que te permite elegir los ataques y disfrutar de masacres de calidad cinematográfica. </li>
                      <li>Recoge y construye! Recoge, mejora y construye miles de objetos gracias al sistema de creación más avanzado. Armas, blindaje, agentes químicos y comida no son más que el principio; podrás llegar a crear y gestionar asentamientos enteros.</li>
                    </ul>
                </div>

                <div class="cu_carac cu_in">
                <p>Eres el único superviviente del Refugio 111 en un mundo destruido por la guerra nuclear. Cada segundo es una lucha por la supervivencia, y en tus manos estarán todas las decisiones. Solo tú puedes reconstruir el yermo y decidir su futuro. Bienvenido a casa.<br>Bethesda Game Studios, el galardonado creador de Fallout 3 y The Elder Scrolls V: Skyrim, os da la bienvenida al mundo de Fallout 4, su juego más ambicioso hasta la fecha y la siguiente generación de mundos abiertos. Eres el único superviviente del Refugio 111 en un mundo destruido por la guerra nuclear. Cada segundo es una lucha por la supervivencia, y en tus manos estarán todas las decisiones. Solo tú puedes reconstruir el yermo y decidir su futuro. Bienvenido a casa.  </p>
                </div>

                <div class="cu_opi cu_in">
                    <div class="opi">
                        <div class="opiimg">
                            <img src="img/user.png" alt="Usurio"/>
                        </div>
                        <div class="tex">
                            <p>Me llegó el mismo dia del lanzamiento, ya tenía hecha la pre-compra aqui. La verdad es que agradezco que se dieran prisa en enviarmelo, y el juego es una obra maestra. Tenemos fallout para meses jajaja</p>
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
                          <p>Juegazo. Compra obligada</p>
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
