<?php

return \FastRoute\simpleDispatcher(function(\FastRoute\RouteCollector $r) {
    $r->get('/', '\PHPDX\Site\Controller\HomeController::render');
});