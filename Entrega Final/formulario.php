<!DOCTYPE html>
<html lang="es">
	
<?php require 'navigation-bar.php'; ?>

	<meta charset="utf-8" />
    <meta name="theme-color" content="red">
    <meta name="description" content="formulario">
    <link rel="stylesheet" type="text/css" href="formulario.css">

    <body>
      <div id="cabecera" onclick="oc('droplist')">
      </div>
      <div id=titulo>
            <h2>Formulario de compra</h2>
      </div>
      <div id="page">
        <form id="datos" name="datos">
        <span> Email*
          <input type="email" name="email" minlength="13" maxlength="25" required size="13" placeholder="email">
        </span>
        <br><span> Contraseña*
          <input type="password" name="contraseña" minlength="5" maxlength="20" required size="5" placeholder="contraseña" >
          (mínimo 5 carácteres)
        </span></br>
        <br><span> Tratamiento
          <input type="radio" name="radio" value="opcion1"> <span>Sr</span>
          <input type="radio" name="radio" value="opcion2"> <span>Sra</span>
        </span></br>
        <br><span> Nombre*
          <input type="text" name="nombre" minlength="4" maxlength="9" required size="4" placeholder="Nombre">
        </span></br>
        <br><span> Apellidos*
          <input type="text" name="Apellidos" minlength="4" maxlength="15" required size="4" placeholder="Apellidos">
        </span></br>
        <br><span> Fecha de nacimiento*
          <input type="date" name="fecha">
        </span></br>
        <br><span> Dirección*
          <input type="text" name="Dirección" minlength="6" maxlength="30" required size="8" placeholder="Dirección">
        </span></br>
        <br><span> Código postal*
          <input type="pos" name="postal" minlength="5" maxlength="5" required size="8" required size="5" placeholder="Código postal">
        </span></br>
        <br><span> Población*
          <input type="text" name="poblacion" minlength="6" maxlength="9" required size="8" placeholder="Población">
        </span></br>
        <br><span> Teléfono*
          <input type="tel" name="telefono" minlength="6" maxlength="9" required size="8" placeholder="Teléfono">
        </span></br>
        <br><span>Número de cuenta*
          <input type="cuenta" name="cuenta" minlength="6" maxlength="9" required size="8" placeholder="Número de cuenta">
        </span></br>
        <div id="botones">
          <button type="reset" name="reset"><a> Resetear </a>
          <button type="submit" name="submit"><a href="compracept.php">Enviar</a>
        </div>

  </form>
</div>
  </body>
  
  <?php require 'footer.php'; ?>
  
</html>
