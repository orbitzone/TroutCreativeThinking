Reece Responsive
===============

Global Javascript Notes:
------------------------

The javascript has been split into modules that you can include in a page if you need to use their functionality. Hopefully
we can move to something a little more powerful in the future such as backbone and require.js but implementing this would
be a bit of work on both ends so I think we'll have to hold off for a bit.

I've left all of the javascript unminified and in seperate files in case you would like to change something. I would 
suggest that the javascript and css should be minified and concatenated into single files for production.


Most of the javascript plugins for reece contain small data apis to help with event binding and to help bootstrap 
bootstrap. Below are some examples of how to use them. 

Usually bootstrap plugins requires that carousels be explicitly instantiated with something like:

    $('.carousel').carousel();

A simple data-api has been added to allow you to bootstrap components directly within the markup. This api can be used like the following:

    <div id="article-carousel" data-bs-carousel="carousel" data-bs-carousel-interval="0" class="carousel slide">
        ...
    </div>

Where data-bs-carousel="carousel" and data-bs-carousel-interval="0" are responsible for the bootstraping. The interval 
can be anything so you can use this to instantiate a slideshow that rotates on an interval or a static carousel controllable
by buttons. This functionality can be included with the file: reece-carousel.js 

--------

In order to keep grid columns equal height you can use the reece-match-height.js module to bind up events like this:

    <div data-resize-group="gateway">
        <article data-resize="height">
            ...
        </article>
        <article data-resize="height">
            ...
        </article>
    </div>

The data-resize-group attribute defines the group you would like to match the height of and the data-resize="height" attrubite
defines the elements within that group.

These modules have not be thoroughly tested so if you run into any issues please let me know and I will fix for you guys
as soon as possible.


