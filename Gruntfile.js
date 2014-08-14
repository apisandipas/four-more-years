module.exports = function(grunt) {

    // Loads all grunt plugins from package.json
    require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);

    grunt.initConfig({
        pkg: grunt.file.readJSON("package.json"),

        /**
         * Task responsiblle for detecting file changes and rerunning tasks.
         * @type {Object}
         */
        watch: {
            options: {
                livereload: true
            },
            compass: {
                // Watch all SCSS and Icons files, ignore bootstrap
                files: ["assets/**/*.scss", "!assets/scss/bootstrap/**.scss"],
                tasks: ["compass:build"]
            },
            compassSprites: {
                files: ["assets/img/icon/**/*.png"],
                tasks: ["compass:build"]
            }
        },

        /**
         * Task For Compiled SCSS with Compass library
         * @type {Object}
         */
        compass: {
            build: {
                options: {
                    config: "config.rb",
                    sourcemap: true
                }
            }
        },

        
    });


    grunt.registerTask("default", ["compass:build", "watch"]);
    grunt.registerTask('push:staging', ['rsync:stage','rsync:stage_plugins','rsync:stage_uploads']);
};
