<!-- count numbers of days that left from today till Christmas -->

<?php

date_default_timezone_set('Europe/Prague');

$christmasEve = strtotime("2019/12/24");

$daysToChristmas = ceil(($christmasEve - time()) / 60 / 60 / 24);

echo "There are " . $daysToChristmas . " days until Christmas Eve.";

?>