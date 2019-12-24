<?php require_once 'header.php'; ?>

		<section id="inner-headline">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ul class="breadcrumb">
							<li><a href="#"><i class="fa fa-home"></i></a></li>
							<li class="active">Single post</li>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<section id="content">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
							
							<?php echo $content; ?>

						<div class="clear"></div>
					</div>
					<div class="col-lg-4">
						<aside class="right-sidebar">
							<div class="widget">
								<form role="form">
									<div class="form-group">
										<input type="text" class="form-control" id="s" placeholder="Search..">
									</div>
								</form>
							</div>
							<div class="widget">
								<h5 class="widgetheading">Categories</h5>
								<ul class="cat"> 
								<?php
                  				foreach ($global['categories'] as $slug => $category) {
									  echo '<li><i class="fa fa-angle-right"></i><a href="' , $global["base.url"] , '/category/',$slug,'">', $category ,'</a></li>';
                  				}
                				?>
							</div>
							<div class="widget">
								<h5 class="widgetheading">Latest posts</h5>
								<ul class="recent">
									<li>
										<img src="<?php echo $global['assets.prefix'];?>/themes/Sailor/img/dummies/blog/65x65/thumb1.jpg" class="pull-left" alt="" />
										<h6><a href="#">Lorem ipsum dolor sit</a></h6>
										<p>
											Mazim alienum appellantur eu cu ullum officiis pro pri
										</p>
									</li>
									<li>
										<a href="#"><img src="<?php echo $global['assets.prefix'];?>/themes/Sailor/img/dummies/blog/65x65/thumb2.jpg" class="pull-left" alt="" /></a>
										<h6><a href="#">Maiorum ponderum eum</a></h6>
										<p>
											Mazim alienum appellantur eu cu ullum officiis pro pri
										</p>
									</li>
									<li>
										<a href="#"><img src="<?php echo $global['assets.prefix'];?>/themes/Sailor/img/dummies/blog/65x65/thumb3.jpg" class="pull-left" alt="" /></a>
										<h6><a href="#">Et mei iusto dolorum</a></h6>
										<p>
											Mazim alienum appellantur eu cu ullum officiis pro pri
										</p>
									</li>
								</ul>
							</div>
							<div class="widget">
								<h5 class="widgetheading">Popular tags</h5>
								<ul class="tags">
									<li><a href="#">Web design</a></li>
									<li><a href="#">Trends</a></li>
									<li><a href="#">Technology</a></li>
									<li><a href="#">Internet</a></li>
									<li><a href="#">Tutorial</a></li>
									<li><a href="#">Development</a></li>
								</ul>
							</div>
						</aside>
					</div>
				</div>
			</div>
		</section>

<?php require_once 'footer.php'; ?>
