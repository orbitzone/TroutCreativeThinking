
    <?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>

    <?php 
        $cssScriptPaths = [
            "/assets/css/reece-history.css"   
        ]; 
        include_once($serverBase."/includes/head/head-generic.php");
    ?>      

    <body class="history" data-spy="scroll" data-target=".nav-history">
        <div class="ocmain-wrapper">
            <div class="navbar navbar-fixed-top topNav">
                <?php 
                    $genericNavActiveMenuItem = "About Us";
                    include_once($serverBase."/includes/nav/nav-generic.php");
                ?>  
            </div>
        <div class="nav-history">
            <ul class="nav">
                <li><a href="#slide-1">Title</a></li>
                <li><a href="#slide-2">1910</a></li>
                <li><a href="#slide-3">1920</a></li>
            </ul>
        </div>    

        <section id="slide-1">
            <div class="content-container">
                <img src="/assets/images/aboutus/history/logo-reece.png" alt=" " class="reece-logo" 
                    data-0="opacity: 1" 
                    data-100="opacity:0.1"
                >
                <h1>Reece Timeline</h1>
                <h3>Reece Historic Moments</h3>
                <p
                    data-anchor-target="#slide-1"
                    data-100-bottom="opacity: 1"
                    data-bottom="opacity:0.3"
                >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac leo bibendum, suscipit sapien vitae, posuere nulla. Duis vitae neque urna. Cras in sem eu risus blandit congue in et odio. Sed non congue tellus, vel facilisis tortor. Nunc imperdiet semper nibh in vestibulum. Donec a volutpat quam, eget mattis eros. Quisque augue leo, cursus quis venenatis nec, venenatis a quam. Nunc eleifend ipsum ac eros sollicitudin, non accumsan tortor mattis. Etiam eu enim sit amet magna convallis sollicitudin. Fusce porttitor nulla ac nisi accumsan ultrices.</p>
                <img src="/assets/images/aboutus/history/img-drop.png" alt=" " class="water-drop"
                    data-anchor-target="#slide-1"
                    data-top-top="top: 0%" 
                    data-center-bottom="top: 60%; opacity: 1"
                    data--200-top-bottom="opacity: 0; top: 80%"
                >

            </div>
         </section>

        <section id="slide-2"
            data-bottom-top="left: -80%"
            data-center-top="left: 0";
        >
            <div class="content-container">
                <h1>1910</h1>
                <h2>Harold Joseph Reece begins selling goods from the back of his truck.</h2>

            </div>
        </section> 

        <section id="slide-3">
         <div class="wave" 
            data-bottom-top="background-position: 0px 0px"
            data-top-top="background-position: 500px 0px"
            data-anchor-target="#slide-3"
         ></div>
             <div class="content-container">

                 <h1>1920</h1>
                 <h2>Lorem ipsum sit dolor amet concesteur.</h2>
             </div>
        </section>   



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
                "/assets/js/bootstrap-scrollspy.js", 
                "/assets/js/reece-ocnav.js",
                "/assets/js/skrollr.min.js",
                "/assets/js/reece-history.js"

 
            ]; 
            include_once($serverBase."/includes/foot/scripts.php");
        ?>                      

    </body>
</html>