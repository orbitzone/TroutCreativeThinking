
(function() {




    window.App = {
        Global: {},
        Carousel: {}
    }




    App.Global = {
        
        initialize: function() {
			this.checkForTouch();            
        },

        checkForTouch: function() {

        }

        initializeCarousel: function() {
		    //Carousel
		    $('.carousel').carousel();

		    //Trends
		    $('.carousel2').carousel({
			interval: 2700
		    });

		    //ILMB Comp
		    $('.carousel3').carousel({
			interval: 3000
		    });
        }
	}   

	App.Global.initialize();





	
	App.Carousel = {

        initialize: function() {
		    $('.carousel').carousel();
		    $('.carousel2').carousel({ interval: 2700 });
		    $('.carousel3').carousel({ interval: 3000 });
        }		
	}

	App.Carousel.initialize();





})();