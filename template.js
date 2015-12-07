/**
 *
 * Licensed under the MIT License
 */

'use strict';

// Basic template description
exports.description = 'Create a WordPress theme based on wd_s';

// Template-specific notes to be displayed before question prompts.
exports.notes = 'Answer a few questions about the features you want in your theme and we\'ll do the rest!';

// Template-specific notes to be displayed after the question prompts.
exports.after = 'You\'re done! Make sure you run `npm install` then `grunt` so your style.css is built.';

// Any existing file or directory matching this wildcard will cause a warning.
exports.warnOn = '*';

// The actual init template
exports.template = function (grunt, init, done) {
	init.process({}, [
		// Prompt for these values.
		init.prompt('title', 'wd_s'),
		{
			name   : 'prefix',
			message: 'PHP function prefix (alpha and underscore characters only)',
			default: 'wds'
		},
		init.prompt('description', 'A theme boilerplate for WebDevStudios.'),
		init.prompt('homepage', 'http://www.webdevstudios.com'),
		init.prompt('author_name', 'WebDevStudios'),
		init.prompt('author_email', 'info@webdevstudios.com'),
		init.prompt('author_url', 'https://github.com/WebDevStudios/_s'),
		init.prompt('repository', 'git@git://github.com/WebDevStudios/_s.git'),
		{
			name   : 'buddypress_include',
			message: 'Do you need BuddyPress support? [Y/n]',
			default: 'y'
		},
		{
			name   : 'pagebuilder_support',
			message: 'Will you be using WDS Simple Page Builder? [Y/n]',
			default: 'y'
		},
		{
			name   : 'column_size',
			message: 'Enter the column size in pixels',
			default: '80'
		},	
		{
			name   : 'gutter',
			message: 'Enter the gutter width in pixels',
			default: '10'
		},	
		{
			name   : 'max_width',
			message: 'Enter the max-width for the page layout in pixels',
			default: '1280'
		}
	], function (err, props) {
		props.keywords = [];
		props.version = '0.1.0';
		props.devDependencies = {
			'grunt': "latest",
	 		'autoprefixer': 'latest',
		    'css-mqpacker': 'latest',
		    'glob': 'latest',
		    'grunt': 'latest',
		    'grunt-contrib-concat': 'latest',
		    'grunt-contrib-imagemin': 'latest',
		    'grunt-contrib-jshint': 'latest',
		    'grunt-contrib-uglify': 'latest',
		    'grunt-contrib-watch': 'latest',
		    'grunt-cssnano': 'latest',
		    'grunt-githooks': 'latest',
		    'grunt-newer': 'latest',
		    'grunt-notify': 'latest',
		    'grunt-phpcs': 'latest',
		    'grunt-postcss': 'latest',
		    'grunt-sass': 'latest',
		    'grunt-sassdoc': 'latest',
		    'grunt-shell': 'latest',
		    'grunt-spritesmith': 'latest',
		    'grunt-svgmin': 'latest',
		    'grunt-svgstore': 'latest',
		    'grunt-wp-i18n': 'latest',
		    'load-grunt-tasks': 'latest'
    		};

		// Sanitize names where we need to for PHP/JS
		props.name = props.title.replace(/\s+/g, '-').toLowerCase();
		// Theme language
		props.language = props.title.replace('/[^a-z_]/i', '').replace(/ /g, '').toLowerCase();
		// Development prefix (i.e. to prefix PHP function names, variables)
		props.prefix = props.prefix.replace('/[^a-z_]/i', '').toLowerCase();
		// Development prefix in all caps (e.g. for constants)
		props.prefix_caps = props.prefix.toUpperCase();
		// An additional value, safe to use as a JavaScript identifier.
		props.js_safe_name = props.name.replace(/[\W_]+/g, '_').replace(/^(\d)/, '_$1');
		// An additional value that won't conflict with NodeUnit unit tests.
		props.js_test_safe_name = props.js_safe_name === 'test' ? 'myTest' : props.js_safe_name;
		props.js_safe_name_caps = props.js_safe_name.toUpperCase();

		// Files to copy and process
		var files = init.filesToCopy(props);

		//Will they use BuddyPress?
		if (props.buddypress_include.toUpperCase()[0] == "N") {
			delete files[ 'buddypress.php'];
		}
		//Will they support WDS Simple Page Builder?
		if (props.pagebuilder_support.toUpperCase()[0] == "N") {
			delete files[ 'template-page-builder-only.php'];
		}

		console.log(files);

		// Actually copy and process files
		init.copyAndProcess(files, props, {noProcess: 'screenshot.png'});

		// Generate package.json file
		init.writePackageJSON('package.json', props);

		// Done!
		done();
	});
};