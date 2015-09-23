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
      }
    },
    copy: {
      main: {
        files: [
          // includes files within path
            
        ],
      },
    },
  });
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('default', ['watch']);
};