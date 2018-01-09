<?php
ini_set("include_path", '/home/team6445/php:' . ini_get("include_path") );
require_once 'Calendar/Month/Weekdays.php';
$Month = new Calendar_Month_Weekdays(date('Y'), date('n'));
$Month->build();
echo "<div id="no-more-tables">";
echo "<table>\n";
echo ($Month->fetch());
while ($Day = $Month->fetch()) {
    if ($Day->isFirst()) {
        echo "<tr>\n";
    }

    if ($Day->isEmpty()) {
        echo "<td>&nbsp;</td>\n";
    } else {
        echo '<td>'.$Day->thisDay()."</td>\n";
    }

    if ($Day->isLast()) {
        echo "</tr>\n";
    }
}
?>