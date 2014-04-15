var path = '/Applications/MAMP/htdocs/cpm/';module.exports = function( grunt ) {   grunt.initConfig({    pkg: grunt.file.readJSON('package.json'),    uglify: {        options: {            // the banner is inserted at the top of the output            banner: '/*! <%= pkg.name %> <%= grunt.template.today("dd-mm-yyyy") %> */\n'        },                dist: {            files: {                'js/scripts.js': ['js/cycle.js','bower_components/foundation/js/foundation.min.js','js/app.js'],            }       }     },    sprite:{      'all': {        src: 'sprites/*.png',        destImg: 'images/spritesheet.png',        destCSS: 'sprites.css',        algorithm: 'binary-tree'      }    },    cssmin: {        add_banner: {        options: {            banner: '/*\nTheme Name: <%= pkg.title %>\nTheme URI: <%= pkg.homepage %>\nDescription: <%= pkg.description %>\nVersion: <%= pkg.version %>\nAuthor: <%= pkg.author %>\nTags: <%= pkg.tags %>\n*/'        },            files: {            'style.css': ['stylesheets/app.css','sprites.css']        }        }    },    // deploy via rsync    'ftp-deploy': {            build: {                auth: {                    host: 'ftp.colegio1mundo.com.br',                    port: 21,                    authKey: 'key1'                },                src: path,                dest: '/wordpress/wp-content/themes/cpm',                exclusions: [                    path+'bower_components',                    path+'stylesheets',                    path+'node_modules',                    path+'sprites',                    path+'.sass-cache',                    path+'.git',                    path+'waiting',                    path+'.grunt',                    path+'scss',                    path+'.ftppass',                    path+'.bowerrc',                    path+'.htaccess',                    path+'sprites.css',                    path+'.gitignore',                    path+'config.rb',                    path+'bower.json',                    path+'Gruntfile.js',                    path+'package.json',                    path+'README.md',                    path+'.DS_Store',                    path+'media'                ]            }    },    // image optimization    imagemin: {            dist: {                options: {                    optimizationLevel: 7,                    progressive: true                },                files: [{                    expand: true,                    cwd: 'images/',                    src: '**/*',                    dest: 'images/'                }]            }    },    jshint: {        all: ['js/app.js']    },    watch : {      dist : {        files : [          'js/*','stylesheets/*','images/*','*.php','*.html','sprites/*'        ],         tasks : [ 'uglify','cssmin','sprite','imagemin' ]      }    }    });  grunt.loadNpmTasks('grunt-contrib-uglify');  grunt.loadNpmTasks('grunt-contrib-cssmin');  grunt.loadNpmTasks('grunt-spritesmith');  grunt.loadNpmTasks('grunt-contrib-imagemin');  grunt.loadNpmTasks('grunt-ftp-deploy');  grunt.loadNpmTasks('grunt-contrib-watch');  grunt.loadNpmTasks('grunt-contrib-jshint');  grunt.registerTask( 'default', ['uglify','cssmin','sprite',/*'imagemin',*/'ftp-deploy'] );  grunt.registerTask( 'w', [ 'watch' ] );};/** * npm install -g grunt-cli * npm install grunt-ftpush --save-dev * npm install grunt --save-dev * * npm install matchdep --save-dev   npm install grunt-contrib-watch --save-dev   npm install grunt-contrib-compass --save-dev   npm install grunt-contrib-uglify --save-dev   npm install grunt-ftp-deploy --save-dev   npm install grunt-css --save-dev * *  */