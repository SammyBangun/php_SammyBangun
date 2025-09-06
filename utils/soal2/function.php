<?php
function searchHobi($conn, $search = '')
{
    $sql = "SELECT hobi, COUNT(DISTINCT person_id) AS jumlah_person
            FROM hobi
            WHERE hobi LIKE ?
            GROUP BY hobi
            ORDER BY jumlah_person DESC";

    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Gagal: " . $conn->error);
    }

    $search_param = "%$search%";
    $stmt->bind_param("s", $search_param);
    $stmt->execute();
    return $stmt->get_result();
}
