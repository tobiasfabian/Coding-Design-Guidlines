<?php

return [
	'locale' => 'de_DE.utf-8',
	'routes' => require_once __DIR__ . '/options/routes.php',
	'sitemap.ignoreTemplates' => ['error'],
	'updates' => [
		'kirby' => 'security',
		'plugins' => [
			'tobiaswolf/hashed-url' => false,
		],
	],
];
