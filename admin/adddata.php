<?php
session_start();
if ( isset( $_POST['submit'] ) ){
    include_once 'loginsystem/includes/dbh.inc.php';

   
    $p_name = $_POST['p_name'];
    $c_name = $_POST['c_name'];
    $p_status = $_POST['p_status'];
    $p_details = $_POST['p_details'];
    if(! $conn ) {
        die('Could not connect: ' . mysql_error());
    }
    
    $sql = "INSERT INTO project (p_name, c_name, p_status, p_details) 
    VALUES ('$p_name','$c_name','$p_status','$p_details')";
    
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
