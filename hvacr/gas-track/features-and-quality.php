
	<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>

	<?php 
		$cssScriptPaths = [
			"/assets/css/reece-hvac-r.css",
			"/assets/css/reece-gas-track.css"
		]; 
	   	include_once($serverBase."/includes/head/head-generic.php");
	?>		

    <body>
		<div class="ocmain-wrapper">

			<?php 
				$genericNavActiveMenuItem = "HVAC-R";
			   	include_once($serverBase."/includes/nav/nav-generic.php");
			?>

			<?php 
			   	include_once($serverBase."/includes/nav/nav-subnavbar.php");
			?>

		    <div class="content-container">
				<div class="inner-wrapper">

					<ul class="breadcrumb">
						<li><a href="#">Gas Track</a> <span class="divider">/</span></li>
						<li class="active page-branding text-brand">Features & Quality</li>
					</ul>

					<div class="row-fluid">			

						<aside class="gt-sidebar span3">	
							<?php 
								$gtNavActiveMenuItem = "Features & Quality";
							   	include_once($serverBase."/includes/nav/nav-gt-nav.php");
							?>
						</aside>

						<section class="gt-content span9">
							<h3 class="headline">Convenient, safe and enviromentally compliant</h3>
							<hr>
							<img class="gt-media-object pull-right" src="/assets/images/gastrack_2013/gas-track-product-one.jpg" alt="Gas Track">
							<p class="lead">Em nonsectatur aut est officiis exceperum endaerum sed que voluptu reperumet ut latem repudit qui dolorro videb ut latem repudit qui dolorro videbitist por rectur, et ra prernatatet, omnimpore itist por rectur, et ra prernatatet, omnimpore cus, quam quiae esed mi, id enda dis ditam eiur magnima volorat quunt.</p>
							<p>Enectat faccaep ellorpos nonetur asperat. Ficae verferi bustia sa que vent ea consece atioremped que quodias incilit hitatur, senihil ictures dolo blatem fuga. Ga. Nem a nonsecto dus, voloreh enissin ullaut lam, core natia sequias auditatiatur sante aci nonse verumet untoruptia pernatus, quo int ut volliat urioreius.
							   adi aut rerum ratur, suntium et mod quatur, imus debit as ipieniet esed erumqua estecum voluptia nullabo resequae mo dolorum volorit ipsuntissus, consequi opta venturiatusa nes solupta tempori tatiatur sitiam cus, omnihillorum accument omnitiis eum es dipid qui temoluptate pro dollaci lluptaquia doluptia pratesto tem exerrum eari veliqui blandes eos volo ium incim res providunt.
							   Evereiurepe doleni vellabo restis eaquos audam, quia dolestisquod utem qui vel id maios iunt, et modipsunt aut hari to omniae sum volenimus, et esequam in repedit a pra plante milique volenem oluptat inusapicita sectore preruptur?
							   Ut labo. Moluptaqui nonsequis aboremquia nati deliquatur am, tecus dolupta tiones et quatusa cus aut facepuda inienitat.
							   Elit reptam ea nobitiorios quostis simusci tempost, quis quias aut reprece atiatem lab ipsapieture lab id quas sit voluptatur at.
							   Aperferumque modipsant eossinv eligendelit endemol oribus sum autenda epedit mint aperfer speribusto ent.
							   Magniss imagnat et, quibus idit adiciendi a simpos ad ma qui suntorrovid qui rerio. Ficiis quam, volupta es est idebist, siminis ut ma volupta sitiaspid minum quam aut labo. Et volor mos prat pre et doluptatur? Quia eturiatis dolupta eptatat empost, eniate nonsere nobitia speditatur, non endaepe rchiliqui qui reptae.
							</p>
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
   			"activeMenu" => "Plumbing"
   		);
	   	include_once($serverBase."/includes/nav/nav-mobile.php");
	?>	

	<?php 
		$jsScriptPaths = [
			"/assets/js/jquery.lazyload.min.js",
			"/assets/js/bootstrap-collapse.js",
			"/assets/js/bootstrap-dropdown.js",
			"/assets/js/bootstrap-transition.js",
			"/assets/js/jquery.mobile.custom.min.js",
			"/assets/js/reece-ocnav.js"

		]; 
	   	include_once($serverBase."/includes/foot/scripts.php");
	?>

    </body>
</html>