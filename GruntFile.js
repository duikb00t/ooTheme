module.exports = function(grunt) {

  grunt.initConfig({
    concat: {
      js: {
        src: ['js/app.js'],
        dest: 'build/js/script.js',
      },
      css: {
        src: ['css/main.css'],
        dest: 'build/css/styles.css',
      },
    },
    watch: {
      js: {
        files: ['js/**/*.js'],
        tasks: ['concat:js'],
      },
      css: {
        files: 'scss/*.scss',
        tasks: ['sass'],
      },
    },

    sass: {
      options: {
        compress: false,
        sourcemap: 'none'
      },
      dist: {
        files: {
          'css/main.css': 'scss/main.scss',
        },
      },
    },
  });

  // Load Tasks
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-sass');

  // Merge tasks into 1 default
  grunt.registerTask('default', ['concat', 'watch', 'sass']);

};
