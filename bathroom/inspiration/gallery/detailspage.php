<?php $i = 3 ?>
	<div id="galleryCarousel<?= $i ?>" class="carousel slide">
		<div class="carousel-inner">
			<div class="active item">
				<img src="http://placehold.it/850x500.png/ccc/aaa" alt="placeholder">
			</div>
			<div class="item">
				<img src="http://placehold.it/850x500.png/ccc/aaa" alt="placeholder">
			</div>
		</div>
		<!-- Carousel nav -->
		<a class="carousel-control left" href="#galleryCarousel<?= $i ?>" data-slide="prev">&lsaquo;</a>
		<a class="carousel-control right" href="#galleryCarousel<?= $i ?>" data-slide="next">&rsaquo;</a>
	</div><!-- /.carousel -->
	<div class="galleryThumbContentWrap">
		<div class="galleryThumbContent">
			<h4 class="galleryThumbPlace">
				<strong class="galleryThumbPlace">Elsternwick</strong>
				<span class="galleryThumbState">Victoria</span>
			</h4>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada sed massa eget vestibulum. Vivamus quis ligula non eros placerat ullamcorper. Aenean dictum porttitor elementum. Nulla at urna placerat quam luctus rutrum nec sed dui. Nam consequat libero in gravida pulvinar
			</p>
		</div>
	</div><!-- /.galleryThumbContentWrap -->
	<div class="galleryThumbTabsWrap">
		<ul id="galleryThumbTabs<?= $i ?>" class="galleryThumbTabs">
			<li class="active">
				<a href="#floorPlan<?= $i ?>" >Floor Plan</a>
			</li>
			<li>
				<a href="#moreDetails<?= $i ?>">More Details</a>
			</li>
			<li>
				<a href="#watchVideo<?= $i ?>">Watch Video</a>
			</li>
		</ul>
		<div class="tab-content">
		<div id="floorPlan<?= $i ?>" class="tab-pane fade active in">
		<img src="http://placehold.it/750x500.png/ccc/aaa" alt="placeholder">
		</div>
		<div id="moreDetails<?= $i ?>" class="tab-pane fade">
		More Details
		</div>
		<div id="watchVideo<?= $i ?>" class="tab-pane fade">
		Watch Video
		</div>
		</div>

	</div><!-- /.galleryThumbTabsWrap -->
	<div class="productsUsed">
		<h4>Products Used</h4>
		<ul class="productsUsedList">
			<li>
				<img src="http://placehold.it/350x300.png/ccc/aaa" alt="placeholder">
				<strong>Lorem ipsum dolor sit amet</strong>
			</li>
			<li>
				<img src="http://placehold.it/350x300.png/ccc/aaa" alt="placeholder">
				<strong>Lorem ipsum dolor sit amet</strong>
			</li>
			<li>
				<img src="http://placehold.it/350x300.png/ccc/aaa" alt="placeholder">
				<strong>Lorem ipsum dolor sit amet</strong>
			</li>
			<li>
				<img src="http://placehold.it/350x300.png/ccc/aaa" alt="placeholder">
				<strong>Lorem ipsum dolor sit amet</strong>
			</li>																																				
		</ul>
	</div><!-- /.productsUsed -->
	<ul class="galleryDetailFooter">
		<li>
			<div class="galleryDetailFooterItem">
			<h4>Get The Look</h4>
			<img src="http://placehold.it/350x200.png/ccc/aaa" alt="placeholder">
			</div>
		</li>
		<li>
			<div class="galleryDetailFooterItem">
			<h4>Featured Brand</h4>
			<img src="http://placehold.it/350x200.png/ccc/aaa" alt="placeholder">
			</div>
		</li>
		<li>
			<div class="galleryDetailFooterItem">
			<h4>As Seen In</h4>
			<img src="http://placehold.it/350x200.png/ccc/aaa" alt="placeholder">
			</div>
		</li>
	</ul><!-- /.galleryDetailFooter -->

<?php
$url = $_SERVER['REQUEST_URI']; //returns the current URL
$parts = explode('/',$url);
$currentDir = $_SERVER['SERVER_NAME'];
for ($i = 0; $i < count($parts) - 1; $i++) {
 $currentDir .= $parts[$i] . "/";
}
$ajaxURL = $currentDir;
?>
		<div id="galleryPageComments" class="fb-comments" data-href="<?php echo $ajaxURL; ?>" data-numposts="1" data-colorscheme="light"></div>	
	<!--<section class="commentsSection">
		<h4>Comments</h4>

	</section>-->
