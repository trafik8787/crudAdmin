<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-06 00:41:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-06 00:41:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-06 00:42:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-06 00:42:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-06 00:42:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-06 00:42:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-06 01:19:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 260 ]
2014-06-06 01:19:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 260 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(260): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 260, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 01:25:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 260 ]
2014-06-06 01:25:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 260 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(260): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 260, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 01:25:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 260 ]
2014-06-06 01:25:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 260 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(260): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 260, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 01:25:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 260 ]
2014-06-06 01:25:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 260 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(260): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 260, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 01:27:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 226 ]
2014-06-06 01:27:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 226 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(226): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 226, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(95): Cruds->select_table()
#2 /var/www/kohana/modules/crud/classes/controller/test.php(14): Cruds->render()
#3 [internal function]: Controller_Test->action_index()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-06 01:30:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: datas ~ MODPATH/crud/classes/cruds.php [ 226 ]
2014-06-06 01:30:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: datas ~ MODPATH/crud/classes/cruds.php [ 226 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(226): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 226, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(95): Cruds->select_table()
#2 /var/www/kohana/modules/crud/classes/controller/test.php(14): Cruds->render()
#3 [internal function]: Controller_Test->action_index()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-06 02:00:46 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 244 ]
2014-06-06 02:00:46 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 244 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(244): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 244, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 02:11:46 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 247 ]
2014-06-06 02:11:46 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 247 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(247): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 247, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 02:12:11 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 247 ]
2014-06-06 02:12:11 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 247 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(247): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 247, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 02:15:18 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'idRT,title,author' in 'field list' [ SELECT `idRT,title,author` FROM `articles` LIMIT 5 OFFSET 0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-06 02:15:18 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'idRT,title,author' in 'field list' [ SELECT `idRT,title,author` FROM `articles` LIMIT 5 OFFSET 0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `idRT,ti...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(122): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(235): Model_All->paginationAjax(5, 0, 'articles', 'idRT,title,auth...')
#3 /var/www/kohana/modules/crud/classes/cruds.php(96): Cruds->select_table()
#4 /var/www/kohana/modules/crud/classes/controller/test.php(14): Cruds->render()
#5 [internal function]: Controller_Test->action_index()
#6 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#7 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/kohana/index.php(109): Kohana_Request->execute()
#10 {main}
2014-06-06 02:33:51 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 258 ]
2014-06-06 02:33:51 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 258 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(258): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 258, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 02:34:52 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 253 ]
2014-06-06 02:34:52 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 253 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(253): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 253, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 02:36:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: get ~ MODPATH/crud/classes/cruds.php [ 232 ]
2014-06-06 02:36:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: get ~ MODPATH/crud/classes/cruds.php [ 232 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(232): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 232, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(96): Cruds->select_table()
#2 /var/www/kohana/modules/crud/classes/controller/test.php(14): Cruds->render()
#3 [internal function]: Controller_Test->action_index()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-06 02:38:47 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 262 ]
2014-06-06 02:38:47 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 262 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(262): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 262, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 02:39:55 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 250 ]
2014-06-06 02:39:55 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 250 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(250): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 250, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 02:40:17 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 250 ]
2014-06-06 02:40:17 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 250 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(250): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 250, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 02:41:42 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 250 ]
2014-06-06 02:41:42 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 250 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(250): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 250, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 02:45:54 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 250 ]
2014-06-06 02:45:54 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 250 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(250): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 250, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 02:47:03 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 250 ]
2014-06-06 02:47:03 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 250 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(250): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 250, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 02:48:54 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 250 ]
2014-06-06 02:48:54 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 250 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(250): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 250, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 02:54:59 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 250 ]
2014-06-06 02:54:59 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 250 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(250): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 250, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 02:56:23 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 250 ]
2014-06-06 02:56:23 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 250 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(250): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 250, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 02:57:32 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 250 ]
2014-06-06 02:57:32 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 250 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(250): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 250, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 02:58:32 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 250 ]
2014-06-06 02:58:32 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 250 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(250): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 250, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 02:58:49 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 250 ]
2014-06-06 02:58:49 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 250 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(250): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 250, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 02:59:50 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 252 ]
2014-06-06 02:59:50 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 252 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(252): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 252, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 03:01:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: rows ~ MODPATH/crud/classes/cruds.php [ 229 ]
2014-06-06 03:01:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: rows ~ MODPATH/crud/classes/cruds.php [ 229 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(229): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 229, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(96): Cruds->select_table()
#2 /var/www/kohana/modules/crud/classes/controller/test.php(14): Cruds->render()
#3 [internal function]: Controller_Test->action_index()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-06 03:02:21 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 249 ]
2014-06-06 03:02:21 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 249 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(249): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 249, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 03:02:42 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 249 ]
2014-06-06 03:02:42 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 249 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(249): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 249, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 03:04:38 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 249 ]
2014-06-06 03:04:38 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 249 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(249): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 249, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 03:06:04 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 249 ]
2014-06-06 03:06:04 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 249 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(249): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 249, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 03:07:47 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/crud/classes/cruds.php [ 247 ]
2014-06-06 03:07:47 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/crud/classes/cruds.php [ 247 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(247): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/kohana...', 247, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 12:15:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-06 12:15:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-06 14:44:46 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 249 ]
2014-06-06 14:44:46 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 249 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(249): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 249, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 14:45:47 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 249 ]
2014-06-06 14:45:47 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 249 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(249): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 249, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 14:48:38 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 252 ]
2014-06-06 14:48:38 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 252 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(252): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 252, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 14:58:41 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 247 ]
2014-06-06 14:58:41 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 247 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(247): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 247, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 17:40:41 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH/crud/classes/cruds.php [ 226 ]
2014-06-06 17:40:41 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH/crud/classes/cruds.php [ 226 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-06 18:22:34 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ MODPATH/crud/classes/cruds.php [ 266 ]
2014-06-06 18:22:34 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ MODPATH/crud/classes/cruds.php [ 266 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-06 18:31:51 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'LANG_EDIT' ~ MODPATH/crud/classes/cruds.php [ 267 ]
2014-06-06 18:31:51 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'LANG_EDIT' ~ MODPATH/crud/classes/cruds.php [ 267 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(267): Kohana_Core::error_handler(2, 'Illegal string ...', '/var/www/kohana...', 267, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 19:54:23 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY idRT asc' at line 1 [ SELECT * FROM articles LIMIT 0,10 ORDER BY idRT asc ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-06 19:54:23 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY idRT asc' at line 1 [ SELECT * FROM articles LIMIT 0,10 ORDER BY idRT asc ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(119): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(261): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc')
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-06 19:54:34 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY idRT asc' at line 1 [ SELECT * FROM articles LIMIT 0,10 ORDER BY idRT asc ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-06 19:54:34 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY idRT asc' at line 1 [ SELECT * FROM articles LIMIT 0,10 ORDER BY idRT asc ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(119): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(261): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc')
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-06 20:33:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-06 20:33:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-06 20:33:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-06 20:33:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-06 20:54:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: likeSql ~ MODPATH/crud/classes/model/all.php [ 134 ]
2014-06-06 20:54:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: likeSql ~ MODPATH/crud/classes/model/all.php [ 134 ]
--
#0 /var/www/kohana/modules/crud/classes/model/all.php(134): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 134, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '', Array)
#2 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#3 [internal function]: Controller_Ajax->action_showTableAjax()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-06 20:54:46 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '%d% title LIKE %d% ORauthor LIKE %d% OR ORDER BY idRT asc
            LIMIT 0,1' at line 1 [ SELECT * FROM articles  WHERE idRT LIKE %d% title LIKE %d% ORauthor LIKE %d% OR ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-06 20:54:46 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '%d% title LIKE %d% ORauthor LIKE %d% OR ORDER BY idRT asc
            LIMIT 0,1' at line 1 [ SELECT * FROM articles  WHERE idRT LIKE %d% title LIKE %d% ORauthor LIKE %d% OR ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(139): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', 'd', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-06 20:56:08 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '%В% title LIKE %В%  ORauthor LIKE %В%  OR ORDER BY idRT asc
            LIMI' at line 1 [ SELECT * FROM articles  WHERE idRT LIKE %В% title LIKE %В%  ORauthor LIKE %В%  OR ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-06 20:56:08 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '%В% title LIKE %В%  ORauthor LIKE %В%  OR ORDER BY idRT asc
            LIMI' at line 1 [ SELECT * FROM articles  WHERE idRT LIKE %В% title LIKE %В%  ORauthor LIKE %В%  OR ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(140): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-06 20:56:19 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '%В% title LIKE %В%  ORauthor LIKE %В%  OR ORDER BY idRT asc
            LIMI' at line 1 [ SELECT * FROM articles  WHERE idRT LIKE %В% title LIKE %В%  ORauthor LIKE %В%  OR ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-06 20:56:19 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '%В% title LIKE %В%  ORauthor LIKE %В%  OR ORDER BY idRT asc
            LIMI' at line 1 [ SELECT * FROM articles  WHERE idRT LIKE %В% title LIKE %В%  ORauthor LIKE %В%  OR ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(140): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-06 20:58:19 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'title LIKE "%В%"  ORauthor LIKE "%В%"  OR ORDER BY idRT asc
            LIMIT' at line 1 [ SELECT * FROM articles  WHERE idRT LIKE "%В%" title LIKE "%В%"  ORauthor LIKE "%В%"  OR ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-06 20:58:19 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'title LIKE "%В%"  ORauthor LIKE "%В%"  OR ORDER BY idRT asc
            LIMIT' at line 1 [ SELECT * FROM articles  WHERE idRT LIKE "%В%" title LIKE "%В%"  ORauthor LIKE "%В%"  OR ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(140): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-06 20:58:38 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'title LIKE "%р%"  ORauthor LIKE "%р%"  OR ORDER BY idRT asc
            LIMIT' at line 1 [ SELECT * FROM articles  WHERE idRT LIKE "%р%" title LIKE "%р%"  ORauthor LIKE "%р%"  OR ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-06 20:58:38 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'title LIKE "%р%"  ORauthor LIKE "%р%"  OR ORDER BY idRT asc
            LIMIT' at line 1 [ SELECT * FROM articles  WHERE idRT LIKE "%р%" title LIKE "%р%"  ORauthor LIKE "%р%"  OR ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(140): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-06 20:58:46 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'title LIKE "%h%"  ORauthor LIKE "%h%"  OR ORDER BY idRT asc
            LIMIT 0' at line 1 [ SELECT * FROM articles  WHERE idRT LIKE "%h%" title LIKE "%h%"  ORauthor LIKE "%h%"  OR ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-06 20:58:46 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'title LIKE "%h%"  ORauthor LIKE "%h%"  OR ORDER BY idRT asc
            LIMIT 0' at line 1 [ SELECT * FROM articles  WHERE idRT LIKE "%h%" title LIKE "%h%"  ORauthor LIKE "%h%"  OR ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(140): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', 'h', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-06 21:00:28 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'title LIKE `%h%`  ORauthor LIKE `%h%`  OR ORDER BY idRT asc
            LIMIT 0' at line 1 [ SELECT * FROM articles  WHERE idRT LIKE `%h%` title LIKE `%h%`  ORauthor LIKE `%h%`  OR ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-06 21:00:28 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'title LIKE `%h%`  ORauthor LIKE `%h%`  OR ORDER BY idRT asc
            LIMIT 0' at line 1 [ SELECT * FROM articles  WHERE idRT LIKE `%h%` title LIKE `%h%`  ORauthor LIKE `%h%`  OR ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(140): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', 'h', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-06 21:02:24 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ MODPATH/crud/classes/model/all.php [ 146 ]
2014-06-06 21:02:24 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ MODPATH/crud/classes/model/all.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-06 21:07:25 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'h`%` title LIKE `%`h`%`  ORauthor LIKE `%`h`%`  OR ORDER BY idRT asc
          ' at line 1 [ SELECT * FROM articles  WHERE idRT LIKE `%`h`%` title LIKE `%`h`%`  ORauthor LIKE `%`h`%`  OR ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-06 21:07:25 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'h`%` title LIKE `%`h`%`  ORauthor LIKE `%`h`%`  OR ORDER BY idRT asc
          ' at line 1 [ SELECT * FROM articles  WHERE idRT LIKE `%`h`%` title LIKE `%`h`%`  ORauthor LIKE `%`h`%`  OR ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(140): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', 'h', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-06 21:07:53 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'title LIKE `%h%`  ORauthor LIKE `%h%`  OR ORDER BY idRT asc
            LIMIT 0' at line 1 [ SELECT * FROM articles  WHERE idRT LIKE `%h%` title LIKE `%h%`  ORauthor LIKE `%h%`  OR ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-06 21:07:53 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'title LIKE `%h%`  ORauthor LIKE `%h%`  OR ORDER BY idRT asc
            LIMIT 0' at line 1 [ SELECT * FROM articles  WHERE idRT LIKE `%h%` title LIKE `%h%`  ORauthor LIKE `%h%`  OR ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(140): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', 'h', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-06 21:13:47 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '%h% title LIKE %h%  ORauthor LIKE %h%  OR ORDER BY idRT asc
            LIMIT 0' at line 1 [ SELECT * FROM articles  WHERE idRT LIKE %h% title LIKE %h%  ORauthor LIKE %h%  OR ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-06 21:13:47 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '%h% title LIKE %h%  ORauthor LIKE %h%  OR ORDER BY idRT asc
            LIMIT 0' at line 1 [ SELECT * FROM articles  WHERE idRT LIKE %h% title LIKE %h%  ORauthor LIKE %h%  OR ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(140): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', 'h', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-06 21:17:04 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '%h% title LIKE %h%  ORauthor LIKE %h%  OR ORDER BY idRT asc
            LIMIT 0' at line 1 [ SELECT * FROM articles  WHERE idRT LIKE %h% title LIKE %h%  ORauthor LIKE %h%  OR ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-06 21:17:04 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '%h% title LIKE %h%  ORauthor LIKE %h%  OR ORDER BY idRT asc
            LIMIT 0' at line 1 [ SELECT * FROM articles  WHERE idRT LIKE %h% title LIKE %h%  ORauthor LIKE %h%  OR ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(140): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', 'h', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-06 21:39:16 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''%h%'titleLIKE '%h%' ORauthorLIKE '%h%' OR ORDER BY idRT asc
            LIMIT ' at line 1 [ SELECT * FROM articles  WHERE idRTLIKE '%h%'titleLIKE '%h%' ORauthorLIKE '%h%' OR ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-06 21:39:16 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''%h%'titleLIKE '%h%' ORauthorLIKE '%h%' OR ORDER BY idRT asc
            LIMIT ' at line 1 [ SELECT * FROM articles  WHERE idRTLIKE '%h%'titleLIKE '%h%' ORauthorLIKE '%h%' OR ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(140): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', 'h', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-06 21:39:57 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''%h%'titleLIKE '%h%' OR authorLIKE '%h%' OR  ORDER BY idRT asc
            LIMI' at line 1 [ SELECT * FROM articles  WHERE idRTLIKE '%h%'titleLIKE '%h%' OR authorLIKE '%h%' OR  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-06 21:39:57 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''%h%'titleLIKE '%h%' OR authorLIKE '%h%' OR  ORDER BY idRT asc
            LIMI' at line 1 [ SELECT * FROM articles  WHERE idRTLIKE '%h%'titleLIKE '%h%' OR authorLIKE '%h%' OR  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(140): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', 'h', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-06 21:40:35 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''%h%'titleLIKE '%h%' OR authorLIKE '%h%' OR   ORDER BY idRT asc
            LIM' at line 1 [ SELECT * FROM articles  WHERE idRTLIKE '%h%'titleLIKE '%h%' OR authorLIKE '%h%' OR   ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-06 21:40:35 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''%h%'titleLIKE '%h%' OR authorLIKE '%h%' OR   ORDER BY idRT asc
            LIM' at line 1 [ SELECT * FROM articles  WHERE idRTLIKE '%h%'titleLIKE '%h%' OR authorLIKE '%h%' OR   ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(140): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', 'h', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-06 21:41:13 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''%h%' titleLIKE '%h%' OR  authorLIKE '%h%' OR   ORDER BY idRT asc
            L' at line 1 [ SELECT * FROM articles  WHERE  idRTLIKE '%h%' titleLIKE '%h%' OR  authorLIKE '%h%' OR   ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-06 21:41:13 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''%h%' titleLIKE '%h%' OR  authorLIKE '%h%' OR   ORDER BY idRT asc
            L' at line 1 [ SELECT * FROM articles  WHERE  idRTLIKE '%h%' titleLIKE '%h%' OR  authorLIKE '%h%' OR   ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(140): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', 'h', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-06 21:42:03 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'title LIKE '%h%' OR  author LIKE '%h%' OR   ORDER BY idRT asc
            LIMIT' at line 1 [ SELECT * FROM articles  WHERE  idRT LIKE '%h%' title LIKE '%h%' OR  author LIKE '%h%' OR   ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-06 21:42:03 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'title LIKE '%h%' OR  author LIKE '%h%' OR   ORDER BY idRT asc
            LIMIT' at line 1 [ SELECT * FROM articles  WHERE  idRT LIKE '%h%' title LIKE '%h%' OR  author LIKE '%h%' OR   ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(140): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', 'h', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-06 21:44:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: or ~ MODPATH/crud/classes/model/all.php [ 128 ]
2014-06-06 21:44:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: or ~ MODPATH/crud/classes/model/all.php [ 128 ]
--
#0 /var/www/kohana/modules/crud/classes/model/all.php(128): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 128, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', 'h', Array)
#2 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#3 [internal function]: Controller_Ajax->action_showTableAjax()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-06 21:46:09 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'title LIKE '%h%' OR  author LIKE '%h%'  ORDER BY idRT asc
            LIMIT 0,1' at line 1 [ SELECT * FROM articles  WHERE  idRT LIKE '%h%' title LIKE '%h%' OR  author LIKE '%h%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-06 21:46:09 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'title LIKE '%h%' OR  author LIKE '%h%'  ORDER BY idRT asc
            LIMIT 0,1' at line 1 [ SELECT * FROM articles  WHERE  idRT LIKE '%h%' title LIKE '%h%' OR  author LIKE '%h%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(145): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', 'h', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-06 21:48:10 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIKE '%h%' OR 'author' LIKE '%h%'  ORDER BY idRT asc
            LIMIT 0,10' at line 1 [ SELECT * FROM articles  WHERE 'idRT' LIKE '%h%''title' LIKE '%h%' OR 'author' LIKE '%h%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-06 21:48:10 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIKE '%h%' OR 'author' LIKE '%h%'  ORDER BY idRT asc
            LIMIT 0,10' at line 1 [ SELECT * FROM articles  WHERE 'idRT' LIKE '%h%''title' LIKE '%h%' OR 'author' LIKE '%h%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(145): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', 'h', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-06 21:49:11 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIKE '%h%' OR 'author' LIKE '%h%'  ORDER BY idRT asc
            LIMIT 0,10' at line 1 [ SELECT * FROM articles  WHERE 'idRT' LIKE '%h%''title' LIKE '%h%' OR 'author' LIKE '%h%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-06 21:49:11 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIKE '%h%' OR 'author' LIKE '%h%'  ORDER BY idRT asc
            LIMIT 0,10' at line 1 [ SELECT * FROM articles  WHERE 'idRT' LIKE '%h%''title' LIKE '%h%' OR 'author' LIKE '%h%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(145): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', 'h', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-06 21:49:39 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIKE '%h%' OR 'author' LIKE '%h%' OR   ORDER BY idRT asc
            LIMIT 0,10' at line 1 [ SELECT * FROM articles  WHERE 'idRT' LIKE '%h%''title' LIKE '%h%' OR 'author' LIKE '%h%' OR   ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-06 21:49:39 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIKE '%h%' OR 'author' LIKE '%h%' OR   ORDER BY idRT asc
            LIMIT 0,10' at line 1 [ SELECT * FROM articles  WHERE 'idRT' LIKE '%h%''title' LIKE '%h%' OR 'author' LIKE '%h%' OR   ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(145): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', 'h', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-06 21:51:40 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY idRT asc
            LIMIT 0,10' at line 1 [ SELECT * FROM articles  WHERE 'idRT' LIKE '%h%' OR 'title' LIKE '%h%' OR 'author' LIKE '%h%' OR   ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-06 21:51:40 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY idRT asc
            LIMIT 0,10' at line 1 [ SELECT * FROM articles  WHERE 'idRT' LIKE '%h%' OR 'title' LIKE '%h%' OR 'author' LIKE '%h%' OR   ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(145): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', 'h', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-06 21:53:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 311 ]
2014-06-06 21:53:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 311 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(311): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 311, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 22:10:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 311 ]
2014-06-06 22:10:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 311 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(311): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 311, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 22:10:25 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY idRT asc
            LIMIT 0,10' at line 1 [ SELECT * FROM articles  WHERE 'idRT' LIKE '%ы%' OR 'title' LIKE '%ы%' OR 'author' LIKE '%ы%' OR   ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-06 22:10:25 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY idRT asc
            LIMIT 0,10' at line 1 [ SELECT * FROM articles  WHERE 'idRT' LIKE '%ы%' OR 'title' LIKE '%ы%' OR 'author' LIKE '%ы%' OR   ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(141): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-06 22:11:55 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY idRT asc
            LIMIT 0,10' at line 1 [ SELECT * FROM articles  WHERE 'idRT' LIKE '%а%' OR 'title' LIKE '%а%' OR 'author' LIKE '%а%' OR   ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-06 22:11:55 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY idRT asc
            LIMIT 0,10' at line 1 [ SELECT * FROM articles  WHERE 'idRT' LIKE '%а%' OR 'title' LIKE '%а%' OR 'author' LIKE '%а%' OR   ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(143): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-06 22:12:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 311 ]
2014-06-06 22:12:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 311 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(311): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 311, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 22:15:43 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIKE '%р%' OR 'author' LIKE '%р%' OR   ORDER BY idRT asc
            LIMIT 0,' at line 1 [ SELECT * FROM articles  WHERE 'idRT' LIKE '%р%''title' LIKE '%р%' OR 'author' LIKE '%р%' OR   ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-06 22:15:43 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIKE '%р%' OR 'author' LIKE '%р%' OR   ORDER BY idRT asc
            LIMIT 0,' at line 1 [ SELECT * FROM articles  WHERE 'idRT' LIKE '%р%''title' LIKE '%р%' OR 'author' LIKE '%р%' OR   ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(143): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-06 22:15:58 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIKE '%h%' OR 'author' LIKE '%h%' OR   ORDER BY idRT asc
            LIMIT 0,10' at line 1 [ SELECT * FROM articles  WHERE 'idRT' LIKE '%h%''title' LIKE '%h%' OR 'author' LIKE '%h%' OR   ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-06 22:15:58 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIKE '%h%' OR 'author' LIKE '%h%' OR   ORDER BY idRT asc
            LIMIT 0,10' at line 1 [ SELECT * FROM articles  WHERE 'idRT' LIKE '%h%''title' LIKE '%h%' OR 'author' LIKE '%h%' OR   ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(143): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', 'h', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-06 22:16:47 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIKE '%h%' OR 'author' LIKE '%h%' OR   ORDER BY idRT asc
            LIMIT 0,10' at line 1 [ SELECT * FROM articles  WHERE 'idRT' LIKE '%h%''title' LIKE '%h%' OR 'author' LIKE '%h%' OR   ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-06 22:16:47 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIKE '%h%' OR 'author' LIKE '%h%' OR   ORDER BY idRT asc
            LIMIT 0,10' at line 1 [ SELECT * FROM articles  WHERE 'idRT' LIKE '%h%''title' LIKE '%h%' OR 'author' LIKE '%h%' OR   ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(147): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', 'h', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-06 22:18:32 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY idRT asc
            LIMIT 0,10' at line 1 [ SELECT * FROM articles  WHERE 'idRT' LIKE '%h%' OR 'title' LIKE '%h%' OR   ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-06 22:18:32 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY idRT asc
            LIMIT 0,10' at line 1 [ SELECT * FROM articles  WHERE 'idRT' LIKE '%h%' OR 'title' LIKE '%h%' OR   ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(147): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', 'h', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-06 22:19:44 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY idRT asc
            LIMIT 0,10' at line 1 [ SELECT * FROM articles  WHERE 'idRT' LIKE '%g%' OR 'title' LIKE '%g%' OR   ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-06 22:19:44 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY idRT asc
            LIMIT 0,10' at line 1 [ SELECT * FROM articles  WHERE 'idRT' LIKE '%g%' OR 'title' LIKE '%g%' OR   ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(145): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', 'g', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-06 22:20:41 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIKE '%f%' OR   ORDER BY idRT asc
            LIMIT 0,10' at line 1 [ SELECT * FROM articles  WHERE 'idRT' LIKE '%f%''title' LIKE '%f%' OR   ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-06 22:20:41 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIKE '%f%' OR   ORDER BY idRT asc
            LIMIT 0,10' at line 1 [ SELECT * FROM articles  WHERE 'idRT' LIKE '%f%''title' LIKE '%f%' OR   ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(145): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', 'f', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-06 22:32:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: end_element ~ MODPATH/crud/classes/model/all.php [ 128 ]
2014-06-06 22:32:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: end_element ~ MODPATH/crud/classes/model/all.php [ 128 ]
--
#0 /var/www/kohana/modules/crud/classes/model/all.php(128): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 128, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', 'd', Array)
#2 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#3 [internal function]: Controller_Ajax->action_showTableAjax()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-06 22:32:59 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIKE '%d%' OR 'author' LIKE '%d%'  ORDER BY idRT asc
            LIMIT 0,10' at line 1 [ SELECT * FROM articles  WHERE 'idRT' LIKE '%d%''title' LIKE '%d%' OR 'author' LIKE '%d%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-06 22:32:59 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIKE '%d%' OR 'author' LIKE '%d%'  ORDER BY idRT asc
            LIMIT 0,10' at line 1 [ SELECT * FROM articles  WHERE 'idRT' LIKE '%d%''title' LIKE '%d%' OR 'author' LIKE '%d%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(149): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', 'd', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-06 22:38:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 311 ]
2014-06-06 22:38:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 311 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(311): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 311, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 22:42:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
2014-06-06 22:42:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(315): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 315, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 22:42:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
2014-06-06 22:42:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(315): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 315, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 22:44:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
2014-06-06 22:44:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(315): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 315, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 22:44:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
2014-06-06 22:44:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(315): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 315, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 22:44:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
2014-06-06 22:44:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(315): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 315, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 22:44:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
2014-06-06 22:44:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(315): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 315, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 22:45:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
2014-06-06 22:45:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(315): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 315, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 22:45:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
2014-06-06 22:45:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(315): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 315, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 22:48:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
2014-06-06 22:48:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(315): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 315, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 22:48:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
2014-06-06 22:48:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(315): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 315, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 22:48:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
2014-06-06 22:48:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(315): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 315, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 22:48:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
2014-06-06 22:48:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(315): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 315, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 22:49:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
2014-06-06 22:49:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(315): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 315, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 22:49:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
2014-06-06 22:49:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(315): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 315, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 22:50:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
2014-06-06 22:50:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(315): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 315, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 22:54:12 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::debug() ~ MODPATH/crud/classes/model/all.php [ 149 ]
2014-06-06 22:54:12 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::debug() ~ MODPATH/crud/classes/model/all.php [ 149 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-06 22:54:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
2014-06-06 22:54:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(315): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 315, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 22:55:45 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY idRT asc
            LIMIT 0,10' at line 1 [ SELECT * FROM articles  WHERE 'idRT' LIKE '%sdf%' OR 'title' LIKE '%sdf%' OR 'author' LIKE '%sdf%' OR   ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-06 22:55:45 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY idRT asc
            LIMIT 0,10' at line 1 [ SELECT * FROM articles  WHERE 'idRT' LIKE '%sdf%' OR 'title' LIKE '%sdf%' OR 'author' LIKE '%sdf%' OR   ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(146): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', 'sdf', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-06 22:58:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
2014-06-06 22:58:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(315): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 315, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-06 22:58:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
2014-06-06 22:58:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(315): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 315, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}