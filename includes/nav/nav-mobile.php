<?php

$state = $_GET['state'];

$retailItems = array(
    "My Details",
    "(Order History)",
    "3D Bathroom Plans",
    "Product Lines",
    "Logout",
);

?>
		<div class="ocnav-wrapper">
		    <!--h3>Menu</h3-->
		    <ul class="nav">

		    	<li class="mobileLogin">
		    		<?php if($state == "retail"): ?>
		    		<a href="#" data-toggle="collapse" data-target="#mobile-login">Logged in Username</a>
		    		<ul class="nav" id="mobile-login">
		    		<?php foreach($retailItems as $item): ?>
		    			<li><a href="#"><?php echo $item; ?></a></li>
		    		<?php endforeach; ?>
		    		</ul>
		    		<?php else: ?>
		    		<a href="#" data-toggle="collapse" data-target="#mobile-login"><i class="icon-user">&nbsp;</i> Login</a>
		    		<div id="mobile-login" class="collapse">
		    			<h5>Login to your <strong>Reece page</strong> </h5>
					    <form class="login-form">
						    <input type="text" placeholder="Username">
						    <input type="password" placeholder="Password">
						    <input type="button" class="btn btn-login btn-lg loginButton" onclick="window.location.href='?state=retail'" value="Log In">
						    <a href="#" class="forgotLink">Forgot password?</a>
						    

						    <div class="dontHave">
						    <h5 class="loginNoAccount">Don't have a login? Sign up.</h5>
						        <a href="/plumbing/index-log-in.php" class="btn btn-Login btn-reece-secondary btn-small andRight tradeButton">Trade Professional</a>
						        <a href="/navigation/happiness-log-in.php" class="btn btn-Login btn-reece-secondary btn-small retailButton" >Homeowner</a>
						    </div>
					    </form>
				    </div>
					<?php endif; ?>
		    	</li>

				<?php foreach ($mobileNavigationItems as $key => $item) : ?>

					<?php if ($mobileNavActiveMenu["activeMenu"] == $key) : ?>

						<li class="active"><a href="#"><?php print $key; ?></a>
							<ul class="nav">
								<?php foreach ($item as $subItem) : ?>							
									<?php if ($subItem == $mobileNavActiveMenu["activeMenuItem"]) : ?>

										<?php if ($subItem == "Happiness Zone") : ?>
											<?php $class = "icon-th"; ?>
										<?php else : ?>
											<?php $class = "icon-caret-right"; ?>
										<?php endif; ?>
								
										<li class="active"><a href="bathroom-moments" title=""><i class="<?php print $class; ?>"></i> <?php print $subItem; ?></a></li>
									<?php else : ?>	

										<?php if ($subItem == "Happiness Zone") : ?>
											<?php $class = "icon-th"; ?>
										<?php else : ?>
											<?php $class = "icon-caret-right"; ?>
										<?php endif; ?>

										<li><a href="#" title=""><i class="<?php print $class; ?>"></i> <?php print $subItem; ?></a></li>
									<?php endif; ?>
								<?php endforeach; ?>
							</ul>
					<?php else : ?>
						<li><a href="#"><?php print $key; ?></a></li>
					<?php endif; ?>

				<?php endforeach; ?>

		    </ul>
		</div>