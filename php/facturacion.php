<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');


header("Content-Type: application/json");


$data = json_decode(file_get_contents("php://input"));


    $rfc = $data->rfc;
    $email = $data->email;
    $metodo= $data->metodo;
    $monto= $dat->monto;
    $pase= $data->Nsalida;

    if (!$data->razon_social==null) {
        $razon_social = $data->razon_social;
    $direccion = $data->direccion;
    $municipio = $data->municipio;
    $colonia = $data->colonia;
    $estado = $data->estado;
    $cp = $data->codigo_postal;
    


    $to = "facturacion@macparkk.mx";
    $subject = "Nueva petición de Factura para " . $email;

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
                        <h1>Nueva petición de Factura. </h1>
                    </td>
                </tr>
                <!-- 3 columnas -->
                <tr>
                    <td align="center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;" >
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">RFC</th>
                                    <th scope="col">Dirección</th>
                                    <th scope="col">Municipio</th>
                                    <th scope="col">Colonia</th>
                                    <th scope="col">Estado </th>
                                    <th scope="col">Código Postal</th>


                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>'.$rfc. '</td>
                                    <td>' . $direccion .'</td>
                                    <td>' . $municipio . '</td>
                                    <td>' . $colonia . '</td>
                                    <td>' . $estado . '</td>
                                    <td>' . $cp . '</td>
                                 
                                </tr>
                            </tbody>
                        </table>

                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Email</th>
                                    <th scope="col">Tipo de pago</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Monto</th>
                                    <th scope="col">Pase de salida</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>' . $email . '</td>
                                    <td>' . $metodo . '</td>
                                    <td>' . $razon_social . '</td>
                                    <td>' . $monto . '</td>
                                    <td>' . $pase . '</td>
                                 
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
                                Te enviamos los datos de facturación de este cliente
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

    mail($to,$subject,$message,$headers);

    /* ----- Email to client ----- */

    $to = $email;
    $subject = "Tu petición de factura ha sido recibida";

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
            <!-- contenido destacado -->
            <tr>
                <td align="center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;" >
                    <a href="https://macparkk.mx/" target="_blank" border="0" style="text-decoration:none;" >
                    <img src="http://macparkk.mx/img/img-04.jpg" alt="Reservación" width="100%" border="0" style="max-width:600px;height:auto;display:block;" />
                    </a>
                </td>
            </tr>
            <!-- contenido destacado -->
            <!-- separador -->
            <tr>
                <td height="20" style="height:20px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;" ></td>
            </tr>
            <!-- separador -->
            <tr>
                <!-- 2 columnas) -->
                <td class="two-column" align="center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;text-align:center;font-size:0;" >
                    <!-- columna izquierda -->
                    <table class="column" width="100%" style="max-width:300px;display:inline-block;" valign="top" border="0" cellspacing="0" cellpadding="0" >
                        <tr>
                            <td style="padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;" >
                                <!-- curso 1 -->
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" >
                                    <tr>
                                        <!-- curso 1 - imagen -->
                                        <td style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;" >
                                            <a href="https://macparkk.mx" target="_blank" border="0" style="text-decoration:none;" >
                                            <img src="http://macparkk.mx/img/img-01.jpg" alt="Curso de Marketing" width="100%"  border="0" style="max-width:280px;height:auto;" />
                                            </a>
                                        </td>
                                        <!-- curso 1 - imagen -->
                                    </tr>
                                    <tr>
                                        <!-- curso 1 - texto -->
                                        <td height="60" style="height:60px;padding-top:10px;padding-right:0;padding-bottom:10px;padding-left:0;font-family:Lato,Arial,sans-serif;font-size:16px;line-height:20px;color:#333333;text-align:left;" >
                                            <b>Vamos por ti </b>, y te llevamos a cualquier hora, tan solo en unos minutos, solo tienes que solicitarlo.
                                        </td>
                                        <!-- curso 1 - texto -->
                                    </tr>
                                    <tr>
                                        <!-- curso 1 - cta -->
                                        <td height="40" style="height:40px;padding-top:5px;padding-right:10px;padding-bottom:5px;padding-left:10px;background-color:#dc3545;border-radius:6px;font-family:Lato,Arial,sans-serif;font-size:18px;color:#ffffff;text-align:center;" >
                                            <a href="https://macparkk./cursos/email-marketing/" target="_blank" border="0" style="text-decoration:none;font-family:Lato,Arial,sans-serif;color:#ffffff;" >
                                            Contáctanos
                                            </a>
                                        </td>
                                        <!-- curso 1 - cta -->
                                    </tr>
                                </table>
                                <!-- curso 1 -->
                            </td>
                        </tr>
                    </table>
                    <!-- columna derecha -->
                    <table class="column" width="100%" style="max-width:300px;display:inline-block;" valign="top" border="0" cellspacing="0" cellpadding="0" >
                        <tr>
                            <td style="padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;" >
                                <!-- curso 2 -->
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" >
                                    <tr>
                                        <!-- curso 2 - imagen -->
                                        <td style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;" >
                                            <a href="https://macparkk./cursos/google-analytics/" target="_blank" border="0" style="text-decoration:none;" >
                                            <img src="http://macparkk.mx/img/img-03.jpg" alt="Curso Profesional de Google Analytics" width="100%" border="0" style="max-width:280px;height:auto;" />
                                            </a>
                                        </td>
                                        <!-- curso 2 - imagen -->
                                    </tr>
                                    <tr>
                                        <!-- curso 2 - texto -->
                                        <td height="60" style="height:60px;padding-top:10px;padding-right:0;padding-bottom:10px;padding-left:0;font-family:Lato,Arial,sans-serif;font-size:16px;line-height:20px;color:#333333;text-align:left;" >
                                            <b>Nosotros somos el mejor</b>, estacionamiento, y para nosotros eres lo más importante.
                                        </td>
                                        <!-- curso 2 - texto -->
                                    </tr>
                                    <tr>
                                        <!-- curso 2 - cta -->
                                        <td height="40" style="height:40px;padding-top:5px;padding-right:10px;padding-bottom:5px;padding-left:10px;background-color:#dc3545;border-radius:6px;font-family:Lato,Arial,sans-serif;font-size:18px;color:#ffffff;text-align:center;" >
                                            <a href="https://macparkk./cursos/google-analytics/" target="_blank" border="0" style="text-decoration:none;font-family:Lato,Arial,sans-serif;color:#ffffff;" >
                                            Saber más de nosotros
                                            </a>
                                        </td>
                                        <!-- curso 2 - cta -->
                                    </tr>
                                </table>
                                <!-- curso 2 -->
                            </td>
                        </tr>
                    </table>
                </td>
                <!-- fin 2 columnas -->
            </tr>
            <tr>
                    <td>
                        <h1> Confirmación de facturación.</h1>
                    </td>
                </tr>
                <!-- 3 columnas -->
                <tr>
                        <td align="center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;" >
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">RFC</th>
                                    <th scope="col">Dirección</th>
                                    <th scope="col">Municipio</th>
                                    <th scope="col">Colonia</th>
                                    <th scope="col">Estado </th>
                                    <th scope="col">Código Postal</th>


                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>'.$rfc. '</td>
                                    <td>' . $direccion .'</td>
                                    <td>' . $municipio . '</td>
                                    <td>' . $colonia . '</td>
                                    <td>' . $estado . '</td>
                                    <td>' . $cp . '</td>
                                 
                                </tr>
                            </tbody>
                        </table>

                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Email</th>
                                    <th scope="col">Tipo de pago</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Monto</th>
                                    <th scope="col">Pase de salida</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>' . $email . '</td>
                                    <td>' . $metodo . '</td>
                                    <td>' . $razon_social . '</td>
                                    <td>' . $monto . '</td>
                                    <td>' . $pase . '</td>
                                 
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
                            <td align="center" style="padding-top:20px;padding-right:10px;padding-bottom:0;padding-left:10px;font-family:Lato,Arial,sans-serif;color:#1c3643;font-size:16px;text-align:center;">
                                Enviado con <span style="color:#dc3545;font-size:18px;">♥</span> por Relatibyte
                            </td>
                        </tr>
                        <!-- info marca -->
                        <!-- legales -->
                        <tr>
                            <td align="center" style="padding-top:30px;padding-right:10px;padding-bottom:10px;padding-left:10px;font-family:Lato,Arial,sans-serif;color:#666666;font-size:14px;text-align:center;">
                                Te enviamos esta confirmación de tu lugar en Mac Parkk.
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

    mail($to,$subject,$message,$headers);

   echo json_encode($data);
}


//USUARIO EXISTENTE
else{
    $to = "facturacion@macparkk.mx";
    $subject = "Nueva petición de Factura para " . $email;

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
                        <h1>Nueva petición de Factura. </h1>
                    </td>
                </tr>
                <!-- 3 columnas -->
                <tr>
                    <td align="center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;" >
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">RFC</th>


                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>'.$rfc. '</td>
                                 
                                </tr>
                            </tbody>
                        </table>

                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Email</th>
                                    <th scope="col">Tipo de pago</th>
                                    <th scope="col">Monto</th>
                                    <th scope="col">Pase de salida</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>' . $email . '</td>
                                    <td>' . $metodo . '</td>
                                    <td>' . $monto . '</td>
                                    <td>' . $pase . '</td>
                                 
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
                                Te enviamos los datos de facturación de este cliente
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

    mail($to,$subject,$message,$headers);

    /* ----- Email to client ----- */

    $to = $email;
    $subject = "Tu petición de factura ha sido recibida";

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
            <!-- contenido destacado -->
            <tr>
                <td align="center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;" >
                    <a href="https://macparkk.mx/" target="_blank" border="0" style="text-decoration:none;" >
                    <img src="http://macparkk.mx/img/img-04.jpg" alt="Reservación" width="100%" border="0" style="max-width:600px;height:auto;display:block;" />
                    </a>
                </td>
            </tr>
            <!-- contenido destacado -->
            <!-- separador -->
            <tr>
                <td height="20" style="height:20px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;" ></td>
            </tr>
            <!-- separador -->
            <tr>
                <!-- 2 columnas) -->
                <td class="two-column" align="center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;text-align:center;font-size:0;" >
                    <!-- columna izquierda -->
                    <table class="column" width="100%" style="max-width:300px;display:inline-block;" valign="top" border="0" cellspacing="0" cellpadding="0" >
                        <tr>
                            <td style="padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;" >
                                <!-- curso 1 -->
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" >
                                    <tr>
                                        <!-- curso 1 - imagen -->
                                        <td style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;" >
                                            <a href="https://macparkk.mx" target="_blank" border="0" style="text-decoration:none;" >
                                            <img src="http://macparkk.mx/img/img-01.jpg" alt="Curso de Marketing" width="100%"  border="0" style="max-width:280px;height:auto;" />
                                            </a>
                                        </td>
                                        <!-- curso 1 - imagen -->
                                    </tr>
                                    <tr>
                                        <!-- curso 1 - texto -->
                                        <td height="60" style="height:60px;padding-top:10px;padding-right:0;padding-bottom:10px;padding-left:0;font-family:Lato,Arial,sans-serif;font-size:16px;line-height:20px;color:#333333;text-align:left;" >
                                            <b>Vamos por ti </b>, y te llevamos a cualquier hora, tan solo en unos minutos, solo tienes que solicitarlo.
                                        </td>
                                        <!-- curso 1 - texto -->
                                    </tr>
                                    <tr>
                                        <!-- curso 1 - cta -->
                                        <td height="40" style="height:40px;padding-top:5px;padding-right:10px;padding-bottom:5px;padding-left:10px;background-color:#dc3545;border-radius:6px;font-family:Lato,Arial,sans-serif;font-size:18px;color:#ffffff;text-align:center;" >
                                            <a href="https://macparkk./cursos/email-marketing/" target="_blank" border="0" style="text-decoration:none;font-family:Lato,Arial,sans-serif;color:#ffffff;" >
                                            Contáctanos
                                            </a>
                                        </td>
                                        <!-- curso 1 - cta -->
                                    </tr>
                                </table>
                                <!-- curso 1 -->
                            </td>
                        </tr>
                    </table>
                    <!-- columna derecha -->
                    <table class="column" width="100%" style="max-width:300px;display:inline-block;" valign="top" border="0" cellspacing="0" cellpadding="0" >
                        <tr>
                            <td style="padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;" >
                                <!-- curso 2 -->
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" >
                                    <tr>
                                        <!-- curso 2 - imagen -->
                                        <td style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;" >
                                            <a href="https://macparkk./cursos/google-analytics/" target="_blank" border="0" style="text-decoration:none;" >
                                            <img src="http://macparkk.mx/img/img-03.jpg" alt="Curso Profesional de Google Analytics" width="100%" border="0" style="max-width:280px;height:auto;" />
                                            </a>
                                        </td>
                                        <!-- curso 2 - imagen -->
                                    </tr>
                                    <tr>
                                        <!-- curso 2 - texto -->
                                        <td height="60" style="height:60px;padding-top:10px;padding-right:0;padding-bottom:10px;padding-left:0;font-family:Lato,Arial,sans-serif;font-size:16px;line-height:20px;color:#333333;text-align:left;" >
                                            <b>Nosotros somos el mejor</b>, estacionamiento, y para nosotros eres lo más importante.
                                        </td>
                                        <!-- curso 2 - texto -->
                                    </tr>
                                    <tr>
                                        <!-- curso 2 - cta -->
                                        <td height="40" style="height:40px;padding-top:5px;padding-right:10px;padding-bottom:5px;padding-left:10px;background-color:#dc3545;border-radius:6px;font-family:Lato,Arial,sans-serif;font-size:18px;color:#ffffff;text-align:center;" >
                                            <a href="https://macparkk./cursos/google-analytics/" target="_blank" border="0" style="text-decoration:none;font-family:Lato,Arial,sans-serif;color:#ffffff;" >
                                            Saber más de nosotros
                                            </a>
                                        </td>
                                        <!-- curso 2 - cta -->
                                    </tr>
                                </table>
                                <!-- curso 2 -->
                            </td>
                        </tr>
                    </table>
                </td>
                <!-- fin 2 columnas -->
            </tr>
            <tr>
                    <td>
                        <h1> Confirmación de facturación.</h1>
                    </td>
                </tr>
                <!-- 3 columnas -->
                <tr>
                        <td align="center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;" >
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">RFC</th>


                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>'.$rfc. '</td>
                                 
                                </tr>
                            </tbody>
                        </table>

                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Email</th>
                                    <th scope="col">Tipo de pago</th>
                                    <th scope="col">Monto</th>
                                    <th scope="col">Pase de salida</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>' . $email . '</td>
                                    <td>' . $metodo . '</td>
                                    <td>' . $monto . '</td>
                                    <td>' . $pase . '</td>
                                 
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
                            <td align="center" style="padding-top:20px;padding-right:10px;padding-bottom:0;padding-left:10px;font-family:Lato,Arial,sans-serif;color:#1c3643;font-size:16px;text-align:center;">
                                Enviado con <span style="color:#dc3545;font-size:18px;">♥</span> por Relatibyte
                            </td>
                        </tr>
                        <!-- info marca -->
                        <!-- legales -->
                        <tr>
                            <td align="center" style="padding-top:30px;padding-right:10px;padding-bottom:10px;padding-left:10px;font-family:Lato,Arial,sans-serif;color:#666666;font-size:14px;text-align:center;">
                                Te enviamos esta confirmación de tu lugar en Mac Parkk.
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

    mail($to,$subject,$message,$headers);

   echo json_encode($data);
}
?>