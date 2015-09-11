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
    uglify: {
      my_target: {
        files: {
          'js/jquery.cookie.min.js': ['js/jquery.cookie.js']
        }
      }
    },
    copy: {
      main: {
        files: [
          // includes files within path
          {expand: true,cwd: 'bower_components/jquery/dist/', src: '**', dest: 'js/vendor/'},
          {expand: true,cwd: 'bower_components/placeholders/dist/', src: 'placeholders.jquery.min.js', dest: 'js/vendor/'},
          {expand: true,cwd: 'bower_components/slick-carousel/slick/', src: 'slick.min.js', dest: 'js/vendor/'},
          {expand: true,cwd: 'bower_components/matchHeight/', src: 'jquery.matchHeight-min.js', dest: 'js/vendor/'},
          {expand: true,cwd: 'bower_components/ScrollMagic/scrollmagic/minified', src: 'ScrollMagic.min.js', dest: 'js/vendor/'},
          {expand: true,cwd: 'bower_components/ScrollMagic/scrollmagic/minified/plugins', src: '**', dest: 'js/vendor/plugins/'},
          {expand: true,cwd: 'bower_components/jquery-validation/dist', src: 'jquery.validate.min.js', dest: 'js/vendor/'},
          {expand: true,cwd: 'bower_components/slick-carousel/slick/fonts/', src: '**', dest: 'fonts/'},     
          {expand: true,cwd: 'bower_components/font-awesome/fonts/', src: '**', dest: 'fonts/'}          
        ],
      },
    },
  });
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-watch');
   grunt.loadNpmTasks('grunt-contrib-uglify');

  grunt.registerTask('default', ['watch']);

  grunt.registerTask('kill', function() {
    process.exit(1);
  });
};