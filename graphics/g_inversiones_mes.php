<?php

$dataPoints = array();

include "../db/connect.php";

$ano_actual = date(Y);
$mes_actual = date(m);

$sql = mysql_query("SELECT SUM(valor_actual), fecha FROM inversiones ")
or die(mysql_error());

ob_start();
print_r($sql);
$nombre = ob_get_clean();
file_put_contents("C:\pruebas\ARCHIVO.txt",$nombre);

while($row = mysql_fetch_array( $sql )) {
    $data['label'] = $row['nombre_inversion'];
    $data['y'] = $row['valor'];
    array_push($dataPoints, $data);
}

?>

<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title: {
		text: "CMS Market Share - 2017"
	},
	axisY: {
		suffix: "%",/*
		scaleBreaks: {
			autoCalculate: true
		}*/
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0\"%\"",
		indexLabel: "{y}",
		indexLabelPlacement: "inside",
		indexLabelFontColor: "white",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>                              