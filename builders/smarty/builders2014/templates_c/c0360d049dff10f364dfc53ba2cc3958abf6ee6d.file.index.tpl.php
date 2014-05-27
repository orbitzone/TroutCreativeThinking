<?php /* Smarty version Smarty-3.1.18, created on 2014-05-23 05:34:51
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:768309685537e950ca6a669-04266943%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1400816089,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '768309685537e950ca6a669-04266943',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_537e950ca9ee06_19511482',
  'variables' => 
  array (
    'Content' => 0,
    'Children' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537e950ca9ee06_19511482')) {function content_537e950ca9ee06_19511482($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<title>Builders Promotion</title>
	<style type="text/css">
	<?php echo $_smarty_tpl->getSubTemplate ("../css/index.css", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</style>
</head>
<body>
<div id="BuildersPromo">
	<div class="wrapper">
		<div class="introHeader">
			<img src="img/intro/header.jpg" />
		</div>
		<div class="contentBox">
			<p><?php echo $_smarty_tpl->tpl_vars['Content']->value;?>
</p>
			<ul class="introMenu">
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['outer'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['outer']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['name'] = 'outer';
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['Children']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['total']);
?>
			<li class="numberHolder">
				<span class="iconNumber number<?php echo sprintf("%02d",$_smarty_tpl->getVariable('smarty')->value['section']['outer']['rownum']);?>
"></span>
				<a href="<?php echo sprintf("%02d",$_smarty_tpl->getVariable('smarty')->value['section']['outer']['rownum']);?>
.html">
					<?php echo $_smarty_tpl->tpl_vars['Children']->value[$_smarty_tpl->getVariable('smarty')->value['section']['outer']['index']];?>

				</a>
			</li>
			<?php endfor; endif; ?>
			</ul>
		</div>
	</div>
</div>
</body>
</html><?php }} ?>
