
	<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>

	<?php 
		$cssScriptPaths = [
			"/assets/css/reece-trade-outlet.css",
			"/assets/css/reece-nav-updated.css",
      "/assets/css/reece-home.css"
		]; 
	   	include_once($serverBase."/includes/head/head-generic.php");
	?>		

    <body class="no-touch bathroom-moments account-details-summary">
		<div class="ocmain-wrapper">

			<?php

			   	include_once($serverBase."/includes/nav/nav-generic.php");
			?>

	    <div class="content-container">
			<div class="inner-wrapper">

<div id="headCarousel" class="carousel  slide hidden-phone" data-bs-carousel="carousel" data-bs-carousel-interval="0">
	<!-- Carousel items -->
	<div class="carousel-inner">
        
				<div class="item active">
					<a href="/bathroom-sale">
						<img src="http://www.reece.com.au/assets/pages/thumbnails/bathroom-sale-reece.jpg" alt="Spring Sale" class="visible-desktop">
                        
							<img src="http://www.reece.com.au/assets/pages/thumbnails/bathroom-sale-reece2.jpg" alt="Spring Sale" class="hidden-desktop">
                        
					</a>
				</div>
        
				<div class="item ">
					<a href="/diydisasters">
						<img src="http://www.reece.com.au/assets/pages/thumbnails//DIY-Disasters-Competition.jpg" alt="DIY Disasters" class="visible-desktop">
                        
							<img src="http://www.reece.com.au/assets/pages/thumbnails//DIY-Disasters-Competition2.jpg" alt="DIY Disasters" class="hidden-desktop">
                        
					</a>
				</div>
        
	</div>
    
		<a class="carousel-control left background--light" href="/#headCarousel" data-slide="prev">&lsaquo;</a>
		<a class="carousel-control right background--light" href="/#headCarousel" data-slide="next">&rsaquo;</a>
    
</div>



<div class="content-container hidden-phone">
    <div class="inner-wrapper">
        <div class="row-fluid features">
            
            

            
            <div class="span3 bathrooms">        
    
    <div class="feature-item feature-bathrooms tile-item">
        <a href="/bathrooms">
            <img src="http://www.reece.com.au/assets/pages/thumbnails/feature-bathrooms.jpg" alt="feature bathrooms">
        </a>
        <div class="caption">
            <a href="/bathrooms"><h4>Bathrooms</h4></a>
        </div>
        <a href="/bathrooms" class="primary-link" title="Bathrooms"></a>
    </div>
    
</div>
            

            

            
            <div class="span3 plumbing">        
    
    <div class="feature-item feature-plumbing tile-item">
        <a href="http://reece.com.au/plumbing">
            <img src="http://www.reece.com.au/assets/pages/thumbnails/feature-plumbing.jpg" alt="feature plumbing">
        </a>
        <div class="caption">
            <a href="http://reece.com.au/plumbing"><h4>Plumbing</h4></a>
        </div>
        <a href="http://reece.com.au/plumbing" class="primary-link" title="Plumbing"></a>
    </div>
    
</div>
            

            

            
            <div class="span3 specialised">        
        
    <div class="row-fluid">
        
        <div class="span6 bottom-space">
            <div class="feature-item feature-irrigation tile-item ">
                <a href="http://reece.com.au/irrigation">
                    <img src="http://www.reece.com.au/assets/pages/thumbnails/feature-irrigation.jpg" alt="feature irrigation">
                </a>
                <div class="caption">
                    <a href="http://reece.com.au/irrigation">
                        <h4>Irrigation</h4>
                    </a>
                </div>
                <a href="http://reece.com.au/irrigation" class="primary-link" title="Irrigation"></a>
            </div>
        </div>  
        
        
        <div class="span6 bottom-space">
            <div class="feature-item feature-onsite tile-item last">
                <a href="http://reece.com.au/onsite">
                    <img src="http://www.reece.com.au/assets/pages/thumbnails/feature-onsite.jpg" alt="feature onsite">
                </a>
                <div class="caption">
                    <a href="http://reece.com.au/onsite">
                        <h4>Onsite</h4>
                    </a>
                </div>
                <a href="http://reece.com.au/onsite" class="primary-link" title="Onsite"></a>
            </div>
        </div>  
        
    </div>
    <div class="row-fluid">
        
        
        <div class="span6 bottom-space">
            <div class="feature-item feature-civil tile-item ">
                <a href="http://reece.com.au/civil">
                    <img src="http://www.reece.com.au/assets/pages/thumbnails/feature-civil2.jpg" alt="feature civil2">
                </a>
                <div class="caption">
                    <a href="http://reece.com.au/civil">
                        <h4>Civil</h4>
                    </a>
                </div>
                <a href="http://reece.com.au/civil" class="primary-link" title="Civil"></a>
            </div>
        </div>  
        
        
        <div class="span6 bottom-space">
            <div class="feature-item feature-hvacr tile-item last">
                <a href="http://reece.com.au/hvacr">
                    <img src="http://www.reece.com.au/assets/pages/thumbnails/feature-hvacr.jpg" alt="feature hvacr">
                </a>
                <div class="caption">
                    <a href="http://reece.com.au/hvacr">
                        <h4>HVAC-R</h4>
                    </a>
                </div>
                <a href="http://reece.com.au/hvacr" class="primary-link" title="HVAC-R"></a>
            </div>
        </div>  
        
    </div>
    <div class="row-fluid">
        
        
    </div>
    
</div>
            

            

            
            <div class="span3 bottom-space">    
    <div class="feature-item tile-item feature-storefinder last">
        <img alt="title" src="http://www.reece.com.au/assets/pages/thumbnails/feature-storefinder.png">
        <div class="form-wrapper">
            <h4>Store Finder</h4>
            <form method="post" action="http://www.reece.com.au/storefinder" class="storefinderform">
                <input type="hidden" name="point" value="">
                <select name="homepageStoreType" class="span8 hidden-phone">
                    <option value="">All store types</option>
                    <option value="BS">Bathroom Showroom</option>
                    <option value="P">Plumbing Centre</option>
                    <option value="I">Irrigation</option>
                    <option value="H">HVAC-R</option>
                    <option value="R">Refrigeration</option>
                    <option value="C">Civil</option>
                    <option value="O">Onsite</option>
                </select>

                <span class="hidden-phone input-append">
                    <input type="text" class="span8" placeholder="Suburb/Postcode" name="origin">
                    <input type="submit" class="btn span3" value="GO">
                </span>
            </form>
        </div>
    </div>
</div>

        </div>
    </div>
</div>
		</div>
	    </div>	
	    
    <?php 
			include_once($serverBase."/includes/foot/foot-generic.php");
		?>	

	</div>

   	<?php
   		$mobileNavActiveMenu = array(
   			"activeMenu" => "Plumbing"
   		);
	   	include_once($serverBase."/includes/nav/nav-mobile.php");
	?>	

	<?php 
		$jsScriptPaths = [
			"/assets/js/jquery.lazyload.min.js", 
			"/assets/js/bootstrap-collapse.js",
			"/assets/js/bootstrap-carousel.js",
			"/assets/js/bootstrap-dropdown.js",
			"/assets/js/bootstrap-transition.js",
			"/assets/js/jquery.mobile.custom.min.js",
			"/assets/js/reece-ocnav.js",
			"/assets/js/reece-carousel.js",
			"/assets/js/reece-match-height.js"
		]; 
	   	include_once($serverBase."/includes/foot/scripts.php");
	?>
	
    </body>
</html>