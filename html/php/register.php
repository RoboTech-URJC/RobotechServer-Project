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
    Check connection
    if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
    }

    $key = generateRandomString();

    $dir_subida = '../uploads/';
    $fichero_subido = $dir_subida . basename($_FILES['adj']['name']);
    if (move_uploaded_file($_FILES['adj']['tmp_name'], $fichero_subido)) {
        echo "El fichero es válido y se subió con éxito.\n";
    } else {
        echo "¡Posible ataque de subida de ficheros!\n";
    }

    $sql = "INSERT INTO members (NAME,SURNAME,DNI,URJC_MAIL,GRADO,PASSWORD,ACTIVATE,RANDN_KEY) VALUES ('$name','$surname','$DNI','$mail','$degree','$pwd','0','$key')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        val_mail($mail,$key);
        header ("Location:../index.php");
    } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);

    function val_mail($to,$key){

        $body = '<html>

                     </head>

                        <title>Validacion de cuenta</title>

                     </head>

                     <body>

                     <p>Hola que tal, nos da gusto que nos elijas para trabajar en nuestra empresa. Sin duda esperamos mucho de ti.</p>

                     <br>

                     <p>Ya casi acompletas tu registro, solo falta validar tu cuenta. Para ello solo sigue el siguiente enlace.</p>

                     <br>

                     <p>Copia el siguiente enlace en tu navegador : localhost/html/php/validation.php?key='.$key.'</p>

                     <br>

                     </body>

                 </html>';

        $email_user = "robotechpruebas@gmail.com";
        $email_password = "jijijaja";  //Aqui meter la contrasenna del email que sera el que envie
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
        $phpmailer->Body = $body;
        $phpmailer->IsHTML(true);

        $phpmailer->Send();
    }

    function generateRandomString($length = 20) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
    }

?>
