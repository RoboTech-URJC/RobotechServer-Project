<?php

    require "/usr/share/php/libphp-phpmailer/class.phpmailer.php";
    require "/usr/share/php/libphp-phpmailer/class.smtp.php";

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $DNI = $_POST['DNI'];
    $mail = $_POST['URJC'];
    $degree = $_POST['degree'];
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

    $sql = "INSERT INTO members (NAME,SURNAME,DNI,URJC_MAIL,GRADO,PASSWORD,ACTIVATE) VALUES ('$name','$surname','$DNI','$mail','$degree','$pwd','0')";

    if (mysqli_query($conn, $sql)) {
          echo "New record created successfully";
          val_mail($mail);
    } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);


    function val_mail($to){

        $email_user = "robotechpruebas@gmail.com";
        // $email_password = "contrasena";  Aqui meter la contrasenna del email que sera el que envie
        $the_subject = "Email de validacion";
        $from_name = "Validacion de cuentas Robotech";
        $phpmailer = new PHPMailer();


        $phpmailer->Username = $email_user;
        $phpmailer->Password = $email_password;

        $phpmailer->SMTPSecure = 'ssl';
        $phpmailer->Host = "smtp.gmail.com";
        $phpmailer->Port = 465;
        $phpmailer->IsSMTP();
        $phpmailer->SMTPAuth = true;

        $phpmailer->setFrom($phpmailer->Username,$from_name);
        $phpmailer->AddAddress($to);

        $phpmailer->Subject = $the_subject;
        $phpmailer->Body ="Este es un mensaje para validar su cuenta en Robotech, porfavor pinche en el siguiente enlace:";
        $phpmailer->IsHTML(true);

        $phpmailer->Send();
    }

?>
