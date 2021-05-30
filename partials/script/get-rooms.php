<?php
// open db connection
require_once __DIR__ . '/db-connection.php' ;

//get data of rooms from database
$sql ="SELECT `stanze`.`id`, `stanze`.`room_number` FROM `stanze`";
$result = $conn->query($sql);

if( $result && $result->num_rows > 0) {
    $rooms = [];
    while ($row = $result->fetch_assoc()) {
        //var_dump($row);
        $rooms[] = $row;
    }
}

// close database connection
$conn->close();
