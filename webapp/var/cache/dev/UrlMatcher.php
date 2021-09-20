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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/api/v4/contests' => [
            [['_route' => 'app_api_contest_addcontest', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ContestController::addContestAction'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'app_api_contest_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ContestController::listAction'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/v4/version' => [[['_route' => 'app_api_generalinfo_getversion', '_format' => 'json', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getVersionAction'], null, ['GET' => 0], null, false, false, null]],
        '/api/v4/info' => [[['_route' => 'app_api_generalinfo_getinfo', '_format' => 'json', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getInfoAction'], null, ['GET' => 0], null, false, false, null]],
        '/api/v4' => [[['_route' => 'api_root', '_format' => 'json', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getInfoAction'], null, ['GET' => 0], null, false, false, null]],
        '/api/v4/status' => [[['_route' => 'app_api_generalinfo_getstatus', '_format' => 'json', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getStatusAction'], null, ['GET' => 0], null, false, false, null]],
        '/api/v4/user' => [[['_route' => 'app_api_generalinfo_getuser', '_format' => 'json', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getUserAction'], null, ['GET' => 0], null, false, false, null]],
        '/api/v4/config' => [
            [['_route' => 'app_api_generalinfo_getdatabaseconfiguration', '_format' => 'json', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getDatabaseConfigurationAction'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_api_generalinfo_updateconfiguration', '_format' => 'json', '_controller' => 'App\\Controller\\API\\GeneralInfoController::updateConfigurationAction'], null, ['PUT' => 0], null, false, false, null],
        ],
        '/api/v4/config/check' => [[['_route' => 'app_api_generalinfo_getconfigcheck', '_format' => 'json', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getConfigCheckAction'], null, ['GET' => 0], null, false, false, null]],
        '/api/v4/judgehosts' => [
            [['_route' => 'app_api_judgehost_getjudgehosts', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgehostController::getJudgehostsAction'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_api_judgehost_createjudgehost', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgehostController::createJudgehostAction'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v4/users/groups' => [[['_route' => 'app_api_user_addgroups', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::addGroupsAction'], null, ['POST' => 0], null, false, false, null]],
        '/api/v4/users/organizations' => [[['_route' => 'app_api_user_addorganizations', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::addOrganizationsAction'], null, ['POST' => 0], null, false, false, null]],
        '/api/v4/users/teams' => [[['_route' => 'app_api_user_addteams', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::addTeamsAction'], null, ['POST' => 0], null, false, false, null]],
        '/api/v4/users/accounts' => [[['_route' => 'app_api_user_addaccounts', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::addAccountsAction'], null, ['POST' => 0], null, false, false, null]],
        '/api/v4/users' => [[['_route' => 'app_api_user_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::listAction'], null, ['GET' => 0], null, false, false, null]],
        '/jury/analysis' => [[['_route' => 'analysis_index', '_controller' => 'App\\Controller\\Jury\\AnalysisController::indexAction'], null, null, null, false, false, null]],
        '/jury/auditlog' => [[['_route' => 'jury_auditlog', '_controller' => 'App\\Controller\\Jury\\AuditLogController::indexAction'], null, null, null, false, false, null]],
        '/jury/balloons' => [[['_route' => 'jury_balloons', '_controller' => 'App\\Controller\\Jury\\BalloonController::indexAction'], null, null, null, false, false, null]],
        '/jury/clarifications' => [[['_route' => 'jury_clarifications', '_controller' => 'App\\Controller\\Jury\\ClarificationController::indexAction'], null, null, null, false, false, null]],
        '/jury/clarifications/send' => [
            [['_route' => 'jury_clarification_new', '_controller' => 'App\\Controller\\Jury\\ClarificationController::composeClarificationAction'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'jury_clarification_send', '_controller' => 'App\\Controller\\Jury\\ClarificationController::sendAction'], null, ['POST' => 0], null, false, false, null],
        ],
        '/jury/config' => [[['_route' => 'jury_config', '_controller' => 'App\\Controller\\Jury\\ConfigController::indexAction'], null, null, null, false, false, null]],
        '/jury/config/check' => [[['_route' => 'jury_config_check', '_controller' => 'App\\Controller\\Jury\\ConfigController::checkAction'], null, null, null, false, false, null]],
        '/jury/config/check/phpinfo' => [[['_route' => 'jury_config_phpinfo', '_controller' => 'App\\Controller\\Jury\\ConfigController::phpinfoAction'], null, null, null, false, false, null]],
        '/jury/contests' => [[['_route' => 'jury_contests', '_controller' => 'App\\Controller\\Jury\\ContestController::indexAction'], null, null, null, false, false, null]],
        '/jury/contests/add' => [[['_route' => 'jury_contest_add', '_controller' => 'App\\Controller\\Jury\\ContestController::addAction'], null, null, null, false, false, null]],
        '/jury/executables' => [[['_route' => 'jury_executables', '_controller' => 'App\\Controller\\Jury\\ExecutableController::indexAction'], null, null, null, false, false, null]],
        '/jury/import-export' => [[['_route' => 'jury_import_export', '_controller' => 'App\\Controller\\Jury\\ImportExportController::indexAction'], null, null, null, false, false, null]],
        '/jury/import-export/contest-yaml' => [[['_route' => 'jury_import_export_yaml', '_controller' => 'App\\Controller\\Jury\\ImportExportController::contestYamlAction'], null, null, null, false, false, null]],
        '/jury/internal-errors' => [[['_route' => 'jury_internal_errors', '_controller' => 'App\\Controller\\Jury\\InternalErrorController::indexAction'], null, null, null, false, false, null]],
        '/jury/judgehosts' => [[['_route' => 'jury_judgehosts', '_controller' => 'App\\Controller\\Jury\\JudgehostController::indexAction'], null, null, null, false, false, null]],
        '/jury/judgehosts/add/multiple' => [[['_route' => 'jury_judgehost_add', '_controller' => 'App\\Controller\\Jury\\JudgehostController::addMultipleAction'], null, null, null, false, false, null]],
        '/jury/judgehosts/edit/multiple' => [[['_route' => 'jury_judgehost_edit', '_controller' => 'App\\Controller\\Jury\\JudgehostController::editMultipleAction'], null, null, null, false, false, null]],
        '/jury/judgehost-restrictions' => [[['_route' => 'jury_judgehost_restrictions', '_controller' => 'App\\Controller\\Jury\\JudgehostRestrictionController::indexAction'], null, null, null, false, false, null]],
        '/jury/judgehost-restrictions/add' => [[['_route' => 'jury_judgehost_restriction_add', '_controller' => 'App\\Controller\\Jury\\JudgehostRestrictionController::addAction'], null, null, null, false, false, null]],
        '/jury' => [[['_route' => 'jury_index', '_controller' => 'App\\Controller\\Jury\\JuryMiscController::indexAction'], null, null, null, false, false, null]],
        '/jury/updates' => [[['_route' => 'jury_ajax_updates', '_controller' => 'App\\Controller\\Jury\\JuryMiscController::updatesAction'], null, ['GET' => 0], null, false, false, null]],
        '/jury/refresh-cache' => [[['_route' => 'jury_refresh_cache', '_controller' => 'App\\Controller\\Jury\\JuryMiscController::refreshCacheAction'], null, null, null, false, false, null]],
        '/jury/judging-verifier' => [[['_route' => 'jury_judging_verifier', '_controller' => 'App\\Controller\\Jury\\JuryMiscController::judgingVerifierAction'], null, null, null, false, false, null]],
        '/jury/languages' => [[['_route' => 'jury_languages', '_controller' => 'App\\Controller\\Jury\\LanguageController::indexAction'], null, null, null, false, false, null]],
        '/jury/languages/add' => [[['_route' => 'jury_language_add', '_controller' => 'App\\Controller\\Jury\\LanguageController::addAction'], null, null, null, false, false, null]],
        '/jury/print' => [[['_route' => 'jury_print', '_controller' => 'App\\Controller\\Jury\\PrintController::showAction'], null, null, null, false, false, null]],
        '/jury/problems' => [[['_route' => 'jury_problems', '_controller' => 'App\\Controller\\Jury\\ProblemController::indexAction'], null, null, null, false, false, null]],
        '/jury/problems/add' => [[['_route' => 'jury_problem_add', '_controller' => 'App\\Controller\\Jury\\ProblemController::addAction'], null, null, null, false, false, null]],
        '/jury/rejudgings' => [[['_route' => 'jury_rejudgings', '_controller' => 'App\\Controller\\Jury\\RejudgingController::indexAction'], null, null, null, false, false, null]],
        '/jury/rejudgings/add' => [[['_route' => 'jury_rejudging_add', '_controller' => 'App\\Controller\\Jury\\RejudgingController::addAction'], null, null, null, false, false, null]],
        '/jury/rejudgings/create' => [[['_route' => 'jury_create_rejudge', '_controller' => 'App\\Controller\\Jury\\RejudgingController::createAction'], null, ['POST' => 0], null, false, false, null]],
        '/jury/scoreboard' => [[['_route' => 'jury_scoreboard', '_controller' => 'App\\Controller\\Jury\\ScoreboardController::scoreboardAction'], null, null, null, false, false, null]],
        '/jury/shadow-differences' => [[['_route' => 'jury_shadow_differences', '_controller' => 'App\\Controller\\Jury\\ShadowDifferencesController::indexAction'], null, null, null, false, false, null]],
        '/jury/submissions' => [[['_route' => 'jury_submissions', '_controller' => 'App\\Controller\\Jury\\SubmissionController::indexAction'], null, null, null, false, false, null]],
        '/jury/affiliations' => [[['_route' => 'jury_team_affiliations', '_controller' => 'App\\Controller\\Jury\\TeamAffiliationController::indexAction'], null, null, null, false, false, null]],
        '/jury/affiliations/add' => [[['_route' => 'jury_team_affiliation_add', '_controller' => 'App\\Controller\\Jury\\TeamAffiliationController::addAction'], null, null, null, false, false, null]],
        '/jury/categories' => [[['_route' => 'jury_team_categories', '_controller' => 'App\\Controller\\Jury\\TeamCategoryController::indexAction'], null, null, null, false, false, null]],
        '/jury/categories/add' => [[['_route' => 'jury_team_category_add', '_controller' => 'App\\Controller\\Jury\\TeamCategoryController::addAction'], null, null, null, false, false, null]],
        '/jury/teams' => [[['_route' => 'jury_teams', '_controller' => 'App\\Controller\\Jury\\TeamController::indexAction'], null, null, null, false, false, null]],
        '/jury/teams/add' => [[['_route' => 'jury_team_add', '_controller' => 'App\\Controller\\Jury\\TeamController::addAction'], null, null, null, false, false, null]],
        '/jury/users' => [[['_route' => 'jury_users', '_controller' => 'App\\Controller\\Jury\\UserController::indexAction'], null, null, null, false, false, null]],
        '/jury/users/add' => [[['_route' => 'jury_user_add', '_controller' => 'App\\Controller\\Jury\\UserController::addAction'], null, null, null, false, false, null]],
        '/jury/users/generate-passwords' => [[['_route' => 'jury_generate_passwords', '_controller' => 'App\\Controller\\Jury\\UserController::generatePasswordsAction'], null, null, null, false, false, null]],
        '/public' => [[['_route' => 'public_index', '_controller' => 'App\\Controller\\PublicController::scoreboardAction'], null, null, null, false, false, null]],
        '/public/problems' => [[['_route' => 'public_problems', '_controller' => 'App\\Controller\\PublicController::problemsAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'root', '_controller' => 'App\\Controller\\RootController::redirectAction'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::loginAction'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\SecurityController::registerAction'], null, null, null, false, false, null]],
        '/team/clarifications/add' => [[['_route' => 'team_clarification_add', '_controller' => 'App\\Controller\\Team\\ClarificationController::addAction'], null, null, null, false, false, null]],
        '/team' => [[['_route' => 'team_index', '_controller' => 'App\\Controller\\Team\\MiscController::homeAction'], null, null, null, false, false, null]],
        '/team/print' => [[['_route' => 'team_print', '_controller' => 'App\\Controller\\Team\\MiscController::printAction'], null, null, null, false, false, null]],
        '/team/problems' => [[['_route' => 'team_problems', '_controller' => 'App\\Controller\\Team\\ProblemController::problemsAction'], null, null, null, false, false, null]],
        '/team/scoreboard' => [[['_route' => 'team_scoreboard', '_controller' => 'App\\Controller\\Team\\ScoreboardController::scoreboardAction'], null, null, null, false, false, null]],
        '/team/submit' => [[['_route' => 'team_submit', '_controller' => 'App\\Controller\\Team\\SubmissionController::createAction'], null, null, null, false, false, null]],
        '/api/doc.json' => [[['_route' => 'app.swagger', '_controller' => 'nelmio_api_doc.controller.swagger'], null, ['GET' => 0], null, false, false, null]],
        '/api/doc' => [[['_route' => 'app.swagger_ui', '_controller' => 'nelmio_api_doc.controller.swagger_ui'], null, ['GET' => 0], null, false, false, null]],
        '/logout' => [[['_route' => 'logout'], null, null, null, false, false, null]],
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
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/api(?'
                    .'|/(?'
                        .'|v(?'
                            .'|4/(?'
                                .'|contests/([^/]++)(?'
                                    .'|/(?'
                                        .'|awards(?'
                                            .'|(*:222)'
                                            .'|/([^/]++)(*:239)'
                                        .')'
                                        .'|balloons(*:256)'
                                        .'|c(?'
                                            .'|larifications(?'
                                                .'|(*:284)'
                                                .'|/([^/]++)(*:301)'
                                            .')'
                                            .'|ontest\\-yaml(*:322)'
                                        .')'
                                        .'|s(?'
                                            .'|tat(?'
                                                .'|e(*:342)'
                                                .'|us(*:352)'
                                            .')'
                                            .'|coreboard(*:370)'
                                            .'|ubmissions(?'
                                                .'|(*:391)'
                                                .'|/([^/]++)(?'
                                                    .'|(*:411)'
                                                    .'|/(?'
                                                        .'|files(*:428)'
                                                        .'|source\\-code(*:448)'
                                                    .')'
                                                .')'
                                                .'|(*:458)'
                                            .')'
                                        .')'
                                        .'|event\\-feed(*:479)'
                                        .'|groups(?'
                                            .'|(*:496)'
                                            .'|/([^/]++)(*:513)'
                                        .')'
                                        .'|judgement(?'
                                            .'|s(?'
                                                .'|(*:538)'
                                                .'|/([^/]++)(*:555)'
                                            .')'
                                            .'|\\-types(?'
                                                .'|(*:574)'
                                                .'|/([^/]++)(*:591)'
                                            .')'
                                        .')'
                                        .'|languages(?'
                                            .'|(*:613)'
                                            .'|/([^/]++)(*:630)'
                                        .')'
                                        .'|organizations(?'
                                            .'|(*:655)'
                                            .'|/([^/]++)(*:672)'
                                        .')'
                                        .'|problems(?'
                                            .'|(*:692)'
                                            .'|/([^/]++)(*:709)'
                                        .')'
                                        .'|runs(?'
                                            .'|(*:725)'
                                            .'|/([^/]++)(*:742)'
                                        .')'
                                        .'|teams(?'
                                            .'|(*:759)'
                                            .'|/([^/]++)(*:776)'
                                        .')'
                                    .')'
                                    .'|(*:786)'
                                .')'
                                .'|executables/([^/]++)(*:815)'
                                .'|judgehosts/(?'
                                    .'|([^/]++)(*:845)'
                                    .'|next\\-judging/([^/]++)(*:875)'
                                    .'|update\\-judging/([^/]++)/(\\d+)(*:913)'
                                    .'|add\\-judging\\-run/([^/]++)/(\\d+)(*:953)'
                                    .'|internal\\-error(*:976)'
                                .')'
                                .'|testcases/(?'
                                    .'|next\\-to\\-judge/([^/]++)(*:1022)'
                                    .'|([^/]++)/file/([^/]++)(*:1053)'
                                .')'
                                .'|users/([^/]++)(*:1077)'
                            .')'
                            .'|ersion(?:\\.(json|xml|html))?(*:1115)'
                        .')'
                        .'|con(?'
                            .'|tests(?'
                                .'|/([^/]++)/(?'
                                    .'|awards(?'
                                        .'|(?:\\.(json|xml|html))?(*:1183)'
                                        .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:1225)'
                                    .')'
                                    .'|balloons(?:\\.(json|xml|html))?(*:1265)'
                                    .'|clarifications(?'
                                        .'|(?:\\.(json|xml|html))?(*:1313)'
                                        .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:1355)'
                                    .')'
                                .')'
                                .'|(?:\\.(json|xml|html))?(?'
                                    .'|(*:1391)'
                                .')'
                                .'|/(?'
                                    .'|([^/\\.]++)(?:\\.(json|xml|html))?(?'
                                        .'|(*:1440)'
                                    .')'
                                    .'|([^/]++)/(?'
                                        .'|contest\\-yaml(?:\\.(json|xml|html))?(*:1497)'
                                        .'|stat(?'
                                            .'|e(?:\\.(json|xml|html))?(*:1536)'
                                            .'|us(?:\\.(json|xml|html))?(*:1569)'
                                        .')'
                                        .'|event\\-feed(?:\\.(json|xml|html))?(*:1612)'
                                    .')'
                                .')'
                            .')'
                            .'|fig(?:\\.(json|xml|html))?(*:1649)'
                        .')'
                        .'|executables/([^/\\.]++)(?:\\.(json|xml|html))?(*:1703)'
                        .'|info(?:\\.(json|xml|html))?(*:1738)'
                    .')'
                    .'|(?:\\.(json|xml|html))?(*:1770)'
                    .'|/(?'
                        .'|status(?:\\.(json|xml|html))?(*:1811)'
                        .'|user(?'
                            .'|(?:\\.(json|xml|html))?(*:1849)'
                            .'|s(?'
                                .'|/(?'
                                    .'|groups(?:\\.(json|xml|html))?(*:1894)'
                                    .'|organizations(?:\\.(json|xml|html))?(*:1938)'
                                    .'|teams(?:\\.(json|xml|html))?(*:1974)'
                                    .'|accounts(?:\\.(json|xml|html))?(*:2013)'
                                .')'
                                .'|(?:\\.(json|xml|html))?(*:2045)'
                                .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:2087)'
                            .')'
                        .')'
                        .'|con(?'
                            .'|fig(?'
                                .'|(?:\\.(json|xml|html))?(*:2132)'
                                .'|/check(?:\\.(json|xml|html))?(*:2169)'
                            .')'
                            .'|tests/([^/]++)/(?'
                                .'|groups(?'
                                    .'|(?:\\.(json|xml|html))?(*:2228)'
                                    .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:2270)'
                                .')'
                                .'|judgement(?'
                                    .'|s(?'
                                        .'|(?:\\.(json|xml|html))?(*:2318)'
                                        .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:2360)'
                                    .')'
                                    .'|\\-types(?'
                                        .'|(?:\\.(json|xml|html))?(*:2402)'
                                        .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:2444)'
                                    .')'
                                .')'
                                .'|languages(?'
                                    .'|(?:\\.(json|xml|html))?(*:2489)'
                                    .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:2531)'
                                .')'
                                .'|organizations(?'
                                    .'|(?:\\.(json|xml|html))?(*:2579)'
                                    .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:2621)'
                                .')'
                                .'|problems(?'
                                    .'|(?:\\.(json|xml|html))?(?'
                                        .'|(*:2667)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:2710)'
                                .')'
                                .'|runs(?'
                                    .'|(?:\\.(json|xml|html))?(*:2749)'
                                    .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:2791)'
                                .')'
                                .'|s(?'
                                    .'|coreboard(?:\\.(json|xml|html))?(*:2836)'
                                    .'|ubmissions(?'
                                        .'|(?:\\.(json|xml|html))?(*:2880)'
                                        .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:2922)'
                                        .'|(?:\\.(json|xml|html))?(*:2953)'
                                        .'|/([^/]++)/(?'
                                            .'|files(?:\\.(json|xml|html))?(*:3002)'
                                            .'|source\\-code(?:\\.(json|xml|html))?(*:3045)'
                                        .')'
                                    .')'
                                .')'
                                .'|teams(?'
                                    .'|(?:\\.(json|xml|html))?(*:3087)'
                                    .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:3129)'
                                .')'
                            .')'
                        .')'
                        .'|judgehosts(?'
                            .'|(?:\\.(json|xml|html))?(*:3176)'
                            .'|/(?'
                                .'|([^/\\.]++)(?:\\.(json|xml|html))?(*:3221)'
                                .'|update\\-judging/([^/]++)/(\\d+)(?:\\.(json|xml|html))?(*:3282)'
                                .'|add\\-judging\\-run/([^/]++)/(\\d+)(?:\\.(json|xml|html))?(*:3345)'
                                .'|internal\\-error(?:\\.(json|xml|html))?(*:3391)'
                            .')'
                            .'|(?:\\.(json|xml|html))?(*:3423)'
                            .'|/next\\-judging/([^/\\.]++)(?:\\.(json|xml|html))?(*:3479)'
                        .')'
                        .'|testcases/(?'
                            .'|next\\-to\\-judge/([^/\\.]++)(?:\\.(json|xml|html))?(*:3550)'
                            .'|([^/]++)/file/([^/\\.]++)(?:\\.(json|xml|html))?(*:3605)'
                        .')'
                    .')'
                .')'
                .'|/jury/(?'
                    .'|a(?'
                        .'|nalysis/(?'
                            .'|team/([^/]++)(*:3654)'
                            .'|problem/([^/]++)(*:3679)'
                        .')'
                        .'|jax/([^/]++)(*:3701)'
                        .'|ffiliations/(?'
                            .'|(\\d+)(*:3730)'
                            .'|(\\d+)/edit(*:3749)'
                            .'|(\\d+)/delete(*:3770)'
                        .')'
                    .')'
                    .'|balloons/([^/]++)/done(*:3803)'
                    .'|c(?'
                        .'|larifications/(?'
                            .'|(\\d+)(*:3838)'
                            .'|(\\d+)/claim(*:3858)'
                            .'|(\\d+)/set\\-answered(*:3886)'
                            .'|(\\d+)/change\\-subject(*:3916)'
                            .'|(\\d+)/change\\-queue(*:3944)'
                        .')'
                        .'|ontests/(?'
                            .'|(\\d+)(*:3970)'
                            .'|(\\d+)/remove\\-interval/([^/]++)(*:4010)'
                            .'|(\\d+)/edit(*:4029)'
                            .'|(\\d+)/delete(*:4050)'
                            .'|(\\d+)/problems/(\\d+)/delete(*:4086)'
                            .'|(\\d+)/finalize(*:4109)'
                        .')'
                        .'|hange\\-contest/(-?\\d+)(*:4141)'
                        .'|ategories/(?'
                            .'|(\\d+)(*:4168)'
                            .'|(\\d+)/edit(*:4187)'
                            .'|(\\d+)/delete(*:4208)'
                        .')'
                    .')'
                    .'|executables/([^/]++)(?'
                        .'|(*:4242)'
                        .'|/(?'
                            .'|content(*:4262)'
                            .'|d(?'
                                .'|ownload(?'
                                    .'|(*:4285)'
                                    .'|/([^/]++)(*:4303)'
                                .')'
                                .'|elete(*:4318)'
                            .')'
                            .'|edit(?'
                                .'|(*:4335)'
                                .'|\\-files(*:4351)'
                            .')'
                        .')'
                    .')'
                    .'|i(?'
                        .'|mport\\-export/export/(?'
                            .'|(groups|teams|scoreboard|results)\\.tsv(*:4429)'
                            .'|(results|results-icpc|clarifications)\\.html(*:4481)'
                        .')'
                        .'|nternal\\-errors/(?'
                            .'|(\\d+)(*:4515)'
                            .'|(\\d+)/(ignore|resolve)(*:4546)'
                        .')'
                    .')'
                    .'|judgehost(?'
                        .'|s/(?'
                            .'|([^/]++)(?'
                                .'|(*:4585)'
                                .'|/(?'
                                    .'|de(?'
                                        .'|lete(*:4607)'
                                        .'|activate(*:4624)'
                                    .')'
                                    .'|activate(*:4642)'
                                .')'
                            .')'
                            .'|activate\\-all(*:4666)'
                            .'|deactivate\\-all(*:4690)'
                        .')'
                        .'|\\-restrictions/(?'
                            .'|(\\d+)(*:4723)'
                            .'|(\\d+)/edit(*:4742)'
                            .'|(\\d+)/delete(*:4763)'
                        .')'
                    .')'
                    .'|languages/([^/]++)(?'
                        .'|(*:4795)'
                        .'|/(?'
                            .'|toggle\\-(?'
                                .'|submit(*:4825)'
                                .'|judge(*:4839)'
                            .')'
                            .'|edit(*:4853)'
                            .'|delete(*:4868)'
                        .')'
                    .')'
                    .'|problems/(?'
                        .'|(\\d+)/export(*:4903)'
                        .'|(\\d+)(*:4917)'
                        .'|(\\d+)/text(*:4936)'
                        .'|(\\d+)/testcases(*:4960)'
                        .'|(\\d+)/testcases/(\\d+)/move/(up|down)(*:5005)'
                        .'|(\\d+)/testcases/(\\d+)/fetch/(input|output|image)(*:5062)'
                        .'|(\\d+)/edit(*:5081)'
                        .'|(\\d+)/delete(*:5102)'
                        .'|(\\d+)/delete_testcase(*:5132)'
                    .')'
                    .'|rejudgings/(?'
                        .'|(\\d+)(*:5161)'
                        .'|(\\d+)/(cancel|apply)(*:5190)'
                    .')'
                    .'|submissions/(?'
                        .'|(\\d+)(*:5220)'
                        .'|by\\-(?'
                            .'|judging\\-id/([^/]++)(*:5256)'
                            .'|external\\-(?'
                                .'|judgement\\-id/([^/]++)(*:5300)'
                                .'|id/([^/]++)(*:5320)'
                            .')'
                        .')'
                        .'|([^/]++)/(?'
                            .'|runs/([^/]++)/([^/]++)/team\\-output(*:5378)'
                            .'|source(*:5393)'
                            .'|edit\\-source(*:5414)'
                        .')'
                        .'|(\\d+)/update\\-status(*:5444)'
                        .'|(\\d+)/verify(*:5465)'
                        .'|shadow\\-difference/(\\d+)/verify(*:5505)'
                    .')'
                    .'|teams/(?'
                        .'|(\\d+)(*:5529)'
                        .'|(\\d+)/edit(*:5548)'
                        .'|(\\d+)/delete(*:5569)'
                    .')'
                    .'|users/(?'
                        .'|(\\d+)(*:5593)'
                        .'|(\\d+)/edit(*:5612)'
                        .'|(\\d+)/delete(*:5633)'
                    .')'
                .')'
                .'|/public/(?'
                    .'|change\\-contest/(-?\\d+)(*:5678)'
                    .'|team/(\\d+)(*:5697)'
                    .'|problems/(\\d+)/text(*:5725)'
                    .'|(\\d+)/sample/(\\d+)/(input|output)(*:5767)'
                    .'|(\\d+)/samples\\.zip(*:5794)'
                .')'
                .'|/team/(?'
                    .'|c(?'
                        .'|larifications/(\\d+)(*:5836)'
                        .'|hange\\-contest/(-?\\d+)(*:5867)'
                    .')'
                    .'|problems/(\\d+)/text(*:5896)'
                    .'|(\\d+)/sample/(\\d+)/(input|output)(*:5938)'
                    .'|(\\d+)/samples\\.zip(*:5965)'
                    .'|team/(\\d+)(*:5984)'
                    .'|submission/(?'
                        .'|(\\d+)(*:6012)'
                        .'|(\\d+)/download(*:6035)'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        222 => [[['_route' => 'app_api_awards_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\AwardsController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        239 => [[['_route' => 'app_api_awards_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\AwardsController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        256 => [[['_route' => 'app_api_balloon_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\BalloonController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        284 => [[['_route' => 'app_api_clarification_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ClarificationController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        301 => [[['_route' => 'app_api_clarification_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ClarificationController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        322 => [[['_route' => 'app_api_contest_getcontestyaml', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ContestController::getContestYamlAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        342 => [[['_route' => 'app_api_contest_getconteststate', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ContestController::getContestStateAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        352 => [[['_route' => 'app_api_contest_getstatus', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ContestController::getStatusAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        370 => [[['_route' => 'app_api_scoreboard_getscoreboard', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ScoreboardController::getScoreboardAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        391 => [[['_route' => 'app_api_submission_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\SubmissionController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        411 => [[['_route' => 'app_api_submission_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\SubmissionController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        428 => [[['_route' => 'submission_files', '_format' => 'json', '_controller' => 'App\\Controller\\API\\SubmissionController::getSubmissionFilesAction'], ['cid', 'id'], ['GET' => 0], null, false, false, null]],
        448 => [[['_route' => 'app_api_submission_getsubmissionsourcecode', '_format' => 'json', '_controller' => 'App\\Controller\\API\\SubmissionController::getSubmissionSourceCodeAction'], ['cid', 'id'], ['GET' => 0], null, false, false, null]],
        458 => [[['_route' => 'app_api_submission_addsubmission', '_format' => 'json', '_controller' => 'App\\Controller\\API\\SubmissionController::addSubmissionAction'], ['cid'], ['POST' => 0], null, false, false, null]],
        479 => [[['_route' => 'app_api_contest_geteventfeed', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ContestController::getEventFeedAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        496 => [[['_route' => 'app_api_group_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\GroupController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        513 => [[['_route' => 'app_api_group_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\GroupController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        538 => [[['_route' => 'app_api_judgement_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgementController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        555 => [[['_route' => 'app_api_judgement_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgementController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        574 => [[['_route' => 'app_api_judgementtype_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgementTypeController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        591 => [[['_route' => 'app_api_judgementtype_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgementTypeController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        613 => [[['_route' => 'app_api_language_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\LanguageController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        630 => [[['_route' => 'app_api_language_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\LanguageController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        655 => [[['_route' => 'app_api_organization_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\OrganizationController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        672 => [[['_route' => 'app_api_organization_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\OrganizationController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        692 => [
            [['_route' => 'app_api_problem_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ProblemController::listAction'], ['cid'], ['GET' => 0], null, false, false, null],
            [['_route' => 'app_api_problem_addproblem', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ProblemController::addProblemAction'], ['cid'], ['POST' => 0], null, false, false, null],
        ],
        709 => [[['_route' => 'app_api_problem_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ProblemController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        725 => [[['_route' => 'app_api_run_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\RunController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        742 => [[['_route' => 'app_api_run_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\RunController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        759 => [[['_route' => 'app_api_team_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\TeamController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        776 => [[['_route' => 'app_api_team_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\TeamController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        786 => [
            [['_route' => 'app_api_contest_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ContestController::singleAction'], ['cid'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_api_contest_changestarttime', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ContestController::changeStartTimeAction'], ['cid'], ['PATCH' => 0], null, false, true, null],
        ],
        815 => [[['_route' => 'app_api_executable_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ExecutableController::singleAction'], ['id'], ['GET' => 0], null, false, true, null]],
        845 => [[['_route' => 'app_api_judgehost_updatejudgehost', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgehostController::updateJudgeHostAction'], ['hostname'], ['PUT' => 0], null, false, true, null]],
        875 => [[['_route' => 'app_api_judgehost_getnextjudging', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgehostController::getNextJudgingAction'], ['hostname'], ['POST' => 0], null, false, true, null]],
        913 => [[['_route' => 'app_api_judgehost_updatejudging', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgehostController::updateJudgingAction'], ['hostname', 'judgingId'], ['PUT' => 0], null, false, true, null]],
        953 => [[['_route' => 'app_api_judgehost_addjudgingrun', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgehostController::addJudgingRunAction'], ['hostname', 'judgingId'], ['POST' => 0], null, false, true, null]],
        976 => [[['_route' => 'app_api_judgehost_internalerror', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgehostController::internalErrorAction'], [], ['POST' => 0], null, false, false, null]],
        1022 => [[['_route' => 'app_api_testcase_getnexttojudge', '_format' => 'json', '_controller' => 'App\\Controller\\API\\TestcaseController::getNextToJudgeAction'], ['id'], ['GET' => 0], null, false, true, null]],
        1053 => [[['_route' => 'app_api_testcase_getfile', '_format' => 'json', '_controller' => 'App\\Controller\\API\\TestcaseController::getFileAction'], ['id', 'type'], ['GET' => 0], null, false, true, null]],
        1077 => [[['_route' => 'app_api_user_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::singleAction'], ['id'], ['GET' => 0], null, false, true, null]],
        1115 => [[['_route' => 'general_get_version', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getVersionAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        1183 => [[['_route' => 'awards_list', '_controller' => 'App\\Controller\\API\\AwardsController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        1225 => [[['_route' => 'awards_single', '_controller' => 'App\\Controller\\API\\AwardsController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        1265 => [[['_route' => 'balloons_list', '_controller' => 'App\\Controller\\API\\BalloonController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        1313 => [[['_route' => 'clarification_list', '_controller' => 'App\\Controller\\API\\ClarificationController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        1355 => [[['_route' => 'clarification_single', '_controller' => 'App\\Controller\\API\\ClarificationController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        1391 => [
            [['_route' => 'contest_add_contest', '_controller' => 'App\\Controller\\API\\ContestController::addContestAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null],
            [['_route' => 'contest_list', '_controller' => 'App\\Controller\\API\\ContestController::listAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null],
        ],
        1440 => [
            [['_route' => 'contest_single', '_controller' => 'App\\Controller\\API\\ContestController::singleAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'contest_change_start_time', '_controller' => 'App\\Controller\\API\\ContestController::changeStartTimeAction', '_format' => 'json'], ['cid', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1497 => [[['_route' => 'contest_get_contest_yaml', '_controller' => 'App\\Controller\\API\\ContestController::getContestYamlAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        1536 => [[['_route' => 'contest_get_contest_state', '_controller' => 'App\\Controller\\API\\ContestController::getContestStateAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        1569 => [[['_route' => 'contest_get_status', '_controller' => 'App\\Controller\\API\\ContestController::getStatusAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        1612 => [[['_route' => 'contest_get_event_feed', '_controller' => 'App\\Controller\\API\\ContestController::getEventFeedAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        1649 => [[['_route' => 'general_update_configuration', '_controller' => 'App\\Controller\\API\\GeneralInfoController::updateConfigurationAction', '_format' => 'json'], ['_format'], ['PUT' => 0], null, false, true, null]],
        1703 => [[['_route' => 'executable_single', '_controller' => 'App\\Controller\\API\\ExecutableController::singleAction', '_format' => 'json'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1738 => [[['_route' => 'general_get_info', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getInfoAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        1770 => [[['_route' => 'general_get_infoapi_root', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getInfoAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        1811 => [[['_route' => 'general_get_status', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getStatusAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        1849 => [[['_route' => 'general_get_user', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getUserAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        1894 => [[['_route' => 'user_add_groups', '_controller' => 'App\\Controller\\API\\UserController::addGroupsAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null]],
        1938 => [[['_route' => 'user_add_organizations', '_controller' => 'App\\Controller\\API\\UserController::addOrganizationsAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null]],
        1974 => [[['_route' => 'user_add_teams', '_controller' => 'App\\Controller\\API\\UserController::addTeamsAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null]],
        2013 => [[['_route' => 'user_add_accounts', '_controller' => 'App\\Controller\\API\\UserController::addAccountsAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null]],
        2045 => [[['_route' => 'user_list', '_controller' => 'App\\Controller\\API\\UserController::listAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        2087 => [[['_route' => 'user_single', '_controller' => 'App\\Controller\\API\\UserController::singleAction', '_format' => 'json'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        2132 => [[['_route' => 'general_get_database_configuration', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getDatabaseConfigurationAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        2169 => [[['_route' => 'general_get_config_check', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getConfigCheckAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        2228 => [[['_route' => 'group_list', '_controller' => 'App\\Controller\\API\\GroupController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        2270 => [[['_route' => 'group_single', '_controller' => 'App\\Controller\\API\\GroupController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2318 => [[['_route' => 'judgement_list', '_controller' => 'App\\Controller\\API\\JudgementController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        2360 => [[['_route' => 'judgement_single', '_controller' => 'App\\Controller\\API\\JudgementController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2402 => [[['_route' => 'judgement_type_list', '_controller' => 'App\\Controller\\API\\JudgementTypeController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        2444 => [[['_route' => 'judgement_type_single', '_controller' => 'App\\Controller\\API\\JudgementTypeController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2489 => [[['_route' => 'language_list', '_controller' => 'App\\Controller\\API\\LanguageController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        2531 => [[['_route' => 'language_single', '_controller' => 'App\\Controller\\API\\LanguageController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2579 => [[['_route' => 'organization_list', '_controller' => 'App\\Controller\\API\\OrganizationController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        2621 => [[['_route' => 'organization_single', '_controller' => 'App\\Controller\\API\\OrganizationController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2667 => [
            [['_route' => 'problems_list', '_controller' => 'App\\Controller\\API\\ProblemController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'problems_add_problem', '_controller' => 'App\\Controller\\API\\ProblemController::addProblemAction', '_format' => 'json'], ['cid', '_format'], ['POST' => 0], null, false, true, null],
        ],
        2710 => [[['_route' => 'problems_single', '_controller' => 'App\\Controller\\API\\ProblemController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2749 => [[['_route' => 'run_list', '_controller' => 'App\\Controller\\API\\RunController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        2791 => [[['_route' => 'run_single', '_controller' => 'App\\Controller\\API\\RunController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2836 => [[['_route' => 'scoreboard_get_scoreboard', '_controller' => 'App\\Controller\\API\\ScoreboardController::getScoreboardAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        2880 => [[['_route' => 'submission_list', '_controller' => 'App\\Controller\\API\\SubmissionController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        2922 => [[['_route' => 'submission_single', '_controller' => 'App\\Controller\\API\\SubmissionController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2953 => [[['_route' => 'submission_add_submission', '_controller' => 'App\\Controller\\API\\SubmissionController::addSubmissionAction', '_format' => 'json'], ['cid', '_format'], ['POST' => 0], null, false, true, null]],
        3002 => [[['_route' => 'submission_get_submission_filessubmission_files', '_controller' => 'App\\Controller\\API\\SubmissionController::getSubmissionFilesAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        3045 => [[['_route' => 'submission_get_submission_source_code', '_controller' => 'App\\Controller\\API\\SubmissionController::getSubmissionSourceCodeAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        3087 => [[['_route' => 'team_list', '_controller' => 'App\\Controller\\API\\TeamController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        3129 => [[['_route' => 'team_single', '_controller' => 'App\\Controller\\API\\TeamController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        3176 => [[['_route' => 'judgehost_create_judgehost', '_controller' => 'App\\Controller\\API\\JudgehostController::createJudgehostAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null]],
        3221 => [[['_route' => 'judgehost_update_judge_host', '_controller' => 'App\\Controller\\API\\JudgehostController::updateJudgeHostAction', '_format' => 'json'], ['hostname', '_format'], ['PUT' => 0], null, false, true, null]],
        3282 => [[['_route' => 'judgehost_update_judging', '_controller' => 'App\\Controller\\API\\JudgehostController::updateJudgingAction', '_format' => 'json'], ['hostname', 'judgingId', '_format'], ['PUT' => 0], null, false, true, null]],
        3345 => [[['_route' => 'judgehost_add_judging_run', '_controller' => 'App\\Controller\\API\\JudgehostController::addJudgingRunAction', '_format' => 'json'], ['hostname', 'judgingId', '_format'], ['POST' => 0], null, false, true, null]],
        3391 => [[['_route' => 'judgehost_internal_error', '_controller' => 'App\\Controller\\API\\JudgehostController::internalErrorAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null]],
        3423 => [[['_route' => 'judgehost_get_judgehosts', '_controller' => 'App\\Controller\\API\\JudgehostController::getJudgehostsAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        3479 => [[['_route' => 'judgehost_get_next_judging', '_controller' => 'App\\Controller\\API\\JudgehostController::getNextJudgingAction', '_format' => 'json'], ['hostname', '_format'], ['POST' => 0], null, false, true, null]],
        3550 => [[['_route' => 'testcase_get_next_to_judge', '_controller' => 'App\\Controller\\API\\TestcaseController::getNextToJudgeAction', '_format' => 'json'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        3605 => [[['_route' => 'testcase_get_file', '_controller' => 'App\\Controller\\API\\TestcaseController::getFileAction', '_format' => 'json'], ['id', 'type', '_format'], ['GET' => 0], null, false, true, null]],
        3654 => [[['_route' => 'analysis_team', '_controller' => 'App\\Controller\\Jury\\AnalysisController::teamAction'], ['teamid'], null, null, false, true, null]],
        3679 => [[['_route' => 'analysis_problem', '_controller' => 'App\\Controller\\Jury\\AnalysisController::problemAction'], ['probid'], null, null, false, true, null]],
        3701 => [[['_route' => 'jury_ajax_data', '_controller' => 'App\\Controller\\Jury\\JuryMiscController::ajaxDataAction'], ['datatype'], ['GET' => 0], null, false, true, null]],
        3730 => [[['_route' => 'jury_team_affiliation', '_controller' => 'App\\Controller\\Jury\\TeamAffiliationController::viewAction'], ['affilId'], null, null, false, true, null]],
        3749 => [[['_route' => 'jury_team_affiliation_edit', '_controller' => 'App\\Controller\\Jury\\TeamAffiliationController::editAction'], ['affilId'], null, null, false, false, null]],
        3770 => [[['_route' => 'jury_team_affiliation_delete', '_controller' => 'App\\Controller\\Jury\\TeamAffiliationController::deleteAction'], ['affilId'], null, null, false, false, null]],
        3803 => [[['_route' => 'jury_balloons_setdone', '_controller' => 'App\\Controller\\Jury\\BalloonController::setDoneAction'], ['balloonId'], null, null, false, false, null]],
        3838 => [[['_route' => 'jury_clarification', '_controller' => 'App\\Controller\\Jury\\ClarificationController::viewAction'], ['id'], null, null, false, true, null]],
        3858 => [[['_route' => 'jury_clarification_claim', '_controller' => 'App\\Controller\\Jury\\ClarificationController::toggleClaimAction'], ['clarId'], null, null, false, false, null]],
        3886 => [[['_route' => 'jury_clarification_set_answered', '_controller' => 'App\\Controller\\Jury\\ClarificationController::toggleAnsweredAction'], ['clarId'], null, null, false, false, null]],
        3916 => [[['_route' => 'jury_clarification_change_subject', '_controller' => 'App\\Controller\\Jury\\ClarificationController::changeSubjectAction'], ['clarId'], null, null, false, false, null]],
        3944 => [[['_route' => 'jury_clarification_change_queue', '_controller' => 'App\\Controller\\Jury\\ClarificationController::changeQueueAction'], ['clarId'], null, null, false, false, null]],
        3970 => [[['_route' => 'jury_contest', '_controller' => 'App\\Controller\\Jury\\ContestController::viewAction'], ['contestId'], null, null, false, true, null]],
        4010 => [[['_route' => 'jury_contest_remove_interval', '_controller' => 'App\\Controller\\Jury\\ContestController::removeIntervalAction'], ['contestId', 'intervalId'], ['POST' => 0], null, false, true, null]],
        4029 => [[['_route' => 'jury_contest_edit', '_controller' => 'App\\Controller\\Jury\\ContestController::editAction'], ['contestId'], null, null, false, false, null]],
        4050 => [[['_route' => 'jury_contest_delete', '_controller' => 'App\\Controller\\Jury\\ContestController::deleteAction'], ['contestId'], null, null, false, false, null]],
        4086 => [[['_route' => 'jury_contest_problem_delete', '_controller' => 'App\\Controller\\Jury\\ContestController::deleteProblemAction'], ['contestId', 'probId'], null, null, false, false, null]],
        4109 => [[['_route' => 'jury_contest_finalize', '_controller' => 'App\\Controller\\Jury\\ContestController::finalizeAction'], ['contestId'], null, null, false, false, null]],
        4141 => [[['_route' => 'jury_change_contest', '_controller' => 'App\\Controller\\Jury\\JuryMiscController::changeContestAction'], ['contestId'], null, null, false, true, null]],
        4168 => [[['_route' => 'jury_team_category', '_controller' => 'App\\Controller\\Jury\\TeamCategoryController::viewAction'], ['categoryId'], null, null, false, true, null]],
        4187 => [[['_route' => 'jury_team_category_edit', '_controller' => 'App\\Controller\\Jury\\TeamCategoryController::editAction'], ['categoryId'], null, null, false, false, null]],
        4208 => [[['_route' => 'jury_team_category_delete', '_controller' => 'App\\Controller\\Jury\\TeamCategoryController::deleteAction'], ['categoryId'], null, null, false, false, null]],
        4242 => [[['_route' => 'jury_executable', '_controller' => 'App\\Controller\\Jury\\ExecutableController::viewAction'], ['execId'], null, null, false, true, null]],
        4262 => [[['_route' => 'jury_executable_content', '_controller' => 'App\\Controller\\Jury\\ExecutableController::contentAction'], ['execId'], null, null, false, false, null]],
        4285 => [[['_route' => 'jury_executable_download', '_controller' => 'App\\Controller\\Jury\\ExecutableController::downloadAction'], ['execId'], null, null, false, false, null]],
        4303 => [[['_route' => 'jury_executable_download_single', '_controller' => 'App\\Controller\\Jury\\ExecutableController::downloadSingleAction'], ['execId', 'index'], null, null, false, true, null]],
        4318 => [[['_route' => 'jury_executable_delete', '_controller' => 'App\\Controller\\Jury\\ExecutableController::deleteAction'], ['execId'], null, null, false, false, null]],
        4335 => [[['_route' => 'jury_executable_edit', '_controller' => 'App\\Controller\\Jury\\ExecutableController::editAction'], ['execId'], null, null, false, false, null]],
        4351 => [[['_route' => 'jury_executable_edit_files', '_controller' => 'App\\Controller\\Jury\\ExecutableController::editFilesAction'], ['execId'], null, null, false, false, null]],
        4429 => [[['_route' => 'jury_tsv_export', '_controller' => 'App\\Controller\\Jury\\ImportExportController::exportTsvAction'], ['type'], null, null, false, false, null]],
        4481 => [[['_route' => 'jury_html_export', '_controller' => 'App\\Controller\\Jury\\ImportExportController::exportHtmlAction'], ['type'], null, null, false, false, null]],
        4515 => [[['_route' => 'jury_internal_error', '_controller' => 'App\\Controller\\Jury\\InternalErrorController::viewAction'], ['errorId'], ['GET' => 0], null, false, true, null]],
        4546 => [[['_route' => 'jury_internal_error_handle', '_controller' => 'App\\Controller\\Jury\\InternalErrorController::handleAction'], ['errorId', 'action'], ['POST' => 0], null, false, true, null]],
        4585 => [[['_route' => 'jury_judgehost', '_controller' => 'App\\Controller\\Jury\\JudgehostController::viewAction'], ['hostname'], ['GET' => 0], null, false, true, null]],
        4607 => [[['_route' => 'jury_judgehost_delete', '_controller' => 'App\\Controller\\Jury\\JudgehostController::deleteAction'], ['hostname'], null, null, false, false, null]],
        4624 => [[['_route' => 'jury_judgehost_deactivate', '_controller' => 'App\\Controller\\Jury\\JudgehostController::deactivateAction'], ['hostname'], null, null, false, false, null]],
        4642 => [[['_route' => 'jury_judgehost_activate', '_controller' => 'App\\Controller\\Jury\\JudgehostController::activateAction'], ['hostname'], null, null, false, false, null]],
        4666 => [[['_route' => 'jury_judgehost_activate_all', '_controller' => 'App\\Controller\\Jury\\JudgehostController::activateAllAction'], [], ['POST' => 0], null, false, false, null]],
        4690 => [[['_route' => 'jury_judgehost_deactivate_all', '_controller' => 'App\\Controller\\Jury\\JudgehostController::deactivateAllAction'], [], ['POST' => 0], null, false, false, null]],
        4723 => [[['_route' => 'jury_judgehost_restriction', '_controller' => 'App\\Controller\\Jury\\JudgehostRestrictionController::viewAction'], ['restrictionId'], null, null, false, true, null]],
        4742 => [[['_route' => 'jury_judgehost_restriction_edit', '_controller' => 'App\\Controller\\Jury\\JudgehostRestrictionController::editAction'], ['restrictionId'], null, null, false, false, null]],
        4763 => [[['_route' => 'jury_judgehost_restriction_delete', '_controller' => 'App\\Controller\\Jury\\JudgehostRestrictionController::deleteAction'], ['restrictionId'], null, null, false, false, null]],
        4795 => [[['_route' => 'jury_language', '_controller' => 'App\\Controller\\Jury\\LanguageController::viewAction'], ['langId'], null, null, false, true, null]],
        4825 => [[['_route' => 'jury_language_toggle_submit', '_controller' => 'App\\Controller\\Jury\\LanguageController::toggleSubmitAction'], ['langId'], null, null, false, false, null]],
        4839 => [[['_route' => 'jury_language_toggle_judge', '_controller' => 'App\\Controller\\Jury\\LanguageController::toggleJudgeAction'], ['langId'], null, null, false, false, null]],
        4853 => [[['_route' => 'jury_language_edit', '_controller' => 'App\\Controller\\Jury\\LanguageController::editAction'], ['langId'], null, null, false, false, null]],
        4868 => [[['_route' => 'jury_language_delete', '_controller' => 'App\\Controller\\Jury\\LanguageController::deleteAction'], ['langId'], null, null, false, false, null]],
        4903 => [[['_route' => 'jury_export_problem', '_controller' => 'App\\Controller\\Jury\\ProblemController::exportAction'], ['problemId'], null, null, false, false, null]],
        4917 => [[['_route' => 'jury_problem', '_controller' => 'App\\Controller\\Jury\\ProblemController::viewAction'], ['probId'], null, null, false, true, null]],
        4936 => [[['_route' => 'jury_problem_text', '_controller' => 'App\\Controller\\Jury\\ProblemController::viewTextAction'], ['probId'], null, null, false, false, null]],
        4960 => [[['_route' => 'jury_problem_testcases', '_controller' => 'App\\Controller\\Jury\\ProblemController::testcasesAction'], ['probId'], null, null, false, false, null]],
        5005 => [[['_route' => 'jury_problem_testcase_move', '_controller' => 'App\\Controller\\Jury\\ProblemController::moveTestcaseAction'], ['probId', 'rank', 'direction'], null, null, false, true, null]],
        5062 => [[['_route' => 'jury_problem_testcase_fetch', '_controller' => 'App\\Controller\\Jury\\ProblemController::fetchTestcaseAction'], ['probId', 'rank', 'type'], null, null, false, true, null]],
        5081 => [[['_route' => 'jury_problem_edit', '_controller' => 'App\\Controller\\Jury\\ProblemController::editAction'], ['probId'], null, null, false, false, null]],
        5102 => [[['_route' => 'jury_problem_delete', '_controller' => 'App\\Controller\\Jury\\ProblemController::deleteAction'], ['probId'], null, null, false, false, null]],
        5132 => [[['_route' => 'jury_testcase_delete', '_controller' => 'App\\Controller\\Jury\\ProblemController::deleteTestcaseAction'], ['testcaseId'], null, null, false, false, null]],
        5161 => [[['_route' => 'jury_rejudging', '_controller' => 'App\\Controller\\Jury\\RejudgingController::viewAction'], ['rejudgingId'], null, null, false, true, null]],
        5190 => [[['_route' => 'jury_rejudging_finish', '_controller' => 'App\\Controller\\Jury\\RejudgingController::finishAction'], ['rejudgingId', 'action'], null, null, false, true, null]],
        5220 => [[['_route' => 'jury_submission', '_controller' => 'App\\Controller\\Jury\\SubmissionController::viewAction'], ['submitId'], null, null, false, true, null]],
        5256 => [[['_route' => 'jury_submission_by_judging', '_controller' => 'App\\Controller\\Jury\\SubmissionController::viewForJudgingAction'], ['jid'], null, null, false, true, null]],
        5300 => [[['_route' => 'jury_submission_by_external_judgement', '_controller' => 'App\\Controller\\Jury\\SubmissionController::viewForExternalJudgementAction'], ['externalJudgement'], null, null, false, true, null]],
        5320 => [[['_route' => 'jury_submission_by_external_id', '_controller' => 'App\\Controller\\Jury\\SubmissionController::viewForExternalIdAction'], ['externalId'], null, null, false, true, null]],
        5378 => [[['_route' => 'jury_submission_team_output', '_controller' => 'App\\Controller\\Jury\\SubmissionController::teamOutputAction'], ['submission', 'contest', 'run'], null, null, false, false, null]],
        5393 => [[['_route' => 'jury_submission_source', '_controller' => 'App\\Controller\\Jury\\SubmissionController::sourceAction'], ['submission'], null, null, false, false, null]],
        5414 => [[['_route' => 'jury_submission_edit_source', '_controller' => 'App\\Controller\\Jury\\SubmissionController::editSourceAction'], ['submission'], null, null, false, false, null]],
        5444 => [[['_route' => 'jury_submission_update_status', '_controller' => 'App\\Controller\\Jury\\SubmissionController::updateStatusAction'], ['submitId'], ['POST' => 0], null, false, false, null]],
        5465 => [[['_route' => 'jury_judging_verify', '_controller' => 'App\\Controller\\Jury\\SubmissionController::verifyAction'], ['judgingId'], ['POST' => 0], null, false, false, null]],
        5505 => [[['_route' => 'jury_shadow_difference_verify', '_controller' => 'App\\Controller\\Jury\\SubmissionController::verifyShadowDifferenceAction'], ['extjudgementid'], ['POST' => 0], null, false, false, null]],
        5529 => [[['_route' => 'jury_team', '_controller' => 'App\\Controller\\Jury\\TeamController::viewAction'], ['teamId'], null, null, false, true, null]],
        5548 => [[['_route' => 'jury_team_edit', '_controller' => 'App\\Controller\\Jury\\TeamController::editAction'], ['teamId'], null, null, false, false, null]],
        5569 => [[['_route' => 'jury_team_delete', '_controller' => 'App\\Controller\\Jury\\TeamController::deleteAction'], ['teamId'], null, null, false, false, null]],
        5593 => [[['_route' => 'jury_user', '_controller' => 'App\\Controller\\Jury\\UserController::viewAction'], ['userId'], null, null, false, true, null]],
        5612 => [[['_route' => 'jury_user_edit', '_controller' => 'App\\Controller\\Jury\\UserController::editAction'], ['userId'], null, null, false, false, null]],
        5633 => [[['_route' => 'jury_user_delete', '_controller' => 'App\\Controller\\Jury\\UserController::deleteAction'], ['userId'], null, null, false, false, null]],
        5678 => [[['_route' => 'public_change_contest', '_controller' => 'App\\Controller\\PublicController::changeContestAction'], ['contestId'], null, null, false, true, null]],
        5697 => [[['_route' => 'public_team', '_controller' => 'App\\Controller\\PublicController::teamAction'], ['teamId'], null, null, false, true, null]],
        5725 => [[['_route' => 'public_problem_text', '_controller' => 'App\\Controller\\PublicController::problemTextAction'], ['probId'], null, null, false, false, null]],
        5767 => [[['_route' => 'public_problem_sample_testcase', '_controller' => 'App\\Controller\\PublicController::sampleTestcaseAction'], ['probId', 'index', 'type'], null, null, false, true, null]],
        5794 => [[['_route' => 'public_problem_sample_zip', '_controller' => 'App\\Controller\\PublicController::sampleZipAction'], ['probId'], null, null, false, false, null]],
        5836 => [[['_route' => 'team_clarification', '_controller' => 'App\\Controller\\Team\\ClarificationController::viewAction'], ['clarId'], null, null, false, true, null]],
        5867 => [[['_route' => 'team_change_contest', '_controller' => 'App\\Controller\\Team\\MiscController::changeContestAction'], ['contestId'], null, null, false, true, null]],
        5896 => [[['_route' => 'team_problem_text', '_controller' => 'App\\Controller\\Team\\ProblemController::problemTextAction'], ['probId'], null, null, false, false, null]],
        5938 => [[['_route' => 'team_problem_sample_testcase', '_controller' => 'App\\Controller\\Team\\ProblemController::sampleTestcaseAction'], ['probId', 'index', 'type'], null, null, false, true, null]],
        5965 => [[['_route' => 'team_problem_sample_zip', '_controller' => 'App\\Controller\\Team\\ProblemController::sampleZipAction'], ['probId'], null, null, false, false, null]],
        5984 => [[['_route' => 'team_team', '_controller' => 'App\\Controller\\Team\\ScoreboardController::teamAction'], ['teamId'], null, null, false, true, null]],
        6012 => [[['_route' => 'team_submission', '_controller' => 'App\\Controller\\Team\\SubmissionController::viewAction'], ['submitId'], null, null, false, true, null]],
        6035 => [
            [['_route' => 'team_submission_download', '_controller' => 'App\\Controller\\Team\\SubmissionController::downloadAction'], ['submitId'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
