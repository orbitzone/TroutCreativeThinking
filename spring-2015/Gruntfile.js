module.exports = function(grunt) {
  grunt.initConfig({
    compass: {
      dist: {
        options: {
          sassDir: 'sass',
          cssDir: 'css',
          environment: "production"
        }
      }
    },
    watch: {
      styles: {
        files: ['**/*.scss'], // which files to watch
        tasks: ['compass'],
      }
    },
    copy: {
      main: {
        files: [
          // includes files within path
          {expand: true,cwd: 'bower_components/jquery/dist/', src: '**', dest: 'js/vendor/'},
          {expand: true,cwd: 'bower_components/font-awesome/fonts/', src: '**', dest: 'fonts/'}          
        ],
      },
    },
  });
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('default', ['watch']);

  grunt.registerTask('kill', function() {
    process.exit(1);
  });
};