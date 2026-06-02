<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Portfolio::index');
$routes->get('/profil', 'Portfolio::profil');