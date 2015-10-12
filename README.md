## New and improved wd_s with scaffolding
=============

Roll up a new WordPress theme in no time by answering a few questions, using grunt-init.
	
Props to Bronson Quick for the original article: 
https://bronsonquick.com.au/blog/2013/10/16/intro-into-grunt-wordpress-project-scaffolding/

=======
* [Ruby](https://www.ruby-lang.org/en/documentation/installation/)
* [Node](http://nodejs.org/)
* [Grunt CLI](https://www.npmjs.com/package/grunt-cli) - `npm install -g grunt-cli`
* [Bower](http://bower.io/) - `npm install -g bower`
* [Sass](http://sass-lang.com/install) - `gem install sass`

# Theme Setup

1) Clone this repo into ~/.grunt-init/ or %USERPROFILE%\.grunt-init\ for Windows users.

2) To create a new project using a grunt-init template just run the following command in the root of your project directory:

```bash
$ grunt-init {template name}
```

If you are using NVM or something other than a vanilla Node and Grunt setup, you can clone to any directory and pass the path where your template lives to grunt init using:

```bash
grunt-init /path/to/my-template
```

3) Answer the questions at the prompt (or hit enter to leave the defaults).

[instructions]: https://github.com/briannaorg/wd_s/blob/master/wd_s.gif

[instructions]

4) Install dependencies

```bash
npm install && bower install
```

You are now ready to use wd_s!

# How to use Grunt

1) From the command line, navigate to your theme

```bash
cd /your-project/wordpress/wp-content/themes/your-theme
```

2) Type any of the following Grunt tasks to perform an action:

`grunt watch` - Automatically handle changes to CSS, JS, SVGs, and image sprites. Plus live reload!

`grunt javascript` - Concatenate and minify javascript files

`grunt styles` - Comb, compile, prefix, combine media queries, and minify CSS files

`grunt imageminnewer` - Minify images

`grunt sprites` - Generate an image sprite and the associated Sass (sprite.png)

`grunt icons` - Generate the SVG sprite (svg-defs.svg)

`grunt i18n` - Generate a translation file

`grunt sassdoc` - Re-generate the SassDocs

`grunt` - Do all the above tasks at the same time

