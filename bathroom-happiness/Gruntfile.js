'use strict';

module.exports = function (grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    watch: {
      compass: {
        files: ['sass/*.{scss,sass}', 'sass/pages/*.{scss,sass}'],
        tasks: ['compass:dev']
      },
      js: {
        files: ['js/src/*.js'],
        tasks: ['uglify']
      },
      livereload: {
        options: {
          livereload: true
        },
        files: [
          '*.html',
          'css/style.css',
          'js/*.js',
          'images/{,**/}*.{png,jpg,jpeg,gif,webp,svg}'
        ]
      }
    },

    // Static Server
    connect: {
      server: {
        options: {
          port: 8000
        }
      }
    },

    // Compass
    compass: {
      options: {
        //bundleExec: true,
        httpPath: './',
        cssDir: 'css',
        sassDir: 'sass',
        imagesDir: 'images',
        javascriptsDir: 'js',
        fontsDir: 'fonts',
        assetCacheBuster: 'none',
        // require: [
        //   'sass-globbing'
        // ]
      },
      dev: {
        options: {
          environment: 'development',
          outputStyle: 'expanded',
          relativeAssets: true,
          raw: 'line_numbers = :true\n'
        }
      },
      dist: {
        options: {
          environment: 'production',
          outputStyle: 'compact',
          force: true
        }
      }
    },
 
    // Jshint
    jshint: {
      options: {
        jshintrc: '.jshintrc'
      },
      all: [
        'js/src/*.js'
      ]
    },

    uglify: {
      dev: {
        options: {
          mangle: false,
          compress: {
            warnings: false
          },
          preserveComments: 'all',
          beautify: true,
        },
        files: {
          'js/main.min.js': [
            'js/src/*.js'
          ]
        }
      },
      dist: {
        options: {
          mangle: true,
          compress: {
            warnings: false
          }
        },
        files: {
          'js/main.min.js': [
            'js/src/*.js'
          ]
        }
      }
    },

    copy: {
      js: {
        files: [
          { src: 'bower_components/angular/angular.min.js', dest: 'js/vendor/angular.min.js' },
          { src: 'bower_components/jquery/dist/jquery.min.js', dest: 'js/vendor/jquery.min.js' },
          { src: 'bower_components/respond/dest/respond.min.js', dest: 'js/vendor/respond.min.js' },
          { src: 'bower_components/magnific-popup/dist/jquery.magnific-popup.min.js', dest: 'js/vendor/jquery.magnific-popup.min.js' },
          { src: 'bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js', dest: 'js/vendor/bootstrap.min.js' },
          { src: 'bower_components/slick-carousel/slick/slick.min.js', dest: 'js/vendor/slick.min.js' },
          { src: 'bower_components/jquery-validation/dist/jquery.validate.min.js', dest: 'js/vendor/jquery.validate.min.js' }
        ]
      }
    },
    svgstore: {
      options: {
        prefix : 'shape-', // This will prefix each <g> ID
      },
      default : {
        files: {
          'images/svg-defs.svg': ['images/svgs/*.svg'],
        }
      }      
    }
  });

  grunt.loadNpmTasks('grunt-contrib-connect');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-svgstore');

  grunt.registerTask('build', [
    'jshint',
    'uglify:dist',
    'compass:dist'
  ]);

  grunt.registerTask('default', [
    'connect',
    'uglify:dev',
    'compass:dev',
    'copy:js',
    'svgstore',
    'watch'    
  ]);

};