<?php
 /**
 * Example Application
 * @package Example-application
 */

require '../libs/Smarty.class.php';
require 'data.php';
$smarty = new Smarty;


if ( isset( $_GET['page'] )) {// For pages 01 - 10
  $TitleNumber = intval ($_GET['page']) - 1;
  if ( isset( $_GET['page'] )) {
    $TitleNumber = intval ($_GET['page']) - 1;
  }
  else{
    $TitleNumber = 0;
  }

  $smarty->assign("Title",$Titles[$TitleNumber]);
  $smarty->assign('TitleNumber',$TitleNumber+1);
  $smarty->assign("ListContent",$ListContent[$TitleNumber]);
  $smarty->assign("ConverstationContent",$ConverstationContent[$TitleNumber]);
  $smarty->assign("ConversationStarters",$ConversationStarters[$TitleNumber]);
  $smarty->assign("ToolsContent",$ToolsContent[$TitleNumber]);
  
  $smarty->assign("ConverstationVideoTitle",$ConverstationVideoTitle[$TitleNumber]);
  $smarty->assign("ConverstationVideoThumb",$ConverstationVideoThumb[$TitleNumber]);
  $smarty->assign("ConverstationVideoDesc",$ConverstationVideoDesc[$TitleNumber]);
  
  $smarty->assign("ToolsList",$ToolsList[$TitleNumber]);

  $smarty->display('page.tpl');
}
else{// for index Page
  $smarty->assign("Content","Builders are a very important customer group for Reece, and we think there is a lot of potential for growth with them. Builders come in all shapes and sizes and they have unique needs. So we&#8217;ve created 10 special builder offers to start the conversation and help you add value to their business and ours.");
  $smarty->assign("Children",$Titles);
  $smarty->display('index.tpl');
}


