
<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>

<?php
$cssScriptPaths = array(
  "/assets/css/reece-products.css",
  "/assets/css/reece-bathrooms.css"
);
include_once($serverBase."/includes/head/head-generic.php");
?>

<body>
<div class="ocmain-wrapper">
  <div class="navbar navbar-fixed-top topNav">
    <?php
    $genericNavActiveMenuItem = "Bathrooms";
    include_once($serverBase."/includes/nav/nav-generic.php");
    ?>
  </div>
  <div class="content-container">
    <div class="inner-wrapper">
      <ul class="breadcrumb">
        <li><a href="#">Bathroom</a> <span class="divider">/</span></li>
        <li><a href="#">Happiness Zone</a> <span class="divider">/</span></li>
        <li class="active page-branding text-brand">Designer Looks</li>
      </ul>
      <div class="row-fluid">
        <div class="span7">
          <h2 class="designerLooksHeader">Designer Looks</h2>
        </div>
        <div class="span5 designerLooksIndexLink">
          <a href="index.php">More Designer Bathrooms</a>
        </div>
      </div>

    </div><!-- /.inner-wrapper -->
  </div><!-- /.content-container -->
  <hr class="doubleRedLine">
  <div class="content-container">
    <div class="inner-wrapper">
      <div class="designerLooksIntro">
        <div class="designerLooksIntroThumb">
          <img src="/assets/images/nicky-lobo/habitus-magazines.png" alt="Nicky Lobo">
        </div>
        <div class="designerLooksIntroText">
          <h3 class="designerLooksIntroName">Nicky Lobo&rsquo;s dream bathroom</h3>
          <h4 class="designerLooksIntroRole">Editor, Habitus Magazine</h4>
          <p class="designerLooksIntroDesc">Habitus is a leading Australian design magazine for and about the design hunters – the homes they build, the landscapes that surround them, and the products and works of art they put inside.</p>









        </div>
      </div>
      <div id="designerLooksCarousel" class="carousel slide designerLooksCarousel" data-bs-carousel="carousel">
        <h3 class="carouselTitle" style="background-color:#64928a;color:#ffffff;"><a href="#designerLooksStoryHead">Nicky Lobo’s Vision</a></h3>
        <h4 class="viewProductsLink"><a href="#designerLooksProducts">View Products &nbsp;<i class="icon-caret-right icon-large">&nbsp;</i></a></h4>
        <div class="carousel-inner">
          <div class="active item">
            <img src="/assets/images/nicky-lobo/design-01.jpg" alt="Bathhouse 1">
          </div>
          <div class="item">
            <img src="/assets/images/nicky-lobo/design-02.jpg" alt="Bathhouse 2">
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#designerLooksCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#designerLooksCarousel" data-slide-to="1"></li>
        </ol>
        <!-- Carousel nav -->
        <a class="carousel-control left" href="#designerLooksCarousel" data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#designerLooksCarousel" data-slide="next">&rsaquo;</a>
      </div><!-- /.carousel -->


      <h3 id="designerLooksStoryHead" class="designerLooksStoryHead">The Design Story</h3>
      <div class="designerLooksStory">
        <div class="designerLooksEditorContent" style="background-color:#64928a;">
          <div class="designerLooksEditorThumb">
            <img src="/assets/images/nicky-lobo/habitus-magazines.png" alt="Inside Out Magazine">
          </div>
          <div class="designerLooksEditorInfo">
            <h4 class="designerLooksStoryName">Nicky Lobo</h4>
            <h5 class="designerLooksStoryRole">Editor</h5>
            <h5 class="designerLooksStoryRole">Habitus Magazine</h5>
          </div>
          <p>"The bathroom returns to its natural function. A sophisticated jungle of primal rebirth.</p>
          <p>In the wild, curves and organic shapes reign supreme. The light is dappled, filtered through dense foliage. A sense of symmetry, a simple colour palette and refined materials bring order and peace. Graceful lines, elegant forms and a hint of luxury intensify the calming element of this arboreal experience.</p>
          <p>Connected to the elements, a place of nourishing repose; the cat keeps its cool in this sophisticated jungle bathroom."</p>
          <p>Visit <a href="http://www.habitusliving.com/" target="_blank">habitusliving.com</a> </p>

          <p>
          <a href="https://twitter.com/habitusliving" target="_blank"><i class="icon-twitter icon-large"></i></a>
          <a href="https://instagram.com/habitusliving/" target="_blank"><i class="icon-instagram icon-large"></i></a>
          </p>

        </div>
        <div class="designerLooksArchitectContent">
          <div class="designerLooksArchitectInfo">
            <h4 class="designerLooksStoryName">Thomas Coward</h4>
            <h5 class="designerLooksStoryRole">Designer</h5>
            <h5 class="designerLooksStoryRole">Thomas Coward Studio</h5>
          </div>
          <p>Thomas Coward Studio creates product, furniture and spaces. From consultancy to full production, the studio works over several disciplines to create and deliver outcomes to fulfil commercial and personal objectives.</p>
          <p>"Nicky wanted a bathroom which incorporated light, nature and simplicity.</p>

           <p>I created the vision of a space which encompasses the chaotic nature of a lush jungle, controlled by the structured grid of the mosaic and dominant form of the room. The beauty lies where these these elements meet. The room plays with the notion of being exposed to nature but protected by it during our most intimate moments. The space is open plan, with foliage creating boundaries and zones.</p>
          
           <p>The products were chosen for their pure, stoic forms, which spoke to the room and complemented Nicky's bathroom rituals."</p>
          <p>Visit <a href="http://thomascoward.com/" target="_blank">thomascoward.com</a></p>
          <p>
          <a href="https://instagram.com/thomas.coward" target="_blank"><i class="icon-instagram icon-large"></i></a>
          </p>
        </div>
      </div>
      <div class="row-fluid designerLooksWorkImages">
        <div class="span4">
          <img src="/assets/images/nicky-lobo/mood-01.jpg" alt="placeholder">
        </div>
        <div class="span4">
          <img src="/assets/images/nicky-lobo/mood-02.jpg" alt="placeholder">
        </div>
        <div class="span4">
          <img src="/assets/images/nicky-lobo/mood-03.jpg" alt="placeholder">
        </div>
      </div>


      <h3 class="designerLooksStoryHead">Products Used</h3>

      <div class="row-fluid">
        <div class="span6">
          <div class="designerLooksProductsAccordion" id="designerLooksProducts">
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#designerLooksProducts" href="#collapse1">
                  <i class="icon-chevron-down">&nbsp;</i> 1. Sussex Pol Overhead Shower Black
                </a>
              </div>
              <div id="collapse1" class="accordion-body collapse ">
                <div class="accordion-inner">
                  <a href="http://www.reece.com.au/bathrooms/products/2262774">
                    <img src="http://www.reece.com.au/products/showroom_main/2262774.jpg" alt="Sussex Pol Overhead Shower Black">
                  </a>
                  <div class="accordionAction">
                    <a target="_blank" href="http://www.reece.com.au/bathrooms/products/2262774" class="btn">Product Details</a>
                  </div>
                </div>
              </div>
            </div><!-- /.accordion-group -->
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#designerLooksProducts" href="#collapse2">
                  <i class="icon-chevron-down">&nbsp;</i> 2. Sussex Scala 200 Curved Wall Bath Spout
                </a>
              </div>
              <div id="collapse2" class="accordion-body collapse">
                <div class="accordion-inner">
                  <a href="http://www.reece.com.au/bathrooms/products/225902">
                    <img src="http://www.reece.com.au/products/showroom_main/225902.jpg" alt="Sussex Scala 200 Curved Wall Bath Spout">
                  </a>
                  <p>Also available in black through custom order.</p>
                  <div class="accordionAction">
                    <a target="_blank" href="http://www.reece.com.au/bathrooms/products/225902" class="btn">Product Details</a>
                  </div>
                </div>
              </div>
            </div><!-- /.accordion-group -->
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#designerLooksProducts" href="#collapse3">
                  <i class="icon-chevron-down">&nbsp;</i> 3. Sussex Scala Shower/Bath Mixer
                </a>
              </div>
              <div id="collapse3" class="accordion-body collapse">
                <div class="accordion-inner">
                  <a href="http://www.reece.com.au/bathrooms/products/2262113">
                    <img src="http://www.reece.com.au/products/showroom_main/2262113.jpg" alt="Sussex Scala Shower/Bath Mixer">
                  </a>
                  <p>Also available in black through custom order.</p>
                  <div class="accordionAction">
                    <a target="_blank" href="http://www.reece.com.au/bathrooms/products/2262113" class="btn">Product Details</a>
                  </div>
                </div>
              </div>
            </div><!-- /.accordion-group -->
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#designerLooksProducts" href="#collapse4">
                  <i class="icon-chevron-down">&nbsp;</i> 4. Alape WT 400 Round Washstand
                </a>
              </div>
              <div id="collapse4" class="accordion-body collapse">
                <div class="accordion-inner">
                  <a href="http://www.reece.com.au/bathrooms/products/9502690">
                    <img src="http://www.reece.com.au/products/showroom_main/9502690.jpg" alt="Alape WT 400 Round Washstand">
                  </a>
                  <div class="accordionAction">
                    <a target="_blank" href="http://www.reece.com.au/bathrooms/products/9502690" class="btn">Product Details</a>
                  </div>
                </div>
              </div>
            </div><!-- /.accordion-group -->
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#designerLooksProducts" href="#collapse5">
                  <i class="icon-chevron-down">&nbsp;</i> 5. Posh Solus 1780 Freestanding Bath
                </a>
              </div>
              <div id="collapse5" class="accordion-body collapse">
                <div class="accordion-inner">
                  <a href="http://www.reece.com.au/bathrooms/products/9504385">
                    <img src="http://www.reece.com.au/products/showroom_main/9504385.jpg" alt="Posh Solus 1780 Freestanding Bath">
                  </a>
                  <div class="accordionAction">
                    <a target="_blank" href="http://www.reece.com.au/bathrooms/products/9504385" class="btn">Product Details</a>
                  </div>
                </div>
              </div>
            </div><!-- /.accordion-group -->
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#designerLooksProducts" href="#collapse6">
                  <i class="icon-chevron-down">&nbsp;</i> 6. Veitch Fitzroy 100 Shower Channel
                </a>
              </div>
              <div id="collapse6" class="accordion-body collapse">
                <div class="accordion-inner">
                  <a href="http://www.reece.com.au/bathrooms/products/202797">
                    <img src="http://www.reece.com.au/products/showroom_main/202797.jpg" alt="Veitch Fitzroy 100 Shower Channel">
                  </a>
                  <div class="accordionAction">
                    <a target="_blank" href="http://www.reece.com.au/bathrooms/products/202797" class="btn">Product Details</a>
                  </div>
                </div>
              </div>
            </div><!-- /.accordion-group -->
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#designerLooksProducts" href="#collapse7">
                  <i class="icon-chevron-down">&nbsp;</i> 7. Kartell Gold Mirror by Laufen
                </a>
              </div>
              <div id="collapse7" class="accordion-body collapse">
                <div class="accordion-inner">
                  <a href="http://www.reece.com.au/bathrooms/products/9504730">
                    <img src="http://www.reece.com.au/products/showroom_main/9504730.jpg" alt="Kartell Gold Mirror by Laufen">
                  </a>
                  <div class="accordionAction">
                    <a target="_blank" href="http://www.reece.com.au/bathrooms/products/9504730" class="btn">Product Details</a>
                  </div>
                </div>
              </div>
            </div><!-- /.accordion-group -->
          </div>
        </div>
        <div class="span6">
          <img src="/assets/images/nicky-lobo/floor-plan.jpg" alt="floor plan" usemap="#prodmap" id="floorplan">
          <map name="prodmap" id="productmap">
            <area shape="circle" coords="740,160,35" class="accordion-toggle area1" data-toggle="collapse" data-parent="#designerLooksProducts" href="#collapse1" title="1. Hydrotherm Milan Floor to Ceiling Heated Rail">
            <area shape="circle" coords="540,459,35" class="accordion-toggle area2" data-toggle="collapse" data-parent="#designerLooksProducts" href="#collapse2" title="2. Kartell by Laufen Tangerine Orange Stool">
            <area shape="circle" coords="492,555,35" class="accordion-toggle area3" data-toggle="collapse" data-parent="#designerLooksProducts" href="#collapse3" title="3. Posh Solus 1780 Freestanding Bath">
            <area shape="circle" coords="576,199,35" class="accordion-toggle area4" data-toggle="collapse" data-parent="#designerLooksProducts" href="#collapse4" title="4. Sussex Scala Floor Bath Mixer Square">
            <area shape="circle" coords="492,335,35" class="accordion-toggle area5" data-toggle="collapse" data-parent="#designerLooksProducts" href="#collapse5" title="5. Ideal Standard Tonic  BTW Close Coupled Toilet Suite">
            <area shape="circle" coords="939,199,35" class="accordion-toggle area6" data-toggle="collapse" data-parent="#designerLooksProducts" href="#collapse6" title="6. White Stone Hox Mini Above/Wall Basin Right">
            <area shape="circle" coords="576,46,35" class="accordion-toggle area7" data-toggle="collapse" data-parent="#designerLooksProducts" href="#collapse7" title="7. Mizu Drift Basin Mixer">
          </map>
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
  "activeMenu" => "Bathrooms",
  "activeMenuItem" => "Bathroom Moments"
);
include_once($serverBase."/includes/nav/nav-mobile.php");
?>

<?php
$jsScriptPaths = array(
  "/assets/js/jquery.mobile.custom.min.js",
  "/assets/js/bootstrap-transition.js",
  "/assets/js/bootstrap-carousel.js",
  "/assets/js/bootstrap-collapse.js",
  "/assets/js/bootstrap-tab.js",
  "/assets/js/bootstrap-dropdown.js",
  "/assets/js/reece-ocnav.js",
  "/assets/js/reece-carousel.js",
  "/assets/js/jquery.ImageMaps.min.js"
);
include_once($serverBase."/includes/foot/scripts.php");
?>
<script type="text/javascript">
  $(function(){
    $('#designerLooksProducts .accordion-body').on('hide', function () {
      $(this).parent('.accordion-group').find('i.icon-chevron-up').removeClass('icon-chevron-up').addClass('icon-chevron-down')
    });
    $('#designerLooksProducts .accordion-body').on('show', function () {
      $(this).parent('.accordion-group').find('i.icon-chevron-down').removeClass('icon-chevron-down').addClass('icon-chevron-up')
    });

    //makes hotspots responsive
    $('#floorplan').rwdImageMaps();

  });
</script>

</body>
</html>