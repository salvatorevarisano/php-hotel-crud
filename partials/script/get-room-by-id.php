<?php
// open db connection
require_once __DIR__ . '/db-connection.php' ;

//get room details from id
$id = empty($_GET['id']) ? false : $_GET['id'] ;

if ($id) {
    // call db by room id 
    $stmt = $conn->
        prepare("SELECT `stanze`.`room_number`, `stanze`.`floor`, `stanze`.`beds`
            FROM `stanze`
            WHERE `stanze`.`id` = ?");
    $stmt->bind_param('s', $id);
    // execute
    $stmt->execute();
    // get results 
    $result = $stmt->get_result();
    if($result && $result->num_rows > 0) {
        $room_details = $result->fetch_assoc();
    }
}

// close db connection 
$conn->close();