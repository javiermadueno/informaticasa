<!DOCTYPE html>
<html>
<head>
    <title>Informaticasa - Contacto - Aracena</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Styles -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="css/bootstrap-overrides.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/theme.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="css/lib/animate.css" media="screen, projection">
    <link rel="stylesheet" href="css/contact.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/ns-box.css" />
		<script src="js/modernizr.custom.js"></script>

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>

<?php 
  require('header.php');
?>

<div id="contact">
        <div class="container">
            <div class="section_header">
                <h3>Contacta con nosotros</h3>
            </div>
            <div class="row contact">
                <p>
                Estaremos encantados de atenderte. Rellena el siguiente formulario y nos pondremos en contacto lo antes posible. Si quieres, indícalo en el mensaje y te llamaremos por teléfono.
                </p>

                <form id="contacto" enctype="application/x-www-form-urlencoded">
                    <div class="row form">
                        <div class="span6 box">
                            <input id="nombre" class="name" type="text" placeholder="Nombre" required>
                            <input id="email" class="mail" type="email" placeholder="Email" required>
                            <input id="telefono" class="phone" type="text" placeholder="Teléfono" >
                        </div>
                        <div class="span6 box box_r">
                            <textarea id="mensaje" placeholder="Escriba el mensaje aquí..." required></textarea>
                        </div>
                    </div>

                    <div class="row submit">
                        <div class="span3 right">
                            <input type="submit" value="Envía tu mensaje">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row map">
                      <div class="container">
                <div class="span5 box_wrapp">
                    <div class="box_cont">
                        <div class="head">
                            <h6>¡Visítanos!</h6>
                        </div>
                        <ul class="street">
                            <li>Avda. Andalucia 77</li>
                            <li>Aracena, Huelva</li>
                            <li>CP: 21200</li>
                            <li class="icon icontop">
                                <span class="contacticos ico1"></span>
                                <span class="text">959 128 851 · 655 167 768</span>
                            </li>
                            <li class="icon">
                                <span class="contacticos ico2"></span>
                                <a class="text" href="mailto:info@informaticasa.es">info@informaticasa.es</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
              <!--
            <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="pointer-events:none"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d787.1706533835468!2d-6.558884170114128!3d37.891104516744136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd117a181cab1001%3A0x8a705217a585c2c6!2sAv+Andaluc%C3%ADa%2C+21200+Aracena%2C+Huelva!5e0!3m2!1ses!2ses!4v1406577152356"></iframe>
            -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1574.3636010373284!2d-6.558617142884262!3d37.89006192466419!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd11794b49c365d1%3A0xb409c1b5c97d14e!2sINFORMATICASA+%7C+Servicio+inform%C3%A1tico+a+domicilio!5e0!3m2!1ses!2ses!4v1457434535880" width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="pointer-events:none"></iframe> 
            <!---->
        </div>
    </div>

    <!-- starts footer -->
    <?php
      require('footer.php');
    ?>

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/theme.js"></script>
    <script type="text/javascript" src="js/classie.js"></script>
    <script type="text/javascript" src="js/notificationFx.js"></script>
    <script type="text/javascript">
    
        document.getElementById('contacto').onsubmit = sendMessage;
        
      	function sendMessage(){
    			nombre = document.getElementById('nombre').value;
    			email = document.getElementById('email').value;
    			mensaje = document.getElementById('mensaje').value;
    			telefono = document.getElementById('telefono').value;
    			
    			$.ajax
    			({
    				type: "POST",
    				url: "php/ajax_message.php",
    				data: "nombre=" + nombre + "&telefono="+ telefono + "&email=" + email + "&mensaje=" + mensaje,
    				cache: false,
    				success: function(html)
    				{
    				  var respuesta = JSON.parse(html);
    				  
    				  var notification = new NotificationFx({
							message : '<span class="icon icon-megaphone"></span><p>'+ respuesta.mensaje +'</p>',
							layout : 'bar',
							effect : 'slidetop',
							type : respuesta.tipo, // notice, warning or error
							ttl: 6000
						});

						// show the notification
						notification.show();
    					/*
$("#alerts").empty();
    					$("#alerts").append(html);
*/
    					document.getElementById("contacto").reset();
    				} 
    			});
    			
    			return false;				
        }
    </script>
</body>
</html>