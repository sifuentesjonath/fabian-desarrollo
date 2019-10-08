<?php

    $c_name = $_POST["contact_name"];
    $c_email = $_POST["contact_email"];
    $c_subject = $_POST["contact_subject"];
    $c_message = $_POST["contact_message"];
    $horaSalida = $_POST["inHoraSalida"];
    $name = $_POST["reservation_name"];
    $r_email = $_POST["reservation_email"];
    $phone = $_POST["reservation_phone"];
    $total = $_POST["inTotal"];

    $to = "contacto@macparkk.mx";
    $subject = "Nuevo mensaje desde el sitio web";

    $message = '
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">
            <head>
                <script src="https://kit.fontawesome.com/25d240d836.js"></script>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                <!--[if !mso]><!-->
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <!--<![endif]-->
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <style type="text/css">
		            @import url("https://fonts.googleapis.com/css?family=Lato");

                    @media screen and (max-width: 480px) {
                        .two-column .column,
                        .three-column .column {
                            max-width: 100% !important;
                        }
                        .two-column img {
                            max-width: 100% !important;
                        }
                        .three-column img {
                            max-width: 50% !important;
                        }
                        *[class="hide"] {display:none !important;}
                        *[class="txt-mobile"] {font-size:18px !important; line-height:125% !important; padding-right:20px !important; padding-left:20px !important; }
                    }

                    @media screen and (min-width: 481px) and (max-width: 640px) {
                        .three-column .column {
                            max-width: 33% !important;
                        }
                        .two-column .column {
                            max-width: 50% !important;
                        }
                    }
	            </style>
                <!--[if (gte mso 9)|(IE)]>
                <style type="text/css">
                    table {border-collapse: collapse !important;}
                </style>
                <![endif]-->
            </head>
            <body style="margin:0 auto;">
                <table align="center" width="100%" bgcolor="#ffffff" style="max-width:600px;" border="0" cellspacing="0" cellpadding="0" >
                <!-- Header -->
                    <!-- logo -->
                    <tr>
                        <td align="center" style="padding-top:20px;padding-right:0;padding-bottom:20px;padding-left:0;" >
                            <a href="https://macparkk.mx/" target="_blank" border="0" style="text-decoration:none;" >
                            <img src="http://macparkk.mx/img/logo.png" alt="Macparkk Estacionamiento Aeropuerto" width="127" border="0" style="max-width:127px;height:auto;display:block;" />
                            </a>
                        </td>
                    </tr>
                    <!-- logo -->
                <!-- Fin Header -->
                <!-- Contenido -->
                <tr>
                    <td>
                        <h1>Hay un nuevo mensaje desde el sitio web. </h1>
                    </td>
                </tr>
                <!-- 3 columnas -->
                <tr>
                    <td align="center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;" >
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Asunto</th>
                                    <th scope="col">Mensaje</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>' . $c_name . '</td>
                                    <td>' . $c_email. '</td>
                                    <td>' . $c_subject . '</td>
                                    <td>' . $c_message . '</td>
                                </tr>
                            </tbody>
                        </table>
                        </a>
                    </td>
                </tr>
            </tr>
            <!-- contenido complementario 2 (3 columnas) -->
            <!-- Fin Contenido -->
            <!-- separador -->
            <tr>
                <td height="40" style="height:40px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;" ></td>
            </tr>
            <!-- separador -->
            <!-- Footer -->
            <tr>
                <td align="center" bgcolor="#f4f4f4" style="padding-top:30px;padding-right:0;padding-bottom:40px;padding-left:0;" >
                    <table width="100%" align="center" bgcolor="#f4f4f4" style="width:100%;max-width:600px;" valign="top" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;" >
                                <!-- redes sociales -->
                                <table align="center" width="100%" style="max-width:200px;;text-align:center;" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td style="padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;" >
                                            <a href="https://www.facebook.com/platzi" target="_blank" border="0" style="text-decoration:none;" >
                                                <i class="fab fa-facebook tm-color-white" style="font-size:24px;"></i>
                                            </a>
                                        </td>
                                            
                                        <td style="padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;" >
                                            <a href="https://www.instagram.com/platzi/" target="_blank" border="0" style="text-decoration:none;" >
                                                <i class="fab fa-instagram tm-color-white" style="font-size:24px;"></i>
                                            </a>
                                        </td>     
                                    </tr>
                                </table>
                                <!-- redes sociales -->
                            </td>
                        </tr>
                        <!-- info marca -->
                        <tr>
                            <td align="center" style="padding-top:20px;padding-right:10px;padding-bottom:0;padding-left:10px;font-family: Lato ,Arial,sans-serif;color:#1c3643;font-size:16px;text-align:center;">
                                Enviado con <span style="color:#dc3545;font-size:18px;">♥</span> por Relatibyte
                            </td>
                        </tr>
                        <!-- info marca -->
                        <!-- legales -->
                        <tr>
                            <td align="center" style="padding-top:30px;padding-right:10px;padding-bottom:10px;padding-left:10px;font-family:Lato,Arial,sans-serif;color:#666666;font-size:14px;text-align:center;">
                                Te enviamos esta confirmación de Una reservación en Macparkk
                            </td>
                        </tr>
                        <tr>
                            <!-- <td align="center" style="padding-top:0;padding-right:10px;padding-bottom:0;padding-left:10px;font-family:Lato,Arial,sans-serif;color:#666666;font-size:14px;text-align:center;" >
                                Lamentamos que te vayas, pero puedes <a href="https://macparkk./contacto/" target="_blank" border="0" style="text-decoration:underline;color:#0a8ecd;">Cancelar tu reservación aquí</a>. -->
                            </td>
                        </tr>
                        <!-- legales -->
                    </table>
                </td>
            </tr>
            <!-- Fin Footer -->
        </table>
    </body>
</html>
    ';

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <webmaster@macparkk.mx>' . "\r\n";
    $headers .= 'Cc: myboss@example.com' . "\r\n";

    mail($to,$subject,$message,$headers);

    header("Location: http://macparkk.mx/");
    die();
?>