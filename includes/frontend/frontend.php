<?php

declare(strict_types=1);

namespace PluginName\Frontend;

use Prappo\Vite;

class Frontend
{
	/**
	 * Frontend bootstrapper
	 *
	 * @return void
	 */
	function bootstrap()
	{
		add_action('wp_enqueue_scripts', [$this, 'enqueue_script']);
		add_action('admin_enqueue_scripts', [$this, 'enqueue_script']);
		add_action('wp_footer', [$this, 'render_app']);
		add_action('admin_footer', [$this, 'render_app']);
	}

	/**
	 * Render application's markup
	 */
	function render_app()
	{
		printf('<div id="my-app" class="my-app"></div>');
	}

	/**
	 * Enqueue script
	 */
	function enqueue_script()
	{
		Vite\enqueue_asset(
			PLUGINNAME_DIR . '/js/dist',
			'js/src/main.jsx',
			[
				'dependencies' => ['react', 'react-dom'],
				'handle' => 'vite-for-wp-react',
				'in-footer' => true,
			]
		);
	}
}
