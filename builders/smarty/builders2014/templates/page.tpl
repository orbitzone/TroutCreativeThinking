<!DOCTYPE html>
<html>
<head>
  <title>Builders Promotion</title>
  <style type="text/css">
  {include file="../css/page.css"}
  </style>
</head>
<body>
<div id="BuildersPromo">
  <div class="wrapper">
    <div class="contentBox">
      <h2 class="promoNumberedHeader numberHolder">
        <span class="iconNumber number{$TitleNumber|string_format:"%02d"}"></span>
        {$Title}
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
          <p>{$ListContent}</p>
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
          <p>{$ConverstationContent}</p>
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
            {section name=outer loop=$ConversationStarters}
            <li class="conversation{$smarty.section.outer.rownum}">
              <div>
                {$ConversationStarters[outer]}
              </div>
            </li>
            {/section}
          </ul>
        </div>
        <div class="convVideo">
          <div class="vidThumb">
            <img src="{$ConverstationVideoThumb}">
          </div>
          <div class="vidInfo">
            <h4 class="vidTitle smallHeader">
            {$ConverstationVideoTitle}
            </h4>
            <p class="vidDesc">
            {$ConverstationVideoDesc}
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
          <p>{$ToolsContent}</p>
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
            {section name=tools loop=$ToolsList}
            <li>
              <div class="toolThumb">
                <img src="{$ToolsList[tools]['thumb']}">
              </div>
              <div class="toolInfo">
                <h4>
                  <small class="smallHeader">{$ToolsList[tools]['title']}</small>
                  <span class="redLargeHeader">{$ToolsList[tools]['title']}</span>
                </h4>
                <p>{$ToolsList[tools]['desc']}</p>
              </div>
            </li>
            {/section}
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
</html>