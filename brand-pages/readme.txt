Images:
Images for the page are located in the brand named folder.

Recommendations:
Update logos with the brand name in the file name: eg. friatek-logo.jpg
Upload the logo twice the dimension to be displayed in desktop. eg. if the logo displayed is 250px by 250px, it would be better to have the file as 500px by 500px, this is for a better quality on retina display devices. Unless you are using a @2x function to generate this ones.

For each brand page we generate a single css file under css/brand-page folder with the brand name.

Images in the widget-html-image should have the option to add a link if needed.

The widgets.less contains the general styles for the widgets. This file should be imported in the brand .less file in order to overrite variables to changes the styles. The brand css file should be included in the template.

You must include the following javascripts files into the brandpages template:

javascript/jquery.matchHeight-min.js
javascript/brand-pages/widgets.js

In the Friatek and Laufen pages we are using a web font from typography.com, you need to include the following script in the template:

<link rel="stylesheet" type="text/css" href="//cloud.typography.com/6958312/662428/css/fonts.css" />

We've noticed that Reece website has a header and footer container of 1200px wide, but bootstrap is configured as 1170px, if you want to match your layout with bootstrap we recommend to recompile the bootstrap css and change the 1170px container to be 1200px, or change your header and footer container to be bootstrap.

To alter the bootstrap layout you need to edit the variables.less file in bootstrap's folder. Change the line 300  from 1200px to 1230px, this is to keep the margins when the screen is 1200px wide. Then on line 341 change 1140px to 1170px, this will add the gutter width of 30 and it will set the container to 1200px.

