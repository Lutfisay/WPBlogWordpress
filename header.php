<!doctype html>
<!--[if lt IE 7 ]><html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]><html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]><html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]><html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en" class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title><?php bloginfo('name'); ?></title>

<!-- main JS libs -->
<script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

<!-- Style CSS -->
<link href="<?php bloginfo('template_url');?>/css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
<link href="<?php bloginfo('template_url');?>/css/local.css" media="screen" rel="stylesheet">
<link href="<?php bloginfo('template_url');?>/css/socialMedia.css" media="screen" rel="stylesheet">

<!-- Socials Css -->
<link href="<?php bloginfo('template_url');?>/css/font/creativeverse_social-codes.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_url');?>/css/font/creativeverse_social-embedded.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_url');?>/css/font/creativeverse_social-ie7.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_url');?>/css/font/creativeverse_social-ie7-codes.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_url');?>/css/font/animate.css" rel="stylesheet" type="text/css" />



<!-- scripts -->
<script src="<?php bloginfo('template_url');?>/js/general.js"></script>

<!-- custom input -->
<script src="<?php bloginfo('template_url');?>/js/jquery.customInput.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/custom.js"></script>
<!-- Placeholders -->
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jquery.powerful-placeholder.min.js"></script>


<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('template_url');?>/images/favicon.ico">



<!--[if lt IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script><![endif]-->
<!--[if gte IE 9]>
<style type="text/css">
    .gradient {filter: none !important;}
</style>
<![endif]-->
<?php wp_head(); ?>
</head>

<body>
<div class="body_wrap">
    <div class="container">

        <!-- content -->
        <div class="content">
			
			<div class="row"> 
				<div class="logo"><a href="<?php bloginfo('home'); ?>"><img src="<?php bloginfo('template_url');?>/images/kapak.jpg" alt=""/></a></div>
			</div>
 
			<!-- row -->
            <div class="row menu">

						<div class="col-sm-12">
							<!-- Website Menu -->
							<div id="topmenu">
								<ul class="dropdown clearfix boxed boxed-blue">
									<li class="menu-level-0"><a href="<?php bloginfo('home'); ?>"><span>ANASAYFA</span></a></li>
									<li class="menu-level-0"><a href="<?php bloginfo('url'); ?>/hakkimda"><span>HAKKIMDA</span></a></li>
									<li class="menu-level-0"><a href="#"><span>KATEGORİLER</span></a>
										<ul class="submenu-1">
											<li class="menu-level-1"><a href="<?php bloginfo('url'); ?>/k/genel">Genel</a></li>
											<li class="menu-level-1"><a href="<?php bloginfo('url'); ?>/k/teknoloji">Teknoloji</a></li>
											<li class="menu-level-1"><a href="<?php bloginfo('url'); ?>/k/php">Php</a></li>
											<li class="menu-level-1"><a href="<?php bloginfo('url'); ?>/k/mysql">Mysql</a></li>
											<li class="menu-level-1"><a href="<?php bloginfo('url'); ?>/k/css">Css</a></li>
											<li class="menu-level-1"><a href="<?php bloginfo('url'); ?>/k/html5">Html5</a></li>
											<li class="menu-level-1"><a href="<?php bloginfo('url'); ?>/k/wordpress-2">Wordpress</a></li>
											
											</li>
										</ul>
									</li>
								   
									<li class="menu-level-0"><a href="<?php bloginfo('url'); ?>/iletisim"><span>İLETİŞİM</span></a></li>
									<li class="menu-search">
										<form id="searchForm" action="<?php echo home_url( '/' ); ?>" class="menu-search-form" method="get">
											<input type="text" name="s" value="" class="menu-search-field" placeholder="Site içinde ara" />
											<input type="submit" value="" class="btn menu-search-submit" name="search-send" />
										</form>
									</li>
								</ul>
							</div>
							<!--/ Website Menu -->
							
							
						</div>
            </div>
            <!--/ row -->