<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<h1>Température</h1>
	
	<?php 

$json_url = "data.txt";
$json = file_get_contents($json_url);
$data = json_decode($json);

$bargraph_height = 161 + $data->temperature * 4 ;
$bargraph_top = 315 - $data->temperature * 4 ;

$datMod = 'data.txt';
      if (file_exists($datMod)) {
        echo "Le texte a été modifié le : " . date("d-m-Y H:i:s.", filectime($datMod));
      }

?>

<p>il fait <?php echo $data->temperature; ?>°C et humidite est <?php echo  $data->humidite; ?>%</p>

<div id="thermometer">

  <div id="bargraph" style="height:<?php echo $bargraph_height ?>px; top:<?php echo $bargraph_top ?>px"></div>
</div>

</body>
</html>


