<?php
  $pageList = array(
      array("url"=>"index","title"=>"Home","icon"=>"home"),
      array("url"=>"submit","title"=>"Submit Your Bathroom","icon"=>"heart"),
      array("url"=>"judging","title"=>"Judging","icon"=>"legal"),
      array("url"=>"voting","title"=>"Vote &amp; Win","icon"=>"thumbs-up"),
      array("url"=>"prizes","title"=>"Prizes","icon"=>"trophy"),
      array("url"=>"previous","title"=>"Past Winners","icon"=>"user"),
      array("url"=>"contact","title"=>"Contact","icon"=>"envelope-alt"),
      array("url"=>"terms","title"=>"Terms & Conditions","icon"=>"ok"),
    );
  $nav = '';
  foreach ($pageList as $value) {
    $currentClass = '';
    $longLinkClass = '';
    if( $ilmbPage == $value['url']){
      $currentClass = ' active';
    }
    if( $value['url'] == 'submit' || $value['url'] == 'terms'){
      $longLinkClass = ' longNavLink';
    }
    if ($ilmbPage != 'index' || $value['url'] != 'index'){
      $nav .= '<div class="listItem'.$currentClass.$longLinkClass.'"><a href="'.$value['url'].'.php"><i class="icon-'.$value['icon'].' icon-large">&nbsp;</i> <span class="ilmbnavLinktext">'.$value['title'].'</span></a></div>';
    }
  }
  echo $nav;
?>