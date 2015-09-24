<?php

  $results = array(
    array(
      "title"=>"Garden title 1",
      "link"=>"inspiration/inspiration-article1.php",
      "text"=>"Victoria",
      "thumbnaillist"=>array(
        "images/inspiration/thumbs/article-image1.png",
        "images/inspiration/thumbs/article-image2.png",
        "images/inspiration/thumbs/article-image3.png"
      )
    ),
    array(
      "title"=>"Garden title 2",
      "link"=>"inspiration/inspiration-article2.php",
      "text"=>"New South Wales",
      "thumbnaillist"=>array(
        "images/inspiration/thumbs/article-image4.png",
        "images/inspiration/thumbs/article-image5.png",
        "images/inspiration/thumbs/article-image6.png",
        "images/inspiration/thumbs/article-image7.png"
      )    
    ),
    array(
      "title"=>"Garden title 3",
      "link"=>"inspiration/inspiration-article3.php",
      "text"=>"Queensland",
      "thumbnaillist"=>array(
        "images/inspiration/thumbs/article-image7.png",
        "images/inspiration/thumbs/article-image8.png",
        "images/inspiration/thumbs/article-image9.png"
      )    
    ),
    array(
      "title"=>"Lorem ipsum dolor",
      "link"=>"inspiration/inspiration-article4.php",
      "text"=>"South Australia",
      "thumbnaillist"=>array(
        "images/inspiration/thumbs/article-image10.png",
        "images/inspiration/thumbs/article-image11.png",
        "images/inspiration/thumbs/article-image12.png"
      )    
    ),
    array(
      "title"=>"dolor sit amet",
      "link"=>"inspiration/inspiration-article5.php",
      "text"=>"Western Australia",
      "thumbnaillist"=>array(
        "images/inspiration/thumbs/article-image2.png",
        "images/inspiration/thumbs/article-image4.png",
        "images/inspiration/thumbs/article-image6.png",
        "images/inspiration/thumbs/article-image3.png",
        "images/inspiration/thumbs/article-image4.png",
        "images/inspiration/thumbs/article-image12.png"
      )   
    ),
    array(
      "title"=>"consectetur adipisicing elit",
      "link"=>"inspiration/inspiration-article6.php",
      "text"=>"Tasmania",
      "thumbnaillist"=>array(
        "images/inspiration/thumbs/article-image5.png",
        "images/inspiration/thumbs/article-image7.png",
        "images/inspiration/thumbs/article-image9.png"
      )    
    ),
  );
  shuffle($results);
  (isset($_REQUEST['start']))?$start = $_REQUEST['start'] : $start = 0;
  $remaining = ',"remaining":"10"';
  if($start >= 10){
    $rand = rand(0,10);
    if($rand >= 3){
      $remaining = ',"remaining":"0"';
    }
  }
  echo '{"results":'.json_encode($results).$remaining.'}';
  
  //echo(rand(0,1));
?>



