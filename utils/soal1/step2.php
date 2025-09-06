<?php
$rows = (int)$_POST['rows'];
$cols = (int)$_POST['cols'];
?>

<form method="post" action="soal1.php">
    <input type="hidden" name="step" value="2">
    <input type="hidden" name="rows" value="<?= $rows ?>">
    <input type="hidden" name="cols" value="<?= $cols ?>">

    <?php
    for ($i = 1; $i <= $rows; $i++) {
        for ($j = 1; $j <= $cols; $j++) {
            echo "$i.$j: <input type='text' name='data[$i][$j]'> ";
        }
        echo "<br>";
    }
    ?>
    <button type="submit">Submit</button>
</form>