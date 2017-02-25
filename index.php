<!DOCTYPE html>
<html>
<head>
	<title>Informaticasa - Página Principal - Aracena</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <!-- Styles -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="css/bootstrap-overrides.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/theme.css">
    <link rel="stylesheet" href="css/index.css" type="text/css" media="screen" />

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/lib/animate.css" media="screen, projection">    

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body class="pull_top">
    
    <?php 
        include_once('header.php');
     ?>

    <section id="feature_slider" class="">
        <!-- 
            Each slide is composed by <img> and .info
            - .info's position is customized with css in index.css
            - each <img> parallax effect is declared by the following params inside its class:
            
            example: class="asset left-472 sp600 t120 z3"
            left-472 means left: -472px from the center
            sp600 is speed transition
            t120 is top to 120px
            z3 is z-index to 3
            Note: Maintain this order of params

            For the backgrounds, you can combine from the bgs folder :D
        -->
        <article class="slide" id="showcasing" style="background: url('img/backgrounds/aqua.jpg') repeat-x top center;">
            <img class="asset left-30 sp600 t120 z1" src="img/slides/scene1/macbook.png" />
            <div class="info">
                <h2>Venta y reparación de equipos</h2>
            </div>
        </article>
        
        <article class="slide" id="tour" style="background: url('img/backgrounds/color-splash.jpg') repeat-x top center;">
            <img class="asset left-284 sp650 t110 z3" src="img/slides/scene3/iphone6.png" />
            <img class="asset left-410 sp600 t110 z4" src="img/slides/scene3/bqx5.png" />
            <img class="asset left-182 sp450 t110 z2" src="img/slides/scene3/nokialumia.png" />
            <div class="info" style="right:18%">
                <h2>Puesta a punto de móviles y venta de terminales</h2>                
            </div>
        </article>
        <article class="slide" id="responsive" style="background: url('img/backgrounds/aqua.jpg') repeat-x top center;">
            <!-- <img class="asset left-472 sp600 t120 z3" src="img/slides/scene4/html5.png" /> -->
            <img class="asset left-335 sp500 t120 z2" src="img/slides/scene4/logo.png" />
            <div class="info">              
            </div>
        </article>
		<article class="slide" id="acts" style="background: url('img/backgrounds/color-splash.jpg') repeat-x top center;">
			<img class="asset left-284 sp650 t50 z1" src="img/slides/scene5/antenaWifi.png" />
            <div class="info" style="right:18%">
                <h2>Informática  Telecomunicaciones  Soluciones</h2>
            </div>
        </article>
        <article class="slide" id="acts" style="background: url('img/backgrounds/aqua.jpg') repeat-x top center;">
			<img class="asset left-265 sp600 t180 z2" src="img/slides/scene3/server2.png" />
            <img class="asset left-430 sp650 t90 z1" src="img/slides/scene3/server1.png" />
            <div class="info" style="right:18%">
                <h2>Especialistas en Servidores para empresas</h2>
            </div>
        </article>
    </section>

    <div id="features">
        <div class="container">
            <div class="section_header">
                <h3>Nuestros servicios</h3>
            </div> 
            <div class="row feature">
                <div class="span6">
                    <img src="img/reparacion.png" />
                </div>
                <div class="span6 info">
                    <h3>
                        <img src="img/features-ico1.png" />
                        Servicio 3.0
                    </h3>
                    <p>
                        Trabajamos en tienda, nos desplazamos a domicilio y ofrecemos soporte online. Nos adaptamos a lo que nuestros clientes necesiten.
                    </p>
                </div>
            </div>
            <div class="row feature ss">
                <div class="span6 info">
                    <h3>
                        <img src="img/features-ico1.png" />
                        Venta de móviles y puesta a punto
                    </h3>
                    <p>
                        Venta de terminales, puesta a punto inicial, liberaciones y reparaciones.
                    </p>
                </div>
                <div class="span6">
                    <img src="img/moviles.png" />
                    
                </div>
            </div>
            <div class="row feature ss">
                <div class="span6">
                    <img src="img/logos_empresas.png" />
                </div>
                <div class="span6 info">
                    <h3>
                        <img src="img/features-ico3.png" />
                        Distribuidores oficiales
                    </h3>
                    <p>
                    En nuestra tienda vendemos cualquier tipo de material informatico que pueda necesitar. Somos distribuidores oficiales de <a target="_blank" href="http://www.sdelsol.com/">Software DELSOL</a>, <a target="_blank" href="http://es.wikomobile.com/">Wiko</a>,<a target="_blank" href="http://www.waterrevive.com/">Waterrevive</a>, <a target="_blank" href="http://www.approx.es/">Approx</a>, <a target="_blank" href="http://www.bq.com/es/">BQ</a>, <a target="_blank" href="http://cartuchosdebuenatinta.es/">Debuenatinta</a>, <a target="_blank" href="http://www.coolaccesorios.com/">Cool Accesorios</a>,<a target="_blank" href="http://www.spc-universe.com/">SPC</a> ...
                     </p>
                     <a name="ayuda"></a>
                    </p>
                </div>
            </div>
        </div>
    </div>


    <!-- Pricing Option -->
    <div id="in_pricing">
        <div class="container">
            <div class="section_header">
				
                <h3>Recursos</h3>
            </div>

            <div class="row charts_wrapp">
                <!-- Plan Box -->
                <div class="span4">
                    <div class="plan">
                        <div class="wrapper">
                            <h3>Antivirus gratuito</h3>
                            <div class="price" style="text-align:center">
                                <div class="avgantivirus"></div>
                            </div>
                            <div class="features">
                                <p>
                                  
                                </p>
                                <p>
                                   
                                </p>
                                <p>
                                    
                                </p>
                            </div>
                            <a class="order" target="_blank" href="https://package.avira.com/package/oeavira/win/int/avira_es_av_56dea438a14e8__ws.exe">DESCÁRGALO AHORA</a>
                        </div>
                    </div>
                </div>
                <!-- Plan Box -->                
                <div class="span4 pro">
                    <div class="plan">
                        <div class="wrapper">
                            <img class="ribbon" src="img/badge.png">
                            <h3>Soporte remoto</h3>                            
                            <div class="price">
                                <div class="teamviewer"></div>
                            </div>
                            <div class="features">
                                <p>
                                    Solución completa para acceso remoto.
                                </p>
                                <p>
                                    Sin necesidad de configuración por parte del cliente.
                                </p>
                                <p>
                                    Totalmente gratuito.
                                </p>                              
                            </div>
                            <a class="order" target="_blank"  href="http://download.anydesk.com/AnyDesk.exe">¡AYUDA!</a>
                        </div>
                    </div>
                </div>
                <!-- Plan Box -->
                <div class="span4 standar">
                    <div class="plan">
                        <div class="wrapper">
                            <h3>Fondos de escritorio</h3>
                            <div class="price">
                               <div class="fondosescritorio"></div>
                            </div>
                            <div class="features">
                                <p>
                                  
                                </p>
                                <p>
                                   
                                </p>
                                <p>
                                    
                                </p>
                            </div>
                            
                            <a class="order" target="_blank"  href="background.php">DESCÁRGALOS AHORA</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="clients">
        <div class="container">
            <div class="section_header">
                <h3>Algunos de nuestros clientes</h3>
            </div>
            <div class="row">
                <div class="span3 client">
                    <div class="img client1"></div>
                </div>
                <div class="span3 client">
                    <div class="img client2"></div>
                </div>
                <div class="span3 client">
                    <div class="img client3"></div>
                </div>
                <div class="span3 client">
                    <div class="img client4"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- starts footer -->
    <?php 
        include_once('footer.php');
     ?>

    <!-- Scripts -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/theme.js"></script>

    <script type="text/javascript" src="js/index-slider.js"></script>	
</body>
</html>