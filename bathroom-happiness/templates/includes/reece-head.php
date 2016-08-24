<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="initial-scale=1.0">
    <title><?php echo $title;?></title>
    <!--[if lt IE 9]>
        <script src="js/vendor/html5shiv/dist/html5shiv.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/reece-global.css" />
    <script src='js/vendor/jquery.min.js' type='text/javascript'></script>
    <script src="js/reece-ocnav.js" type="text/javascript"></script>
    <script src='js/vendor/respond.min.js' type='text/javascript'></script>
    <script src='js/vendor/bootstrap.min.js' type='text/javascript'></script>
    <script src='js/vendor/slick.min.js' type='text/javascript'></script>
    <script src='js/vendor/jquery.validate.min.js' type='text/javascript'></script>
    <?php if(isset($extra_javascript)){ echo $extra_javascript;}?>
    <script src='js/vendor/placeholders.min.js' type='text/javascript'></script>
    <script src='js/src/main.js' type='text/javascript'></script>
    <script type="text/javascript">
    (function() {
        var path = '//easy.myfonts.net/v2/js?sid=289419(font-family=Handelson+Three)&key=EtuFBAx1Ax',
            protocol = ('https:' == document.location.protocol ? 'https:' : 'http:'),
            trial = document.createElement('script');
        trial.type = 'text/javascript';
        trial.async = true;
        trial.src = protocol + path;
        var head = document.getElementsByTagName("head")[0];
        head.appendChild(trial);
    })();
    </script>
  </head>