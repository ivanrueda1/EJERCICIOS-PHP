<?php
echo "<h1>Ejemplo 1 FECHA Y HORA </h1>";
echo "Hoy es "    . date ("Y/m/d") . "<br>";
echo "Hoy es "   . date("Y.m.d") . "<br>";
echo "Hoy es"    .    date("Y-m-d") . "<br>";
echo "Hoy es"    . date("l");
?>  

<hr>

<?php
echo "<h1>Ejemplo 2 FECHA Y HORA </h1>";
echo date("Y");
?>

<hr>

<?php
echo "<h1>Ejemplo 3 FECHA Y HORA </h1>";
echo "The time is " . date("h:i:sa");
?>

<hr>
<?php
echo "<h1>Ejemplo 4 FECHA Y HORA </h1>";
date_default_timezone_set("America/New_York");
echo "La hora es  " . date("h:i:sa");
?>

<hr>

<?php
echo "<h1>Ejemplo 5 FECHA Y HORA </h1>"; 
// El siguiente ejemplo crea una fecha y hora con la función a partir de una serie de parámetros de la función:
$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>

<hr>
<?php
echo "<h1>Ejemplo 6 FECHA Y HORA </h1>"; 
$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>

<hr>

<?php
echo "<h1>Ejemplo 7 FECHA Y HORA </h1>"; 
$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
?>

<hr>

<?php
echo "<h1>Ejemplo 8 FECHA Y HORA </h1>"; 
$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks", $startdate);
// El ejemplo muestra las fechas para los próximos seis sábados
while ($startdate < $enddate) {
    echo date("M d", $startdate) . "<br>";
    $startdate = strtotime("+1 week", $startdate);
}
?>

<hr>

<?php
echo "<h1>Ejemplo 9 FECHA Y HORA </h1>";
$d1=strtotime("July 04");
$d2=ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ." days until 4th of July.";
?>





