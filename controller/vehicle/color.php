<?php

require_once '../dbconnection.php';

if(isset($_POST['color'])){
    $color = $_POST['color'];
    $sql = "INSERT INTO color(color.color,color.`status`) VALUES('$color',1)";
    $result = $conn->query($sql);
    if($result){
        echo 'Color added successfully';
    }else{
        echo 'Failed to add color';
    }
}else{
    echo 'Missing parameter';
}
?>