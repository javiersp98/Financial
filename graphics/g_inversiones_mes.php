<?php

$dataPoints = array();

include "../db/connect.php";

$ano_actual = date(Y);
$mes_actual = date(m);

$sql = mysql_query("SELECT fecha_compra, valor_actual , valor_inicial FROM inversiones ")
or die(mysql_error());

ob_start();
print_r($sql);
$nombre = ob_get_clean();
file_put_contents("C:\pruebas\ARCHIVO.txt",$nombre);

while($row = mysql_fetch_array( $sql )) {
    $data['x'] = $row['fecha_compra'];
    $data['y'] = $row['valor_inicial'];
    array_push($dataPoints, $data);
}

?>

<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	title: {
		text: "Ericsson Stock Price - December 2017"
	},
	subtitles: [{
		text: "Currency in Swedish Krona"
	}],
	axisX: {
		valueFormatString: "DD MMM"
	},
	axisY: {
		includeZero: false,
		suffix: " kr"
	},
	data: [{
		type: "candlestick",
		xValueType: "date",
		yValueFormatString: "#,##0.0 kr",
		xValueFormatString: "DD MMM",
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