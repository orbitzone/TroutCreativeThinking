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
    $message = '<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-user">&nbsp;</i>Bob, My Account <i class="icon-arrow-down"></i></a>';
    $box = <<<HTML3

        <div class="dropdown-menu">

HTML3;
    foreach ($retailItems as $reItems) {
        $box .= '<a href="#" class="btn btn-reece-primary btn-retail">'.$reItems. '</a> <br />';
    }

    $box .= "</div></li>";
} elseif($state == 'register')
{
    $message = '<a class="dropdown-toggle" data-toggle="dropdown" href="#">
    <i class="icon-user">&nbsp;</i> Login <i class="icon-arrow-down"></i></a>';
    $box = <<<HTML

HTML;
}
elseif ($state == null) {
    $message = '<a class="dropdown-toggle" data-toggle="dropdown" href="#">
    <i class="icon-user">&nbsp;</i> Login <i class="icon-arrow-down"></i></a>';
    $box = <<<HTML
<div class="dropdown-menu">
<div class="login">
    <p>Login to your <strong>Reece account</strong> </p>
    <form>
        <input type="text" placeholder="Username">
        <input type="text" placeholder="Password"> <br />

        <a href="#" class="forgotLink">Forgot you password?</a>
        <a href="/navigation/new-nav.php?state=retail" class="btn btn-default btn-login btn-reece-primary">Log In</a> <br /> <br />

        <p class="loginDisclaimer">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non ornare arcu. Curabitur dui est, semper ac faucibus vel, iaculis condimentum odio. Etiam eget felis neque.</p>
    </form>
    <span class="loginNoAccount">Dont have an account?</span> <a id="no-account" href="#" class="btn btn-reece-secondary">Sign up now</a>
</div>
<div class="register">
    <p>Regsiter for a new Reece Account<a href="#" id="sign-in" class="btn btn-default btn-login btn-reece-primary ">< Back to log in</a> <br /> </p>
    <p class="loginDisclaimer clearfix">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non ornare arcu. Curabitur dui est, semper ac faucibus vel, iaculis condimentum odio. Etiam eget felis neque.</p>
    <form>
        <input type="radio" name="accType" value="trade" class="left"/> Trade
        <input type="radio" name="accType" value="retail" class="right"/> Retail
        <input type="text" placeholder="Email Address" >
        <input type="text" placeholder="Postcode" >
        <input type="text" placeholder="Account Number">
        <input type="text" placeholder="Password">

        <a href="#" class="btn btn-reece-secondary">Create Account</a>
</div>
</div>
HTML;
}


?>


<div class="navbar-container">
    <a class="btn btn-navbar hidden-desktop">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </a>
    <a class="brand hidden-desktop mobile-logo" href="#">Reece</a>

    <div class=" visible-desktop">
        <div class="row-fluid navHeader">
            <a class="brand" href="#" title="Reece">Reece</a>

            <form class="headerNavSearchForm">
                <input type="search" id="headerSearchInput" placeholder="Search">
                <label for="headerSearchInput"><i class="icon-search icon">&nbsp;</i></label>
            </form>
            <div class="headerUtilityBar">

                <ul class="headerUtilityLink">
                    <li>
                        <a href="#">
                            <i class="icon-shopping-cart">&nbsp;</i> Shopping Cart (0)
                        </a>
                    </li>

                    <li class="dropdown locationDropDown">
                        <?php echo $message; ?>
                        <?php echo $box; ?>

                    </li>
                </ul>
            </div>
        </div>
        <nav class="navWrap">
            <ul class="nav">
                <?php foreach ($navigationItems as $item) : ?>
                    <?php if ($item == $genericNavActiveMenuItem) : ?>
                        <li class="active"><a href="#"><?php print $item; ?></a></li>
                    <?php else : ?>
                        <li><a href="#"><?php print $item; ?></a></li>
                    <?php endif; ?>

                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
</div>