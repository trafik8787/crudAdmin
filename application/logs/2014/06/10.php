<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-10 01:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-10 01:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-10 11:10:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-10 11:10:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-10 16:51:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-10 16:51:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-10 19:52:56 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR content_short LIKE '%ф%' OR data LIKE '%ф%' OR status LIKE '%ф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-10 19:52:56 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR content_short LIKE '%ф%' OR data LIKE '%ф%' OR status LIKE '%ф%'  ORDER BY idRT asc
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
2014-06-10 20:04:28 --- ERROR: Database_Exception [ 1273 ]: Unknown collation: 'utf8_unicode_c' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' COLLATE utf8_unicode_c OR title LIKE '%ф%' COLLATE utf8_unicode_c OR author LIKE '%ф%' COLLATE utf8_unicode_c OR content_short LIKE '%ф%' COLLATE utf8_unicode_c OR data LIKE '%ф%' COLLATE utf8_unicode_c OR status LIKE '%ф%' COLLATE utf8_unicode_c  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-10 20:04:28 --- STRACE: Database_Exception [ 1273 ]: Unknown collation: 'utf8_unicode_c' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' COLLATE utf8_unicode_c OR title LIKE '%ф%' COLLATE utf8_unicode_c OR author LIKE '%ф%' COLLATE utf8_unicode_c OR content_short LIKE '%ф%' COLLATE utf8_unicode_c OR data LIKE '%ф%' COLLATE utf8_unicode_c OR status LIKE '%ф%' COLLATE utf8_unicode_c  ORDER BY idRT asc
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
2014-06-10 20:04:59 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' COLLATE utf8_unicode_ci OR title LIKE '%ф%' COLLATE utf8_unicode_ci OR author LIKE '%ф%' COLLATE utf8_unicode_ci OR content_short LIKE '%ф%' COLLATE utf8_unicode_ci OR data LIKE '%ф%' COLLATE utf8_unicode_ci OR status LIKE '%ф%' COLLATE utf8_unicode_ci  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-10 20:04:59 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' COLLATE utf8_unicode_ci OR title LIKE '%ф%' COLLATE utf8_unicode_ci OR author LIKE '%ф%' COLLATE utf8_unicode_ci OR content_short LIKE '%ф%' COLLATE utf8_unicode_ci OR data LIKE '%ф%' COLLATE utf8_unicode_ci OR status LIKE '%ф%' COLLATE utf8_unicode_ci  ORDER BY idRT asc
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
2014-06-10 20:07:33 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' COLLATE utf8_unicode_ci OR title LIKE '%ф%' COLLATE utf8_unicode_ci OR author LIKE '%ф%' COLLATE utf8_unicode_ci OR content_short LIKE '%ф%' COLLATE utf8_unicode_ci OR data LIKE '%ф%' COLLATE utf8_unicode_ci OR status LIKE '%ф%' COLLATE utf8_unicode_ci  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-10 20:07:33 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' COLLATE utf8_unicode_ci OR title LIKE '%ф%' COLLATE utf8_unicode_ci OR author LIKE '%ф%' COLLATE utf8_unicode_ci OR content_short LIKE '%ф%' COLLATE utf8_unicode_ci OR data LIKE '%ф%' COLLATE utf8_unicode_ci OR status LIKE '%ф%' COLLATE utf8_unicode_ci  ORDER BY idRT asc
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
2014-06-10 23:01:43 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%лодпролд%' OR title LIKE '%лодпролд%' OR author LIKE '%лодпролд%' OR content_short LIKE '%лодпролд%' OR data LIKE '%лодпролд%' OR status LIKE '%лодпролд%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-10 23:01:43 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%лодпролд%' OR title LIKE '%лодпролд%' OR author LIKE '%лодпролд%' OR content_short LIKE '%лодпролд%' OR data LIKE '%лодпролд%' OR status LIKE '%лодпролд%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(146): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '???????????????...', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-10 23:01:55 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%а%' OR title LIKE '%а%' OR author LIKE '%а%' OR content_short LIKE '%а%' OR data LIKE '%а%' OR status LIKE '%а%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-10 23:01:55 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%а%' OR title LIKE '%а%' OR author LIKE '%а%' OR content_short LIKE '%а%' OR data LIKE '%а%' OR status LIKE '%а%'  ORDER BY idRT asc
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
2014-06-10 23:01:58 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%п%' OR title LIKE '%п%' OR author LIKE '%п%' OR content_short LIKE '%п%' OR data LIKE '%п%' OR status LIKE '%п%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-10 23:01:58 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%п%' OR title LIKE '%п%' OR author LIKE '%п%' OR content_short LIKE '%п%' OR data LIKE '%п%' OR status LIKE '%п%'  ORDER BY idRT asc
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
2014-06-10 23:02:01 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%р%' OR title LIKE '%р%' OR author LIKE '%р%' OR content_short LIKE '%р%' OR data LIKE '%р%' OR status LIKE '%р%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-10 23:02:01 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%р%' OR title LIKE '%р%' OR author LIKE '%р%' OR content_short LIKE '%р%' OR data LIKE '%р%' OR status LIKE '%р%'  ORDER BY idRT asc
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
2014-06-10 23:02:06 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%н%' OR title LIKE '%н%' OR author LIKE '%н%' OR content_short LIKE '%н%' OR data LIKE '%н%' OR status LIKE '%н%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-10 23:02:06 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%н%' OR title LIKE '%н%' OR author LIKE '%н%' OR content_short LIKE '%н%' OR data LIKE '%н%' OR status LIKE '%н%'  ORDER BY idRT asc
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
2014-06-10 23:02:13 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%о%' OR title LIKE '%о%' OR author LIKE '%о%' OR content_short LIKE '%о%' OR data LIKE '%о%' OR status LIKE '%о%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-10 23:02:13 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%о%' OR title LIKE '%о%' OR author LIKE '%о%' OR content_short LIKE '%о%' OR data LIKE '%о%' OR status LIKE '%о%'  ORDER BY idRT asc
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