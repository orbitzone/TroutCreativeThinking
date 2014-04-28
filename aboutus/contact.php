
<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>

<?php
$cssScriptPaths = [
"/assets/css/reece-contact.css",
"/assets/css/selectric.css"
];
include_once($serverBase."/includes/head/head-generic.php");
?>
<body class="withSubNav contact">
    <div class="ocmain-wrapper">
        <div class="navbar navbar-fixed-top topNav">
            <?php
            $genericNavActiveMenuItem = "Contact Us";
            include_once($serverBase."/includes/nav/nav-generic.php");
            ?>
        </div>
        <?php
        include_once($serverBase."/includes/nav/nav-about-us.php");
        ?>
        <div class="content-container contact-sections">
            <div class="inner-wrapper">
                <ul class="breadcrumb">
                    <li><a href="#">About us</a> <span class="divider">/</span></li>
                    <li class="active page-branding text-brand">Contact us</li>
                </ul>
                <h3>Contact Us</h3>
                <div class="storeContactWrap">
                <?php $state = $_GET['state'];
                if ($state == "loggedIn" || $state == "retail"){
                ?>
                    <div class="">
                        <h4>Store Near You <small><a href="#contactStoreSearch" data-toggle="collapse">Change</a></small></h4>
                        <p>421-427 Bridge Road Richmond, Vic, 3121<br/>
                        Phone (03) 9429 5800</p>
                        </div>
                    <div id="contactStoreSearch" class="row-fluid collapse">
                <?php
                    }
                    else{
                        ?>
                        <div id="contactStoreSearch" class="row-fluid">
                        <?php 
                    }
                ?>
                    
                        <form action="http://www.reece.com.au/storefinder" method="get">
                            <div class="span4">
                                <h4><i class="icon-search"></i> Contact a Reece Branch</h4>
                                <input type="text" name="address" class="span12" placeholder="Enter Suburb or Postcode">
                            </div>
                            <div class="span8">
                                <h5>Tick your preferred store type</h5>
                                <div class="row-fluid">
                                    <div class="span8">
                                    <ul class="selectStoreType">
                                        <li>
                                            <label class="checkbox plumbing">
                                                <input name="storeTypes" type="checkbox" value="P">Plumbing
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox bathroom">
                                                <input name="storeTypes" type="checkbox" value="S">Bathroom
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox irrigation">
                                                <input name="storeTypes" type="checkbox" value="I">Irrigation
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox civil">
                                                <input name="storeTypes" type="checkbox" value="C">Civil
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox hvac">
                                                <input name="storeTypes" type="checkbox" value="R">hvac-r
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox onsite">
                                                <input name="storeTypes" type="checkbox" value="O">Onsite
                                            </label>
                                        </li>
                                    </ul>
                                    </div>
                                    <div class="span4">
                                    <input type="submit" value="Find" class="submit">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row-fluid contactSections">
                    <!--<section class="span4 store-finder">
                        <div class="icon"></div>
                        <h4>Find Your Nearest Store</h4>
                        <p>Our <a href="#">Store Finder</a> will help you locate your nearest plumbing, bathroom and specialty branch to suit your needs.</p>
                    </section>-->
                    <section class="span4 product-info">
                        <div class="icon"></div>
                        <h4>Product Information</h4>
                        <p>For further product details, contact your local Reece branch. Use the <a href="#">Store Finder</a> to locate your nearest showroom or plumbing counter.</p>
                    </section>
                    <section class="span4 customer-care">
                        <div class="icon"></div>
                        <h4>Customer Care and Warranties</h4>
                        <p>Our Customer Care team provides comprehensive after sales assistance in relation to all our products and warranties.  Call 1300 000 000 or <a href="#contact-form">contact us online</a>.</p>
                    </section>

                    <section class="span4 cs-feedback">
                        <div class="icon"></div>
                        <h4>Customer Service Feedback</h4>
                        <p>To provide feedback you can contact our marketing team using our <a href="#contact-form">online form</a>. We’ll get back you as soon as possible. </p>
                    </section>
                </div>
                <div class="row-fluid contactSections">
                    <!--<section class="span4 quote-product">
                        <div class="icon"></div>
                        <h4>Quotes on Products</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris in iaculis quam. Nunc porta lacus lectus, et suscipit nulla luctus sit amet <a href="#contact-form">Click for Quote.</a></p>
                    </section>-->
                    <section class="span4 login-issues">
                        <div class="icon"></div>
                        <h4>Website Login Issues</h4>
                        <p>If you're having trouble logging in to your account, the Reece <a href="#">FAQs</a> section may help. Or you can contact our <a href="#contact-form">Help Desk.</a></p>
                    </section>
                    <section class="span4 share-info">
                        <div class="icon"></div>
                        <h4>Shareholder Information</h4>
                        <p>For investor information and other details relating to the financial performance of Reece, please visit our <a href="finance.php">financial section</a>. </p>
                    </section>
                    <section class="span4 careers">
                        <div class="icon"></div>
                        <h4>Careers</h4>
                        <p>Reece is a real people business that offers unlimited career possibilities across a wide range of areas. To find out more, visit our <a href="#">careers section</a>. </p>
                    </section>
                </div>
                <div class="row-fluid contactSections">
                    <section class="span4 account-update">
                        <div class="icon"></div>
                        <h4>Account Updates</h4>
                        <p>To update your Reece account information including change of address or phone number details, contact our <a href="#contact-form">Accounts team</a>. </p>
                    </section>
                    <section class="span4 suppliers">
                        <div class="icon"></div>
                        <h4>Supplier Opportunities</h4>
                        <p>Reece is always looking to align itself with suppliers that share our commitment to quality. To find out more visit <a href="partner.php">Partner with Reece</a>.</p>
                    </section>
                    <section class="span4 headoffice">
                        <div class="icon"></div>
                        <h4>Contact Head Office</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris in iaculis quam. Nunc porta lacus lectus, et suscipit nulla luctus sit amet.
                            <a href="#headOffice" data-toggle="collapse" data-target="#headOffice">Contact Head Office</a>
                        </p>
                    </section>
                </div>
            </div>
        </div>

        <div class="content-container contact-form">
            <div class="inner-wrapper">
                <h4 class="heading"><i class="icon-envelope"></i> Email us</h4>
                <div class="row-fluid">
                    <div class="span6">
                        <div class="row-fluid">
                            <input type="text" class="span6" placeholder="First Name">
                            <input type="text" class="span6" placeholder="Surname">
                        </div>
                        <div class="row-fluid">
                            <input type="email" class="span6" placeholder="Email adress">
                            <input type="number" class="span6" placeholder="Phone">
                        </div>
                        <div class="row-fluid">
                            <select class="span12" id="topic">
                                <option>General Enquiry</option>
                                <option>Customer Care and Warranties</option>
                                <option>Customer Service Feedback</option>
                                <option>Quotes on Products</option>
                                <option>Website Login Issues</option>
                                <option>Account Updates</option>
                            </select>
                        </div>
                    </div>
                    <div class="span6">
                        <textarea  placeholder="Comments"></textarea>
                        <input type="submit" value="Submit" class="submit">
                    </div>
                </div>
            </div>
        </div>
        <div id="headOffice" class="grey-bg collapse">
            <section class="head-office">
                <div class="content-container">
                    <div class="inner-wrapper">
                        <h4>Contact Head Office</h4>
                        <div class="row-fluid">
                            <dl>
                                <dt class="span1">
                                    Address
                                </dt>
                                <dd class="span3">
                                    118 Burwood Highway<br>
                                    Burwood Victoria 3125
                                </dd>
                                <dt class="span1">
                                 Phone
                                </dt>
                                 <dd class="span7" itemprop="telephone">
                                    +613 9274 0000
                                </dd>
                                <dt class="span1">
                                 Fax
                                 </dt>
                                 <dd class="span7" itemprop="fax">
                                    +613 9274 0198
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </section>
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
"/assets/js/bootstrap-transition.js",
"/assets/js/bootstrap-carousel.js",
"/assets/js/bootstrap-dropdown.js",
"/assets/js/bootstrap-collapse.js",
"/assets/js/jquery.html5-placeholder-shim.js",
"/assets/js/jquery.mobile.custom.min.js",
"/assets/js/jquery.selectric.min.js",
"/assets/js/reece-contact.js",
"/assets/js/reece-signon.js",
"/assets/js/reece-hidesubnavbar.js",
"/assets/js/reece-ocnav.js"
];
include_once($serverBase."/includes/foot/scripts.php");
?>

</body>
</html>