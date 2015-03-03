module.exports = function(grunt) {

    grunt.initConfig({
        phpcsfixer: {
            src: {
                dir: 'src'
            },
            options: {

            }
        },
        watch: {
            test: {
                files: ['src/**/*'],
                tasks: ['phpcsfixer']
            }
         }
    });

    require('load-grunt-tasks')(grunt);

    grunt.registerTask('default', ['phpcsfixer:src']);
};