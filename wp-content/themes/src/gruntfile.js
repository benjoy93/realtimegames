module.exports = function(grunt) {

    //configure tasks
    grunt.initConfig ({
        pkg: grunt.file.readJSON('package.json'),

        cssmin: {
            target: {
                files: [{
                    expand: true,
                    cwd: 'styles/',
                    src: ['*.css', '!*.min.css'],
                    dest: '.',
                    ext: '.css'
                }]
            }
        },

        watch: {
            scripts: {
                files: ['**/*.scss'],
                tasks: ['compile'],
                options: {
                    spawn: false,
                },
            },
        },

        sass: {                              // Task
            dist: {                            // Target
                options: {                       // Target options
                    style: 'expanded'
                },
                files: {                         // Dictionary of files
                    'styles/style.css': 'styles/main.scss'  // 'destination': 'source'
                }
            }
        },

        autoprefixer: {
            options: {
                browsers: ['last 8 versions']
            },
            dist: { // Target
                files: {
                    'style-release.css': 'style.css'
                }
            }
        },

        svgmin: {
            options: {
                plugins: [
                    {
                        removeViewBox: false
                    }, {
                        removeUselessStrokeAndFill: false
                    }, {
                        removeAttrs: {
                            attrs: ['xmlns']
                        }
                    }
                ]
            },
            dist: {
                files: {
                    'dist/logo-black.svg': 'img/logo-black.svg',
                    'dist/logo-white.svg': 'img/logo-white.svg'
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-svgmin');


    grunt.registerTask('compile',['sass','autoprefixer','cssmin','svgmin','watch']);

}
