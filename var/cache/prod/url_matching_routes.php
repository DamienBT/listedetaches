<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'task_index', '_controller' => 'App\\Controller\\TaskController::index'], null, null, null, false, false, null]],
        '/nouvelle-tache' => [[['_route' => 'task_new', '_controller' => 'App\\Controller\\TaskController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/edit\\-tache/([^/]++)(*:28)'
                .'|/delete\\-tache/([^/]++)(*:58)'
                .'|/tache/([^/]++)(*:80)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        28 => [[['_route' => 'task_edit', '_controller' => 'App\\Controller\\TaskController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        58 => [[['_route' => 'task_delete', '_controller' => 'App\\Controller\\TaskController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        80 => [
            [['_route' => 'task_get', '_controller' => 'App\\Controller\\TaskController::getTask'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
