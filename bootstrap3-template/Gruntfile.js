module.exports = function(grunt) {
  grunt.initConfig({
    server: {
      port: grunt.option('port') || 8000
    },
    less: {
      development: {
        options: {
          compress: false,
          yuicompress: false,
          optimization: 2
        },
        files: [
          {
              "css/reece-global.css": "less/reece-global.less",
              "css/font-awesome.css": "less/font-awesome/font-awesome.less"
          }
        ]
      }
    },
    copy: {
      main: {
          files: [

              // setup bootstrap3 less files
              {expand: true, cwd: 'bower_components/bootstrap/less', src: ['**'], dest: 'less/bootstrap'},
              // setup fontawesome less files
              {expand: true, cwd: 'bower_components/fontawesome/less', src: ['**'], dest: 'less/font-awesome'},
              // setup touchswipe js file
              {expand: true, cwd: 'node_modules/jquery-touchswipe', src: ['jquery.touchSwipe.min.js'], dest: 'javascript/vendor'}
          ]
      }
    },
    watch: {
      options: {
        livereload: 35728
      },
      less: {
        files: ['less/*.less'],
        tasks: ['less'],

        options: {
          spawn: false //important so that the task runs in the same context
        }
      }
    }
  });
  //  grunt.loadNpmTasks('grunt-newer');
  grunt.loadNpmTasks('grunt-notify');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.registerTask('default', ['copy', 'less', 'watch']);
};

