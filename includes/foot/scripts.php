
	<script src="/assets/js/jquery-1.8.3.min.js" type="text/javascript"></script>

	<?php foreach ($jsScriptPaths as $value) : ?>
		<script src="<?php print $value; ?>" type="text/javascript"></script>
	<?php endforeach; ?>

	<script type="text/javascript">
		$(function(){
			$('.headerUtilityLink input').click(function(e){
				e.stopPropagation();
			})
		})
	</script>