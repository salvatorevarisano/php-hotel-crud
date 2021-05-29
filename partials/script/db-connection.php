<?php
/**
    get database connection
 */

 // info for connection
 $db_host = 'localhost';
 $db_user = 'root';
 $db_password = 'root';
 $db_name = 'db_hotel';
 
 // open connection
 $conn = new mysqli( 
     $db_host, 
     $db_user,
     $db_password,
     $db_name,
 );
 var_dump($conn);
 
 //check
 if( $conn && $conn->connect_error ) {
     die( 'Connection error ' . $conn->connect_error );
 } 