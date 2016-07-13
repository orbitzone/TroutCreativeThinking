<nav class="menu">
	<div class="container">
		<div class="container-small">				
			<ul>
				<li><a href="index.php" <?php if($current=='' || $current=='homepage'){?>class="active"<?php }?>>Home</a>
				</li><li><a href="projects.php" <?php if($current=='projects'){?>class="active"<?php }?>>Projects</a>
				</li><li><a href="news.php" <?php if($current=='news'){?>class="active"<?php }?>>News</a>
				</li><li class="apply-now"><a href="apply-now.php" <?php if($current=='apply-now'){?>class="active"<?php }?>>Apply Now</a></li>
			</ul>						
		</div>
		<div class="bg-wrap">
			<div class="bg-in"></div>	
		</div>				
	</div>		
</nav>