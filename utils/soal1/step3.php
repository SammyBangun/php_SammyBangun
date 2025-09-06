<?php
$rows = (int)$_POST['rows'];
$cols = (int)$_POST['cols'];
$data = $_POST['data'];

for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $cols; $j++) {
        $val = htmlspecialchars($data[$i][$j]);
        echo "$i.$j: $val<br>";
    }
}
