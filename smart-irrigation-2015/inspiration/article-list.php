<?php

  $results = array(
    array(
      "title"=>"Garden title 1",
      "link"=>"inspiration-article1.html",
      "text"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque quos, omnis delectus voluptatibus corporis perspiciatis culpa alias expedita voluptatum doloribus.",
      "thumbnaillist"=>array(
        "../images/inspiration/article-image1.png",
        "../images/inspiration/article-image2.png",
        "../images/inspiration/article-image3.png"
      )
    ),
    array(
      "title"=>"Garden title 2",
      "link"=>"inspiration-article2.html",
      "text"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis deserunt, adipisci et!",
      "thumbnaillist"=>array(
        "../images/inspiration/article-image4.png",
        "../images/inspiration/article-image5.png",
        "../images/inspiration/article-image6.png",
        "../images/inspiration/article-image7.png"
      )    
    ),
    array(
      "title"=>"Garden title 3",
      "link"=>"inspiration-article3.html",
      "text"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam perspiciatis, eligendi fugiat. Debitis maiores repudiandae perferendis.",
      "thumbnaillist"=>array(
        "../images/inspiration/article-image7.png",
        "../images/inspiration/article-image8.png",
        "../images/inspiration/article-image9.png"
      )    
    ),
    array(
      "title"=>"Lorem ipsum dolor",
      "link"=>"inspiration-article4.html",
      "text"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quam magnam iure! Neque id, sunt.",
      "thumbnaillist"=>array(
        "../images/inspiration/article-image10.png",
        "../images/inspiration/article-image11.png",
        "../images/inspiration/article-image12.png"
      )    
    ),
    array(
      "title"=>"dolor sit amet",
      "link"=>"inspiration-article5.html",
      "text"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic delectus repellendus in ea quam iste, unde voluptatem.",
      "thumbnaillist"=>array(
        "../images/inspiration/article-image2.png",
        "../images/inspiration/article-image4.png",
        "../images/inspiration/article-image6.png",
        "../images/inspiration/article-image3.png",
        "../images/inspiration/article-image4.png",
        "../images/inspiration/article-image12.png"
      )   
    ),
    array(
      "title"=>"consectetur adipisicing elit",
      "link"=>"inspiration-article6.html",
      "text"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam incidunt, numquam odit doloribus blanditiis iste, libero consequatur.",
      "thumbnaillist"=>array(
        "../images/inspiration/article-image5.png",
        "../images/inspiration/article-image7.png",
        "../images/inspiration/article-image9.png"
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



