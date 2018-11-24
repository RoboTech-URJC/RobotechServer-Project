<!DOCTYPE html>
<html lang="en" >

    <head>
        <meta charset="UTF-8">
        <title>Miembros</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script  src="js/login.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

        <link rel='stylesheet' href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css'>

        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <link rel="stylesheet" href="css/style.css">
    </head>


    <?php
        include 'header.html';
    ?>

    <body>
        <span>
            <div class="container bg-slide">
                <div class="form-group">
                    <div class="btn-group">
                        <button class="signup-btn"><i class="fa fa-user"> </i>&nbsp;Registrarse</button>
                        <button class="login-btn"><i class="fa fa-lock"> </i>&nbsp;Login</button>
                    </div>
                    <form class="register-form" name="registerform" action="php/register.php" method="POST" >
                        <input class="form-control" type="text" name = "name" id = "name" value = "Nombre" required="required"/>
                        <input class="form-control" type="text" name = "surname" id = "surname" value="Apellidos" required="required"/>
                        <input class="form-control" type="text" name = "DNI" id = "DNI" value="DNI" required="required" onchange="return nif_validation()"/>
                        <input class="form-control" type="text" name = "URJC" id = "URJC" value="URJC Mail" required="required" onchange="return mail_validation()"/>
                        <select class="login-option" id="degree" name="degree">
                            <option value="ISAM" selected="selected">ISAM</option>
                            <option value="Tecnologias de la Telecomunicacion">Tecnologias de la Telecomunicacion</option>
                            <option value="Telematica">Telematica</option>
                        </select>
                        <input class="form-control" type="password" name = "password" id = "pass" value="" required="required" onchange="return pwd_validation()"/>
                        <input class="form-control" type="password" id = "pass_confirm" value="" required="required" onchange="return pwd_confirmation()"/>
                        <button class="btn-submit" type="submit">Registrarme</button>
                    </form>
                    <form class="secure-login" name="loginform" action="php/log.php"  method="POST">
                        <select class="login-option" name = "role">
                            <option value="Member">Socio</option>
                            <option value="Chief">Junta Administrativa</option>
                        </select>
                        <input class="form-control" type="email" name ="mail" value="Email" required="required"/>
                        <input class="form-control" type="password" name = "password" id = "pass" value=""/>
                        <button class="btn-submit" type="submit">Login</button>
                    </form>
                </div>
            </div>
        </span>
    </body>

</html>
