<!-- Write a PHP script to calculate and display average temperature,
five lowest and highest temperatures.
Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64,
76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68,
73, 75, 79, 73
Expected Output :
Average Temperature is : 70.6
List of seven lowest temperatures : 60, 62, 63, 63, 64,
List of seven highest temperatures : 76, 78, 79, 81, 85 -->


<!DOCTYPE html>
<html>
<body>
<?php

$temperature = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64,
76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68,
73, 75, 79, 73);

//calculate average
$averageTemp = array_sum($temperature)/count($temperature);
echo "Average Temperature is :". ($averageTemp) . "<br>";

sort($temperature);

//lowest temperatures
$lowestTemperature = [];
for ($i = 0; $i < 5; $i++) {
    $lowestTemperature[] = $temperature[$i];
}

//highest temperatures
$highestTemperature = [];
$length = count($temperature);

for ($i = $length - 5; $i < $length; $i++) {
    $highestTemperature[] = $temperature[$i];
}
echo "List of five lowest temperatures:";
foreach ($lowestTemperature as $temp) {
    echo $temp . ", ";
}
echo "<br>List of five highest temperatures: ";
foreach ($highestTemperature as $temp) {
    echo $temp . ", ";
}

?> 
</body>
</html>
