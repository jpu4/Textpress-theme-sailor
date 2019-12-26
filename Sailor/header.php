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
	<link href="/themes/Sailor/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/themes/Sailor/plugins/flexslider/flexslider.css" rel="stylesheet" media="screen" />
	<link href="/themes/Sailor/css/cubeportfolio.min.css" rel="stylesheet" />
	<link href="/themes/Sailor/css/style.css" rel="stylesheet" />

	<!-- Theme skin -->
	<link id="t-colors" href="/themes/Sailor/skins/default.css" rel="stylesheet" />

	<!-- boxed bg -->
	<link id="bodybg" href="/themes/Sailor/bodybg/bg1.css" rel="stylesheet" type="text/css" />

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
						<a class="navbar-brand" href="/"><img src="/themes/Sailor/img/logo.png" alt="" width="199" height="52" /></a>
					</div>
					<div class="navbar-collapse collapse ">
						<ul class="nav navbar-nav">
							<li class="active"><a href="/">Home</a></li>
							<li class="dropdown">
								<a href="/#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Features <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="/typography">Typography</a></li>
									<li><a href="/components">Components</a></li>
									<li><a href="/pricing-box">Pricing box</a></li>
									<li class="dropdown-submenu">
										<a href="/#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown">Pages</a>
										<ul class="dropdown-menu">
											<li><a href="/fullwidth">Full width</a></li>
											<li><a href="/right-sidebar">Right sidebar</a></li>
											<li><a href="/left-sidebar">Left sidebar</a></li>
											<li><a href="/comingsoon">Coming soon</a></li>
											<li><a href="/search-result">Search result</a></li>
											<li><a href="/404">404</a></li>
											<li><a href="/register">Register</a></li>
											<li><a href="/login">Login</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="/portfolio">Portfolio</a></li>
							<li class="dropdown"><a href="/#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Blog <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="/blog-rightsidebar">Blog right sidebar</a></li>
									<li><a href="/blog-leftsidebar">Blog left sidebar</a></li>
									<li><a href="/post-rightsidebar">Post right sidebar</a></li>
									<li><a href="/post-leftsidebar">Post left sidebar</a></li>
								</ul>
							</li>
							<li><a href="/contact">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<!-- end header -->
<?php
	$root_domain = $global['base.url']; 
	$breadcrumb ="        <section id='inner-headline'>";
	$breadcrumb .="          <div class='container'>";
	$breadcrumb .="              <div class='row'>";
	$breadcrumb .="                 <div class='col-lg-12'>";
	$breadcrumb .="                    <ul class='breadcrumb'>";
	$breadcrumbs = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
	$breadcrumb .= "<li><i class='fa fa-home'></i><a href='" . $root_domain . "' title='Home Page'></a></li>";

	foreach ($breadcrumbs as $crumb) {
		$link = ucwords(str_replace(array(".php","-","_"), array(""," "," "), $crumb));
		$root_domain .=  "/" . $crumb . "/";
		$breadcrumb .= "<li class='active'><a href='". $root_domain ."'>" . $link . "</a></li>";
	}
		
	$breadcrumb .="                    </ul>";
	$breadcrumb .="                 </div>";
	$breadcrumb .="              </div>";
	$breadcrumb .="           </div>";
	$breadcrumb .="        </section>";

	echo $breadcrumb;
?>