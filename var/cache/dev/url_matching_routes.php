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
        '/' => [[['_route' => 'stats', '_controller' => 'App\\Controller\\QuizsController::stats'], null, null, null, false, false, null]],
        '/quizs' => [[['_route' => 'list_quizs', '_controller' => 'App\\Controller\\QuizsController::view'], null, null, null, false, false, null]],
        '/freequizs' => [[['_route' => 'free_quizs', '_controller' => 'App\\Controller\\QuizsController::view2'], null, null, null, false, false, null]],
        '/quizs/add' => [[['_route' => 'app_quizs_new', '_controller' => 'App\\Controller\\QuizsController::new'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.cssAhmed(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/qu(?'
                    .'|estions/([^/]++)(?'
                        .'|(*:194)'
                        .'|/(?'
                            .'|add(*:209)'
                            .'|edit/([^/]++)(*:230)'
                            .'|delete/([^/]++)(*:253)'
                            .'|question/([^/]++)/answers(?'
                                .'|(*:289)'
                                .'|/(?'
                                    .'|add(*:304)'
                                    .'|([^/]++)/(?'
                                        .'|edit(*:328)'
                                        .'|delete(*:342)'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|iz(?'
                        .'|s/([^/]++)/(?'
                            .'|pdf(*:377)'
                            .'|open(*:389)'
                            .'|edit(*:401)'
                            .'|delete(*:415)'
                        .')'
                        .'|/([^/]++)/update\\-score(*:447)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        194 => [[['_route' => 'app_questions', '_controller' => 'App\\Controller\\QuestionsController::index'], ['quizId'], null, null, false, true, null]],
        209 => [[['_route' => 'app_questions_add', '_controller' => 'App\\Controller\\QuestionsController::addQuestion'], ['quizId'], null, null, false, false, null]],
        230 => [[['_route' => 'app_questions_edit', '_controller' => 'App\\Controller\\QuestionsController::editQuestion'], ['quizId', 'questionId'], null, null, false, true, null]],
        253 => [[['_route' => 'app_questions_delete', '_controller' => 'App\\Controller\\QuestionsController::deleteQuestion'], ['quizId', 'questionId'], null, null, false, true, null]],
        289 => [[['_route' => 'app_question_answers', '_controller' => 'App\\Controller\\QuestionsController::showAnswers'], ['quizId', 'questionId'], null, null, false, false, null]],
        304 => [[['_route' => 'app_question_answers_add', '_controller' => 'App\\Controller\\QuestionsController::addAnswer'], ['quizId', 'questionId'], null, null, false, false, null]],
        328 => [[['_route' => 'app_answers_edit', '_controller' => 'App\\Controller\\QuestionsController::editAnswer'], ['quizId', 'questionId', 'answerId'], null, null, false, false, null]],
        342 => [[['_route' => 'app_answers_delete', '_controller' => 'App\\Controller\\QuestionsController::deleteAnswer'], ['quizId', 'questionId', 'answerId'], null, null, false, false, null]],
        377 => [[['_route' => 'app_quizs_pdf', '_controller' => 'App\\Controller\\QuizsController::pdf'], ['id'], null, null, false, false, null]],
        389 => [[['_route' => 'app_quizs_open', '_controller' => 'App\\Controller\\QuizsController::open'], ['id'], null, null, false, false, null]],
        401 => [[['_route' => 'app_quizs_edit', '_controller' => 'App\\Controller\\QuizsController::edit'], ['id'], null, null, false, false, null]],
        415 => [[['_route' => 'app_quizs_delete', '_controller' => 'App\\Controller\\QuizsController::delete'], ['id'], null, null, false, false, null]],
        447 => [
            [['_route' => 'update_quiz_score', '_controller' => 'App\\Controller\\QuizsController::updateQuizScore'], ['quizId'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
