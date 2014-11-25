# Ixa WordPress Core

[WordPress] fork that works with [Composer].

[Composer]: http://getcomposer.org/
[WordPress]: http://wordpress.org/

As of version 4.0, WordPress doesn't have Composer support. Using this fork you get a WordPress ready to be use as dependency in its own folder, and don't have to wait [until WordPress core have built-in support][ticket].

[ticket]: http://core.trac.wordpress.org/attachment/ticket/23912/composer.3.patch

## Installation

	require: {
		"ixa/wordpress-core" : "~4.0"
	}

If you are starting a new project, you can use [Ixa WordPress Starter] to get WordPress core and configuration files, running only one command

	$ composer create-project ixa/wordpress-starter <project-name>

[Ixa WordPress Starter]: https://github.com/cesarhdz/ixa-wordpress-starter

## Configuration

A tipical file tree using WordPress and Composer is

	+ wp-content 		# Defined by WP_CONTENT_DIR, WP_CONTENT_URL
	  	+ themes		
	  	  	+ my-theme
	  	+ uploads 		
	  	+ plugins		
	+ wordpress 		# WordPress core
	+ vendor 			
	- wp-config.php 	# Main config file
	- index.php			# Must require './wordpress/wp-blog-header.php'



In order to run WordPress the following constants must be set in `wp-config.php` ([example][wp-config])

- `WP_HOME`, URL of public area.
- `WP_SITEURL`, URL of WordPress instalation
- `WP_CONTENT_DIR` and `WP_CONTENT_URL`, Path and url for wp-content folder. `themes` and `languages` folders must be within `wp-content` and cannot be configurable

[wp-config]: https://github.com/cesarhdz/ixa-wordpress-core/blob/master/example/wp-config.php

additionally, `wp-config.php` is a good place to require `vendor/autoload.php`.

And finally the index file must have the following:

	<?php
		define('WP_USE_THEMES', true);
		require('./wordpress/wp-blog-header.php');


