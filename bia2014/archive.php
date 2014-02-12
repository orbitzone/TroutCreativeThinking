<?php
ini_set('error_reporting', E_ALL);

$fileData = fillArrayWithFileNodes(new DirectoryIterator('img/thumbs'));

function fillArrayWithFileNodes(DirectoryIterator $dir) {
    $data = array();
    foreach ($dir as $node) {
        if ($node->isDir() && !$node->isDot()) {
            $data[$node->getFilename()] = fillArrayWithFileNodes(new DirectoryIterator($node->getPathname()));
        } else if ($node->isFile() && strpos($node->getFilename(), '.') !== 0) {
            $data[] = $node->getFilename();
        }
    }
    return $data;
}

if (count($fileData) > 0)
    krsort($fileData);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Reece Bathroom Innovation Award 2014</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="css/responsive.css">
        <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css">
        <link type="text/css" rel="stylesheet" href="js/fancybox/jquery.fancybox.css">
        <link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/cdf19c66-4345-4336-a69e-94103a2e98b7.css"/> 
        <link type="text/css" rel="stylesheet" href="css/theme.css">
        <!-- [if IE 7]>
        <link href="css/font-awesome-ie7.min.css" rel="stylesheet" type="text/css">
        <![endif] -->
    </head>
    <body>
        <div class="main-header" id="top">
            <div class="container">
                <a href="#" title="title" class="pull-right main-logo"><img src="img/reece-logo.jpg" alt="Reece" /></a>
                <a href="index.html" title="Reece BIA Home" class="section-logo"><img src="img/bia-logo.png" alt="Reece BIA 2013" /></a>
                <a href="#mainNav" data-toggle="collapse" class="showNav hidden-desktop">
                    <span class="showNavBars"></span>
                    <span class="showNavBars"></span>
                    <span class="showNavBars"></span>
                </a>
                <div  id="mainNav" class="collapse">
                    <ul class="mainNav">
                        <li ><a href="index.html" title="title"><span class="title">Home</span></a></li>
                        <li class="aboutLink">
                            <a href="award.html" title="title" class="visible-desktop"><span class="title">About</span></a>
                            <a href="#awardSubNav" data-toggle="collapse" class="hidden-desktop"><span class="title">About</span></a>
                            <ul id="awardSubNav" class="collapse">
                                <li><a href="award.html" title="title">The Brief</a></li>
                                <li><a href="prizes.html" title="title">Prizes</a></li>
                                <li><a href="judges.html" title="title">Judges</a></li>
                                <li><a href="entry.html" title="title">How to Enter</a></li>
                                <li><a href="rules.html" title="title">Rules &amp; Conditions</a></li>
                                <li><a href="faq.html" title="title">FAQs</a></li>
                                <li><a href="register.html" title="title">Enter Now</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html" title="title"><span class="title">Inspiration</span></a></li>
                        <li class="active"><a href="archive.php" title="title"><span class="title">Finalists</span></a></li>
                        <li><a href="media.html" title="title"><span class="title">Media</span></a></li>
                        <li><a href="partners.html" title="title"><span class="title">Partners</span></a></li>
                        <li><a href="contact.html" title="title"><span class="title">Contact</span></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row-fluid">
                <div class="span12"></div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <h2>Reece bathroom<br/>innovation award</h2>    
                </div>                  
            </div>
            <div class="row-fluid">
                <div class="span9">

                    <div class="content-wrap winners">

                        <h3>Previous winners</h3>
                        <p>Our previous student and professional winners have all put their unique imprint on BIA&rsquo;s history 
                            by exemplifying originality and creativity in bathroom product design. We&rsquo;ve put together a 
                            collection of past design excellence to offer some inspiration for this year&rsquo;s competition.</p>
                        <?php if (count($fileData) > 0): ?>
                            <?php $counter=0; ?>
                            <?php foreach ($fileData as $year => $entry): ?>
                                <div id="Year<?php echo $year ?>">
                                    <h3 class="divider"><?php echo $year ?> Finalists <?php if($counter++ != 0) { ?><small><a href="#top">top</a></a></small><?php } ?></h3>
                                    <?php foreach ($entry as $type => $subtype): ?>
                                        <h4><?php print ($type == 'pro') ? 'Professional' : 'Student'; ?></h4>
                                        <div class="masonry-container">
                                            <?php foreach ($subtype as $filename): ?>
                                                <div class="masonry-item">
                                                    <a href="#<?php echo $year.$type.explode(".",$filename)[0] ?>" class="fancybox <?php if (strpos($filename, 'WINNER') !== false) echo 'winner'; ?>" rel="<?php echo $year . $type ?>">
                                                        <img src="img/thumbs/<?php echo $year . '/' . $type . '/' . $filename ?>" alt="<?php echo $filename; ?>" />
                                                        <?php if (strpos($filename, 'WINNER') !== false) echo '<div class="winner-label">winner</div>'; ?>
                                                    </a>
                                                </div>
                    <div style="display:none">
                        <div id="<?php echo $year.$type.explode(".",$filename)[0] ?>" class="popup-container">
                            <div class="row-fluid">
                                <div class="span12">
                                    <h3 class="main-title">Design Entry Title<br>
                                    <small>Entrant Name | <?php print ($type == 'pro') ? 'Professional' : 'Student'; ?> Entry | <?php echo $year ?></small></h3>
                                    <img src="img/thumbs/<?php echo $year . '/' . $type . '/' . $filename ?>" alt="<?php echo $filename; ?>" />
                                    <div class="row-fluid"><div class="span12"></div></div>
                                    <div class="row-fluid">
                                        <div class="span12">
                                            <p>Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Ut non ornare arcu. Curabitur
                                                dui est, semper ac faucibus vel, iaculis
                                                condimentum.</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="span3 side-column">

                    <a href="register.html" class="register-circle" title="Register now">Register Now</a>

                    <h3>2014 Award Key Dates</h3>
                    <div class="content-wrap">
                        <div class="dates">
                            <h5>2 April 2013</h5>
                            <p>Entries open</p>
                            <h5>28 June 2013</h5>
                            <p>Entries close and judging begins</p>
                            <h5>August 2013</h5>
                            <p>Winners announced</p>
                        </div>
                    </div>

            
                    <h3>Browse by year</h3>
                    <div class="content-wrap archive">
                        <?php if (count($fileData) > 0): ?>
                            <ul class="unstyled side-menu">
                                <?php foreach ($fileData as $year => $entry): ?>
                                    <li>
                                        <a href="#Year<?php echo $year; ?>"><?php echo $year; ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                   
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12"></div>
            </div>
        </div>



        <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-collapse.js"></script>
        <script type="text/javascript" src="js/bootstrap-transition.js"></script>
        <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
        <script type="text/javascript" src="js/jquery.imagesloaded.js"></script>
        <script type="text/javascript" src="js/fancybox/jquery.fancybox.js"></script>
        <script type="text/javascript" src="js/bia.js"></script>
    </body>
</html>
