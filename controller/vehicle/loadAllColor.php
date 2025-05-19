<?php

require_once '../dbconnection.php';

$sql = "SELECT * FROM color WHERE status = 1";
$result = $conn->query($sql);

if ($result && $result->rowCount() > 0) {
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo '
        <tr>
            <td>' . $row['id'] . '</td>
            <td>' . $row['color'] . '</td>
            <td>
            <a class="btn btn-outline-danger">
            <i class="fa-solid fa-trash"></i>
            </a>
            </td>
        </tr>
        ';
    }
}

