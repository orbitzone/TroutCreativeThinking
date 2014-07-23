<?php
  $pageList = array(
      array("url"=>"index","title"=>"Home"),
      array("url"=>"submit","title"=>"Submit entry"),
      array("url"=>"entries","title"=>"View entries"),
      array("url"=>"prizes","title"=>"Prizes"),
      array("url"=>"terms","title"=>"Terms & Conditions"),
      array("url"=>"contact","title"=>"Contact us"),
      
    );
  $nav = '';
  foreach ($pageList as $value) {
    $currentClass = '';
    $longLinkClass = '';
    $hrefValue = $value['url'].'.php';

    if( $tvcPage == $value['url']){
      $currentClass = ' active';
    }
    $elemId ='';
    if($value['url'] == 'submit'){
      $hrefValue = 'index.php#submit';
      $elemId = 'id="linkSubmit"';
    }
    
      $nav .= '<div class="listItem'.$currentClass.$longLinkClass.'"><a '.$elemId.' href="'.$hrefValue.'"> <span class="tvcnavtext">'.$value['title'].'</span></a></div>';

  }
  echo $nav;
?>