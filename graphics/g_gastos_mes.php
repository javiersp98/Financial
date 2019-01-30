<?php

$dataPoints = array();

include "../db/connect.php";

$ano_actual = date(Y);
$mes_actual = date(m);

$sql = mysql_query("SELECT importe, concepto FROM gastos WHERE fecha LIKE '$ano_actual%$mes_actual%' ")
or die(mysql_error());

ob_start();
print_r($sql);
$nombre = ob_get_clean();
file_put_contents("C:\pruebas\ARCHIVO.txt",$nombre);

while($row = mysql_fetch_array( $sql )) {
    $data['label'] = $row['concepto'];
    $data['y'] = $row['importe'];
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
    exportEnabled: true,
    title:{
        text: "Gastos de este mes"
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
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>