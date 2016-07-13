Any important information will be added to this file.

/**
Meta
**/

It is important to add the format-detection tag to prevent undesire styles on product codes or order numbers.

<meta name="format-detection" content="telephone=no">

/**
Folder Structure
**/

The project was developed having trade as the main style and retail drivend by a subclass .retail on the element #product-pages

/**
JS LIbraries
**/

Slick: To create sliders.
Bootstrap-select: To create custom styled dropdown select.
Typeahead: To get results on input fields while the user types.
MatchHeight: To set the same height of elements in same row.
JqueryUI: To include datepicker on form. (This can be improved by onle downloading the Datepicker option)
TweenMax: To implement javascript based animations and interactions.

Main js is products-page.js

Trade and Retail share the same scripts.

/**
Styles
**/

The main less file is less/products-page.less

Notice that from line 15 to 56 we added some css to move the content on the footer an menu as the widget will cover part of it. 

We suggest to remove the cart icon on the header, at least on the pages that include the widget.

