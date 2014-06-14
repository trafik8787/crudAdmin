<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-13 01:09:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-13 01:09:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-13 01:35:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL twitter was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-06-13 01:35:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL twitter was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\kohana.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\kohana.ru\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\kohana.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-13 01:35:05 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2014-06-13 01:35:05 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 Z:\home\kohana.ru\www\modules\database\classes\kohana\database\mysql.php(430): Kohana_Database_MySQL->connect()
#1 Z:\home\kohana.ru\www\modules\database\classes\kohana\database.php(478): Kohana_Database_MySQL->escape('articles')
#2 [internal function]: Kohana_Database->quote('articles')
#3 Z:\home\kohana.ru\www\modules\database\classes\kohana\database\query.php(190): array_map(Array, Array)
#4 Z:\home\kohana.ru\www\modules\database\classes\kohana\database\query.php(228): Kohana_Database_Query->compile(Object(Database_MySQL))
#5 Z:\home\kohana.ru\www\modules\crud\classes\model\all.php(78): Kohana_Database_Query->execute()
#6 Z:\home\kohana.ru\www\modules\crud\classes\cruds.php(175): Model_All->name_count('articles')
#7 Z:\home\kohana.ru\www\modules\crud\classes\cruds.php(98): Cruds->select_table()
#8 Z:\home\kohana.ru\www\modules\crud\classes\controller\test.php(14): Cruds->render()
#9 [internal function]: Controller_Test->action_index()
#10 Z:\home\kohana.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#11 Z:\home\kohana.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\kohana.ru\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}
2014-06-13 01:35:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-06-13 01:35:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 Z:\home\kohana.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-13 02:26:36 --- ERROR: ErrorException [ 2 ]: array_unshift() expects parameter 1 to be array, null given ~ MODPATH\crud\classes\cruds.php [ 329 ]
2014-06-13 02:26:36 --- STRACE: ErrorException [ 2 ]: array_unshift() expects parameter 1 to be array, null given ~ MODPATH\crud\classes\cruds.php [ 329 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_unshift()...', 'Z:\home\kohana....', 329, Array)
#1 Z:\home\kohana.ru\www\modules\crud\classes\cruds.php(329): array_unshift(NULL, '<input type="ch...')
#2 Z:\home\kohana.ru\www\modules\crud\classes\controller\ajax.php(19): Cruds->ajax_query(Array)
#3 [internal function]: Controller_Ajax->action_showTableAjax()
#4 Z:\home\kohana.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\kohana.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\kohana.ru\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-13 02:28:28 --- ERROR: ErrorException [ 2 ]: array_unshift() expects parameter 1 to be array, null given ~ MODPATH\crud\classes\cruds.php [ 329 ]
2014-06-13 02:28:28 --- STRACE: ErrorException [ 2 ]: array_unshift() expects parameter 1 to be array, null given ~ MODPATH\crud\classes\cruds.php [ 329 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_unshift()...', 'Z:\home\kohana....', 329, Array)
#1 Z:\home\kohana.ru\www\modules\crud\classes\cruds.php(329): array_unshift(NULL, Array)
#2 Z:\home\kohana.ru\www\modules\crud\classes\controller\ajax.php(19): Cruds->ajax_query(Array)
#3 [internal function]: Controller_Ajax->action_showTableAjax()
#4 Z:\home\kohana.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\kohana.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\kohana.ru\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-13 02:30:32 --- ERROR: ErrorException [ 2 ]: array_unshift() expects parameter 1 to be array, null given ~ MODPATH\crud\classes\cruds.php [ 333 ]
2014-06-13 02:30:32 --- STRACE: ErrorException [ 2 ]: array_unshift() expects parameter 1 to be array, null given ~ MODPATH\crud\classes\cruds.php [ 333 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_unshift()...', 'Z:\home\kohana....', 333, Array)
#1 Z:\home\kohana.ru\www\modules\crud\classes\cruds.php(333): array_unshift(NULL, Array)
#2 Z:\home\kohana.ru\www\modules\crud\classes\controller\ajax.php(19): Cruds->ajax_query(Array)
#3 [internal function]: Controller_Ajax->action_showTableAjax()
#4 Z:\home\kohana.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\kohana.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\kohana.ru\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-13 02:30:52 --- ERROR: ErrorException [ 2 ]: array_unshift() expects parameter 1 to be array, null given ~ MODPATH\crud\classes\cruds.php [ 333 ]
2014-06-13 02:30:52 --- STRACE: ErrorException [ 2 ]: array_unshift() expects parameter 1 to be array, null given ~ MODPATH\crud\classes\cruds.php [ 333 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_unshift()...', 'Z:\home\kohana....', 333, Array)
#1 Z:\home\kohana.ru\www\modules\crud\classes\cruds.php(333): array_unshift(NULL, '<input type="ch...')
#2 Z:\home\kohana.ru\www\modules\crud\classes\controller\ajax.php(19): Cruds->ajax_query(Array)
#3 [internal function]: Controller_Ajax->action_showTableAjax()
#4 Z:\home\kohana.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\kohana.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\kohana.ru\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-13 02:31:52 --- ERROR: ErrorException [ 2 ]: array_unshift() expects parameter 1 to be array, null given ~ MODPATH\crud\classes\cruds.php [ 333 ]
2014-06-13 02:31:52 --- STRACE: ErrorException [ 2 ]: array_unshift() expects parameter 1 to be array, null given ~ MODPATH\crud\classes\cruds.php [ 333 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_unshift()...', 'Z:\home\kohana....', 333, Array)
#1 Z:\home\kohana.ru\www\modules\crud\classes\cruds.php(333): array_unshift(NULL, '<input type="ch...')
#2 Z:\home\kohana.ru\www\modules\crud\classes\controller\ajax.php(19): Cruds->ajax_query(Array)
#3 [internal function]: Controller_Ajax->action_showTableAjax()
#4 Z:\home\kohana.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\kohana.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\kohana.ru\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-13 02:32:01 --- ERROR: ErrorException [ 2 ]: array_unshift() expects parameter 1 to be array, null given ~ MODPATH\crud\classes\cruds.php [ 333 ]
2014-06-13 02:32:01 --- STRACE: ErrorException [ 2 ]: array_unshift() expects parameter 1 to be array, null given ~ MODPATH\crud\classes\cruds.php [ 333 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_unshift()...', 'Z:\home\kohana....', 333, Array)
#1 Z:\home\kohana.ru\www\modules\crud\classes\cruds.php(333): array_unshift(NULL, '<input type="ch...')
#2 Z:\home\kohana.ru\www\modules\crud\classes\controller\ajax.php(19): Cruds->ajax_query(Array)
#3 [internal function]: Controller_Ajax->action_showTableAjax()
#4 Z:\home\kohana.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\kohana.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\kohana.ru\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-13 12:05:06 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2014-06-13 12:05:06 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/mysql.php(430): Kohana_Database_MySQL->connect()
#1 /var/www/kohana/modules/database/classes/kohana/database.php(478): Kohana_Database_MySQL->escape('extension')
#2 [internal function]: Kohana_Database->quote('extension')
#3 /var/www/kohana/modules/database/classes/kohana/database/query.php(190): array_map(Array, Array)
#4 /var/www/kohana/modules/database/classes/kohana/database/query.php(228): Kohana_Database_Query->compile(Object(Database_MySQL))
#5 /var/www/kohana/modules/crud/classes/model/all.php(78): Kohana_Database_Query->execute()
#6 /var/www/kohana/modules/crud/classes/cruds.php(175): Model_All->name_count('extension')
#7 /var/www/kohana/modules/crud/classes/cruds.php(98): Cruds->select_table()
#8 /var/www/kohana/modules/crud/classes/controller/test.php(14): Cruds->render()
#9 [internal function]: Controller_Test->action_index()
#10 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#11 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/kohana/index.php(109): Kohana_Request->execute()
#14 {main}
2014-06-13 12:05:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-13 12:05:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-13 12:05:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-13 12:05:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-13 12:06:45 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/crud/classes/model/all.php [ 17 ]
2014-06-13 12:06:45 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/crud/classes/model/all.php [ 17 ]
--
#0 /var/www/kohana/modules/crud/classes/model/all.php(17): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/kohana...', 17, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(199): Model_All->select_all_where('extension')
#2 /var/www/kohana/modules/crud/classes/cruds.php(98): Cruds->select_table()
#3 /var/www/kohana/modules/crud/classes/controller/test.php(14): Cruds->render()
#4 [internal function]: Controller_Test->action_index()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-13 15:19:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-13 15:19:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-13 15:19:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-13 15:19:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-13 22:09:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-13 22:09:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-13 22:09:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-13 22:09:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}