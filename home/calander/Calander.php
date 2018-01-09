<?php
/**
 * Created by PhpStorm.
 * User: 652267
 * Date: 1/8/2018
 * Time: 4:28 PM
 */
ini_set("include_path", '/home/team6445/php:' . ini_get("include_path") );
<?php
require_once 'Calendar/Month/Weekdays.php';

$Month = new Calendar_Month_Weekdays(date('Y'), date('n'));

$Month->build();

echo "<table>\n";

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

echo "</table>\n";
?>