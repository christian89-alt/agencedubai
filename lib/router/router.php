<?php

namespace Plugo\Router;
require dirname(__DIR__, 2) . '/config/routes.php';


class Router {

	// ...

	public function __construct() {
		$this->routes = ROUTES;
		$this->availablePaths = array_keys($this->routes);
		$this->requestedPath = isset($_GET['path']) ? $_GET['path'] : '/';
		$this->parseRoutes();
	}

}

