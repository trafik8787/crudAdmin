<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-07 00:28:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
2014-06-07 00:28:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(315): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 315, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-07 00:33:29 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY idRT asc
            LIMIT 0,10' at line 1 [ SELECT * FROM articles  WHERE 'idRT' LIKE '%прп%' AND 'title' LIKE '%прп%' AND 'author' LIKE '%прп%' AND   ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-07 00:33:29 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY idRT asc
            LIMIT 0,10' at line 1 [ SELECT * FROM articles  WHERE 'idRT' LIKE '%прп%' AND 'title' LIKE '%прп%' AND 'author' LIKE '%прп%' AND   ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(146): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', '??????', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-07 00:36:16 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY idRT asc
            LIMIT 0,10' at line 1 [ SELECT * FROM articles  WHERE 'idRT' LIKE '%у%' OR 'title' LIKE '%у%' OR 'author' LIKE '%у%' OR   ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-07 00:36:16 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY idRT asc
            LIMIT 0,10' at line 1 [ SELECT * FROM articles  WHERE 'idRT' LIKE '%у%' OR 'title' LIKE '%у%' OR 'author' LIKE '%у%' OR   ORDER BY idRT asc
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
2014-06-07 00:36:32 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY idRT asc
            LIMIT 0,10' at line 1 [ SELECT * FROM articles  WHERE 'idRT' LIKE '%w%' OR 'title' LIKE '%w%' OR 'author' LIKE '%w%' OR   ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-07 00:36:32 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY idRT asc
            LIMIT 0,10' at line 1 [ SELECT * FROM articles  WHERE 'idRT' LIKE '%w%' OR 'title' LIKE '%w%' OR 'author' LIKE '%w%' OR   ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(146): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', 'w', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-07 00:49:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
2014-06-07 00:49:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(315): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 315, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-07 00:53:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
2014-06-07 00:53:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(315): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 315, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-07 00:53:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
2014-06-07 00:53:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(315): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 315, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-07 00:58:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
2014-06-07 00:58:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(315): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 315, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-07 00:59:04 --- ERROR: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH/crud/classes/cruds.php [ 254 ]
2014-06-07 00:59:04 --- STRACE: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH/crud/classes/cruds.php [ 254 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(254): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/kohana...', 254, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-07 00:59:07 --- ERROR: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH/crud/classes/cruds.php [ 254 ]
2014-06-07 00:59:07 --- STRACE: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH/crud/classes/cruds.php [ 254 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(254): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/kohana...', 254, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-07 01:13:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
2014-06-07 01:13:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(315): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 315, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-07 01:13:51 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY idRT asc
            LIMIT 0,10' at line 1 [ SELECT * FROM articles  WHERE 'idRT' LIKE '%в%' OR 'title' LIKE '%в%' OR 'author' LIKE '%в%' OR   ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-07 01:13:51 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY idRT asc
            LIMIT 0,10' at line 1 [ SELECT * FROM articles  WHERE 'idRT' LIKE '%в%' OR 'title' LIKE '%в%' OR 'author' LIKE '%в%' OR   ORDER BY idRT asc
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
2014-06-07 01:13:58 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY idRT asc
            LIMIT 0,10' at line 1 [ SELECT * FROM articles  WHERE 'idRT' LIKE '%п%' OR 'title' LIKE '%п%' OR 'author' LIKE '%п%' OR   ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-07 01:13:58 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY idRT asc
            LIMIT 0,10' at line 1 [ SELECT * FROM articles  WHERE 'idRT' LIKE '%п%' OR 'title' LIKE '%п%' OR 'author' LIKE '%п%' OR   ORDER BY idRT asc
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
2014-06-07 01:14:03 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY idRT asc
            LIMIT 0,10' at line 1 [ SELECT * FROM articles  WHERE 'idRT' LIKE '%g%' OR 'title' LIKE '%g%' OR 'author' LIKE '%g%' OR   ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-07 01:14:03 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY idRT asc
            LIMIT 0,10' at line 1 [ SELECT * FROM articles  WHERE 'idRT' LIKE '%g%' OR 'title' LIKE '%g%' OR 'author' LIKE '%g%' OR   ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(146): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', 'g', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-07 01:19:07 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY idRT asc
            LIMIT 0,10' at line 1 [ SELECT * FROM articles  WHERE '.idRT.' LIKE '%d%' OR '.title.' LIKE '%d%' OR '.author.' LIKE '%d%' OR   ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-07 01:19:07 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY idRT asc
            LIMIT 0,10' at line 1 [ SELECT * FROM articles  WHERE '.idRT.' LIKE '%d%' OR '.title.' LIKE '%d%' OR '.author.' LIKE '%d%' OR   ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(146): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', 'd', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-07 01:20:30 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY idRT asc
            LIMIT 0,10' at line 1 [ SELECT * FROM articles  WHERE idRT LIKE '%d%' OR title LIKE '%d%' OR author LIKE '%d%' OR   ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-06-07 01:20:30 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY idRT asc
            LIMIT 0,10' at line 1 [ SELECT * FROM articles  WHERE idRT LIKE '%d%' OR title LIKE '%d%' OR author LIKE '%d%' OR   ORDER BY idRT asc
            LIMIT 0,10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(146): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(265): Model_All->paginationAjax('10', '0', 'articles', 'idRT', 'asc', 'd', Array)
#3 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#4 [internal function]: Controller_Ajax->action_showTableAjax()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-07 01:21:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
2014-06-07 01:21:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(315): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 315, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-07 01:21:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
2014-06-07 01:21:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(315): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 315, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-07 01:25:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
2014-06-07 01:25:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 315 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(315): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 315, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-07 01:32:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 316 ]
2014-06-07 01:32:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: dataQuery ~ MODPATH/crud/classes/cruds.php [ 316 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(316): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 316, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(18): Cruds->ajax_test(Array)
#2 [internal function]: Controller_Ajax->action_showTableAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-07 23:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-07 23:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}