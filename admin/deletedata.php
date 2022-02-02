<?php
session_start();
if ( isset( $_GET['delete'] ) ){
    include_once 'loginsystem/includes/dbh.inc.php';
    if(! $conn ) {
        die('Could not connect: ' . mysql_error());
    }
    $id = $_GET['delete'];
    $sql = "DELETE FROM project WHERE p_id = $id";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: ./index.php");
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    

    $conn->close();

}else{
    echo "Form not submitted";
}

?>
