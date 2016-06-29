module.exports = function(grunt) {
  grunt.initConfig({
    compass: {
      dist: {
        options: {
          sassDir: 'sass',
          cssDir: 'css'
        }
      }
    },
    watch: {
      styles: {
        files: ['**/*.scss'], // which files to watch
        tasks: ['compass'],
      },
      script: {
        files: ['js/*','!js/*.min.js'],
        tasks: ['uglify'],
      }
    },
    uglify: {
      my_target: {
        options: {
          preserveComments: 'some'
        },
        files: [{
          expand: true,
          cwd: 'js',
          src: ['**/*.js','!**/*.min.js'],
          dest:'js',
          ext: '.min.js'
        }]
      }
    },
    copy: {
      main: {
        files: [
          // includes files within path
          {expand: true,cwd: 'bower_components/modernizr/', src: 'modernizr.js', dest: 'themes/reece-main/javascript/'},
          //{expand: true,cwd: 'bower_components/slick-carousel/slick/', src: '**.js', dest: 'js/libs/'},
          //{expand: true,cwd: 'bower_components/imagesloaded', src: 'imagesloaded.pkgd.min.js', dest: 'js/libs/'},
         // {expand: true,cwd: 'bower_components/bootstrap-sass/assets/javascripts/', src: ['bootstrap.js','bootstrap.min.js'], dest: 'js/libs/'},
          //{expand: true,cwd: 'bower_components/font-awesome/fonts/', src: '**', dest: 'fonts/'},
        ],
      },
    },
  });
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-uglify');

  grunt.registerTask('default', ['copy','watch']);
};