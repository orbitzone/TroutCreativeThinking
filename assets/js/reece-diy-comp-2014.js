// DIY DISASTERS COMP 2014
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
		
		
		
		// ---------------------------- INIT ---------- //
		init: function()
		{
			
			// entry form page?
			if($("#entry-form").length > 0) app.initEntryForm();
			
			// sort grid?
			if($("#entries-grid").length > 0) app.initEntriesGrid();
			
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
			app.entryModal 				= $("#entryModal");
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
			
			// sort
			app.sortRecentBtn.on('click', function(e){ e.preventDefault(); });
			app.sortViewedBtn.on('click', function(e){ e.preventDefault(); });

			// modal item navigation
			// $("ul").find("[data-slide='" + current + "']");
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
				$("#entryModal .modal-body").html("");
				
				// load prev item
				$("#entryModal .modal-body").html(prev.innerHTML);
				$("#entryModal .modal-body").css('background-image', prev.style.backgroundImage);
				
				// hide overview css
				$("#entryModal .modal-body .overlay").css('display','none');
				
				// update current item
				app.currentItemID = prev.getAttribute('data-item-id');
				
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
				
				window && console.log("next: " + next);
				
				// clear modal
				$("#entryModal .modal-body").html("");
				
				// load next item
				$("#entryModal .modal-body").html(next.innerHTML);
				$("#entryModal .modal-body").css('background-image', next.style.backgroundImage);
				
				// update current item
				app.currentItemID = next.getAttribute('data-item-id');
				
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
			$("#entryModal .modal-body").html("");
			
			// img
			var imgSrc = _this.css('background-image');
			$("#entryModal .modal-body").css('background-image', imgSrc);
			
			// get
			var caption = _this.find('.caption').clone();
			
			// set
			$("#entryModal .modal-body").html(caption);
			
			// show
			app.entryModal.modal('show');
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
			app.inputFile 				= $("#inputFile");
			app.uploadBtn 				= $("#upload-btn");
			app.inputState 				= $('#inputState');
			app.inputWords 				= $('#inputWords');
			app.shareFBbtn				= $("#share-fb-btn");
			app.shareTWbtn				= $("#share-tw-btn");
			app.uploadAnimation			= $("#upload-animation");
			
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
			
			// share button FB
			app.shareFBbtn.on('click', function(e){
				e.preventDefault();
				if(app.shareEntryToFB == false)
				{
					app.shareFBbtn.removeClass('inactive');
					app.shareFBbtn.addClass('active');
					app.shareEntryToFB = true;
				}
				else
				{
					app.shareFBbtn.removeClass('active');
					app.shareFBbtn.addClass('inactive');
					app.shareEntryToFB = false;
				}
			});
			// share button TW
			app.shareTWbtn.on('click', function(e){
				e.preventDefault();
				if(app.shareEntryToTW == false)
				{
					app.shareTWbtn.removeClass('inactive');
					app.shareTWbtn.addClass('active');
					app.shareEntryToTW = true;
				}
				else
				{
					app.shareTWbtn.removeClass('active');
					app.shareTWbtn.addClass('inactive');
					app.shareEntryToTW = false;
				}
			});
			
			// trigger file upload
			app.uploadBtn.on('click', function(e){
				e.preventDefault();
				if(app.formComplete == false)
				{
					app.displayFilename.html('');
					app.inputFile.focus().trigger('click');
				}
			});
			
			// on file change
			app.inputFile.change(function(e) {
		        // reset
		        app.fileName = null;
		        // file type?
		        if( app.inputFile[0].files.length > 0 ) 
		        {
		        	
		        	// video or image or invalid file type
		        	app.fileType = app.inputFile[0].files[0].type;
		        	app.fileName = app.inputFile[0].files[0].name;
					if(app.fileType.indexOf("video") > -1) app.fileType = "video";
					else if(app.fileType.indexOf("image") > -1) app.fileType = "image";
					else app.fileType = "invalid";
					
					if(app.fileType != "invalid")
					{
						if(app.fileType == "video") app.displayFilename.html( '<div><img src="../../assets/images/diy-disasters/filetype-video.png" /><span>' + app.fileName + '</span><a class="remove-file" href="#"></a></div>' );
						else app.displayFilename.html( '<div><img src="../../assets/images/diy-disasters/filetype-image.png" /><span>' + app.fileName + '</span><a class="remove-file" href="#"></a></div>' );
			        	$(".remove-file").on('click', function(e){
							e.preventDefault();
							// clear file names
							app.displayFilename.empty();
							app.clearFileUpload();
						});
					}
					else
					{
						app.displayFilename.html('<div>Invalid file type selected: ' + app.fileName + '</div>');
					}
		        	
		        }
		        else
		        { 
		        	app.displayFilename.html('<div>No file selected</div>');
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
			var words = app.inputWords.val().trim();
			var count = words.split(' ').length;
			if(count > 50) is50WordsValid = false;
			
			// share?
			if(app.shareEntryToFB == true)
			{
				
			} 
			
			// pass validation?
			if(valid == false || is50WordsValid == false || app.fileType == "invalid")
			{
				if(valid == false) $(".formError").show();
				if(is50WordsValid == false) $(".formErrorWords").show();
				if(app.fileType == "invalid") $(".formErrorFile").show();
				$('html, body').animate({ scrollTop: 100 }, 1000);
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
						if(app.shareEntryToFB == true) { /* share to facebook */ }
						if(app.shareEntryToTW == true) { /* share to twitter */ }
					}
					else
					{
						$(".formResultError").show();
						$("#entry-form-txt").addClass("error-red").html("UNSUCCESSFUL");
						$("#upload-evidence-txt").addClass("error-red").html("UNSUCCESSFUL UPLOADED");
					}
					$('html, body').animate({ scrollTop: 100 }, 1000);
					
				}, 5000);
				
				
			}
			
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
	
	// diy disasters
	if($("#diyDisastersComp2014").length > 0){ app.init(); }
	
});