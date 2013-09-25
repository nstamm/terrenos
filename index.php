<!DOCTYPE HTML>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-US"> <!--<![endif]-->
<head>

<!--  PHP FORMULARIO -->
<?php 
error_reporting(E_ALL ^ E_NOTICE); // hide all basic notices from PHP

//If the form is submitted
if(isset($_POST['submitted'])) {
    
    /*
	
    // POR EL MOMENTO NO NOS IMPORTA EL NOMBRE 
	
    if(trim($_POST['contactName']) === '') {
        $nameError =  'Forgot your name!'; 
        $hasError = true;
    } else {
        $name = trim($_POST['contactName']);
    }
    */
    
	// Estos mensajes de error no se están usando pero sí se usa $HasError
    // need valid email
	
    if(trim($_POST['email']) === '')  {
        $emailError = 'Por favor ingresa tu e-mail';
        $hasError = true;
    } else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
        $emailError = 'Por favor ingresa un e-mail válido.';
        $hasError = true;
    } else {
        $email = trim($_POST['email']);
    }
        
    // we need at least some content
    if(trim($_POST['comments']) === '') {
        $commentError = 'No has ingresado texto.';
        $hasError = true;
    } else {
        if(function_exists('stripslashes')) {
            $comments = stripslashes(trim($_POST['comments']));
        } else {
            $comments = trim($_POST['comments']);
        }
    }
        
    // upon no failure errors let's email now!
    if(!isset($hasError)) {
        
        $emailTo = 'contacto@staberman.com.ar';
        $subject = 'Consulta desde el sitio!';
        $sendCopy = trim($_POST['sendCopy']);
        $body = "Email: $email \n\nComments: $comments";
        $headers = 'From: ' .' <'.$email.'>' . "\r\n" . 'Reply-To: ' . $email;

        mail($emailTo, $subject, $body, $headers);
        
        // set our boolean completion value to TRUE
        $emailSent = true;
		
    }
}
?>

<!-- Meta Tags -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Terrenos en Entre Ríos</title>   
<meta name="description" content="Mas de 30 Lotes disponibles. Desde 288 metros. Con electricidad." />

<!-- FB Open Graph Meta 
<meta property="og:image" content="http://www.staberman.com.ar/images/bg3.jpg"/>
<meta property="og:title" content="Staberman | Cooperativa Tecnológica"/>
<meta property="og:url" content="http://www.staberman.com.ar"/>
<meta property="og:site_name" content="Staberman | Cooperativa Tecnológica"/>
<meta property="og:description" content="Somos un grupo de jóvenes que trabajan brindando soluciones informáticas y audiovisuales. Seguinos en http://fb.com/staberman" />
-->

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">

<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
<!-- Main Stylesheet -->
<link href="css/style.css" rel="stylesheet" type="text/css">
<!-- Font Icons -->
<link rel="stylesheet" href="css/fonts.css" type="text/css"> 
<!-- Flexslider -->
<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="screen">
<!-- Fancybox-->
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css" media="screen">
<!-- Color Style -->
<link class="alt" href="style/brown.css" rel="stylesheet" type="text/css">
<link class="bt" href="css/light.css" rel="stylesheet" type="text/css">
<!-- Responsive Stylesheet -->
<link rel="stylesheet" href="css/responsive.css" type="text/css">

<!-- IE8 CSS Fixes -->
<!--[if IE 8]>
	<link rel="stylesheet" type="text/css" href="css/ie8.css" media="screen" />
    <script src="http://code.google.com/p/css3-mediaqueries-js/"></script>
<![endif]-->
<!-- Fav Icon -->
<link rel="shortcut icon" href="favicon.ico">
<link rel="apple-touch-icon" href="#">
<link rel="apple-touch-icon" sizes="114x114" href="#">
<link rel="apple-touch-icon" sizes="72x72" href="#">
<link rel="apple-touch-icon" sizes="144x144" href="#">

<!-- Modernizr -->
<script src="js/modernizr.js"></script>
</head>

<body>

<!-- ANALYTICS 

<script type="text/javascript">
 var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-43404614-1']);
  _gaq.push(['_setDomainName', 'staberman.com.ar']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
-->



<a id="Top"></a>
<!-- start wrap 
<div class="wrap">
		
   	   	<section class="blog-area">
    	<div class="container">
         	<div class="row">
           		
         	</div>
       	</div>
    </section>
    -->
    
    <!--<section class="map">
      <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.ar/maps/ms?msid=213091740300426702114.0004e2b2f1b3adefc6d00&amp;z=15&amp;msa=0&amp;ie=UTF8&amp;t=m&amp;ll=-34.573504,-58.534242&amp;spn=0,0&amp;output=embed"></iframe>
   	</section>-->
    <!-- Start Contact -->
    <section id="contact" class="page-section">
        <!-- start page-heading -->
        <header class="page-heading">
            <div class="container">
                <div class="row">
            		<div class="twelvecol loguito">
					<img src="images/logo.png" style="width:600px;">
                                	</div>
								
					</div>
					</div>
					
				</header>
        <!-- end page-heading -->
        <div class="container">
            <div class="row">
						<div class="sixcol">
                	<div class="flexslider" id="blog-slider">
                    	<ul class="slides">
						
                          	<li class="terrenos">
							<div  class="imagebanner" style="background-image: url('/images/foto01.jpg');">
							<a href="images/foto01.jpg" title="Ir al mapa" class="fancybox buttonbanner">Conozca Cómo Llegar</a>			
							</div>
							<h3>Lotes desde 288m2 a 300Km de Bs. As. y 5 minutos de Concepción del Uruguay. Provistos de electricidad. 
							A 200m del pueblo de San Justo. Acceso por Ruta 39.
							</h3>							
							
							</li>

										
                        	<li  class="terrenos">
                           	<div  class="imagebanner" style="background-image: url('/images/foto02.jpg');">
							<a href="images/foto03.jpg" title="Vista" class="fancybox buttonbanner">Observe nuestra Vista Satelital</a>
							</div>
							<h3>Terrenos cercanos a la costa del Río Uruguay, rodeados de arroyos y complejos termales. 
							Sus paisajes naturales proveen diversas alternativas para la práctica de deportes náuticos y la pesca.
							</h3>						
                         	</li>
					
							<li  class="terrenos">
							<div  class="imagebanner" style="background-image: url('/images/foto02.jpg');">
							<a href="images/foto03.jpg" title="Tel" class="fancybox buttonbanner">Tel: 4431 6784 / SMS: 11 54 93 37 23</a>
							</div>
                           	<h3>No dude en contactarnos, si desea consultar por la compra de uno o más lotes. 
							Brindamos facilidades de pago en efectivo y también financiamiento.
							</h3>
                               
                         	</li>
                  		</ul>
                  	</div>
            	</div>
				
				
                <!-- 
                    <section class="sixcol contact-info">
                    <div class="info-box">
                        <p>Nuestras vias de contacto son:</p>
                        <h2>Terrenos en Entre Rios</h2>
                        <address>
						<a href="mailto:info@terrenosentrerrios.com.ar">info@terrenosentrerrios.com.ar</a><br>
						    TEL:	(011)  2222 3333<br>
							SMS:  12 22 44 24 54<br>
							Ciudad Autónoma de Buenos Aires<br>
                        </address>
                    </div>
                </section>-->
                <section class="sixcol last forms">
				  
    	  
	<div id="contact" class="section">
		<div class="container content">
		
	        <?php if(isset($emailSent) && $emailSent == true) { ?>
                <p class="info">¡El mensaje fue enviado!</p>
            <?php } else { ?>
            
				<!--<div class="desc">
					<h2>Contact Us</h2>
					
					<p class="desc">Please use the contact form below to send us any information we may need. It is required you place an e-mail, although if you do not need us to respond feel free to input noreply@yoursite.com.</p>
				</div>-->
				
				<div id="contact-form"> 
					<?php if(isset($hasError) || isset($captchaError) ) { ?>
                        <p class="alert">Uops! Lo sentimos, ha ocurrido un error.</p>
                    <?php } ?>
				
					<form id="contact_form" action="#" method="post">
					
						<!-- 
						
						COMENTAMOS LO DE PEDIR EL NOMBRE
						
						<div class="formblock" >
							
							<input type="text" name="contactName" id="contactName" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" class="txt requiredField input" placeholder="Dejanos tu nombre..." />
							<?php if($nameError != '') { ?>
								<br /><span class="error"><?php echo $nameError;?></span> 
							<?php } ?>
						</div>
						
						--> 
                        
						<div class="formblock"> 
							<label style="display: none;">e-mail</label>
							<input type="text" name="email" id="email" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" class="txt requiredField email input" placeholder="E-mail" />
							<?php if($emailError != '') { ?>
								<br /><span class="error"><?php echo $emailError;?></span>
							<?php } ?>
						</div>
                        
						<div class="formblock">
							<label style="display: none;">texto del mensaje</label>
							 <textarea name="comments" id="commentsText" class="txtarea requiredField textarea" placeholder="Ingresa tu consulta..."></textarea>
							 <?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?>
							 
							 <?php if($commentError != '') { ?>
							 <br /><span class="error"><?php echo $commentError;?></span> 
							 <?php } ?>
						</div>
                        
							<button name="submit" type="submit" class="subbutton button">Enviar</button>
							<input type="hidden" name="submitted" id="submitted" value="true" />
					</form>			
				</div>
				
			<?php } ?>
		</div>
    </div>			
                    </form>			
					
			
                </section>
            </div>
        </div>
    </section>
	<section>
			<div class="container">
					<div class="row">
						<div class="twelvecol contacto">
						
								<img src="images/contacto.png" style="width: 700px;padding-left: 440px;">
					
                       </div>
					</div>
			</div>
			</section>
</div>


<!-- end wrap -->

<!-- start footer -->

<!--
<footer class="footer">
	<!-- start container 
	<div class="container">
        
        <div class="row">
            
            <section class="footer-left sixcol">
                <p>Terrenos en Entre Rios<br> Ultima actualizacion: Septiembre 2013.</p>
            </section>
            
			
            
            <section class="footer-right sixcol last">
			    		
               	<ul class="social">
                  	<li><a href="http://fb.com/staberman" title="Facebook">
					<span class="font-icon-social-facebook"></span></a></li>
					
                    <li><a href="https://plus.google.com/106857402201451908552" title="Google">
					<span class="font-icon-social-google-plus"></span></a></li>
					</ul>
               
            </section>
            
        </div>
        
    </div>
    
</footer>
<!-- end footer -->

<!-- Scroll Top starts -->
<div id="scrollTop">
    <a href="#Top" title="Top" class="slideanchor"><span class="font-icon-arrow-simple-up"></span></a>
</div>
<!-- Scroll Top Ends -->

<!-- Js -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.pagescroller.js"></script>
<script src="js/jquery.anchor.js"></script>
<script src="js/slides.min.jquery.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/scripts.js"></script>
<script>
$(document).ready(function(){
	$('body').pageScroller({
		navigation: '.navigation',
		scrollOffset: -100
	});
});
</script>

<script>
	$(document).ready(function () {
	
		imgPathStart = "images/";
		imgPathEnd = new Array("bg0.jpg","bg1.jpg","bg2.jpg","bg3.jpg","bg4.jpg","pattern5.png","pattern6.png","pattern7.png","pattern8.png","pattern9.png");
		$(".background-selector li img").click(function() {
			backgroundNumber = $(this).attr("data-nr");
			$(".showcase").css({background:"url('"+imgPathStart+imgPathEnd[backgroundNumber]+"')"});
		});
	});
	
	$(document).ready(function () {		
		$('.switch-button').click(function () {	
			if ($(this).is('.open')) {
				$(this).addClass('closed');
				$(this).removeClass('open');
				$('.styleswitcher').animate({
					'left': '-222px'
				});
			} else {
				$(this).addClass('open');
				$(this).removeClass('closed');
				$('.styleswitcher').animate({
					'left': '0px'
				});
			}	
		});
	});
</script>

<!-- Style Switcher Start -->
<script type="text/javascript">
	<!--//--><![CDATA[//><!--
	$(document).ready(function() {
		$('form#contact_form').submit(function() {
			$('form#contact_form .error').remove();
			var hasError = false;
			$('.requiredField').each(function() {
				if($.trim($(this).val()) == '') {
					var labelText = $(this).prev('label').text();
					$(this).parent().append('<span class="error">Recuerda ingresar el '+labelText+'.</span>');
					$(this).addClass('inputError');
					hasError = true;
				} else if($(this).hasClass('email')) {
					var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
					if(!emailReg.test($.trim($(this).val()))) {
						var labelText = $(this).prev('label').text();
						$(this).parent().append('<span class="error">Debes ingresar un '+labelText+' válido.</span>');
						$(this).addClass('inputError');
						hasError = true;
					}
				}
			});
			if(!hasError) {
				var formInput = $(this).serialize();
				$.post($(this).attr('action'),formInput, function(data){
					$('form#contact_form').slideUp("fast", function() {				   
						$(this).before('<p class="tick"><strong>Gracias por tu consulta, te responderemos pronto.</strong></p>');
						throw formInput;
					});
				});
			}
			
			return false;	
		});
	});
	//-->!]]>
</script>
<!-- End Js -->	
</body>
</html>