function resizeIframe() {/* Function to calculate and fix iframe height */
  document.getElementById('inspBlogArticle').style.height = document.getElementById('inspBlogArticle').contentWindow.document.body.scrollHeight + 'px';

}
function populateWall(data){/* populate data into wallContent */
  $('#wallContent').html(data);
}
function hideBlog(){/* hide blog content */
  $('#overlayContent').hide();
  $('#inspBlogArticle').hide();
  $('#socialOverlay').html('');
  $('#wallContent').show();
  $('#inspWallLoad').show();
  window.location.hash = 'powder-room';
}
function showOverlay(url){/* show blog overlay */
  $('#overlayContent').show();
  $('#inspBlogArticle').attr('src',url+'.php').show();
  $('#inspBlogArticle').load(function(){
    resizeIframe();
    /* Change Disqus URL*/ 
    if(typeof DISQUS != 'undefined'){
      DISQUS.reset({
        reload: true,
        config: function () {
          this.page.identifier = '#!'+url;
          this.page.url = "http://reece-responsive.trout.com.au/bathroom/inspiration/#"+url;
        }
      });
    }
  });

  $('#inspWallLoad').hide();/* hide loader */
  $('#closeBlog').click(function(){/* attach event for closing */
    hideBlog();
  })
  $('#wallContent').hide(); /* hide wall content */
}
function showSocialOverlay(url){/* show social overlay */
  $('#overlayContent').show();
    /* Change Disqus URL*/ 
    if(typeof DISQUS != 'undefined'){
      DISQUS.reset({
        reload: true,
        config: function () {
          this.page.identifier = '#!'+url;
          this.page.url = "http://reece-responsive.trout.com.au/bathroom/inspiration/#"+url;
        }
      });
    }
    socialPostID = url.split('_')[1];

    console.log(socialPostID);
    socialOverlayContent = ($('#'+socialPostID+' .coloredPanelThumb').html() != undefined)?'<div class="text-center">'+$('#'+socialPostID+' .coloredPanelThumb').html()+'</div>':'';
    socialOverlayContent += $('#'+socialPostID+' .socialPostContent').html();
    $('#socialOverlay').html(  socialOverlayContent );
    

  $('#inspWallLoad').hide();/* hide loader */
  $('#closeBlog').click(function(){/* attach event for closing */
    hideBlog();
  })
  $('#wallContent').hide(); /* hide wall content */
}

function hashChanged(hashVal){ /* triggered when hash value changes */

  hashArray = [];
  $.each($('.overlayLink'),function(){ /* loops each .overlayLink to collect the valid hashtags */
    hashArray.push(this.hash.substr(1));
  });
  if(hashArray.indexOf(hashVal) != -1){ /* show appropriate overlay with hashtag  */
    showOverlay(hashVal);
    $('html, body').animate({ 
      scrollTop: $("#powder-room").offset().top
    }, 500);
  }
  hashSocialArray = [];
  $.each($('.socialOverlayLink'),function(){ /* loops each .socialOverlayLink to collect the valid hashtags */
    hashSocialArray.push(this.hash.substr(1));
  });
  if(hashSocialArray.indexOf(hashVal) != -1){ /* show appropriate overlay with hashtag  */
    showSocialOverlay(hashVal);
    $('html, body').animate({ 
      scrollTop: $("#powder-room").offset().top
    }, 500);
  }

  //socialPost
}
$(function(){
  /* Check hashtag change */
  if(window.location.hash != ''){
    hashChanged(location.hash.slice(1));
  }
  $(window).on('hashchange',function(){ 
    hashChanged(location.hash.slice(1));
  });
  /* Initialize date filter */
  /* JQuery Selective DatePicker for IE, Chrome, Safari, iPad,iPhone */
  /* Uncomment when adding date filter
  var device = {};
  device.Html5 = false;
  device.UA = navigator.userAgent;
  device.Types = ["iPhone", "iPad", "Chrome"];
  for (var d = 0; d < device.Types.length; d++) {
    var t = device.Types[d];
    device[t] = !!device.UA.match(new RegExp(t, "i"));
    device.Html5 = device.Html5 || device[t];
  }
  if (device.Html5 == false) {
    $(".datepicker").datepicker();
  }
  else {
    $("input[type='text'].datepicker").datepicker();
  }
  */
  /* Script for Filtering content */
  var inspFilterArray = [];
  $('input.inspWallFilterInput').change(function(){ /* check filter change */
    if ($(this).is(':checkbox')){ /* toggle checked */
      $(this).parent('label').toggleClass('checked');
    }
    
    if($('input[name="inspWallFilter"]:checked').length + $('input.inspWallFilterDate[value!=""]').length){ /* Check if filtered and add or remove class */
      $('.inspWallFilter').addClass('filtered')
    }else{
      $('.inspWallFilter').removeClass('filtered')
    }
  });
  /* Filter Form Submit */
  $('#inspWallFilterForm').submit(function(e){ /* Filter form submit */
    e.preventDefault();
    inspFilterArray = [];
    $.each($('input[name="inspWallFilter"]:checked'),function(){
      inspFilterArray.push(this.value)
    });
    data = {filter:JSON.stringify(inspFilterArray)};
    $.get('wall.php',data,populateWall);
    $('#filterFormWrap').collapse('hide');
  })
  /* Clear Filter Form */
  $('#inspWallClearFilter').click(function(){
    $('input[name="inspWallFilter"]:checked').click();
    $('input.inspWallFilterDate').val('');
    $('.inspWallFilter').removeClass('filtered')
    $('#filterFormWrap').collapse('hide');
  });
  /* Attach event for overlay*/

  /* Load More */
  $('#inspWallLoadLink').click(function(e){
    e.preventDefault();
    $('#inspWallLoadLink').hide();
    $('#inspWallLoaderIcon').addClass('show');
    
    $.get('wall.php?filter=1',function(data){
      $('#wallContent').append(data);
      $('#inspWallLoadLink').show();
      $('#inspWallLoaderIcon').removeClass('show');
    });
  });

  $
});