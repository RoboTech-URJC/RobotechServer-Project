<?php

    $servername = "localhost";
    $database = "members";
    $username = "root";
    $password = "asddsa";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
    }


    $key = $_GET["key"];

    $sql = "SELECT RANDN_KEY FROM members WHERE RANDN_KEY = '$key'";

    $rs =mysqli_query($conn,$sql);

    if (mysqli_num_rows($rs)!=0){
        $sql = "UPDATE members SET ACTIVATE = '1' WHERE RANDN_KEY='$key'";
        if (mysqli_query($conn, $sql)) {
              echo "activate";
              header ("Location:../index.php");
        } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    mysqli_close($conn);

?>
