<?php

namespace Recca0120\LaravelTracy\Panels;

use Illuminate\Routing\Router;

class RoutingPanel extends AbstractPanel
{
    public function getData()
    {
        $router = $this->app['router'];
        $currentRoute = $router->getCurrentRoute();
        $uri = 404;
        $action = [];
        if ($currentRoute !== null) {
            $uri = $currentRoute->uri();
            $action = $currentRoute->getAction();
        }

        return $data = [
            'uri' => $uri,
            'action' => $action,
        ];
    }
}
