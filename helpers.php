<?php

if (! function_exists('routeByRole')) {
    function routeByRole($name, $parameters = [], $absolute = true) {
        $role = strtolower(auth()->user()->role ?? 'dokter'); 
        return route($role . '.' . $name, $parameters, $absolute);
    }
}

