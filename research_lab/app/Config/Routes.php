<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/map/getApiKey', 'MapController::getApiKey');
$routes->get('/members', 'MembersController::index');
$routes->get('/members/jeongilseo', 'MembersController::jeongilseo');
$routes->get('/projects', 'Projects::index');
$routes->get('/publication', 'Publications::index');