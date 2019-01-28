<?php

$dataPoints = array();

//include "../db/connect.php";
$sql = mysql_query("SELECT importe, procedencia FROM ingresos")
or die(mysql_error());
while($row = mysql_fetch_array( $sql )) {
    $data['label'] = $row['procedencia'];
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
        text: "Procedencia de ingresos"
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