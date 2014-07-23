module.exports = function(grunt) {

	// Create the template files
	grunt.registerMultiTask("templates", "Build a js file from html templates", function() {
		var paths = grunt.file.expand( this.data.paths );
		var out = this.data.output;
		var contents = "Templates = {";
		var count = 0;

		// count files
		paths.forEach(function(path) {
			count++;
		});

		var i = 0;
		paths.forEach(function(path) {
			var html = grunt.file.read(path).replace(/(\r\n|\n|\r|\t)/gm,"");
			var file = path.replace(/^.*[\\\/]/, '').replace('.html', '');
			var json = JSON.stringify(html, null, 2);
			var comma = (i == count-1) ? '' : ',';
			contents += '"' + file + '": ' + json + comma;
			i++;
		});
		contents += '}';

		grunt.file.write( out, contents );
		grunt.log.writeln('File ' + out + ' sucessfully written from ' + count + ' source files');
	});

	// Project configuration.
	grunt.initConfig({

		// Package file
		pkg: grunt.file.readJSON('package.json'),


		// Live reload
		watch: {
			options: {
				livereload: true,
			},
			html: {
				files: ['panels/*.html'],
			}
		},

		// Build templates as js
	    templates: {
	        html: {
	            paths: ["panels/*.html"],
	            output: "templates.js"
	        }
	    }
	});

	// Actually running things.
	grunt.loadNpmTasks('grunt-contrib-watch');

	// Tasks
	grunt.registerTask('default', ['watch']); // Default tasks
	grunt.registerTask('templates', ['templates']); // Compile templates into js file



};
