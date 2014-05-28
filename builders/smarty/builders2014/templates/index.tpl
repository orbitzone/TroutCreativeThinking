<!DOCTYPE html>
<html>
<head>
	<title>Builders Promotion</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<style type="text/css">
	{include file="../css/index.css"}
	</style>
</head>
<body>
<div id="BuildersPromo">
	<div class="wrapper">
		<div class="introHeader">
			<img src="img/intro/header.jpg" alt="Top 10 builder conversations" />
		</div>
		<div class="contentBox">
			<p>{$Content}</p>
			<ul class="introMenu">
			{section name=outer loop=$Children}
			<li class="numberHolder">
				<span class="iconNumber number{$smarty.section.outer.rownum|string_format:"%02d"}"></span>
				<a href="{$smarty.section.outer.rownum|string_format:"%02d"}.html">
					{$Children[outer]}
				</a>
			</li>
			{/section}
			</ul>
		</div>
	</div>
</div>
</body>
</html>