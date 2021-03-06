<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>     <html class="no-js ie ie8 lt-ie10 lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9]>     <html class="no-js ie ie9 lt-ie10" lang="en"> <![endif]-->
<!--[if IE 10]>    <html class="no-js ie ie10" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <?php include_once "themes/templates/includes/Meta.php" ?>
  <?php include_once('templates/includes/meta.php');?><!-- New meta-->
  <title>Projects</title>  
</head>
<body>
<div class="ocmain-wrapper">
  <div class="browser-message">
    <div class="content-container">
      <div class="alert alert-warning" role="alert">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <p><strong>Attention! </strong>Your browser is out of date and may not fully support all features of this website. Learn how to <a href="http://browsehappy.com/">Upgrade Your Browser</a> to ensure the best experience.</p>
      </div>
    </div>
  </div>
  <?php 
  $current='projects';
  include_once("themes/templates/includes/Navigation.php"); ?>
  <div id="grant" class="<?php echo $current;?>">
    <?php include_once('templates/includes/header.php');?>
		<?php include_once('templates/includes/navigation.php');?>
		<div id="main">
			<?php include_once('templates/pages/project-article.php');?>		
		</div>
  </div>
  <?php include_once("themes/templates/includes/Footer.php"); ?>
</div>
<?php include_once("themes/templates/includes/MobileNavigation.php"); ?>
<?php include_once("themes/templates/includes/Scripts.php"); ?>
<?php include_once('templates/includes/scripts.php');?><!-- New scripts-->
</body>
</html>