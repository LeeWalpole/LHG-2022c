module.exports = function (grunt) {

    //   grunt.registerTask("default", "", function(){

    // Project configuration.
    grunt.initConfig({

        // purifycss: {
        //     options: {
        //         whitelist: ['.is-selected', '*modal*', '*prefade*', '*postfade*', 'hero-prefade','tab.active','.flickity*']
        //     },
        //     target: {
        //         src: ['index.html'],
        //         css: ['css/*.css'],
        //         dest: 'css/pure/pure.css',
        //     },
        // },

        // concat: {
        //     dist: {
        //         src: ['css/*.css'],
        //         dest: 'css/input/pure.css',
        //     },
        // },
    
        cssmin: {
            min_css: {
                src: ['css/*.css'],
                dest: 'dist/min.css',
            },
        },

        uglify: {
            min_js: {
                files: {
                    'dist/min.js': ['js/*.js'],
                }
            }
        },

        watch: {
            uglify: {
                files: 'js/*.js',
                tasks: ['uglify'],
            },
            css: {
                files: 'css/*.css',
                tasks: ['cssmin'],
            },
        },

    });
    // loadplugin
    // grunt.loadNpmTasks('grunt-svg-inject');
    // grunt.loadNpmTasks('grunt-uncss');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-uglify-es');
    grunt.loadNpmTasks('grunt-purifycss');
    // grunt.loadNpmTasks('grunt-critical');
    grunt.loadNpmTasks('grunt-contrib-concat'); // to create php.css for wordpress 
    grunt.loadNpmTasks('grunt-contrib-watch');

    // do the task
    grunt.registerTask('default', ['uglify', 'cssmin', 'watch']);
};