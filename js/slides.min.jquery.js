 

 


<!DOCTYPE HTML>

<html>

<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Phoenix | Theme: </title>
		
		<link  href="../../fonts.googleapis.com/css@family=Kreon_3A300,400,700" rel="stylesheet" type="text/css" >
        
        <link href="selector/styles.css" rel="stylesheet" media="all" />
        
		<!--[if IE]>
			
			<style type="text/css">
			
				li.purchase a {
					padding-top: 5px;
					background-position: 0px -4px;
				}
				
				li.remove_frame a {
					padding-top: 5px;
					background-position: 0px -3px;
				}
				
				#theme_select {
					padding: 8px 8px;
				}
				
				#theme_list {
					margin-top: 2px;
				}
			
			</style>
			
		<![endif]--> 
		
		<style type="text/css">
		
				
		</style>
	        
        <script type="text/javascript" src="selector/jquery-1.4.2.min.js"></script>
        
        <script type="text/javascript">
        
        var theme_list_open = false;
        
        $(document).ready(function () {
        
        	function fixHeight () {
        	
        	var headerHeight = $("#switcher").height();
        	        	
        	$("#iframe").attr("height", (($(window).height() - 10) - headerHeight) + 'px');
        	
        	}
        	
        	$(window).resize(function () {
               	
        		fixHeight();
        	
        	}).resize();
        	
        	$("#theme_select").click( function () {
        	
        		if (theme_list_open == true) {
        	
        		$(".center ul li ul").hide();
        		
        		theme_list_open = false;
        		
        		} else {
        		
        		$(".center ul li ul").show();         		
        		
        		theme_list_open = true;
        		
        		}
        		
        		return false;
        	
        	});
        	
        	$("#theme_list ul li a").click(function () {
        	
        	var theme_data = $(this).attr("rel").split(",");
        	        	
        	$("li.purchase a").attr("href", theme_data[1]);
        	$("li.remove_frame a").attr("href", theme_data[0]);
        	$("#iframe").attr("src", theme_data[0]);
        	
        	$("#theme_list a#theme_select").text($(this).text());
        	
        	$(".center ul li ul").hide();
        	
        	theme_list_open = false;
        	
        	return false;
        	
        	});
        
        });
        
        </script>
         
</head>

<body>

	<div id="switcher">
	
		<div class="center">
		
		<ul>
		
		<li><img src="selector/logo.png" alt="" /></li>
		
		<li id="theme_list"><a id="theme_select" href="#">Select A Theme...</a>
		
			<ul>
<li><a href="#" rel="../../agility-html.sevenspark.com,http:/themeforest.net/item/agility-responsive-minimal-html5/1054063@ref=sevenspark">Agility <span class="product-type">Responsive HTML5</span><span class="product-preview"><img src="product_previews/agility_html.jpg" /></span></a></li><li><a href="#" rel="../../wpmegamenu.com,http:/codecanyon.net/item/ubermenu-wordpress-mega-menu-plugin/154703@ref=sevenspark">UberMenu - Mega Menu <span class="product-type">WP Plugin</span><span class="product-preview"><img src="../../0.s3.envato.com/files/1967560/megamenupreview.1.1.2.jpg" /></span></a></li><li><a href="#" rel="../../scrollcheckpoint.sevenspark.com,http:/codecanyon.net/item/scroll-checkpoint-animated-content-panel-plugin/234882@ref=sevenspark">Scroll Checkpoint <span class="product-type">WP Plugin</span><span class="product-preview"><img src="product_previews/scroll_checkpoint.jpg" /></span></a></li><li><a href="#" rel="../../menumanager.sevenspark.com,http:/codecanyon.net/item/menu-management-enhancer-for-wordpress/529353@ref=sevenspark">Menu Management Enhancer <span class="product-type">WP Plugin</span><span class="product-preview"><img src="product_previews/menu_manager.jpg" /></span></a></li></ul>
		
		</li>	
		
		<li class="purchase" rel=""><a href="">Purchase</a></li>		
		<li class="remove_frame" rel=""><a href="">Remove Frame</a></li>		
		
		</div>
		
		</ul>
	
	</div>
	
    <iframe id="iframe" src="" frameborder="0" width="100%"></iframe>
    
</body>

</html>