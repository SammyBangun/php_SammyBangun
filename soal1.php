<?php

$step = $_POST['step'] ?? 0;

switch ($step) {
    case 0:
        include "utils/soal1/step1.php";
        break;

    case 1:
        include "utils/soal1/step2.php";
        break;

    case 2:
        include "utils/soal1/step3.php";
        break;

    default:
        echo "Step tidak valid!";
}
