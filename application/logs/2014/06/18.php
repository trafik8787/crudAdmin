<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-18 02:06:59 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'die' (T_EXIT) ~ MODPATH/crud/classes/model/all.php [ 154 ]
2014-06-18 02:06:59 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'die' (T_EXIT) ~ MODPATH/crud/classes/model/all.php [ 154 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-18 11:29:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-18 11:29:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-18 15:21:41 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR content_short LIKE '%ф%' OR data LIKE '%ф%' OR status LIKE '%ф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-18 15:21:41 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR content_short LIKE '%ф%' OR data LIKE '%ф%' OR status LIKE '%ф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(197): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(279): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(19): Cruds->ajax_query(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-18 16:25:18 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%фв%' OR title LIKE '%фв%' OR author LIKE '%фв%' OR content_short LIKE '%фв%' OR data LIKE '%фв%' OR status LIKE '%фв%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-18 16:25:18 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%фв%' OR title LIKE '%фв%' OR author LIKE '%фв%' OR content_short LIKE '%фв%' OR data LIKE '%фв%' OR status LIKE '%фв%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(197): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(279): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '????', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(19): Cruds->ajax_query(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-18 16:27:05 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%фв%' OR title LIKE '%фв%' OR author LIKE '%фв%' OR content_short LIKE '%фв%' OR data LIKE '%фв%' OR status LIKE '%фв%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-18 16:27:05 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%фв%' OR title LIKE '%фв%' OR author LIKE '%фв%' OR content_short LIKE '%фв%' OR data LIKE '%фв%' OR status LIKE '%фв%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(198): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(279): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '????', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(19): Cruds->ajax_query(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-18 16:27:49 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%фв%' OR title LIKE '%фв%' OR author LIKE '%фв%' OR content_short LIKE '%фв%' OR data LIKE '%фв%' OR status LIKE '%фв%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-18 16:27:49 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%фв%' OR title LIKE '%фв%' OR author LIKE '%фв%' OR content_short LIKE '%фв%' OR data LIKE '%фв%' OR status LIKE '%фв%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(198): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(279): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '????', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(19): Cruds->ajax_query(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-18 18:00:16 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%фы%' OR title LIKE '%фы%' OR author LIKE '%фы%' OR content_short LIKE '%фы%' OR data LIKE '%фы%' OR status LIKE '%фы%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-18 18:00:16 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%фы%' OR title LIKE '%фы%' OR author LIKE '%фы%' OR content_short LIKE '%фы%' OR data LIKE '%фы%' OR status LIKE '%фы%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(198): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(279): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '????', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(19): Cruds->ajax_query(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-18 18:00:18 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%фыв%' OR title LIKE '%фыв%' OR author LIKE '%фыв%' OR content_short LIKE '%фыв%' OR data LIKE '%фыв%' OR status LIKE '%фыв%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-18 18:00:18 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%фыв%' OR title LIKE '%фыв%' OR author LIKE '%фыв%' OR content_short LIKE '%фыв%' OR data LIKE '%фыв%' OR status LIKE '%фыв%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(198): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(279): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??????', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(19): Cruds->ajax_query(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-18 18:00:36 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR content_short LIKE '%ф%' OR data LIKE '%ф%' OR status LIKE '%ф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-18 18:00:36 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR content_short LIKE '%ф%' OR data LIKE '%ф%' OR status LIKE '%ф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(198): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(279): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(19): Cruds->ajax_query(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-18 18:00:39 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%фф%' OR title LIKE '%фф%' OR author LIKE '%фф%' OR content_short LIKE '%фф%' OR data LIKE '%фф%' OR status LIKE '%фф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-18 18:00:39 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%фф%' OR title LIKE '%фф%' OR author LIKE '%фф%' OR content_short LIKE '%фф%' OR data LIKE '%фф%' OR status LIKE '%фф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(198): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(279): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '????', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(19): Cruds->ajax_query(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-18 18:01:48 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%фф%' OR title LIKE '%фф%' OR author LIKE '%фф%' OR content_short LIKE '%фф%' OR data LIKE '%фф%' OR status LIKE '%фф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-18 18:01:48 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%фф%' OR title LIKE '%фф%' OR author LIKE '%фф%' OR content_short LIKE '%фф%' OR data LIKE '%фф%' OR status LIKE '%фф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(198): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(279): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '????', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(19): Cruds->ajax_query(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-18 19:39:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-18 19:39:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-18 19:39:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-18 19:39:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-18 20:14:08 --- ERROR: ErrorException [ 2 ]: array_map() expects parameter 1 to be a valid callback, function 'no_tag' not found or invalid function name ~ MODPATH/crud/classes/cruds.php [ 333 ]
2014-06-18 20:14:08 --- STRACE: ErrorException [ 2 ]: array_map() expects parameter 1 to be a valid callback, function 'no_tag' not found or invalid function name ~ MODPATH/crud/classes/cruds.php [ 333 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_map() exp...', '/var/www/kohana...', 333, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(333): array_map('no_tag', Array)
#2 /var/www/kohana/modules/crud/classes/controller/ajax.php(19): Cruds->ajax_query(Array)
#3 [internal function]: Controller_Ajax->action_showTableAjax()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-18 20:15:06 --- ERROR: ErrorException [ 2 ]: array_map() expects parameter 1 to be a valid callback, function 'no_tag' not found or invalid function name ~ MODPATH/crud/classes/cruds.php [ 333 ]
2014-06-18 20:15:06 --- STRACE: ErrorException [ 2 ]: array_map() expects parameter 1 to be a valid callback, function 'no_tag' not found or invalid function name ~ MODPATH/crud/classes/cruds.php [ 333 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_map() exp...', '/var/www/kohana...', 333, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(333): array_map('no_tag', Array)
#2 /var/www/kohana/modules/crud/classes/controller/ajax.php(19): Cruds->ajax_query(Array)
#3 [internal function]: Controller_Ajax->action_showTableAjax()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-18 23:03:15 --- ERROR: ErrorException [ 8 ]: Undefined offset: 7 ~ MODPATH/crud/classes/cruds.php [ 263 ]
2014-06-18 23:03:15 --- STRACE: ErrorException [ 8 ]: Undefined offset: 7 ~ MODPATH/crud/classes/cruds.php [ 263 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(263): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/kohana...', 263, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(19): Cruds->ajax_query(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-18 23:47:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/DataTables-1.10.0/extensions/TableTools/swf/copy_csv_xls_pdf.swf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-18 23:47:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/DataTables-1.10.0/extensions/TableTools/swf/copy_csv_xls_pdf.swf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-18 23:47:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/DataTables-1.10.0/extensions/TableTools/swf/copy_csv_xls_pdf.swf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-18 23:47:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/DataTables-1.10.0/extensions/TableTools/swf/copy_csv_xls_pdf.swf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-18 23:47:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/admin/media/css/loader.GIF ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-18 23:47:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/admin/media/css/loader.GIF ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-18 23:48:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/DataTables-1.10.0/extensions/TableTools/swf/copy_csv_xls_pdf.swf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-18 23:48:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/DataTables-1.10.0/extensions/TableTools/swf/copy_csv_xls_pdf.swf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-18 23:48:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/admin/media/css/loader.GIF ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-18 23:48:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/admin/media/css/loader.GIF ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-18 23:55:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/DataTables-1.10.0/extensions/TableTools/swf/copy_csv_xls_pdf.swf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-18 23:55:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/DataTables-1.10.0/extensions/TableTools/swf/copy_csv_xls_pdf.swf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-18 23:55:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/admin/media/css/loader.GIF ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-18 23:55:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/admin/media/css/loader.GIF ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-18 23:56:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/admin/media/css/loader.GIF ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-18 23:56:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/admin/media/css/loader.GIF ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-18 23:57:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/admin/media/css/loader.GIF ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-18 23:57:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/admin/media/css/loader.GIF ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-18 23:57:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/admin/media/css/loader.GIF ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-18 23:57:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/admin/media/css/loader.GIF ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-18 23:57:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/admin/media/css/loader.GIF ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-18 23:57:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/admin/media/css/loader.GIF ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-18 23:57:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/admin/media/css/loader.GIF ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-18 23:57:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/admin/media/css/loader.GIF ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-18 23:57:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/admin/media/css/loader.GIF ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-18 23:57:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/admin/media/css/loader.GIF ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-18 23:58:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/admin/media/css/loader.GIF ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-18 23:58:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/admin/media/css/loader.GIF ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-18 23:58:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/admin/media/css/loader.GIF ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-18 23:58:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/admin/media/css/loader.GIF ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-18 23:58:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/admin/media/css/loader.GIF ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-18 23:58:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/admin/media/css/loader.GIF ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}