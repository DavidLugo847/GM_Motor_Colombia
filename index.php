<DOCTYPE html>
    
    <header>
    <link rel = "stylesheet" type = "text/css" href = "css/estilos.css">
    <link rel = "stylesheet" type = "text/css" href = "css/cssbutton.css">
    <meta http-equiv="Context-Type" content="txt/html; charset=utf-8"/>
    <title>Compra tu Carro Ya!</title>   
    </header>
    
    <body bgcolor="gold">
    <h1></h1> 
    
    
    <center><img src="Imagen/gm.png" width="1000px" he>
    <form action="datos.php" method="post">
    <h1>GENERAL MOTORS</h1>
    <h3><center>SEDE PRINCIPAL - PITALITO HUILA</center></h3>
    
    
    <table style="margin: 0 auto; text-align: center;">
    <tbody>
        <tr>
        <td><img src="Imagen/mintrans.png" width="180"></td>
        <td><img src="Imagen/runt.png"width="200"></td>
        <td><img src="Imagen/escudo.png"width="180"></td>
        </tr>
    </tbody>
    </table>
   
   
      
      <fieldset>
        <legend>Datos del Cliente</legend>
        <div style="text-align:center;">
           
    <table bordercolor="black" border="1" style="margin: 0 auto;text-align: center;">
    <tbody>
        <tr>
        <td rowspan="1" width="82">Primer Apellido</td>
        <td rowspan="1" width="82">Segundo Apellido</td>
        <td rowspan="1" width="82">Nombres</td>
        <td colspan="4" width="82">Tipo de Documento</td>
        <td rowspan="1" width="82">ID de Documento</td>
        </tr>
        <tr>
          <td><input type="text" name="primerapellido" value="" maxlenght="15"></td>
          <td><input type="text" name="segundoapellido" value="" maxlenght="15"></td>
          <td><input type="text" name="nombres" value="" maxlenght="15"></td>
          <td><input type="radio" name="doc" value="CC" checked="checked">C.C</td>
          <td><input type="radio" name="doc" value="NIT">NIT</td>
          <td><input type="radio" name="doc" value="Cedula de Extrangeria">C.E</td>
          <td><input type="radio" name="doc" value="Pasaporte">PA</td>
          <td> <input type="text" name="iddoc" value="" maxlenght="15"></td>
       </tr>
       <table bordercolor="black" border="1" style="margin: 0 auto;text-align: center;">
       <tbody>
       <tr>
          <td rowspan="1" width="">Ciudad</td>
          <td rowspan="1" width="">Direccion</td>
          <td rowspan="1" width="">Telefono/Movil</td>
          <td rowspan="1" width="">Correo</td>
       </tr>
       <tr>
       <td><input type="text" name="Ciudad" size="" value="" maxlenght="15"></td>
       <td><input type="text" name="Direccion" size="" value="" maxlenght="15"></td>
       <td><input type="text" name="Telefono" size="" value="" maxlenght="15"></td>
       <td><input type="text" name="Correo" size="" value="" maxlenght="15"></td>
       </tr>
       
    </tbody>
    </table>
    </fieldset>
    
    <fieldset>
    <legend>Producto de Compra</legend>
     <div style="text-align:center;">
           
    <table bordercolor="black" border="1" style="margin: 0 auto;text-align: center;"
    <tbody>
    <tr>
        <td colspan="1" width="">Tipo de Vehiculo</td>
        <td rowspan="1" width="">Marca</td>
        <td rowspan="1" width="">Tipo de Combustible</td>
        <td rowspan="1" width="">Cilindrada</td>
        <td rowspan="1" width="">Numero de Chasis</td>
        <td colspan="2" width="">Estado del Numero de Chasis</td>
     
    </tr>
    <tr>
    <td><select width="" name="tipodevehiculo" value="">
        <option>AUTOMOVIL</option>
        <option>BUS</option>
        <option>BUSETA</option>
        <option>CAMION</option>
        <option>CAMIONETA</option>
        <option>CAMPERO</option>
        <option>MICROBUS</option>
        <option>MOTOCICLETA</option>
        <option>MOTOCARRO</option>
        <option>MOTOTRICICLO</option>
        <option>TRACTOCAMION</option>
        <option>VOLQUETA</option>
        <option>OTRO</option>
        </select></td>
   
    <td><input type="text" width="" name="marca" value=""></input>
        
        <td><select width="" name="tipocombustible" value="">
        <option>GASOLINA</option>
        <option>DIESEL</option>
        <option>ELECTRICIDAD</option>
        <option>GAS PROPANO</option>
        </select></td>
   
    <td><input type="text" width="" maxlength="30" name="cilindrada" value=""></input></td>
    <td><input type="text" width="" maxlength="30" name="numerodechasis" value=""></input></td>
    <td><input type="radio" width="" name="estadonum" value="Original" checked="checked">Original</input></td>
    <td><input type="radio" width="" name="estadonum" value="Regrabado">Regrabado</input></td>
        
    </tr>
    </tbody>
    </table>
    </div>
    </fieldset>
        
    <fieldset>
    <legend>Tramites legales del Vehiculo</legend>
    <table bordercolor="black" border="1" style="margin: 0 auto;text-align: center;"
    <tbody>
    <div style="text-align:center;">
    <tr>
        <td colspan="1" width="500px">Numero de Serie</td>
        <td colspan="1" width=500px"">Linea de Marca</td>
        <td colspan="1" width="500px">Proposito</td>
        
    </tr>
    <tr>
        <td><input type="text" maxlength="30" name="numserie" value=""></td>
          <td><input type="text" maxlength="30" name="limarca" value=""></td>
          <td><input type="text" maxlength="30" name="proposito" value=""></td>
          
  
    </tr>
    </div>
    </tbody>
    </table>
    <table bordercolor="black" border="1" style="margin: 0 auto; text-align: center;"
    <tbody>
    <div style="text-align:center;">
    <tr>
        <td colspan="6" >Tipo de Matricula</td>
        <td colspan="7" >Matricula</td>
    </tr>
    <tr>
        <td width="20px"><input type="checkbox" name="tipodematricula" value="Servicio Particular" checked="checked">S.Particular</td>
        <td width="20px"><input type="checkbox" name="tipodematricula" value="Servicio Publico">S.Publico</td>
        <td width="20px"><input type="checkbox" name="tipodematricula" value="Servicio Privado">S.Privado</td>
        <td width="20px"><input type="checkbox" name="tipodematricula" value="Servicio Estatal">S.Estatal</td>
        <td width="20px"><input type="checkbox" name="tipodematricula" value="Servicio Industrial">S.Industrial</td>        
        <td width="20px"><input type="checkbox" name="tipodematricula" value="Servicio Publico">S.Publico</td>
        <td width="50px"><input type="text" size="2" width="2" name="letra1" maxlength="2" value=""></td>
        <td width="50px"><input type="text" size="2" width="2" name="letra2" maxlength="2" value=""></td>
        <td width="50px"><input type="text" size="2" width="2" name="letra3" maxlength="2" value=""></td>
        <td width="50px">:</td>
        <td width="50px"><input type="text" size="2" width="2" name="numero1" maxlength="2" value=""></td>
        <td width="50px"><input type="text" size="2" width="2" name="numero2" maxlength="2" value=""></td>
        <td width="50px"><input type="text" size="2" width="2" name="numletra" maxlength="2" value=""></td>

    </tr>
    </div>
    </tbody>
    </table>
    </fieldset>
    
    <fieldset>
    <legend>Datos del Comprador(Traspaso)</legend>
        <div style="text-align:center;">
           
    <table bordercolor="black" border="1" style="margin: 0 auto;text-align: center;">
    <tbody>
        <tr>
        <td rowspan="1" width="82">Primer Apellido</td>
        <td rowspan="1" width="82">Segundo Apellido</td>
        <td rowspan="1" width="82">Nombres</td>
        <td colspan="3" width="82">Tipo de Documento</td>
        <td rowspan="1" width="82">ID de Documento</td>
        </tr>
        <tr>
          <td><input type="text" name="primerapellidot" value="" maxlenght="15"></td>
          <td><input type="text" name="segundoapelidot" value="" maxlenght="15"></td>
          <td><input type="text" name="nombret" value="" maxlenght="15"></td>
          <td class="doc"><input type="radio" name="doct" value="Cedula de Ciudadania" checked="checked">C.C</td>
          <td class="doc"><input type="radio" name="doct" value="Cedula de Extrangeria">C.E</td>
          <td class="doc"><input type="radio" name="doct" value="Pasaporte">PA</td>
          <td> <input type="text" name="iddoct" value="" maxlenght="15"></td>
       </tr>
       <table bordercolor="black" border="1" style="margin: 0 auto;text-align: center;">
       <tbody>
       <tr>
          <td rowspan="1" width="">Ciudad</td>
          <td rowspan="1" width="">Direccion</td>
          <td rowspan="1" width="">Telefono/Movil</td>
          <td rowspan="1" width="">Correo</td>
       </tr>
       <tr>
       <td><input type="text" name="CiudadT" size="" value="" maxlenght="15"></td>
       <td><input type="text" name="DireccionT" size="" value="" maxlenght="15"></td>
       <td><input type="text" name="TelefonoT" size="" value="" maxlenght="15"></td>
       <td><input type="text" name="CorreoT" size="" value="" maxlenght="15"></td>
       </tr>
       
    </tbody>
    </table>
    </fieldset>
    
   <div style="text-align: center;">
            <input class="guardar" type="submit" name="guardar" value="Guardar">
            <input class="reset" type="reset" name="reset" value="Reset">
            
             </div>




          </tbody>
          
    </fieldset>
      
</body>

</html>