<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
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
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/api/(?'
                    .'|projects/(?'
                        .'|([0-9]+)(*:230)'
                        .'|([^/]++)(?'
                            .'|(*:249)'
                        .')'
                    .')'
                    .'|tasks/(?'
                        .'|([0-9]+)(*:276)'
                        .'|([^/]++)(?'
                            .'|(*:295)'
                        .')'
                    .')'
                    .'|users/(?'
                        .'|([0-9]+)(*:322)'
                        .'|([^/]++)(*:338)'
                        .'|login(*:351)'
                    .')'
                .')'
                .'|/task(?'
                    .'|s/(?'
                        .'|([a-z0-9-]+)\\-(\\d+)(*:393)'
                        .'|([^/]++)/edit(*:414)'
                    .')'
                    .'|/([^/]++)/delete(*:439)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        230 => [[['_route' => 'app_api_projectapi_findbyid', '_controller' => 'App\\Controller\\API\\ProjectApiController::findById'], ['id'], ['GET' => 0], null, false, true, null]],
        249 => [
            [['_route' => 'app_api_projectapi_update', '_controller' => 'App\\Controller\\API\\ProjectApiController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'app_api_projectapi_delete', '_controller' => 'App\\Controller\\API\\ProjectApiController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'app_api_userapi_delete', '_controller' => 'App\\Controller\\API\\UserApiController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        276 => [[['_route' => 'app_api_taskapi_findbyid', '_controller' => 'App\\Controller\\API\\TaskApiController::findById'], ['id'], ['GET' => 0], null, false, true, null]],
        295 => [
            [['_route' => 'app_api_taskapi_update', '_controller' => 'App\\Controller\\API\\TaskApiController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'app_api_taskapi_delete', '_controller' => 'App\\Controller\\API\\TaskApiController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        322 => [[['_route' => 'app_api_userapi_findbyid', '_controller' => 'App\\Controller\\API\\UserApiController::findById'], ['id'], ['GET' => 0], null, false, true, null]],
        338 => [[['_route' => 'app_api_userapi_update', '_controller' => 'App\\Controller\\API\\UserApiController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        351 => [[['_route' => 'app_api_userapi_login', '_controller' => 'App\\Controller\\API\\UserApiController::login'], [], ['POST' => 0], null, false, false, null]],
        393 => [[['_route' => 'task.show', '_controller' => 'App\\Controller\\TaskController::show'], ['slug', 'id'], null, null, false, true, null]],
        414 => [[['_route' => 'task.edit', '_controller' => 'App\\Controller\\TaskController::edit'], ['id'], null, null, false, false, null]],
        439 => [
            [['_route' => 'task.delete', '_controller' => 'App\\Controller\\TaskController::delete'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
