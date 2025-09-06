<?php
include "./utils/db_connect.php";

$sql = "INSERT INTO users (name, email) VALUES ('Alice', 'alice@example.com')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $conn->error;
}

$result = $conn->query("SELECT * FROM users");
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Email: " . $row["email"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
