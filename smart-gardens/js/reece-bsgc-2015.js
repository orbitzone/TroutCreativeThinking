function getQueryVariable(variable)
{
       var query = window.location.search.substring(1);
       var vars = query.split("&");
       for (var i=0;i<vars.length;i++) {
               var pair = vars[i].split("=");
               if(pair[0] == variable){return pair[1];}
       }
       return(false);
}
$(document).ready(function(){
	
	// app
	var app = {
		
		// ---------------------------- VARS ---------- //
		isMobile: 						null,
		isInitialLoad: 					true,
		entryForm: 						null,
		displayFilename: 				null,
		inputFile: 						null,
		uploadBtn: 						null,
		inputState: 					null,
		inputWords: 					null,
		fileType: 						"invalid",
		fileName: 						null,
		shareFBbtn:						null,
		shareTWbtn:						null,
		shareEntryToFB:					false,
		shareEntryToTW:					false,
		formLoading:					false,
		uploadAnimation:				null,
		formComplete:					false,
		entriesGrid:					null,
		sortRecentBtn:					null,
		sortViewedBtn:					null,
		entryModal:						null,
		modalPrevBtn:					null,
		modalNextBtn:					null,
		currentItemID:					null,
		currentItemsArray:				null,
		loadMoreEntriesBtn:				null,
		moreItemsToLoad:				false,
		moreItems:						null,
		hashPrefix: 					"smartGardenItem", 
		
		// ---------------------------- INIT ---------- //
		init: function()
		{
			// entry form page?
			if($("#entry-form").length > 0) app.initEntryForm();
			
			// sort grid?
			if($("#entries-grid").length > 0) app.initEntriesGrid();

			if($('#entry').length > 0) app.initEntry();
			if($("#contact").length > 0) app.initContact();
			app.readImages();
		},
		imagesToLoad: new Array(),
		readImages: function(){
			//app.imagesToLoad.push("img/entry-pattern.jpg");
			var n=0;
			$('[data-src]').each(function(){
				app.imagesToLoad.push($(this).data("src"));
				$(this).addClass('bg-image');
				this.id = "img"+n;
				n= n +1;
			});
			app.loadImages(0);
		},
		loadImages: function(counter){
			//Break out if no more images
		  if(counter == app.imagesToLoad.length) { 
		  	if($('.sunflower').length > 0){
					$('.sunflower').addClass('grow');				
				}
				return; 
		  }

		  //Grab an image obj
		  var I = document.getElementById("img"+counter);
		  $(I).removeAttr('data-src');
		  isBackground = false;
		  if(I.tagName.toLowerCase() !== "img"){
		  	I = new Image();
		  	I.id = "img0";
		  	isBackground = true;
		  }
		  //Monitor load or error events, moving on to next image in either case
		  I.onload = I.onerror = function() { 
		  	var $elem = $(document.getElementById("img"+counter));
		  	if(isBackground){
		  		$elem.css({ 'background-image': "url(" + app.imagesToLoad[counter] + ")" });
		  	}
	  		$elem.addClass('loaded');
		  	app.loadImages(counter+1); 
		  }

		  //Change source (then wait for event)
		  I.src = app.imagesToLoad[counter];
		},
		initEntry: function(){
			if(getQueryVariable('submitted') == "true"){
				$('.success-message').show();
			}
			$('#entry').find('.entryPopImage').slick({
				slidesToShow: 1,
				appendArrows: $('#slider-arrows'),
				prevArrow: "<button type=\"button\" class=\"arrow-prev\"><i class=\"icon icon-angle-left\"></i></button>",
				nextArrow: "<button type=\"button\" class=\"arrow-next\"><i class=\"icon icon-angle-right\"></i></button>"				 	
			});
		},
		// ---------------------------- FUNCTIONS ---------- //
		
		/*
		 * @initEntriesGrid
		 * init sortable grid
		 */
		initEntriesGrid: function()
		{
			
			// vars
			app.entriesGrid 			= $("#entries-grid");
			app.sortRecentBtn 			= $("#sort-recent-btn");
			app.sortViewedBtn 			= $("#sort-viewed-btn");
			app.entryModal 				= $("#entry-modal");
			app.modalPrevBtn			= $("#modal-prev-btn");
			app.modalNextBtn			= $("#modal-next-btn");
			app.loadMoreEntriesBtn		= $("#load-more-items-btn");
			app.currentItemsArray		= $("#entries-grid a");
			app.moreItems 				= new Object($(".more-items a"));
			
			// mix grid for sorting
			/******* API DOCUMENTATION: https://mixitup.kunkalabs.com/docs/ *******/
			// on init sort by most recent ie. item id descending - 
			// - as this attritibute can be set to the items incrimental id in the database
			app.entriesGrid.mixItUp({ load: { sort: 'item-id:desc' } });


			app.entryModal.find('.entryPopImage').slick({
				slidesToShow: 1,
				appendArrows: $('#slider-arrows'),
				prevArrow: "<button type=\"button\" class=\"arrow-prev\"><i class=\"icon icon-angle-left\"></i></button>",
				nextArrow: "<button type=\"button\" class=\"arrow-next\"><i class=\"icon icon-angle-right\"></i></button>"				 	
			});
			
			// load more items
			if(app.moreItems.length > 0) 
			{
				app.moreItemsToLoad = true;
				app.loadMoreEntriesBtn.show();
				app.loadMoreEntriesBtn.on('click', function(e){ 
					e.preventDefault();
					app.entriesGrid.mixItUp('append', app.moreItems, null, function(){
						// items loaded
						app.loadMoreEntriesBtn.hide();
						// update currentItemsArray for modal viewing
						app.currentItemsArray = null;
						app.currentItemsArray = $("#entries-grid a");
						// update event listeners
						$("#entries-grid a").on('click', function(e){ e.preventDefault(); app.showEntry($(this)); });
					});
				});
			}
			
			// item click
			$("#entries-grid a").on('click', function(e){ e.preventDefault(); app.showEntry($(this)); });
			app.checkHash();
			$(window).on('hashchange',function(){
				app.checkHash();
			});
			// sort
			app.sortRecentBtn.on('click', function(e){ e.preventDefault(); });
			app.sortViewedBtn.on('click', function(e){ e.preventDefault(); });

			// modal item navigation
			app.modalPrevBtn.on('click', function(e){ 
				
				e.preventDefault(); 
				// get current item
				var index = null;
				var prev = null;
				app.currentItemsArray.each(function(i,val){ if($(this).attr('data-item-id') == app.currentItemID) index = i; });
				
				// get prev item - if current is 0 get last
				if(index == 0) prev = app.currentItemsArray[ app.currentItemsArray.length - 1 ];
				else prev = app.currentItemsArray[ index - 1 ];
				
				// clear modal
				//$("#entry-modal .modal-body").html("");
				
				// load prev item
				_this = $(prev);
				$("#entry-modal .entryPopTitle").html(_this.find('.caption h3').html());
				$("#entry-modal .entryPopDescription").html(_this.find('.caption p.fifty-words-description').html());
				location.hash = '#'+app.hashPrefix+_this.attr('data-item-id') ;

				app.entryModal.find('.entryPopImage').slick('unslick');
				var images = _this.data('images').split(',');
				$("#entry-modal .entryPopImage").html("");
				$.each(images, function(key,image){
					$("#entry-modal .entryPopImage").append('<div class="image"><img src="'+image+'" alt="'+_this.find('h2').text()+'"/></div>');
				});
				app.entryModal.find('.entryPopImage').slick({
					slidesToShow: 1,
					appendArrows: $('#slider-arrows'),
					prevArrow: "<button type=\"button\" class=\"arrow-prev\"><i class=\"icon icon-angle-left\"></i></button>",
					nextArrow: "<button type=\"button\" class=\"arrow-next\"><i class=\"icon icon-angle-right\"></i></button>"
				});
				//$("#entry-modal .entryPopImage").css('background-image', prev.style.backgroundImage);
				
				// hide overview css
				$("#entry-modal .modal-body div.overlay").css('display', 'none');
				
				// update current item
				app.currentItemID = prev.getAttribute('data-item-id');

				//scroll to top of body container
				app.entryModal.find('.modalBody').scrollTop(0, 0);
				app.entryModal.find('.fbIcon').attr('href','http://www.facebook.com/sharer.php?u='+window.location+'&title='+_this.find('.caption h3').html());
				app.entryModal.find('.twIcon').attr('href','https://twitter.com/share?url='+window.location+'&text='+_this.find('.caption h3').html()+'&via=@reece'+'&hashtags=smart-garden,garden,reece');
			});
			
			app.modalNextBtn.on('click', function(e){ 
				
				e.preventDefault(); 
				// get current item
				var index = null;
				var next = null;
				app.currentItemsArray.each(function(i,val){ if($(this).attr('data-item-id') == app.currentItemID) index = i; });
				window && console.log("app.currentItemsArray.length: " + app.currentItemsArray.length);
				window && console.log("index: " + index);
				// get next item - if current is 0 get last
				if(index == app.currentItemsArray.length - 1) next = app.currentItemsArray[ 0 ];
				else next = app.currentItemsArray[ index + 1 ];
				
				// clear modal
				$("#entry-modal .modal-body").html("");
				
				// load next item
				_this = $(next);

				$("#entry-modal .entryPopTitle").html(_this.find('.caption h3').html());
				$("#entry-modal .entryPopDescription").html(_this.find('.caption p.fifty-words-description').html());
				location.hash = '#'+app.hashPrefix+_this.attr('data-item-id') ;
				//$("#entry-modal .entryPopImage").css('background-image', next.style.backgroundImage);
				
				app.entryModal.find('.entryPopImage').slick('unslick');
				var images = _this.data('images').split(',');
				$("#entry-modal .entryPopImage").html("");
				$.each(images, function(key,image){
					$("#entry-modal .entryPopImage").append('<div class="image"><img src="'+image+'" alt="'+_this.find('h2').text()+'"/></div>');
				});
				app.entryModal.find('.entryPopImage').slick({
					slidesToShow: 1,
					appendArrows: $('#slider-arrows'),
					prevArrow: "<button type=\"button\" class=\"arrow-prev\"><i class=\"icon icon-angle-left\"></i></button>",
					nextArrow: "<button type=\"button\" class=\"arrow-next\"><i class=\"icon icon-angle-right\"></i></button>"
				});
				
				// hide overview css
				$("#entry-modal .modal-body div.overlay").css('display', 'none');
				
				// update current item
				app.currentItemID = next.getAttribute('data-item-id');

				//scroll to top of body container
				app.entryModal.find('.modalBody').scrollTop(0, 0);
				app.entryModal.find('.fbIcon').attr('href','http://www.facebook.com/sharer.php?u='+window.location+'&title='+_this.find('.caption h3').html());
				app.entryModal.find('.twIcon').attr('href','ttps://twitter.com/share?url='+window.location+'&text='+_this.find('.caption h3').html()+'&via=@reece'+'&hashtags=smart-garden,garden,reece');
			});
			
			// modal share btn
			$("#share-entry-fb-btn").on('click', function(e){
				e.preventDefault();
				window.open('http://www.facebook.com/sharer.php?s=100&p[url]=http://www.reece.com.au/diydisasters&p[images][0]=/images/image.jpg&p[title]=Title&p[summary]=Summary', "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, width=400, height=400");
			});
			
		},		
		
		
		/*
		 * @showEntry
		 * show entry in modal window
		 */
		showEntry: function(_this)
		{
			//console.log( _this.attr('data-item-id') );
			
			// update current item id
			app.currentItemID = _this.attr('data-item-id');
			
			// reset
			$("#entry-modal .modal-body").html("");
			// img
			app.entryModal.find('.entryPopImage').slick('unslick');
			var images = _this.data('images').split(',');
			$("#entry-modal .entryPopImage").html("");
			$.each(images, function(key,image){
				$("#entry-modal .entryPopImage").append('<div class="image"><img src="'+image+'" alt="'+_this.find('h2').text()+'"/></div>');
			});
			app.entryModal.find('.entryPopImage').slick({
				slidesToShow: 1,
				appendArrows: $('#slider-arrows'),
				prevArrow: "<button type=\"button\" class=\"arrow-prev\"><i class=\"icon icon-angle-left\"></i></button>",
				nextArrow: "<button type=\"button\" class=\"arrow-next\"><i class=\"icon icon-angle-right\"></i></button>"
			});
			
			//Checks Session storage to show or hide success message and buttons
			if(sessionStorage.entrySubmitted){
				$("#entry-modal .entryPopButtons").hide();
				$("#entry-modal .entryPopSuccessMessage").show();
			}
			else{
				$("#entry-modal .entryPopButtons").show();
				$("#entry-modal .entryPopSuccessMessage").hide();
			}
			sessionStorage.clear();
			// set
			$("#entry-modal .entryPopTitle").html(_this.find('.caption h3').html());
			$("#entry-modal .entryPopDescription").html(_this.find('.caption p.fifty-words-description').html());
			location.hash = '#'+app.hashPrefix+_this.attr('data-item-id') ;
			
			// show
			app.entryModal.modal('show');

			//scroll to top of body container
			app.entryModal.on('shown', function () {
				$(window).resize();
				app.entryModal.find('.modalBody').scrollTop(0, 0);
			});
			app.entryModal.find('.fbIcon').attr('href','http://www.facebook.com/sharer.php?u='+encodeURIComponent(window.location)+'&title='+encodeURIComponent(_this.find('.caption h3').html()));
			app.entryModal.find('.twIcon').attr('href','https://twitter.com/share?url='+encodeURIComponent(window.location)+'&text='+encodeURIComponent(_this.find('.caption h3').html())+'&via=reece'+'&hashtags=smart-garden,garden,reece');
		},
		checkHash: function(){
				hashTag = location.hash.slice(1);
				$('#entries-grid a').each(function(){
					if(hashTag == app.hashPrefix+$(this).attr("data-item-id")){
						$(this).click();
					}
				});
			},
		/*
		 * @initEntryForm
		 * init form functionality
		 */
		initEntryForm: function()
		{
			
			// form elements
			app.entryForm 				= $("#entry-form");
			app.displayFilename 		= $("#display-filename");
			app.uploadBtn 				= $("#upload-btn");
			app.inputState 				= $('#inputState');
			app.inputWords 				= $('#inputWords');
			app.shareFBbtn				= $(".share-submit .facebook");
			app.shareTWbtn				= $(".share-submit .twitter");
			app.uploadAnimation			= $("#upload-animation");
			app.numberFiles = 1;
			
			// form submit
		    app.entryForm.submit(function(e){
			    e.preventDefault();
			    if(app.formLoading == false) app.validateForm();
		    });
			
			// style selects
			app.inputState.fancySelect();
			
			// numbers only input
			$('.numbersOnly').keyup(function(){this.value = this.value.replace(/[^0-9\.]/g,'');});
			
			// alerts
			$(".form-container .close").on('click', function(e){
				e.preventDefault();
				var att = $(this).attr("data-dismiss");
				$("."+att).fadeOut(500);
			});
			
			// trigger file upload
			app.uploadBtn.on('click', function(e){
				e.preventDefault();
				if(app.formComplete == false)
				{
					if($('#display-filename .file').length < 5){
						$("#inputFilesWrap .active .inputFile").focus().trigger('click');
					}
				}
			});
			$(document).on('click','.upload-button', function(){
				$(this).parent().find('input').focus().trigger('click');
			});
			$(document).on('click','.upload-more-btn', function(){
				var item = '<div class="upload-input">'
												+'<input type="file" name="inputFile[]" class="inputFile"/>'
												+'<span class="upload-filename"></span>'
												+'<button type="button" class="upload-button">Browse</button>'
												+'<button type="button" class="upload-remove-button">X</button>'
										+'</div>';
				var $item = $(item);
				$('#inputFilesWrap').append($item);
				$item.focus();
				$item.addClass('added');				
				if($('.upload-input').length == 5){
					$(this).hide();
				}
				
				//$item.slideDown();
			});
			$(document).on('click','.upload-remove-button', function(){
				$(this).parent().removeClass('added');
				$elem = $(this).parent();
				setTimeout(function(){ $elem.remove(); },500);
				$('.upload-more-btn').show();
			});
			// on file change
			$(document).on('change','#inputFilesWrap input',function(e) {
		        // reset
		        app.fileName = null;
		        // file type?
		        if($('html').hasClass('lt-ie9') || $('html').hasClass('lt-ie8') || (navigator.appVersion.indexOf("MSIE 9.")!=-1))
		        {
		        	$(this).parent().find('.upload-filename').text('Image added');
			        app.fileType = "image";
			        $(this).addClass('uploaded');
		        }
		        else
		        {
		        			// video or image or invalid file type
			        	app.fileType = $(this)[0].files[0].type;
			        	app.fileName = $(this)[0].files[0].name;
			        	app.displayFilename.find('div.alert[data-num="'+app.numberFiles+'"]').remove();
			        	
								//if(app.fileType.indexOf("video") > -1) app.fileType = "video";
								if(app.fileType.indexOf("image") > -1) app.fileType = "image";
								else app.fileType = "invalid";
								if(app.fileType != "invalid")
								{
									$(this).parent().find('.upload-filename').text(app.fileName );
									$(this).addClass('uploaded');
								}
								else
								{
									app.displayFilename.append('<div class="alert alert-danger" style="display:block;" data-num="'+app.numberFiles+'">Invalid file type selected: ' + app.fileName + '</div>');
								}		        	
		        }
		    });
		},
		
		
		/*
		 * @validateForm
		 * validate form elements
		 */
		validateForm: function()
		{
		
			// reset
			$(".formError, .formErrorWords, .formErrorFile, .formResultSuccess, .formResultError").hide();
			$(".required, .fancy-select").removeClass('input-error');
			
			// vars
			var valid = true;
			var is50WordsValid = true;
			var images_uploaded = true;
			var terms_accepted = true;
			// validate fields
			$("#entry-form .required").each(function(){
			  var val = $.trim($(this).val());
			  if(val.length == 0 || val == "")
			  {
			  	$(this).addClass('input-error');
			  	valid = false;
			  }
			});
			
			// state select
			var opt = app.inputState.val();
			if(opt == "Select STATE")
			{
				$(".fancy-select").addClass('input-error');
			  	valid = false;
			}
						
			// 50 words or less
			var words = $.trim(app.inputWords.val());
			var count = words.split(' ').length;
			if(count > 100) is50WordsValid = false;
			
			// share?
			if($('#accept-terms').is(":checked"))
			{
				$('.formResultTerms').hide();
			}else{
				terms_accepted = false;
				$('.formResultTerms').show();
			} 
			
			if($('#inputFilesWrap input.uploaded').length == 0){
				$('#inputFilesWrap .upload-input').addClass('error');
				images_uploaded = false;
			}else{
				$('#inputFilesWrap .upload-input').removeClass('error');
			}
			// pass validation?
			if(valid == false || is50WordsValid == false || app.fileType == "invalid" || images_uploaded == false || terms_accepted == false)
			{
				if(valid == false) $(".formError").show();
				if(is50WordsValid == false) $(".formErrorWords").show();
				if(app.fileType == "invalid") $(".formErrorFile").show();
				if(images_uploaded == false)  $(".formErrorFile").show();
				$('html, body').animate({ scrollTop: $('#entry-form-wrap').offset().top - 72 }, 1000);
			}
			else
			{
				
				// TO DO - AJAX form submit
				// server response
				var serverResponse = 1;
				
				// form uploading
				app.uploadAnimation.show();
				app.formLoading = true;
				var progress = 1;
				var intval = setInterval(function(){
					$("#upload-animation .bar").css("width", progress + "px");
					progress += 10;
				}, 100);
				
				// ok - ajax submit form
				setTimeout(function(){
					// Redirect to the entry with the DB ID
					sessionStorage.entrySubmitted = true;
					window.location = 'entry.html?submitted=true';
					/*

					clearInterval(intval);
					app.formComplete = true;
					// form loaded
					app.formLoading = false;
					app.uploadAnimation.hide();
					// reset
					app.clearFileUpload();
					app.entryForm[0].reset();
					app.inputState.val("Select STATE");
					app.inputState.trigger('update.fs');
					$(".fifty-words, .details, .share-submit, .remove-file").hide();
					// result?
					if(serverResponse == 1)
					{
						$(".formResultSuccess").show();
						$("#entry-form-txt").html("SUCCESSFUL");
						$("#upload-evidence-txt").html("UPLOADED EVIDENCE");
						// share?
						if(app.shareEntryToFB == true) {
							// share to facebook 
						}
						if(app.shareEntryToTW == true) {
							// share to twitter 
						}
					}
					else
					{
						$(".formResultError").show();
						$("#entry-form-txt").addClass("error-red").html("UNSUCCESSFUL");
						$("#upload-evidence-txt").addClass("error-red").html("UNSUCCESSFUL UPLOADED");
					}
					$('html, body').animate({ scrollTop: 100 }, 1000); */
					
				}, 5000);
				
				
			}
			
		},
		
		initContact: function(){
			$('#contact form').validate({
				submitHandler: function(form) {
					console.log('submit');
			    //form.submit();
			    /*$.ajax({

			    });*/
					$('#contact-form').slideUp();
					$('#success-message').slideDown();
			    return false;
			  }
			});
		},
		
		/*
		 * @clearFileUpload
		 * clear a form element within a form
		 */
		clearFileUpload: function()
		{
			// reset file input
			app.inputFile.wrap('<form>').parent('form').trigger('reset');
			app.inputFile.unwrap();	
		},
		
		
		
		// ---------------------------- HELPER FUNCTIOS ---------- //
		
	
		/*
		 * @isValidEmailAddress
		 * 
		 */
		isValidEmailAddress: function(emailAddress) 
		{
		    var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
		    // alert( pattern.test(emailAddress) );
		    return pattern.test(emailAddress);
		}
			
	}
	
	if($("#bsgc-2015").length > 0){ app.init(); }
	
});