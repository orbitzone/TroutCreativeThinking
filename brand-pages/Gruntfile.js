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
              "css/font-awesome.css": "less/font-awesome/font-awesome.less",
              "css/brand-pages/widgets.css": "less/brand-pages/widgets/widgets.less",
              "css/brand-pages/friatek.css": "less/brand-pages/friatek/friatek.less",
              "css/brand-pages/laufen.css": "less/brand-pages/laufen/laufen.less",
              "css/brand-pages/wolfen.css": "less/brand-pages/wolfen/wolfen.less",
              "css/brand-pages/kado.css": "less/brand-pages/kado/kado.less",
              "css/brand-pages/armitage-shanks.css": "less/brand-pages/armitage-shanks/armitage-shanks.less",
              "css/brand-pages/rehau.css": "less/brand-pages/rehau/rehau.less",
              "css/brand-pages/roca.css": "less/brand-pages/roca/roca.less",
              "css/brand-pages/mizu.css": "less/brand-pages/mizu/mizu.less"
          }
        ]
      }
    },
    copy: {
      main: {
          files: [

              // setup bootstrap3 less files
              {expand: true, cwd: '../bootstrap3-template/less/bootstrap', src: '**', dest: 'less/bootstrap'},
              {expand: true, cwd: '../bootstrap3-template/less/legacy-bootstrap', src: '**', dest: 'less/legacy-bootstrap'},
              // setup fontawesome less files
              {expand: true, cwd: 'bower_components/fontawesome/less', src: '**', dest: 'less/font-awesome'},
              {expand: true, cwd: 'bower_components/matchHeight', src: ['*.matchHeight-min.js'], dest: 'javascript'},
              {expand: true, cwd: 'bower_components/Flowtype.js/', src: ['*.js'], dest: 'javascript'},
              {expand: true, cwd: 'bower_components/slick-carousel/slick', src: ['*.min.js'], dest: 'javascript'}
          ]
      }
    },
    watch: {
      options: {
        livereload: 35728
      },
      less: {
        files: ['themes/*/less/*.less','**/*.less'],
        tasks: ['less'],

        options: {
          spawn: false //important so that the task runs in the same context
        }
      }
    }
  });
  //  grunt.loadNpmTasks('grunt-newer');
  grunt.loadNpmTasks('grunt-notify');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');
  
  grunt.registerTask('default', ['copy', 'less', 'watch']);
};

