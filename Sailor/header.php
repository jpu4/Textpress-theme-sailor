<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
    <title>
      <?php 
        $title= (isset($global['title'])) ? $global['title'] : $global['site.title'];
        echo $global['site.name'] ,' | ', $title;
      ?>
    </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Bootstrap 3 template for corporate business" />
    <meta name="author" content="<?php echo $global['author.name']; ?>">  
	<!-- css -->
	<link href="<?php echo $global['base.url'];?>/<?php echo $global['assets.prefix'];?>/themes/Sailor/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo $global['base.url'];?>/<?php echo $global['assets.prefix'];?>/themes/Sailor/plugins/flexslider/flexslider.css" rel="stylesheet" media="screen" />
	<link href="<?php echo $global['base.url'];?>/<?php echo $global['assets.prefix'];?>/themes/Sailor/css/cubeportfolio.min.css" rel="stylesheet" />
	<link href="<?php echo $global['base.url'];?>/<?php echo $global['assets.prefix'];?>/themes/Sailor/css/style.css" rel="stylesheet" />

	<!-- Theme skin -->
	<link id="t-colors" href="<?php echo $global['base.url'];?>/<?php echo $global['assets.prefix'];?>/themes/Sailor/skins/default.css" rel="stylesheet" />

	<!-- boxed bg -->
	<link id="bodybg" href="<?php echo $global['base.url'];?>/<?php echo $global['assets.prefix'];?>/themes/Sailor/bodybg/bg1.css" rel="stylesheet" type="text/css" />

	<!-- =======================================================
    Theme Name: Sailor
    Theme URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
	======================================================= -->

    <?php if($global['google.analytics']){?>
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', '<?php echo $global['google.analytics']; ?>']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
      $(function(){
        $('.dropdown-toggle').dropdown()  
      })
  </script>
  <?php }?>
</head>

<body>



	<div id="wrapper">
		<!-- start header -->
		<header>
			<div class="top">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<ul class="topleft-info">
								<li><i class="fa fa-phone"></i> +62 088 999 123</li>
							</ul>
						</div>
						<div class="col-md-6">
							<div id="sb-search" class="sb-search">
								<form>
									<input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search" id="search">
									<input class="sb-search-submit" type="submit" value="">
									<span class="sb-icon-search" title="Click to start searching"></span>
								</form>
							</div>


						</div>
					</div>
				</div>
			</div>

			<div class="navbar navbar-default navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
						<a class="navbar-brand" href="<?php echo $global['base.url'];?>"><img src="<?php echo $global['assets.prefix'];?>/themes/Sailor/img/logo.png" alt="" width="199" height="52" /></a>
					</div>
					<div class="navbar-collapse collapse ">
						<ul class="nav navbar-nav">
							<li class="active"><a href="<?php echo $global['base.url'];?>">Home</a></li>
							<li class="dropdown">
								<a href="<?php echo $global['base.url'];?>/#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Features <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo $global['base.url'];?>/typography">Typography</a></li>
									<li><a href="<?php echo $global['base.url'];?>/components">Components</a></li>
									<li><a href="<?php echo $global['base.url'];?>/pricing-box">Pricing box</a></li>
									<li class="dropdown-submenu">
										<a href="<?php echo $global['base.url'];?>/#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown">Pages</a>
										<ul class="dropdown-menu">
											<li><a href="<?php echo $global['base.url'];?>/fullwidth">Full width</a></li>
											<li><a href="<?php echo $global['base.url'];?>/right-sidebar">Right sidebar</a></li>
											<li><a href="<?php echo $global['base.url'];?>/left-sidebar">Left sidebar</a></li>
											<li><a href="<?php echo $global['base.url'];?>/comingsoon">Coming soon</a></li>
											<li><a href="<?php echo $global['base.url'];?>/search-result">Search result</a></li>
											<li><a href="<?php echo $global['base.url'];?>/404">404</a></li>
											<li><a href="<?php echo $global['base.url'];?>/register">Register</a></li>
											<li><a href="<?php echo $global['base.url'];?>/login">Login</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="<?php echo $global['base.url'];?>/portfolio">Portfolio</a></li>
							<li class="dropdown"><a href="<?php echo $global['base.url'];?>/#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Blog <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo $global['base.url'];?>/blog-rightsidebar">Blog right sidebar</a></li>
									<li><a href="<?php echo $global['base.url'];?>/blog-leftsidebar">Blog left sidebar</a></li>
									<li><a href="<?php echo $global['base.url'];?>/post-rightsidebar">Post right sidebar</a></li>
									<li><a href="<?php echo $global['base.url'];?>/post-leftsidebar">Post left sidebar</a></li>
								</ul>
							</li>
							<li><a href="<?php echo $global['base.url'];?>/contact">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<!-- end header -->