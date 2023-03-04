<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
</head>
<form method="POST" name="VaidrollTeam">
<table border="1">
<tr><th colspan="2">Datos del cliente</th></tr>
<tr><td>Nombre:</td><td><input type="text" name="txtnombre"></td></tr>
<tr><td>Fecha del evento:</td><td><input type="date" name="txtfecha"></td></tr>
<tr><td>Domicilio:</td><td><input type="text" name="txtdomicilio"></td></tr>
<tr><td>Delegación</td><td><input type="text" name="txtdistrito"></td></tr>
</table>

<table border="1">
<tr><th colspan="2">Servicio</th></tr>

<tr><td>Hora y precio:</td>
<td><select name="horayprecio" >
   <option value="0">Seleccionar</option>
   <option value="1">3pm a 5pm = MXN/400.00</option>
   <option value="2">5pm a 7pm = MXN/500.00</option>
</td></tr>
<tr><td>Agregar payasos:</td><td><input type="number" name="txtpayasos" value="0" min="0" max="5"> x (MXN/60.00).</td></tr>
<tr><td>Agregar muñecos:</td><td><input type="number" name="txtmunecos" value="0" min="0" max="6"> x (MXN/50.00)</td></tr>
<tr><td>Agregar bailarinas:</td><td><input type="number" name="txtbailarinas" value="0" min="0" max="9"> x (MXN/40.00)</td></tr>
<tr><td>Agregar magos:</td><td><input type="number" name="txtmagos" value="0" min="0" max="9"> x (MXN/80.00)</td></tr>
<tr><td>Decorar ambiente:</td>
<td><input  type="radio" name="decorarambiente" value="1" checked="true"> No (MXN/.0.00)
<input  type="radio" name="decorarambiente" value="2" > Si (MXN/150.00) 
</td></tr>
<tr><td>Grabar fiesta:</td>
	<td><input type="radio" name="grabarfiesta" value="1" checked="true"> No (MXN/0.00)</input>
  <input type="radio" name="grabarfiesta" value="2"> HD (MXN/100.00)</input>
  <input type="radio" name="grabarfiesta" value="3"> Full HD (MXN/.150.00)</input>
    <input type="radio" name="grabarfiesta" value="4"> Ultra HD (MXN/.200.00)</input> 
</td></tr>
<tr><td>Delegación evento:</td><td><select id="distritoevento" name="distritodelevento1" > 
   <option value="0">Seleccionar Delegacion</option>
   <option value="1">Álvaro Obregón</option>
   <option value="2">Azcapotzalco</option>
   <option value="3">Benito Juárez</option>
   <option value="4">Coyoacán</option>
	<option value="5">Cuauhtémoc (MXN/.50.00)</option>
	<option value="6">Gustavo A. Madero (MXN/.50.00)</option>
	<option value="7">Iztacalco (MXN/.50.00)</option>
</select></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="Cotizar" name="cotizarcliente" /></td></tr>
</table>
</form>
</html>

<?php
	
	if(isset($_POST['cotizarcliente']))
	{
	$nombre 	= $_POST['txtnombre'];
	$fecha 		= $_POST['txtfecha'];
	$domicilio 	= $_POST['txtdomicilio'];
	$distrito 	= $_POST['txtdistrito'];
	
	$payasosadicional 		= $_POST["txtpayasos"];
	$munecosadicional 		= $_POST["txtmunecos"];
	$bailarinasadicional 	= $_POST["txtbailarinas"];
	$magoadicional 			= $_POST["txtmagos"];

$tothora =0; $momentohora="";

$totdecorar=0; $momentodecora="";

$momentofiesta=""; $totfiesta=0;

$eventodistrito=""; $totdistrito=0;

$totpayasos 	= 	($payasosadicional*60);
$totmunecos 	= 	($munecosadicional*50);
$totbailarinas 	=	($bailarinasadicional*40);
$totmagos 		= 	($magoadicional*80);


$grabarfiesta = $_POST["grabarfiesta"];

if(isset($_POST['horayprecio'])){
    $select1 = $_POST['horayprecio'];
    switch ($select1) {
        case '1':
           $tothora=400;
			$momentohora="3pm a 5pm";
            break;
        case '2':
        $tothora=500;
		$momentohora="5pm a 7pm";
            break;
        default:
       
            break;
    }
}

if(isset($_POST['decorarambiente'])){
    $selectambiente = $_POST['decorarambiente'];
    switch ($selectambiente) {
        case '2':
		$momentodecora="Si";
		$totdecorar=150;
            break;
        case '1':
		$momentodecora="No";
		$totdecorar=0;
            break;
        default:
       
            break;
    }
}

if(isset($_POST['grabarfiesta'])){
    $selectambiente = $_POST['grabarfiesta'];
    switch ($selectambiente) {
        case '1':
		$momentofiesta="No";
		$totfiesta=0;
            break;
        case '2':
		$momentofiesta="HD";
		$totfiesta=100;
            break;
			 case '3':
		$momentofiesta="Full HD";
		$totfiesta=150;
            break;
			 case '4':
		$momentofiesta="Ultra HD";
		$totfiesta=200;
            break;
        default:
       
            break;
    }
}

/*VaidrollTeam*/
if(isset($_POST['distritodelevento1'])){
    $selectdistrito = $_POST['distritodelevento1'];
    switch ($selectdistrito) {
        case '1':
		$eventodistrito="Alvaro Obregon";
		$totdistrito=0;
            break;
        case '2':
				$eventodistrito="Azcapotzalco";
		$totdistrito=0;
            break;
			 case '3':
				$eventodistrito="Benito Juarez";
		$totdistrito=0;
            break;
			 case '4':
				$eventodistrito="Coyoacan";
		$totdistrito=0;
            break;
						 case '5':
				$eventodistrito="Cuauhtemoc";
		$totdistrito=50;
            break;
			case '6':
		$eventodistrito="Gustavo A. Madero";
		$totdistrito=50;
break;
						 case '7':
				$eventodistrito="Iztacalco";
		$totdistrito=50;
            break;
        default:
       
            break;
    }
}

echo "<h1>Reporte</h1>";
echo "<hr>";
echo "<b>Cliente:</b> 	$nombre		<br><br>";
echo "<b>Fecha:</b> 	$fecha		<br><br>";
echo "<b>Domicilio:</b>	$domicilio	<br><br>";
echo "<b>Distrito:</b> 	$distrito	<br><br>";

echo "<b>Hora:</b> 		$momentohora = MXN/.$tothora.00<br><br>"; 

echo "<b>Payasos contratados: </b>   	$payasosadicional x MXN/60.00 = MXN/.$totpayasos.00<br><br>";
echo "<b>Muñecos contratados:</b> 		$munecosadicional x MXN/50.00 = MXN/.$totmunecos.00<br><br>";
echo "<b>Bailarinas contratadas:</b> 	$bailarinasadicional x MXN/.40.00 = MXN/.$totbailarinas.00<br><br>";
echo "<b>Magos:</b> 					$magoadicional x MXN/80.00 = MXNS/		.$totmagos.00<br><br>";

echo "<b>Decorar ambiente:</b> 	$momentodecora 	= 	MXN/.	$totdecorar.	00<br><br>";
echo "<b>Grabar fiesta:</b> 	$momentofiesta 	= 	MXN/. $totfiesta.		00<br><br>";
echo "<b>Distrito de evento:</b>$eventodistrito =	MXN/.	$totdistrito.	00<br><br>";
echo "<hr>";
echo "<b>Total a pagar:</b> MXN/.".($tothora+$totpayasos+$totmunecos+$totbailarinas+$totmagos+$totdecorar+$totfiesta+$totdistrito).".00";


	}
?>