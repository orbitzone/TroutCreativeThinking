/*********
/*SHARE BUTTON
/***********

	Attributes:

	data-url: The url you want to share
	data-img:	The image/thumbnail to use when sharing
	data-title: The page title of the url you want to share
	data-via:	Optional Twitter username of content author (don't include "@")	-> Twitter
	data-hashtags:	Optional Hashtags appended onto the tweet (comma separated. don't include "#")	-> Twitter

	To create a Share button use the following html:

	<button type="button" title="Share" class="share" data-url="http://reece-spring.trout.com.au/#bathrooms-for-inspiration" data-img="http://reece-spring.trout.com.au/images/calm/2-bathrooms-for-inspiration/toilet.png" data-title="Toilet" data-via="@reece" data-hashtags="toilet,reece,bathroom"><i class="iconr-share-dotted"></i></button>


/*********
/*AJAX LOADING
/*********

All the pages are loaded using ajax. Please notices that we have created main html files for each Main Sections (Homepage, Love Luxury, Love Family, Love Calm, Bec Judd, Mr Jason Grant, Bathrooms We Love, 4 Steps, Destination mini makeovers).
Each html file is the same, except for the class added to the body (this class is important for the styling).

You can find a variable in the main.js file for each section. For the large pages (Love Family, Love Calm, Love Luxury) you'll notice that the variable contains different functions for each part we split the page, after one part is loaded with ajax it will call the next function to load the next part. If you want you can change this functionality using a scroll pluging to load the page parts as the user scrolls.


/***********
/* Videos
/********


To update the video link you need to search in the code for the play button and replace the video id for the youtube video id needed, the attribute to change is data-video:

							<div class="play" data-video="9SMTB_xeuM0" data-video-container="day-spa-video">
								<i class="iconr-play-circle"></i>
							</div>


/********
/* Update main url
/********

For sharing we need to have the complete url path of the images, please update the mainUrl variable on the main.js file to the appropiate one.