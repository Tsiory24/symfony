<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/etudiants' => [[['_route' => 'app_api_etudiantapi_sendstudents', '_controller' => 'App\\Controller\\API\\EtudiantApiController::sendStudents'], null, ['GET' => 0], null, false, false, null]],
        '/api/projects' => [
            [['_route' => 'app_api_projectapi_create', '_controller' => 'App\\Controller\\API\\ProjectApiController::create'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'app_api_projectapi_findall', '_controller' => 'App\\Controller\\API\\ProjectApiController::findAll'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/tasks' => [
            [['_route' => 'app_api_taskapi_create', '_controller' => 'App\\Controller\\API\\TaskApiController::create'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'app_api_taskapi_findall', '_controller' => 'App\\Controller\\API\\TaskApiController::findAll'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/users' => [
            [['_route' => 'app_api_userapi_create', '_controller' => 'App\\Controller\\API\\UserApiController::create'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'app_api_userapi_findall', '_controller' => 'App\\Controller\\API\\UserApiController::findAll'], null, ['GET' => 0], null, false, false, null],
        ],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/projects' => [[['_route' => 'project.index', '_controller' => 'App\\Controller\\ProjectController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/tasks' => [[['_route' => 'task.index', '_controller' => 'App\\Controller\\TaskController::index'], null, null, null, false, false, null]],
        '/tasks/create' => [[['_route' => 'task.create', '_controller' => 'App\\Controller\\TaskController::create'], null, null, null, false, false, null]],
        '/tasks/paginate' => [[['_route' => 'task.paginate', '_controller' => 'App\\Controller\\TaskController::paginate'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api/(?'
                    .'|projects/(?'
                        .'|([0-9]+)(*:35)'
                        .'|([^/]++)(?'
                            .'|(*:53)'
                        .')'
                    .')'
                    .'|tasks/(?'
                        .'|([0-9]+)(*:79)'
                        .'|([^/]++)(?'
                            .'|(*:97)'
                        .')'
                    .')'
                    .'|users/(?'
                        .'|([0-9]+)(*:123)'
                        .'|([^/]++)(*:139)'
                        .'|login(*:152)'
                    .')'
                .')'
                .'|/task(?'
                    .'|s/(?'
                        .'|([a-z0-9-]+)\\-(\\d+)(*:194)'
                        .'|([^/]++)/edit(*:215)'
                    .')'
                    .'|/([^/]++)/delete(*:240)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => 'app_api_projectapi_findbyid', '_controller' => 'App\\Controller\\API\\ProjectApiController::findById'], ['id'], ['GET' => 0], null, false, true, null]],
        53 => [
            [['_route' => 'app_api_projectapi_update', '_controller' => 'App\\Controller\\API\\ProjectApiController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'app_api_projectapi_delete', '_controller' => 'App\\Controller\\API\\ProjectApiController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'app_api_userapi_delete', '_controller' => 'App\\Controller\\API\\UserApiController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        79 => [[['_route' => 'app_api_taskapi_findbyid', '_controller' => 'App\\Controller\\API\\TaskApiController::findById'], ['id'], ['GET' => 0], null, false, true, null]],
        97 => [
            [['_route' => 'app_api_taskapi_update', '_controller' => 'App\\Controller\\API\\TaskApiController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'app_api_taskapi_delete', '_controller' => 'App\\Controller\\API\\TaskApiController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        123 => [[['_route' => 'app_api_userapi_findbyid', '_controller' => 'App\\Controller\\API\\UserApiController::findById'], ['id'], ['GET' => 0], null, false, true, null]],
        139 => [[['_route' => 'app_api_userapi_update', '_controller' => 'App\\Controller\\API\\UserApiController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        152 => [[['_route' => 'app_api_userapi_login', '_controller' => 'App\\Controller\\API\\UserApiController::login'], [], ['POST' => 0], null, false, false, null]],
        194 => [[['_route' => 'task.show', '_controller' => 'App\\Controller\\TaskController::show'], ['slug', 'id'], null, null, false, true, null]],
        215 => [[['_route' => 'task.edit', '_controller' => 'App\\Controller\\TaskController::edit'], ['id'], null, null, false, false, null]],
        240 => [
            [['_route' => 'task.delete', '_controller' => 'App\\Controller\\TaskController::delete'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
