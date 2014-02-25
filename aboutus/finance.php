
    <?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>

    <?php 
        $cssScriptPaths = [
            "/assets/css/reece-finance.css"   
        ]; 
        include_once($serverBase."/includes/head/head-generic.php");
    ?>      

    <body class="finance">
        <div class="ocmain-wrapper">
            <div class="navbar navbar-fixed-top topNav">
                <?php 
                    $genericNavActiveMenuItem = "About Us";
                    include_once($serverBase."/includes/nav/nav-generic.php");
                ?>

            </div>
            <div class="content-container">
                <div class="inner-wrapper">

                    <ul class="breadcrumb">
                        <li><a href="#">About us</a> <span class="divider">/</span></li>
                        <li class="active page-branding text-brand">Finance</li>
                    </ul>

                    <section class="row-fluid banner">
                        <div class="span12">
                            <img src="/assets/images/aboutus/banner-finance.jpg" alt="Don't forget alt text">
                        </div>
                    </section>
                    

                    <div class="row-fluid">

                        <div class="span8">
                            <h3 class="heading">Finance</h3>
                            <blockquote>Sed sollicitudin ligula eu diam dapibus, eget laoreet orci egestas. Aenean rhoncus erat non condimentum commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sollicitudin ligula eu diam dapibus, eget laoreet orci egestas. Aenean rhoncus erat non condimentum commodo.  Lorem ipsum dolor sit amet, consectetur adipiscing sollicitudin ligula eu diam dapibus, elit.  Lorem ipsum ipsum dolor sit amet, consectetur adipiscing sollicitudindolor sit amet, consectetur adipiscing sollicitudin ligula eu diam dapibus, elit. </p>
                        </div>
                        <div class="span4 share-price">
                            <img src="/assets/images/aboutus/dummy-shareprice.png">
                        </div>

                    </div>


                </div>
            </div>

            <div class="grey-bg file-download">
                <div class="content-container">
                    <div class="inner-wrapper">
                    
                       <ul class="nav nav-tabs row-fluid">
                            <li class="span4 active"><a href="#asx" data-toggle="tab">ASX Announcement</a></li>
                            <li class="span4"><a href="#corp" data-toggle="tab">Corporate Governance</a></li>
                            <li class="span4"><a href="#fin" data-toggle="tab">Financial Reports</a></li>
                       </ul>

                       <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="asx">
                                <div id="asx-carousel" class="carousel slide">
                                    <!-- Carousel items -->
                                    <div class="carousel-inner"> 
                                        <div class="item active row-fluid"><!--max 3 span4 per slide item please-->
                                            <div class="span4">
                                                <div class="icon"><div><img src="/assets/images/aboutus/ico-sharetrading.png" alt="Policy on Share Trading for Directors and Employees"></div></div>
                                                <p class="filename">Policy on Share Trading for Directors and Employees</p>
                                                <a href="#" class="download-pdf"><span class="icon-file"></span>
 Download PDF</a>
                                            </div>
                                            <div class="span4">
                                                <div class="icon"><div><img src="/assets/images/aboutus/ico-codeconduct.png" alt="Policy on Share Trading for Directors and Employees"></div></div>
                                                <p class="filename">Code of Conduct for Directors and Senior Executives</p>
                                                <a href="#" class="download-pdf"><span class="icon-file"></span></span> Download PDF</a>
                                            </div>
                                            <div class="span4">
                                                <div class="icon"><div><img src="/assets/images/aboutus/ico-codebusiness.png" alt="Policy on Share Trading for Directors and Employees"></div></div>
                                                <p class="filename">Code of Business Ethics and Conduct</p>
                                                <a href="#" class="download-pdf"><span class="icon-file"></span> Download PDF</a>
                                            </div>
                                        </div>
                                        <div class="item row-fluid">
                                            
                                            <div class="span4">
                                                <div class="icon"><div><img src="/assets/images/aboutus/ico-codeconduct.png" alt="Policy on Share Trading for Directors and Employees"></div></div>
                                                <p class="filename">Code of Conduct for Directors and Senior Executives</p>
                                                <a href="#" class="download-pdf"><span class="icon-file"></span></span> Download PDF</a>
                                            </div>
                                            <div class="span4">
                                                <div class="icon"><div><img src="/assets/images/aboutus/ico-codebusiness.png" alt="Policy on Share Trading for Directors and Employees"></div></div>
                                                <p class="filename">Code of Business Ethics and Conduct</p>
                                                <a href="#" class="download-pdf"><span class="icon-file"></span> Download PDF</a>
                                            </div>
                                            <div class="span4">
                                                <div class="icon"><div><img src="/assets/images/aboutus/ico-sharetrading.png" alt="Policy on Share Trading for Directors and Employees"></div></div>
                                                <p class="filename">Policy on Share Trading for Directors and Employees</p>
                                                <a href="#" class="download-pdf"><span class="icon-file"></span>
 Download PDF</a>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- Carousel nav -->
                                    <a class="carousel-control left" href="#asx-carousel" data-slide="prev">&lsaquo;</a>
                                    <a class="carousel-control right" href="#asx-carousel" data-slide="next">&rsaquo;</a>
                                </div>

                            </div>
                            <div class="tab-pane" id="corp">Content for 'Corporate' section...</div>
                            <div class="tab-pane" id="fin">Content for 'Financial' section...</div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="news">
                <div class="content-container">
                    <div class="inner-wrapper">
                    
                        <h3 class="heading">News</h3>
                        <section class="row-fluid">
                            <div class="span5">  
                               <img src="/assets/images/aboutus/img-news.jpg" alt="Don't forget alt text">
                            </div>  
                            <div class="span7">
                                <p class="date">23rd December 2013</p>
                                <h2>Reece excited to announce acquisition of Actrol</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sollicitudin ligula eu diam dapibus, eget laoreet orci egestas. Aenean rhoncus erat non condimentum commodo.  Lorem ipsum dolor sit amet, consectetur adipiscing sollicitudin ligula eu diam dapibus, elit.  Lorem ipsum dolor sit amet, <a href="#">consectetur adipiscing</a></p>
                            </div>
                        </section>
                    </div>
                </div>
            </div>

            <?php 
                include_once($serverBase."/includes/foot/foot-generic.php");
            ?>      

        </div>      

        <?php
            $mobileNavActiveMenu = array(
                "activeMenu" => "About Us"
            );
            include_once($serverBase."/includes/nav/nav-mobile.php");
        ?>  

        <?php 
            $jsScriptPaths = [
                "/assets/js/jquery.mobile.custom.min.js",
                "/assets/js/bootstrap-tab.js", 
                "/assets/js/bootstrap-transition.js", 
                "/assets/js/bootstrap-dropdown.js",
                "/assets/js/reece-signon.js",
                "/assets/js/bootstrap-carousel.js",
                "/assets/js/reece-finance.js",         
                "/assets/js/reece-ocnav.js"
            ]; 
            include_once($serverBase."/includes/foot/scripts.php");
        ?>      

        <script type="text/html" id="filter_block_template">

            <div class="brand-block span6">
                <h3 class="brand-title">
                    <a href="#"><%=title%></a>
                </h3>                                       
                <a class="brand-media" href="#"><img src="<%=media%>"></a>
                <p>
                    <%=content%>
                </p>
            </div>

        </script>                   

    </body>
</html>