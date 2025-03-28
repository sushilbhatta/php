<?php

function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        
        // array_key_exists  checks either the key exist  on an array or not ,
        // takes two argument first  is KEY and second is ARRAY itself.====
        require base_path($routes[$uri]);
    } else {
        abort();
    }
}

function abort($code = 404)
{
    http_response_code($code);
    
    // http_response_code takes one argument that is code itself which is Number ;
    
    require "views/{$code}.php";
    
    die();
}
$routes=require base_path('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// $_SERVER['REQUEST_URI'] is full path  that the user has enterded
// localhost/php/about?foo='boo' but if we just want the route pathe 
// use path ['path]

// parse_url takes one argument and returns the array with 
// ['path'] and ['query'] keys

routeToController($uri, $routes);