<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-12 00:46:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-12 00:46:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-12 01:11:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/loader.GIF ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-12 01:11:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/loader.GIF ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-12 01:11:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/loader.GIF ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-12 01:11:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/loader.GIF ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-12 01:11:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/loader.GIF ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-12 01:11:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/loader.GIF ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-12 01:12:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/loader.GIF ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-12 01:12:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/loader.GIF ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-12 01:13:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/loader.GIF ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-12 01:13:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/loader.GIF ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-12 01:14:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/loader.GIF ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-12 01:14:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/loader.GIF ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-12 01:14:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/loader.GIF ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-12 01:14:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/loader.GIF ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-12 01:15:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/loader.GIF ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-12 01:15:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/loader.GIF ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-12 01:17:52 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR content_short LIKE '%ф%' OR data LIKE '%ф%' OR status LIKE '%ф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-12 01:17:52 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%ф%' OR title LIKE '%ф%' OR author LIKE '%ф%' OR content_short LIKE '%ф%' OR data LIKE '%ф%' OR status LIKE '%ф%'  ORDER BY idRT asc
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
2014-06-12 01:17:56 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%фф%' OR title LIKE '%фф%' OR author LIKE '%фф%' OR content_short LIKE '%фф%' OR data LIKE '%фф%' OR status LIKE '%фф%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-12 01:17:56 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%фф%' OR title LIKE '%фф%' OR author LIKE '%фф%' OR content_short LIKE '%фф%' OR data LIKE '%фф%' OR status LIKE '%фф%'  ORDER BY idRT asc
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
2014-06-12 11:22:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-12 11:22:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-12 13:35:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-12 13:35:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-12 13:35:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-12 13:35:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-12 19:46:22 --- ERROR: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%в%' OR title LIKE '%в%' OR author LIKE '%в%' OR content_short LIKE '%в%' OR data LIKE '%в%' OR status LIKE '%в%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-12 19:46:22 --- STRACE: Database_Exception [ 1271 ]: Illegal mix of collations for operation 'like' [ SELECT * FROM articles  WHERE idRT LIKE '%в%' OR title LIKE '%в%' OR author LIKE '%в%' OR content_short LIKE '%в%' OR data LIKE '%в%' OR status LIKE '%в%'  ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(148): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(275): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(19): Cruds->ajax_query(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}