<?php
function view($template, $data = [])
{
    extract($data);
    return require "/public/resources/views/{$template}.view.php";
}
function url($route)
{
    return \Wishlist\Core\App::get('config')['beginning'] . $route;
}