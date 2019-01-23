<html>
<head>

<?php
//include "navbars.php";
include "db/connect.php";
?>

<link href="css/patrimonio.css" rel="stylesheet" type="text/css"/>

</head>
<body>

<?php 
$dataPoints2 = array(
    array("label"=> "Food + Drinks", "y"=> 590),
    array("label"=> "Activities and Entertainments", "y"=> 261),
    array("label"=> "Health and Fitness", "y"=> 158),
    array("label"=> "Shopping & Misc", "y"=> 72),
    array("label"=> "Transportation", "y"=> 191),
    array("label"=> "Rent", "y"=> 573),
    array("label"=> "Travel Insurance", "y"=> 126)
);


$res = mysql_query("SELECT * FROM cuentas")
or die(mysql_error());
//$res = $handle->fetchAll(\PDO::FETCH_OBJ);
		
foreach($res as $row){
    $cuenta = $row['nombre'];
    $saldo = $row['saldo'];
    array_push($dataPoints, array("label"=> $cuenta, "y"=> $saldo));
}

ob_start();
print_r($res);
$nombre = ob_get_clean();
file_put_contents("C:\pruebas\ARCHIVO.txt",$nombre);

?>

<script>
window.onload = function () { 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	title:{
		text: "Distribucion de patrimonio"
	},
	subtitles: [{
		text: ""
	}],
	data: [{
		type: "pie",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - #percent%",
		yValueFormatString: "€#,##0",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>

<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

</body>
</html>