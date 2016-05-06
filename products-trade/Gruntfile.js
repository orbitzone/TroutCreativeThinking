module.exports = function(grunt) {
    grunt.initConfig({
        server: {
            port: grunt.option('port') || 80
        },
        less: {
            development: {
                options: {
                    compress: false,
                    yuicompress: false,
                    optimization: 2
                },
                files: [{
                    "css/reece-global.css": "less/reece-global.less",
                    "css/font-awesome.css": "less/font-awesome/font-awesome.less",
                    "css/products-page.css": "less/products-page/products-page.less",
                }]
            }
        },
        copy: {
            main: {
                files: [
                    // setup bootstrap3 less files
                    {
                        expand: true,
                        cwd: 'bower_components/bootstrap/less',
                        src: ['**'],
                        dest: 'less/bootstrap'
                    },
                    // setup fontawesome less files
                    {
                        expand: true,
                        cwd: 'bower_components/fontawesome/less',
                        src: ['**'],
                        dest: 'less/font-awesome'
                    }
                ]
            }
        },
        uglify: {
            my_target: {
                files: {
                    'javascript/products-page.min.js': ['javascript/products-page.js']
                }
            }
        },
        watch: {
            options: {
                livereload: false
            },
            less: {
                files: ['less/products-page/**/*.less', 'javascript/products-page.js'],
                tasks: ['less', 'uglify'],
                //options: {
                //  spawn: false //important so that the task runs in the same context
                //}
            }
        },
        svgstore: {
          options: {
            prefix : 'shape-', // This will prefix each <g> ID
          },
          default : {
            files: {
              'templates/images/IconsSvg.svg': ['templates/images/svgs/*.svg'],
            }
          }      
        }
    });
    //  grunt.loadNpmTasks('grunt-newer');
    grunt.loadNpmTasks('grunt-notify');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-svgstore');
    grunt.registerTask('default', ['copy', 'less', 'watch']);
};