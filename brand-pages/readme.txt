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

The Brand pages designs were done following Bootstrap 3.3.2 grid. The container is 1170px wide with 30px gutter, the container has a padding of 15px on each side. Reece website has a header and footer container of 1200px that does not match bootstrap grid, it is recommended to pick one container and match all the elements to it.