A Trout Grunt/Compass Project
=============================

## Requirements
* npm
* Node.js
* Rubygems
* Sass
* Compass

Note: You do not need to have bower installed globally in order to run the project, as "bower install" is run with "npm install"


## Setup
1. Browse to the directory in terminal and install node modules:
  > npm install

2. Run grunt to init the Connect sever (a simple http server, used to test html files) and to start watching source files.
  > grunt

3. Navigate to local test server on the following URL:
    
  http://localhost:8000/

Note: grunt watch must be running in order to access the server. Add "keepalive" to the connect config if you do not wish to keep watch running.


## Production Build
To build files in production mode (mangled JS files etc), use the following command:
  > grunt build


#Youtube video playerManager.

Please update the origin value on one 196 on the player variable to the live server.

origin: 'http://reece-responsive.trout.com.au',