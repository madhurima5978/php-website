<?php
    echo "Welcome!!";
    $severname = "localhost";
    $username = "root";
    $password = "";
    $database = "dbmad";
    

    //create a connection
    $conn = mysqli_connect($severname, $username, $password);
    //die if not successful
    if(!$conn)
    {
        die("Sorry failed to connect".mysqli_connect_error());
    }
    echo "connection sucessful";

    
?>