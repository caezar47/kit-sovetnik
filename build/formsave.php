<?php

$post = $_POST;

$body = '';

$to = 'polar87@yandex.ru';
$subject = 'Новая форма на сайте kit-sovetnik.ru'; 

if(isset($post['f']) && count($post['f'])) {
	foreach($post['f'] as $k => $v) {

		$body = $body . "$k: $v\n";

	}
}
$headers = 'From: robot@kit-sovetnik.ru';

@mail($to, $subject, $body, $headers);

echo json_encode($body);