<?php

/*
|--------------------------------------------------------------------------
| Detect Active Route
|--------------------------------------------------------------------------
|
| Compare given route with current route and return output if they match.
| Very useful for navigation, marking if the link is active.
|
*/
if(!function_exists('isActiveRoute')) {
    function isActiveRoute($route, $output = "active")
    {
        if (Route::currentRouteName() == $route) return $output;
    }
}

if(!function_exists('submenu')) {
    function submenu($route)
    {
        return (!empty(config('submenu.'.$route)))
            ? config('submenu.'.$route)
            : [];
    }
}




