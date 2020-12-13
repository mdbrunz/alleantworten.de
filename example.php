<?php

use Symfony\Component\HttpClient\HttpClient;

require __DIR__.'/vendor/autoload.php';

$client = HttpClient::createForBaseUri('https://alleantworten.de');
dump($client->request('GET', '/search/autocomplete', [
	'query' => [
		'q' => $argv[1],
	],
])->getContent());
