<?php
require "utils/soal2/db.php";
require "utils/soal2/function.php";

$search = $_GET['search'] ?? '';
$result = searchHobi($conn, $search);
?>

<form method="get">
    Cari berdasarkan hobi: <input type="text" name="search" value="<?= htmlspecialchars($search) ?>">
    <button type="submit">Search</button>
</form>

<table border="1" cellpadding="5">
    <tr>
        <th>Hobi</th>
        <th>Jumlah Person</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= htmlspecialchars($row['hobi']) ?></td>
            <td><?= $row['jumlah_person'] ?></td>
        </tr>
    <?php endwhile; ?>
</table>