<?php /* Smarty version Smarty-3.1.18, created on 2014-05-27 10:39:53
         compiled from "./templates/page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:646546207537ebc97269412-72003179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64ec915bd633e1c171456337fa70af9a7262455c' => 
    array (
      0 => './templates/page.tpl',
      1 => 1401179862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '646546207537ebc97269412-72003179',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_537ebc972976f2_23664104',
  'variables' => 
  array (
    'TitleNumber' => 0,
    'Title' => 0,
    'ListContent' => 0,
    'ConverstationContent' => 0,
    'ConversationStarters' => 0,
    'ConverstationVideoThumb' => 0,
    'ConverstationVideoTitle' => 0,
    'ConverstationVideoDesc' => 0,
    'ToolsContent' => 0,
    'ToolsList' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537ebc972976f2_23664104')) {function content_537ebc972976f2_23664104($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <title>Builders Promotion</title>
  <style type="text/css">
  <?php echo $_smarty_tpl->getSubTemplate ("../css/page.css", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  </style>
</head>
<body>
<div id="BuildersPromo">
  <div class="wrapper">
    <div class="contentBox">
      <h2 class="promoNumberedHeader numberHolder">
        <span class="iconNumber number<?php echo sprintf("%02d",$_smarty_tpl->tpl_vars['TitleNumber']->value);?>
"></span>
        <?php echo $_smarty_tpl->tpl_vars['Title']->value;?>

      </h2>
      <p></p>
    </div>
    <div class="contentBox pageContentBox">
      <div class="accordionHd">
        <div class="accordionHdLeft">
          <h3 class="steppedHeader">
            <small class="stepNumber">STEP 1</small>
            <span class="stepTitle">Customer List</span>
          </h3>
          <p><?php echo $_smarty_tpl->tpl_vars['ListContent']->value;?>
</p>
        </div>
        <div class="triggerWrap">
        <!-- Download List Link -->
        <a class="downloadListLink" href="#">
          DOWNLOAD
          <span class="downloadIcon">
          </span>
        </a>
        </div>
      </div>

    </div>
    <div class="contentBox pageContentBox">
      <div class="accordionHd">
        <div class="accordionHdLeft">
          <h3 class="steppedHeader">
            <small class="stepNumber">STEP 2</small>
            <span class="stepTitle">The Conversations.</span>
          </h3>
          <p><?php echo $_smarty_tpl->tpl_vars['ConverstationContent']->value;?>
</p>
        </div>
        <div class="triggerWrap">
          <a id="step2More" class="accordionTrigger">
              <span class="accordionTriggerMore">MORE</span>
              <span class="caretMore"></span>
          </a>
          <a id="step2Less" class="accordionTrigger">
              <span class="accordionTriggerLess">LESS</span>
              <span class="caretLess"></span>
          </a>
        </div>
      </div>
      <div id="step2Content" class="accordionPanels">
        <div class="conversationStarters">
          <h4 class="smallHeader">Four Conversation Starters</h4>
          <ul class="conversationStarters">
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['outer'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['outer']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['name'] = 'outer';
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ConversationStarters']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
            <li class="conversation<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['outer']['rownum'];?>
">
              <div>
                <?php echo $_smarty_tpl->tpl_vars['ConversationStarters']->value[$_smarty_tpl->getVariable('smarty')->value['section']['outer']['index']];?>

              </div>
            </li>
            <?php endfor; endif; ?>
          </ul>
        </div>
        <div class="convVideo">
          <div class="vidThumb">
            <img src="<?php echo $_smarty_tpl->tpl_vars['ConverstationVideoThumb']->value;?>
">
          </div>
          <div class="vidInfo">
            <h4 class="vidTitle smallHeader">
            <?php echo $_smarty_tpl->tpl_vars['ConverstationVideoTitle']->value;?>

            </h4>
            <p class="vidDesc">
            <?php echo $_smarty_tpl->tpl_vars['ConverstationVideoDesc']->value;?>

            </p>
          </div>
        </div>
      </div>

    </div>
    <div class="contentBox pageContentBox">
      <div class="accordionHd">
        <div class="accordionHdLeft">
          <h3 class="steppedHeader">
            <small class="stepNumber">STEP 3</small>
            <span class="stepTitle">The Tools</span>
          </h3>
          <p><?php echo $_smarty_tpl->tpl_vars['ToolsContent']->value;?>
</p>
        </div>
        <div class="triggerWrap">
          <a id="step3More" class="accordionTrigger">
              <span class="accordionTriggerMore">MORE</span>
              <span class="caretMore"></span>
          </a>
          <a id="step3Less" class="accordionTrigger">
              <span class="accordionTriggerLess">LESS</span>
              <span class="caretLess"></span>
          </a>
        </div>
      </div>
      <div id="step3Content" class="accordionPanels">
          <ul class="toolsThumbList">
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['tools'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['tools']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tools']['name'] = 'tools';
$_smarty_tpl->tpl_vars['smarty']->value['section']['tools']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ToolsList']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tools']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tools']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tools']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tools']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tools']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tools']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['tools']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tools']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tools']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tools']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tools']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['tools']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tools']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tools']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['tools']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tools']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tools']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tools']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['tools']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tools']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['tools']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tools']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['tools']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tools']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tools']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tools']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['tools']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tools']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tools']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['tools']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tools']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tools']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tools']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tools']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['tools']['total']);
?>
            <li>
              <div class="toolThumb">
                <img src="<?php echo $_smarty_tpl->tpl_vars['ToolsList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tools']['index']]['thumb'];?>
">
              </div>
              <div class="toolInfo">
                <h4>
                  <small class="smallHeader"><?php echo $_smarty_tpl->tpl_vars['ToolsList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tools']['index']]['title'];?>
</small>
                  <span class="redLargeHeader"><?php echo $_smarty_tpl->tpl_vars['ToolsList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tools']['index']]['title'];?>
</span>
                </h4>
                <p><?php echo $_smarty_tpl->tpl_vars['ToolsList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tools']['index']]['desc'];?>
</p>
              </div>
            </li>
            <?php endfor; endif; ?>
          </ul>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
/*
next1 = document.getElementById("step1-next");
next1.style.display = 'none';

var step1 = document.getElementById("step1-trigger");
step1.onclick = function(){
  next1.style.display = 'block';
}
*/

var step2More = document.getElementById("step2More");

var step2Content = document.getElementById("step2Content");
step2Content.style.display = 'none';

var step2Less = document.getElementById("step2Less");
step2Less.style.display = 'none';

step2More.onclick = function()
{
  step2More.style.display = 'none';
  step2Less.style.display = 'block';
  step2Content.style.display = 'block';
  return false;
}
step2Less.onclick = function()
{
  step2More.style.display = 'block';
  step2Less.style.display = 'none';
  step2Content.style.display = 'none';
  return false;
}



var step3More = document.getElementById("step3More");

var step3Content = document.getElementById("step3Content");
step3Content.style.display = 'none';

var step3Less = document.getElementById("step3Less");
step3Less.style.display = 'none';

step3More.onclick = function()
{
  step3More.style.display = 'none';
  step3Less.style.display = 'block';
  step3Content.style.display = 'block';
  return false;
}
step3Less.onclick = function()
{
  step3More.style.display = 'block';
  step3Less.style.display = 'none';
  step3Content.style.display = 'none';
  return false;
}

</script>
</body>
</html><?php }} ?>
