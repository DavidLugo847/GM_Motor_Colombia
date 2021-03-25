<!DOCTYPE html>

<html bgcolor="">
 
<head>
    <link rel = "stylesheet" type = "text/css" href = "css/datos.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Datos GM</title>
</head>
<body>

<center><img src="Imagen/gm.png" class="imgcenterl" width="500"></center>
<h1><center><font color="black"><font face="Arial"><font size='6'><b>ESTOS SON LOS DATOS ENVIADOS:</b></font></font></center></h1>
    



<?php
echo"<font face = 'Arial' color='#009405' size='4'><I>Datos del Cliente</I></font>";echo"<br>";
echo"<font face = 'Arial' color='red' size='4'><I>Primer Apellido: </I></font>";echo $_POST['primerapellido'];echo"<br>";
echo"<font face = 'Arial' color='red' size='4'><I>Segundo Apellido: </I></font>";echo $_POST['segundoapellido'];echo"<br>";
echo"<font face = 'Arial' color='red' size='4'><I>Nombres: </I></font>";echo $_POST['nombres'];echo"<br>";
echo"<font face = 'Arial' color='red' size='4'><I>Tipo de Documento: </I></font>";echo $_POST['doc'];echo"<br>";
echo"<font face = 'Arial' color='red' size='4'><I>ID de Documento: </I></font>";echo $_POST['iddoc'];echo"<br>";
echo"<font face = 'Arial' color='red' size='4'><I>Ciudad: </I></font>";echo $_POST['Ciudad'];echo"<br>";
echo"<font face = 'Arial' color='red' size='4'><I>Direccion: </I></font>";echo $_POST['Direccion'];echo"<br>";
echo"<font face = 'Arial' color='red' size='4'><I>Telefono/Movil: </I></font>";echo $_POST['Telefono'];echo"<br>";
echo"<font face = 'Arial' color='red' size='4'><I>Correo: </I></font>";echo $_POST['Correo'];echo"<br>";
echo"<font face = 'Arial' color='#009405' size='4'><I></I></font>";echo"<br>";
echo"<font face = 'Arial' color='#009405' size='4'><I>Caracteristicas del Vehiculo</I></font>";echo"<br>";
echo"<font face = 'Arial' color='red' size='4'><I>Tipo de Vehiculo: </I></font>";echo $_POST['tipodevehiculo'];echo"<br>";
echo"<font face = 'Arial' color='red' size='4'><I>Marca: </I></font>";echo $_POST['marca'];echo"<br>";
echo"<font face = 'Arial' color='red' size='4'><I>Tipo de Combustible: </I></font>";echo $_POST['tipocombustible'];echo"<br>";
echo"<font face = 'Arial' color='red' size='4'><I>Cilindrada: </I></font>";echo $_POST['cilindrada'];echo"<br>";
echo"<font face = 'Arial' color='red' size='4'><I>Numero de Chasis: </I></font>";echo $_POST['numerodechasis'];echo"<br>";
echo"<font face = 'Arial' color='red' size='4'><I>Estado del Numero de Chasis: </I></font>";echo $_POST['estadonum'];echo"<br>";
echo"<font face = 'Arial' color='red' size='4'><I>Numero de Serie: </I></font>";echo $_POST['numserie'];echo"<br>";
echo"<font face = 'Arial' color='red' size='4'><I>Linea de Marca: </I></font>";echo $_POST['limarca'];echo"<br>";
echo"<font face = 'Arial' color='red' size='4'><I>Proposito: </I></font>";echo $_POST['proposito'];echo"<br>";
echo"<font face = 'Arial' color='red' size='4'><I>Tipo de Matricula: </I></font>";echo $_POST['tipodematricula'];echo"<br>";
echo"<font face = 'Arial' color='#009405' size='4'><I></I></font>";echo"<br>";
echo"<font face = 'Arial' color='#009405' size='4'><I>Matricula: </I></font>";echo"<br>";
echo"<font face = 'Arial' color='red' size='4'><I>Primera Letra: </I></font>";echo $_POST['letra1'];echo"<br>";
echo"<font face = 'Arial' color='red' size='4'><I>Segunda Letra: </I></font>";echo $_POST['letra2'];echo"<br>";
echo"<font face = 'Arial' color='red' size='4'><I>Tercera Letra: </I></font>";echo $_POST['letra3'];echo"<br>";
echo"<font face = 'Arial' color='red' size='4'><I>Primer Numero:</I></font>";echo $_POST['numero1'];echo"<br>";
echo"<font face = 'Arial' color='red' size='4'><I></I>Segundo Numero: </font>";echo $_POST['numero2'];echo"<br>";
echo"<font face = 'Arial' color='red' size='4'><I>Numero/Letra: </I></font>";echo $_POST['numletra'];echo"<br>";
echo"<font face = 'Arial' color='red' size='4'><I></I></font>";echo"<br>";
echo"<font face = 'Arial' color='#009405' size='4'><I>Datos del Comprador(Traspaso)</I></font>";echo"<br>";
echo"<font face = 'Arial' color='red' size='4'><I>Primer Apellido: </I></font>";echo $_POST['primerapellidot'];echo"<br>";
echo"<font face = 'Arial' color='red' size='4'><I>Segundo Apellido: </I></font>";echo $_POST['segundoapelidot'];echo"<br>";
echo"<font face = 'Arial' color='red' size='4'><I>Nombres: </I></font>";echo $_POST['nombret'];echo"<br>";
echo"<font face = 'Arial' color='red' size='4'><I>Tipo de Documento: </I></font>";echo $_POST['doct'];echo"<br>";
echo"<font face = 'Arial' color='red' size='4'><I>ID de Documento: </I></font>";echo $_POST['iddoct'];echo"<br>";
echo"<font face = 'Arial' color='red' size='4'><I>Ciudad: </I></font>";echo $_POST['CiudadT'];echo"<br>";
echo"<font face = 'Arial' color='red' size='4'><I>Direccion: </I></font>";echo $_POST['DireccionT'];echo"<br>";
echo"<font face = 'Arial' color='red' size='4'><I>Telefono/Movil: </I></font>";echo $_POST['TelefonoT'];echo"<br>";
echo"<font face = 'Arial' color='red' size='4'><I>Correo: </I></font>";echo $_POST['CorreoT'];echo"<br>";


