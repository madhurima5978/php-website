<?php
            $severname = 'localhost';
            $username = 'root';
            $password = '';
            $database = 'dbmad';
            

            //create a connection
            $conn = mysqli_connect($severname, $username, $password, $database);
            //die if not successful
            if(!$conn)
            {
                die("Sorry failed to connect".mysqli_connect_error());
            }
            else
            {
                echo "connection sucessful";
            }
?>