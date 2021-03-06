<?php
$state = $_GET['state'];
$retailItems = array(
    "My Details",
    "(Order History)",
    "3D Bathroom Plans",
    "Product Lines",
    "Logout",
);

if ($state == "loggedIn") {
    $message = '<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-user">&nbsp;</i> My Account<i class="icon-arrow-down"></i></a>';
    $box = <<<HTML
    <div class="dropdown-menu">
        <span class="message">Welcome Back, Bob </span>
    </div>
HTML;
} elseif ($state == "retail") {
    $message = '<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-user">&nbsp;</i><span class="location only-icon">LongFirstName</span></a>&nbsp;&nbsp;<i class="icon-arrow-down"></i>';
    $box = <<<HTML3

        <div class="dropdown-menu">

HTML3;
    foreach ($retailItems as $reItems) {
        $box .= '<a href="#" class="btn btn-reece-primary btn-retail">'.$reItems. '</a>';
    }

    $box .= "</div></li>";
} elseif($state == 'register')
{
    $message = '<a class="dropdown-toggle" data-toggle="dropdown" href="#">
    <i class="icon-user">&nbsp;</i> <span class="only-icon">Login</span> <!--i class="icon-arrow-down"></i--><span class="caret"></span></a>';
    $box = <<<HTML

HTML;
}
elseif ($state == null) {
    $message = '<a class="dropdown-toggle" data-toggle="dropdown" href="#">
    <i class="icon-user">&nbsp;</i> <span class="only-icon">Login</span> <!--i class="icon-arrow-down"></i--><span class="caret"></span></a>';
    $box = <<<HTML




<div class="dropdown-menu sso">
<div class="login">
    <h5>Login</h5>

    <form class="login-form">
        <input type="text" placeholder="Username">
        <input type="password" placeholder="Password">
        <input type="button" class="btn btn-login btn-small loginButton" onclick="window.location.href='?state=retail'" value="Log In">
        <a href="#" class="forgotLink">Forgot password?</a>
    

    <div class="dontHave">
    <h5 class="loginNoAccount">Don't have a login? Sign up.</h5>
        <a href="/plumbing/index-log-in.php" class="btn btn-Login btn-reece-secondary btn-small andRight tradeButton">Trade Professional</a>
        <a href="/navigation/happiness-log-in.php" class="btn btn-Login btn-reece-secondary btn-small retailButton" >Homeowner</a>
    </div>
    </form>
    </div>



    <div class="register">
    <a href="#" id="sign-in">< Back to log in</a>
    <h5>Register for a new Reece Account </h5>
    <p class="loginDisclaimer">Lorem ipsum dolor sit amet, non ornare arcu. Curabitur dui est, semper ac faucibus vel.<br><br></p>
    <form>
        <label><input type="radio" id="trade-radio" name="accType" value="trade" class="left"/> Trade</label>
        <label><input type="radio" id="retail-radio" name="accType" value="retail" class="right"/> Retail</label>

        <div class="retail-form">
            <input type="text" placeholder="Name" >
            <input type="number" placeholder="Phone" >
            <input type="email" placeholder="Email">
            <input type="password" placeholder="Password">
            <input type="submit" class="btn btn-reece-secondary btn-small" value="Create Account">
        </div>
        <div class="trade-form">
            <p class="loginDisclaimer">Lorem ipsum sit dolor amet  consectetur adipiscing urabitur dui est semper elit.</p>
            <input type="text" placeholder="Name" >
            <input type="text" placeholder="Phone" >
            <input type="number" placeholder="Business Postcode">
            <input type="email" placeholder="Email">
            <p class="loginDisclaimer">Alternatively, urabitur dui est, <a href="#">sempersum</a> dolor sit amet, consectetur adipiscing elit. Ut non ornare arcu.</p>
            <input type="submit" class="btn btn-reece-secondary btn-small" value="Submit Account Request">
        </div>


    </form>
</div>
</div>
HTML;
}


?>


<div class="navbar-container">


    <a class="menuButton btn btn-navbar hidden-desktop">
        <!--<strong class="btnNavbarText">Menu</strong>-->
        <div class="burger">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </div>
        Menu
    </a>
    <a class="brand hidden-desktop mobile-logo" href="#">Reece</a>

    <div class=" visible-desktop">
        <div class="row-fluid navHeader">


            <a class="brand" href="#" title="Reece">Reece</a>

        <nav class="navWrap">
            <ul class="nav">
                <?php foreach ($navigationItems as $key => $item) : ?>
                    <?php if ($item == $genericNavActiveMenuItem) : ?>
                        <li class="active"><a href="<?php print $item; ?>"><?php print $key; ?></a></li>
                    <?php else : ?>
                        <li><a href="<?php print $item; ?>"><?php print $key; ?></a></li>
                    <?php endif; ?>

                <?php endforeach; ?>
            </ul>
            <ul class="headerUtilityLinks">
            <li id="headerLocationDropDown" class="dropdown locationDropDown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="icon-map-marker icon">&nbsp;</i>
                    <span class="location only-icon">Select Store</span>
                    <span class="caret"></span>
                </a>
                <div class="dropdown-menu">
                    <div class="newLocation">
                    <form>
                        <input id="headerStoreSearchInput" type="text" placeholder="Enter Suburb or Postcode">
                    </form>
                    <ul id="headerLocationList">
                        <li><a href="#" data-location="Richmond">Richmond </a></li>
                        <li><a href="#" data-location="Kew">Kew</a></li>
                        <li><a href="#" data-location="Camberwell">Camberwell</a></li>
                    </ul>
                    </div>
                    <div class="locationSelected" style="display:none">
                        <p><strong>Plumbing Centre</strong><p>
                        <p>421-427 Bridge Road Richmond, VIC, 3121 <br/><strong>Phone</strong> (03) 9429 5800<br/><strong>Fax</strong> (03) 9427 0264<br /></p>
                        <p>
                            <a class="btn btn-Login btn-reece-secondary btn-small andRight tradeButton"><i class="icon-map-marker icon">&nbsp;</i> View On Map</a>
                            <a id="changeStoreLocation" href="#" class="btn btn-Login btn-reece-secondary btn-small tradeButton">Find Another Store</a>
                            <div style="clear: both;"></div>
                        </p>
                    </div>

                </div>

            </li>

             <li>
                 <a href="#">
                     <i class="icon-shopping-cart">&nbsp;</i><span class="only-icon">Cart</span><span class="cart-count"> (0)</span>
                 </a>
             </li>
             <li class="dropdown userDropDown">
                 <?php echo $message; ?>
                 <?php echo $box; ?>
             </li>
            </ul>
            <form class="headerNavSearchForm">
             <input type="search" id="headerSearchInput">
             <label for="headerSearchInput"><i class="icon-search icon">&nbsp;</i></label>
            </form>
        </nav>
        </div>
    </div>
</div>
