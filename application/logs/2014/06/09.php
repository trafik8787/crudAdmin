<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-09 11:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-09 11:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-09 15:21:38 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR date LIKE '%ф%' OR content_short LIKE '%ф%' OR status LIKE '%ф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-09 15:21:38 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR date LIKE '%ф%' OR content_short LIKE '%ф%' OR status LIKE '%ф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(146): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-09 15:21:45 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ы%' OR title LIKE '%ы%' OR author LIKE '%ы%' OR date LIKE '%ы%' OR content_short LIKE '%ы%' OR status LIKE '%ы%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-09 15:21:45 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ы%' OR title LIKE '%ы%' OR author LIKE '%ы%' OR date LIKE '%ы%' OR content_short LIKE '%ы%' OR status LIKE '%ы%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(146): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-09 15:21:49 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%й%' OR title LIKE '%й%' OR author LIKE '%й%' OR date LIKE '%й%' OR content_short LIKE '%й%' OR status LIKE '%й%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-09 15:21:49 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%й%' OR title LIKE '%й%' OR author LIKE '%й%' OR date LIKE '%й%' OR content_short LIKE '%й%' OR status LIKE '%й%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(146): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-09 15:22:25 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%а%' OR title LIKE '%а%' OR author LIKE '%а%' OR date LIKE '%а%' OR content_short LIKE '%а%' OR status LIKE '%а%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-09 15:22:25 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%а%' OR title LIKE '%а%' OR author LIKE '%а%' OR date LIKE '%а%' OR content_short LIKE '%а%' OR status LIKE '%а%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(146): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-09 15:22:38 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR date LIKE '%ф%' OR content_short LIKE '%ф%' OR status LIKE '%ф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-09 15:22:38 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR date LIKE '%ф%' OR content_short LIKE '%ф%' OR status LIKE '%ф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(146): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-09 15:22:41 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%фы%' OR title LIKE '%фы%' OR author LIKE '%фы%' OR date LIKE '%фы%' OR content_short LIKE '%фы%' OR status LIKE '%фы%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-09 15:22:41 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%фы%' OR title LIKE '%фы%' OR author LIKE '%фы%' OR date LIKE '%фы%' OR content_short LIKE '%фы%' OR status LIKE '%фы%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(146): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '????', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-09 15:23:03 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR date LIKE '%ф%' OR content_short LIKE '%ф%' OR status LIKE '%ф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-09 15:23:03 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR date LIKE '%ф%' OR content_short LIKE '%ф%' OR status LIKE '%ф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(146): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-09 15:26:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-09 15:26:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-09 15:26:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-09 15:26:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-09 15:26:37 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR date LIKE '%ф%' OR content_short LIKE '%ф%' OR status LIKE '%ф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-09 15:26:37 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR date LIKE '%ф%' OR content_short LIKE '%ф%' OR status LIKE '%ф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(146): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-09 15:26:58 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%м%' OR title LIKE '%м%' OR author LIKE '%м%' OR date LIKE '%м%' OR content_short LIKE '%м%' OR status LIKE '%м%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-09 15:26:58 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%м%' OR title LIKE '%м%' OR author LIKE '%м%' OR date LIKE '%м%' OR content_short LIKE '%м%' OR status LIKE '%м%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(146): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-09 15:27:46 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR date LIKE '%ф%' OR content_short LIKE '%ф%' OR status LIKE '%ф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-09 15:27:46 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR date LIKE '%ф%' OR content_short LIKE '%ф%' OR status LIKE '%ф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(146): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-09 15:29:39 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR date LIKE '%ф%' OR content_short LIKE '%ф%' OR status LIKE '%ф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-09 15:29:39 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR date LIKE '%ф%' OR content_short LIKE '%ф%' OR status LIKE '%ф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(146): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-09 15:31:45 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR date LIKE '%ф%' OR content_short LIKE '%ф%' OR status LIKE '%ф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-09 15:31:45 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR date LIKE '%ф%' OR content_short LIKE '%ф%' OR status LIKE '%ф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(146): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-09 15:35:08 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%Ñ%' OR title LIKE '%Ñ%' OR author LIKE '%Ñ%' OR date LIKE '%Ñ%' OR content_short LIKE '%Ñ%' OR status LIKE '%Ñ%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-09 15:35:08 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%Ñ%' OR title LIKE '%Ñ%' OR author LIKE '%Ñ%' OR date LIKE '%Ñ%' OR content_short LIKE '%Ñ%' OR status LIKE '%Ñ%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(146): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-09 15:46:12 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%Ñ%' OR title LIKE '%Ñ%' OR author LIKE '%Ñ%' OR date LIKE '%Ñ%' OR content_short LIKE '%Ñ%' OR status LIKE '%Ñ%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-09 15:46:12 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%Ñ%' OR title LIKE '%Ñ%' OR author LIKE '%Ñ%' OR date LIKE '%Ñ%' OR content_short LIKE '%Ñ%' OR status LIKE '%Ñ%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(146): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-09 15:47:53 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%Ñ%' OR title LIKE '%Ñ%' OR author LIKE '%Ñ%' OR date LIKE '%Ñ%' OR content_short LIKE '%Ñ%' OR status LIKE '%Ñ%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-09 15:47:53 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%Ñ%' OR title LIKE '%Ñ%' OR author LIKE '%Ñ%' OR date LIKE '%Ñ%' OR content_short LIKE '%Ñ%' OR status LIKE '%Ñ%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(146): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-09 15:48:34 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%Ñ%' OR title LIKE '%Ñ%' OR author LIKE '%Ñ%' OR date LIKE '%Ñ%' OR content_short LIKE '%Ñ%' OR status LIKE '%Ñ%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-09 15:48:34 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%Ñ%' OR title LIKE '%Ñ%' OR author LIKE '%Ñ%' OR date LIKE '%Ñ%' OR content_short LIKE '%Ñ%' OR status LIKE '%Ñ%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(146): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-09 15:48:42 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%Ñ%' OR title LIKE '%Ñ%' OR author LIKE '%Ñ%' OR date LIKE '%Ñ%' OR content_short LIKE '%Ñ%' OR status LIKE '%Ñ%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-09 15:48:42 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%Ñ%' OR title LIKE '%Ñ%' OR author LIKE '%Ñ%' OR date LIKE '%Ñ%' OR content_short LIKE '%Ñ%' OR status LIKE '%Ñ%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(146): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-09 15:48:45 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%Ñ%' OR title LIKE '%Ñ%' OR author LIKE '%Ñ%' OR date LIKE '%Ñ%' OR content_short LIKE '%Ñ%' OR status LIKE '%Ñ%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-09 15:48:45 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%Ñ%' OR title LIKE '%Ñ%' OR author LIKE '%Ñ%' OR date LIKE '%Ñ%' OR content_short LIKE '%Ñ%' OR status LIKE '%Ñ%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(146): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-09 15:49:03 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%Ñ%' OR title LIKE '%Ñ%' OR author LIKE '%Ñ%' OR date LIKE '%Ñ%' OR content_short LIKE '%Ñ%' OR status LIKE '%Ñ%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-09 15:49:03 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%Ñ%' OR title LIKE '%Ñ%' OR author LIKE '%Ñ%' OR date LIKE '%Ñ%' OR content_short LIKE '%Ñ%' OR status LIKE '%Ñ%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(146): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-09 15:49:23 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%Ñ%' OR title LIKE '%Ñ%' OR author LIKE '%Ñ%' OR date LIKE '%Ñ%' OR content_short LIKE '%Ñ%' OR status LIKE '%Ñ%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-09 15:49:23 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%Ñ%' OR title LIKE '%Ñ%' OR author LIKE '%Ñ%' OR date LIKE '%Ñ%' OR content_short LIKE '%Ñ%' OR status LIKE '%Ñ%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(146): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-09 17:01:27 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%Ñ%' OR title LIKE '%Ñ%' OR author LIKE '%Ñ%' OR date LIKE '%Ñ%' OR content_short LIKE '%Ñ%' OR status LIKE '%Ñ%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-09 17:01:27 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%Ñ%' OR title LIKE '%Ñ%' OR author LIKE '%Ñ%' OR date LIKE '%Ñ%' OR content_short LIKE '%Ñ%' OR status LIKE '%Ñ%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(146): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-09 17:02:42 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%Ñ%' OR title LIKE '%Ñ%' OR author LIKE '%Ñ%' OR date LIKE '%Ñ%' OR content_short LIKE '%Ñ%' OR status LIKE '%Ñ%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-09 17:02:42 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%Ñ%' OR title LIKE '%Ñ%' OR author LIKE '%Ñ%' OR date LIKE '%Ñ%' OR content_short LIKE '%Ñ%' OR status LIKE '%Ñ%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(146): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-09 17:03:38 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%Ñ%' OR title LIKE '%Ñ%' OR author LIKE '%Ñ%' OR date LIKE '%Ñ%' OR content_short LIKE '%Ñ%' OR status LIKE '%Ñ%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-09 17:03:38 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%Ñ%' OR title LIKE '%Ñ%' OR author LIKE '%Ñ%' OR date LIKE '%Ñ%' OR content_short LIKE '%Ñ%' OR status LIKE '%Ñ%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(146): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-09 17:03:47 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%Ñ%' OR title LIKE '%Ñ%' OR author LIKE '%Ñ%' OR date LIKE '%Ñ%' OR content_short LIKE '%Ñ%' OR status LIKE '%Ñ%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-09 17:03:47 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%Ñ%' OR title LIKE '%Ñ%' OR author LIKE '%Ñ%' OR date LIKE '%Ñ%' OR content_short LIKE '%Ñ%' OR status LIKE '%Ñ%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(146): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-09 17:04:42 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%Ñ%' OR title LIKE '%Ñ%' OR author LIKE '%Ñ%' OR date LIKE '%Ñ%' OR content_short LIKE '%Ñ%' OR status LIKE '%Ñ%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-09 17:04:42 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%Ñ%' OR title LIKE '%Ñ%' OR author LIKE '%Ñ%' OR date LIKE '%Ñ%' OR content_short LIKE '%Ñ%' OR status LIKE '%Ñ%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(146): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-09 17:05:01 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%Ñ%' OR title LIKE '%Ñ%' OR author LIKE '%Ñ%' OR date LIKE '%Ñ%' OR content_short LIKE '%Ñ%' OR status LIKE '%Ñ%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-09 17:05:01 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%Ñ%' OR title LIKE '%Ñ%' OR author LIKE '%Ñ%' OR date LIKE '%Ñ%' OR content_short LIKE '%Ñ%' OR status LIKE '%Ñ%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(146): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-09 17:07:21 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR date LIKE '%ф%' OR content_short LIKE '%ф%' OR status LIKE '%ф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-09 17:07:21 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR date LIKE '%ф%' OR content_short LIKE '%ф%' OR status LIKE '%ф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(146): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-09 17:08:59 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%полдпао%' OR title LIKE '%полдпао%' OR author LIKE '%полдпао%' OR date LIKE '%полдпао%' OR content_short LIKE '%полдпао%' OR status LIKE '%полдпао%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-09 17:08:59 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%полдпао%' OR title LIKE '%полдпао%' OR author LIKE '%полдпао%' OR date LIKE '%полдпао%' OR content_short LIKE '%полдпао%' OR status LIKE '%полдпао%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(146): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??????????????', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-09 17:36:17 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR date LIKE '%ф%' OR content_short LIKE '%ф%' OR status LIKE '%ф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-09 17:36:17 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR date LIKE '%ф%' OR content_short LIKE '%ф%' OR status LIKE '%ф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(146): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-09 17:36:25 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR date LIKE '%ф%' OR content_short LIKE '%ф%' OR status LIKE '%ф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-09 17:36:25 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR date LIKE '%ф%' OR content_short LIKE '%ф%' OR status LIKE '%ф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(146): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-09 17:38:08 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR date LIKE '%ф%' OR content_short LIKE '%ф%' OR status LIKE '%ф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-09 17:38:08 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR date LIKE '%ф%' OR content_short LIKE '%ф%' OR status LIKE '%ф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(146): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-09 17:38:18 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR date LIKE '%ф%' OR content_short LIKE '%ф%' OR status LIKE '%ф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-09 17:38:18 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR date LIKE '%ф%' OR content_short LIKE '%ф%' OR status LIKE '%ф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(146): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-09 17:38:31 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR date LIKE '%ф%' OR content_short LIKE '%ф%' OR status LIKE '%ф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-09 17:38:31 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR date LIKE '%ф%' OR content_short LIKE '%ф%' OR status LIKE '%ф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(146): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-09 17:40:21 --- ERROR: ErrorException [ 8 ]: Use of undefined constant ф - assumed 'ф' ~ MODPATH/crud/classes/model/all.php [ 149 ]
2014-06-09 17:40:21 --- STRACE: ErrorException [ 8 ]: Use of undefined constant ф - assumed 'ф' ~ MODPATH/crud/classes/model/all.php [ 149 ]
--
#0 /var/www/kohana/modules/crud/classes/model/all.php(149): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/kohana...', 149, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '', Array)
#2 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#3 [internal function]: Controller_Ajax->action_showTableAjax()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-09 17:40:41 --- ERROR: ErrorException [ 8 ]: Use of undefined constant ф - assumed 'ф' ~ MODPATH/crud/classes/model/all.php [ 149 ]
2014-06-09 17:40:41 --- STRACE: ErrorException [ 8 ]: Use of undefined constant ф - assumed 'ф' ~ MODPATH/crud/classes/model/all.php [ 149 ]
--
#0 /var/www/kohana/modules/crud/classes/model/all.php(149): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/kohana...', 149, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '', Array)
#2 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#3 [internal function]: Controller_Ajax->action_showTableAjax()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-09 17:42:52 --- ERROR: ErrorException [ 8 ]: Use of undefined constant ф - assumed 'ф' ~ MODPATH/crud/classes/model/all.php [ 149 ]
2014-06-09 17:42:52 --- STRACE: ErrorException [ 8 ]: Use of undefined constant ф - assumed 'ф' ~ MODPATH/crud/classes/model/all.php [ 149 ]
--
#0 /var/www/kohana/modules/crud/classes/model/all.php(149): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/kohana...', 149, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '', Array)
#2 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#3 [internal function]: Controller_Ajax->action_showTableAjax()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-09 17:43:26 --- ERROR: ErrorException [ 8 ]: Use of undefined constant h - assumed 'h' ~ MODPATH/crud/classes/model/all.php [ 149 ]
2014-06-09 17:43:26 --- STRACE: ErrorException [ 8 ]: Use of undefined constant h - assumed 'h' ~ MODPATH/crud/classes/model/all.php [ 149 ]
--
#0 /var/www/kohana/modules/crud/classes/model/all.php(149): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/kohana...', 149, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '', Array)
#2 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#3 [internal function]: Controller_Ajax->action_showTableAjax()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-09 17:44:50 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR date LIKE '%ф%' OR content_short LIKE '%ф%' OR status LIKE '%ф%'  LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-09 17:44:50 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR date LIKE '%ф%' OR content_short LIKE '%ф%' OR status LIKE '%ф%'  LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(146): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-09 17:50:43 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR date LIKE '%ф%' OR content_short LIKE '%ф%' OR status LIKE '%ф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-09 17:50:43 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR date LIKE '%ф%' OR content_short LIKE '%ф%' OR status LIKE '%ф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(146): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-09 17:58:27 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR date LIKE '%ф%' OR content_short LIKE '%ф%' OR status LIKE '%ф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-09 17:58:27 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR date LIKE '%ф%' OR content_short LIKE '%ф%' OR status LIKE '%ф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(146): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-09 18:03:52 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR date LIKE '%ф%' OR content_short LIKE '%ф%' OR status LIKE '%ф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-09 18:03:52 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR date LIKE '%ф%' OR content_short LIKE '%ф%' OR status LIKE '%ф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(146): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-09 20:20:01 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR date LIKE '%ф%' OR content_short LIKE '%ф%' OR status LIKE '%ф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-09 20:20:01 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR date LIKE '%ф%' OR content_short LIKE '%ф%' OR status LIKE '%ф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(146): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-09 20:31:03 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR date LIKE '%ф%' OR content_short LIKE '%ф%' OR status LIKE '%ф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-09 20:31:03 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR date LIKE '%ф%' OR content_short LIKE '%ф%' OR status LIKE '%ф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(146): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-09 20:32:39 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR date LIKE '%ф%' OR content_short LIKE '%ф%' OR status LIKE '%ф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-09 20:32:39 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR date LIKE '%ф%' OR content_short LIKE '%ф%' OR status LIKE '%ф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(146): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-09 20:34:32 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR content_short LIKE '%ф%' OR data LIKE '%ф%' OR status LIKE '%ф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-09 20:34:32 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR content_short LIKE '%ф%' OR data LIKE '%ф%' OR status LIKE '%ф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(146): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}