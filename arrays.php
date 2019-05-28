<!-- Place the following cities into an array:
London, Paris, Amsterdam, New York, Berlin, Brisbane
Sort the cities alphabetically.
Display the cities as an ordered list. Your output will be like this:
1. Amsterdam
2. Berlin
3. Brisbane
4. London
5. New York
6. Paris
Now add the following cities by using the array_push function:
Sydney, Helsinki, Beijing, Dublin, Rome
Sort the cities alphabetically.
Display the cities as an ordered list. -->

<?php

$cities = array('London', 'Tokyo', 'New York', 'Berlin', 'Brisbane');

sort($cities);

echo '<ul>';

foreach($cities as $city){

echo "<li>$city</li>";

}

echo '<br>';

array_push($cities, 'Sydney','Helsinki', 'Beijing', 'Dublin', 'Rome');

sort($cities);

foreach($cities as $city){

echo "<li>$city</li>";

}

echo '</ul>';