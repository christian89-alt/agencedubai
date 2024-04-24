<?php

const ROUTES = [
	'/' => [
		'controller' => App\Controller\MainController::class,
		'method' => 'Accueil'
	],
    '/contact' => [
		'controller' => App\Controller\MainController::class,
		'method' => 'contact'
	]
    '/programmes' => [
		'controller' => App\Controller\MainController::class,
		'method' => 'Programmes'
	]
    '/equipe' => [
		'controller' => App\Controller\MainController::class,
		'method' => 'Notre équipe'
	]

];
