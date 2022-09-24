<?php

$cities = array("Tokyo", "Mexico City", "New York City", "Mumbai, Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");

for ($i = 0; $i < COUNT($cities); $i++) {
    echo $cities{$i} . ", ";
}
for ($i = 0; $i < COUNT($cities); $i++) {
	 echo "<li>{$cities{$i}}</li>";
}

array_push($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing");

sort($cities);
var_dump($cities);

for ($i = 0; $i < COUNT($cities); $i++) {
	 echo "<li>{$cities{$i}}</li>";
}