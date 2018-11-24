<?php
    $role = $_POST['role'];
    $mail = $_POST['mail'];
    $pwd = $_POST['password'];

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

    $sql = "SELECT ACTIVATE FROM members WHERE CORP_MAIL = '$mail' AND PASSWORD = '$pwd'";
    $rs =mysqli_query($conn,$sql);

    if (mysqli_num_rows($rs)!=0){
        $query = mysqli_fetch_row($rs);
        $active = $query[0];
        echo $activate;
        if ($active == 1){
            echo "Usuario correcto";
            setcookie("misitio_userid","$id_usuario",time()+3600);
            header ("Location:../index.php");
        }else
            echo "Cuenta no validada";
    }
    else
    	echo "Usuario o password incorrectos";


 ?>
