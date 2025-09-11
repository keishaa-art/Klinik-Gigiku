<?php

if (!function_exists('routeByRole')) {
    function routeByRole($name, $params = [])
    {
        $role = auth()->check() ? strtolower(auth()->user()->role) : 'guest';
        return route($role . '.' . $name, $params);
    }
}
