<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-10 00:31:54 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':tab' at line 1 [ SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = :tab ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-10 00:31:54 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':tab' at line 1 [ SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = :tab ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COLUMN_N...', false, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(24): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(58): Cruds->select_table()
#3 /var/www/kohana/modules/crud/classes/controller/test.php(16): Cruds->render()
#4 [internal function]: Controller_Test->action_index()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-10 00:38:20 --- ERROR: ErrorException [ 1 ]: Call to undefined method Cruds::name_colums_table() ~ MODPATH/crud/classes/controller/test.php [ 15 ]
2014-05-10 00:38:20 --- STRACE: ErrorException [ 1 ]: Call to undefined method Cruds::name_colums_table() ~ MODPATH/crud/classes/controller/test.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 00:38:43 --- ERROR: ErrorException [ 1 ]: Call to undefined method Cruds::name_colums_table() ~ MODPATH/crud/classes/controller/test.php [ 15 ]
2014-05-10 00:38:43 --- STRACE: ErrorException [ 1 ]: Call to undefined method Cruds::name_colums_table() ~ MODPATH/crud/classes/controller/test.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 00:39:40 --- ERROR: ErrorException [ 1 ]: Call to undefined method Cruds::name_colums_table() ~ MODPATH/crud/classes/controller/test.php [ 15 ]
2014-05-10 00:39:40 --- STRACE: ErrorException [ 1 ]: Call to undefined method Cruds::name_colums_table() ~ MODPATH/crud/classes/controller/test.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 00:39:47 --- ERROR: ErrorException [ 1 ]: Call to undefined method Cruds::name_colums_table() ~ MODPATH/crud/classes/controller/test.php [ 15 ]
2014-05-10 00:39:47 --- STRACE: ErrorException [ 1 ]: Call to undefined method Cruds::name_colums_table() ~ MODPATH/crud/classes/controller/test.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 00:40:00 --- ERROR: ErrorException [ 1 ]: Call to undefined method Cruds::name_colums_table() ~ MODPATH/crud/classes/controller/test.php [ 15 ]
2014-05-10 00:40:00 --- STRACE: ErrorException [ 1 ]: Call to undefined method Cruds::name_colums_table() ~ MODPATH/crud/classes/controller/test.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 00:41:04 --- ERROR: ErrorException [ 1 ]: Call to undefined method Cruds::name_colums_table() ~ MODPATH/crud/classes/controller/test.php [ 15 ]
2014-05-10 00:41:04 --- STRACE: ErrorException [ 1 ]: Call to undefined method Cruds::name_colums_table() ~ MODPATH/crud/classes/controller/test.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 00:41:26 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 42 ]
2014-05-10 00:41:26 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 42 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(42): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 42, Array)
#1 /var/www/kohana/modules/crud/classes/controller/test.php(15): Cruds->show_name_column('??????????', 'id')
#2 [internal function]: Controller_Test->action_index()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-10 00:42:39 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 44 ]
2014-05-10 00:42:39 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 44 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(44): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 44, Array)
#1 /var/www/kohana/modules/crud/classes/controller/test.php(15): Cruds->show_name_column('??????????', 'id')
#2 [internal function]: Controller_Test->action_index()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-10 00:43:25 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 44 ]
2014-05-10 00:43:25 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 44 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(44): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 44, Array)
#1 /var/www/kohana/modules/crud/classes/controller/test.php(15): Cruds->show_name_column('??????????', 'id')
#2 [internal function]: Controller_Test->action_index()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-10 00:44:03 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 44 ]
2014-05-10 00:44:03 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 44 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(44): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 44, Array)
#1 /var/www/kohana/modules/crud/classes/controller/test.php(15): Cruds->show_name_column('??????????', 'id')
#2 [internal function]: Controller_Test->action_index()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-10 00:44:33 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 44 ]
2014-05-10 00:44:33 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 44 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(44): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 44, Array)
#1 /var/www/kohana/modules/crud/classes/controller/test.php(15): Cruds->show_name_column('??????????', 'id')
#2 [internal function]: Controller_Test->action_index()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-10 00:44:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/sprites/sprite.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-10 00:44:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/sprites/sprite.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 00:48:16 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 44 ]
2014-05-10 00:48:16 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 44 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(44): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 44, Array)
#1 /var/www/kohana/modules/crud/classes/controller/test.php(15): Cruds->show_name_column('??????????', 'id')
#2 [internal function]: Controller_Test->action_index()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-10 01:00:51 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 45 ]
2014-05-10 01:00:51 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 45 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(45): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 45, Array)
#1 /var/www/kohana/modules/crud/classes/controller/test.php(15): Cruds->show_name_column('??????????', 'id')
#2 [internal function]: Controller_Test->action_index()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-10 01:32:00 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 56 ]
2014-05-10 01:32:00 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/classes/cruds.php [ 56 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(56): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 56, Array)
#1 /var/www/kohana/modules/crud/classes/controller/test.php(15): Cruds->show_name_column('??????????', 'id')
#2 [internal function]: Controller_Test->action_index()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-10 01:59:19 --- ERROR: ErrorException [ 8 ]: Undefined index: Номер ~ MODPATH/crud/views/page/page.php [ 19 ]
2014-05-10 01:59:19 --- STRACE: ErrorException [ 8 ]: Undefined index: Номер ~ MODPATH/crud/views/page/page.php [ 19 ]
--
#0 /var/www/kohana/modules/crud/views/page/page.php(19): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 19, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/main_template.php(3): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Test))
#10 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/kohana/index.php(109): Kohana_Request->execute()
#13 {main}
2014-05-10 02:02:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: name_colums_table_show ~ MODPATH/crud/classes/cruds.php [ 65 ]
2014-05-10 02:02:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: name_colums_table_show ~ MODPATH/crud/classes/cruds.php [ 65 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(65): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 65, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(34): Cruds->select_table()
#2 /var/www/kohana/modules/crud/classes/controller/test.php(17): Cruds->render()
#3 [internal function]: Controller_Test->action_index()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-10 02:06:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: name_colums_table_show ~ MODPATH/crud/classes/cruds.php [ 80 ]
2014-05-10 02:06:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: name_colums_table_show ~ MODPATH/crud/classes/cruds.php [ 80 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(80): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 80, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(34): Cruds->select_table()
#2 /var/www/kohana/modules/crud/classes/controller/test.php(18): Cruds->render()
#3 [internal function]: Controller_Test->action_index()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-10 10:39:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-10 10:39:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 12:09:58 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/views/page/page.php [ 7 ]
2014-05-10 12:09:58 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/views/page/page.php [ 7 ]
--
#0 /var/www/kohana/modules/crud/views/page/page.php(7): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 7, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/main_template.php(3): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Test))
#10 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/kohana/index.php(109): Kohana_Request->execute()
#13 {main}
2014-05-10 12:10:23 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/views/page/page.php [ 7 ]
2014-05-10 12:10:23 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/views/page/page.php [ 7 ]
--
#0 /var/www/kohana/modules/crud/views/page/page.php(7): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 7, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/main_template.php(3): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Test))
#10 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/kohana/index.php(109): Kohana_Request->execute()
#13 {main}
2014-05-10 12:25:55 --- ERROR: ErrorException [ 8 ]: Undefined index: author ~ MODPATH/crud/classes/cruds.php [ 51 ]
2014-05-10 12:25:55 --- STRACE: ErrorException [ 8 ]: Undefined index: author ~ MODPATH/crud/classes/cruds.php [ 51 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(51): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 51, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(79): Cruds->show_name_column(Array)
#2 /var/www/kohana/modules/crud/classes/cruds.php(34): Cruds->select_table()
#3 /var/www/kohana/modules/crud/classes/controller/test.php(18): Cruds->render()
#4 [internal function]: Controller_Test->action_index()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-10 12:26:30 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/views/page/page.php [ 7 ]
2014-05-10 12:26:30 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/views/page/page.php [ 7 ]
--
#0 /var/www/kohana/modules/crud/views/page/page.php(7): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 7, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/main_template.php(3): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Test))
#10 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/kohana/index.php(109): Kohana_Request->execute()
#13 {main}
2014-05-10 13:01:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: act_delete ~ MODPATH/crud/classes/cruds.php [ 90 ]
2014-05-10 13:01:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: act_delete ~ MODPATH/crud/classes/cruds.php [ 90 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(90): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 90, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(34): Cruds->select_table()
#2 /var/www/kohana/modules/crud/classes/controller/test.php(18): Cruds->render()
#3 [internal function]: Controller_Test->action_index()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-10 13:03:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: act_delete ~ MODPATH/crud/classes/cruds.php [ 90 ]
2014-05-10 13:03:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: act_delete ~ MODPATH/crud/classes/cruds.php [ 90 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(90): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 90, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(34): Cruds->select_table()
#2 /var/www/kohana/modules/crud/classes/controller/test.php(18): Cruds->render()
#3 [internal function]: Controller_Test->action_index()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-10 13:41:29 --- ERROR: ErrorException [ 1 ]: Class 'Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 16 ]
2014-05-10 13:41:29 --- STRACE: ErrorException [ 1 ]: Class 'Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 13:42:03 --- ERROR: ErrorException [ 1 ]: Class 'Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 16 ]
2014-05-10 13:42:03 --- STRACE: ErrorException [ 1 ]: Class 'Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 13:42:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/admin/delete/1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-10 13:42:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/admin/delete/1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 13:44:46 --- ERROR: ErrorException [ 1 ]: Class 'Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 16 ]
2014-05-10 13:44:46 --- STRACE: ErrorException [ 1 ]: Class 'Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 13:47:26 --- ERROR: ErrorException [ 1 ]: Class 'Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 16 ]
2014-05-10 13:47:26 --- STRACE: ErrorException [ 1 ]: Class 'Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 13:48:27 --- ERROR: ErrorException [ 1 ]: Class 'Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 16 ]
2014-05-10 13:48:27 --- STRACE: ErrorException [ 1 ]: Class 'Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 13:48:50 --- ERROR: ErrorException [ 1 ]: Class 'Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 16 ]
2014-05-10 13:48:50 --- STRACE: ErrorException [ 1 ]: Class 'Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 13:48:52 --- ERROR: ErrorException [ 1 ]: Class 'Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 16 ]
2014-05-10 13:48:52 --- STRACE: ErrorException [ 1 ]: Class 'Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 13:48:59 --- ERROR: ErrorException [ 1 ]: Class 'Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 16 ]
2014-05-10 13:48:59 --- STRACE: ErrorException [ 1 ]: Class 'Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 13:50:25 --- ERROR: ErrorException [ 1 ]: Class 'Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 16 ]
2014-05-10 13:50:25 --- STRACE: ErrorException [ 1 ]: Class 'Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 13:50:27 --- ERROR: ErrorException [ 1 ]: Class 'Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 16 ]
2014-05-10 13:50:27 --- STRACE: ErrorException [ 1 ]: Class 'Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 13:52:48 --- ERROR: ErrorException [ 1 ]: Class 'Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 16 ]
2014-05-10 13:52:48 --- STRACE: ErrorException [ 1 ]: Class 'Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 13:52:55 --- ERROR: ErrorException [ 1 ]: Class 'Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 16 ]
2014-05-10 13:52:55 --- STRACE: ErrorException [ 1 ]: Class 'Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 13:54:02 --- ERROR: ReflectionException [ 0 ]: Class Controller_Crud does not have a constructor, so you cannot pass any constructor arguments ~ SYSPATH/classes/kohana/request/client/internal.php [ 101 ]
2014-05-10 13:54:02 --- STRACE: ReflectionException [ 0 ]: Class Controller_Crud does not have a constructor, so you cannot pass any constructor arguments ~ SYSPATH/classes/kohana/request/client/internal.php [ 101 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#1 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#2 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#3 /var/www/kohana/index.php(109): Kohana_Request->execute()
#4 {main}
2014-05-10 13:57:32 --- ERROR: ReflectionException [ 0 ]: Class Controller_Crud does not have a constructor, so you cannot pass any constructor arguments ~ SYSPATH/classes/kohana/request/client/internal.php [ 101 ]
2014-05-10 13:57:32 --- STRACE: ReflectionException [ 0 ]: Class Controller_Crud does not have a constructor, so you cannot pass any constructor arguments ~ SYSPATH/classes/kohana/request/client/internal.php [ 101 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#1 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#2 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#3 /var/www/kohana/index.php(109): Kohana_Request->execute()
#4 {main}
2014-05-10 13:58:23 --- ERROR: ReflectionException [ 0 ]: Class Controller_Crud does not have a constructor, so you cannot pass any constructor arguments ~ SYSPATH/classes/kohana/request/client/internal.php [ 101 ]
2014-05-10 13:58:23 --- STRACE: ReflectionException [ 0 ]: Class Controller_Crud does not have a constructor, so you cannot pass any constructor arguments ~ SYSPATH/classes/kohana/request/client/internal.php [ 101 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#1 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#2 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#3 /var/www/kohana/index.php(109): Kohana_Request->execute()
#4 {main}
2014-05-10 13:58:27 --- ERROR: ReflectionException [ 0 ]: Class Controller_Crud does not have a constructor, so you cannot pass any constructor arguments ~ SYSPATH/classes/kohana/request/client/internal.php [ 101 ]
2014-05-10 13:58:27 --- STRACE: ReflectionException [ 0 ]: Class Controller_Crud does not have a constructor, so you cannot pass any constructor arguments ~ SYSPATH/classes/kohana/request/client/internal.php [ 101 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#1 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#2 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#3 /var/www/kohana/index.php(109): Kohana_Request->execute()
#4 {main}
2014-05-10 13:58:59 --- ERROR: ErrorException [ 1 ]: Class 'Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 16 ]
2014-05-10 13:58:59 --- STRACE: ErrorException [ 1 ]: Class 'Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 14:57:14 --- ERROR: ErrorException [ 1 ]: Class 'Registry' not found ~ MODPATH/crud/classes/controller/test.php [ 16 ]
2014-05-10 14:57:14 --- STRACE: ErrorException [ 1 ]: Class 'Registry' not found ~ MODPATH/crud/classes/controller/test.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 14:57:15 --- ERROR: ErrorException [ 1 ]: Class 'Registry' not found ~ MODPATH/crud/classes/controller/test.php [ 16 ]
2014-05-10 14:57:15 --- STRACE: ErrorException [ 1 ]: Class 'Registry' not found ~ MODPATH/crud/classes/controller/test.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 14:57:27 --- ERROR: ErrorException [ 1 ]: Class 'Registry' not found ~ MODPATH/crud/classes/controller/test.php [ 16 ]
2014-05-10 14:57:27 --- STRACE: ErrorException [ 1 ]: Class 'Registry' not found ~ MODPATH/crud/classes/controller/test.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 15:00:15 --- ERROR: ErrorException [ 2 ]: file_put_contents(modules/test.ser): failed to open stream: Permission denied ~ MODPATH/crud/classes/cruds.php [ 47 ]
2014-05-10 15:00:15 --- STRACE: ErrorException [ 2 ]: file_put_contents(modules/test.ser): failed to open stream: Permission denied ~ MODPATH/crud/classes/cruds.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/var/www/kohana...', 47, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(47): file_put_contents('modules/test.se...', 'a:2:{s:2:"db";a...')
#2 /var/www/kohana/modules/crud/classes/controller/test.php(18): Cruds->render()
#3 [internal function]: Controller_Test->action_index()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-10 15:00:33 --- ERROR: ErrorException [ 2 ]: file_put_contents(/modules/test.ser): failed to open stream: No such file or directory ~ MODPATH/crud/classes/cruds.php [ 47 ]
2014-05-10 15:00:33 --- STRACE: ErrorException [ 2 ]: file_put_contents(/modules/test.ser): failed to open stream: No such file or directory ~ MODPATH/crud/classes/cruds.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/var/www/kohana...', 47, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(47): file_put_contents('/modules/test.s...', 'a:2:{s:2:"db";a...')
#2 /var/www/kohana/modules/crud/classes/controller/test.php(18): Cruds->render()
#3 [internal function]: Controller_Test->action_index()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-10 15:01:08 --- ERROR: ErrorException [ 2 ]: file_put_contents(/modules/ctud/test.ser): failed to open stream: No such file or directory ~ MODPATH/crud/classes/cruds.php [ 47 ]
2014-05-10 15:01:08 --- STRACE: ErrorException [ 2 ]: file_put_contents(/modules/ctud/test.ser): failed to open stream: No such file or directory ~ MODPATH/crud/classes/cruds.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/var/www/kohana...', 47, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(47): file_put_contents('/modules/ctud/t...', 'a:2:{s:2:"db";a...')
#2 /var/www/kohana/modules/crud/classes/controller/test.php(18): Cruds->render()
#3 [internal function]: Controller_Test->action_index()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-10 15:01:39 --- ERROR: ErrorException [ 2 ]: file_put_contents(modules/crud/test.ser): failed to open stream: Permission denied ~ MODPATH/crud/classes/cruds.php [ 47 ]
2014-05-10 15:01:39 --- STRACE: ErrorException [ 2 ]: file_put_contents(modules/crud/test.ser): failed to open stream: Permission denied ~ MODPATH/crud/classes/cruds.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/var/www/kohana...', 47, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(47): file_put_contents('modules/crud/te...', 'a:2:{s:2:"db";a...')
#2 /var/www/kohana/modules/crud/classes/controller/test.php(18): Cruds->render()
#3 [internal function]: Controller_Test->action_index()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-10 15:06:00 --- ERROR: ErrorException [ 2 ]: file_put_contents(modules/crud/test.ser): failed to open stream: Permission denied ~ MODPATH/crud/classes/cruds.php [ 47 ]
2014-05-10 15:06:00 --- STRACE: ErrorException [ 2 ]: file_put_contents(modules/crud/test.ser): failed to open stream: Permission denied ~ MODPATH/crud/classes/cruds.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/var/www/kohana...', 47, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(47): file_put_contents('modules/crud/te...', 'a:2:{s:2:"db";a...')
#2 /var/www/kohana/modules/crud/classes/controller/test.php(18): Cruds->render()
#3 [internal function]: Controller_Test->action_index()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-10 15:06:10 --- ERROR: ErrorException [ 2 ]: file_put_contents(/var/www/kohanamodules/crud/test.ser): failed to open stream: No such file or directory ~ MODPATH/crud/classes/cruds.php [ 47 ]
2014-05-10 15:06:10 --- STRACE: ErrorException [ 2 ]: file_put_contents(/var/www/kohanamodules/crud/test.ser): failed to open stream: No such file or directory ~ MODPATH/crud/classes/cruds.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/var/www/kohana...', 47, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(47): file_put_contents('/var/www/kohana...', 'a:2:{s:2:"db";a...')
#2 /var/www/kohana/modules/crud/classes/controller/test.php(18): Cruds->render()
#3 [internal function]: Controller_Test->action_index()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-10 15:06:26 --- ERROR: ErrorException [ 2 ]: file_put_contents(/var/www/kohana/modules/crud/test.ser): failed to open stream: Permission denied ~ MODPATH/crud/classes/cruds.php [ 47 ]
2014-05-10 15:06:26 --- STRACE: ErrorException [ 2 ]: file_put_contents(/var/www/kohana/modules/crud/test.ser): failed to open stream: Permission denied ~ MODPATH/crud/classes/cruds.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/var/www/kohana...', 47, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(47): file_put_contents('/var/www/kohana...', 'a:2:{s:2:"db";a...')
#2 /var/www/kohana/modules/crud/classes/controller/test.php(18): Cruds->render()
#3 [internal function]: Controller_Test->action_index()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-10 15:07:38 --- ERROR: ErrorException [ 2 ]: file_put_contents(/var/www/kohana/modules/crud/tmp/test.ser): failed to open stream: Permission denied ~ MODPATH/crud/classes/cruds.php [ 47 ]
2014-05-10 15:07:38 --- STRACE: ErrorException [ 2 ]: file_put_contents(/var/www/kohana/modules/crud/tmp/test.ser): failed to open stream: Permission denied ~ MODPATH/crud/classes/cruds.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/var/www/kohana...', 47, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(47): file_put_contents('/var/www/kohana...', 'a:2:{s:2:"db";a...')
#2 /var/www/kohana/modules/crud/classes/controller/test.php(18): Cruds->render()
#3 [internal function]: Controller_Test->action_index()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-10 15:10:15 --- ERROR: ErrorException [ 2 ]: file_put_contents(/var/www/kohana/modules/crud/tmp/test.ser): failed to open stream: Permission denied ~ MODPATH/crud/classes/cruds.php [ 47 ]
2014-05-10 15:10:15 --- STRACE: ErrorException [ 2 ]: file_put_contents(/var/www/kohana/modules/crud/tmp/test.ser): failed to open stream: Permission denied ~ MODPATH/crud/classes/cruds.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/var/www/kohana...', 47, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(47): file_put_contents('/var/www/kohana...', 'a:2:{s:2:"db";a...')
#2 /var/www/kohana/modules/crud/classes/controller/test.php(18): Cruds->render()
#3 [internal function]: Controller_Test->action_index()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-10 15:14:21 --- ERROR: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
2014-05-10 15:14:21 --- STRACE: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 15:20:09 --- ERROR: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
2014-05-10 15:20:09 --- STRACE: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 15:20:13 --- ERROR: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
2014-05-10 15:20:13 --- STRACE: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 15:20:17 --- ERROR: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
2014-05-10 15:20:17 --- STRACE: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 15:20:23 --- ERROR: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
2014-05-10 15:20:23 --- STRACE: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 15:23:07 --- ERROR: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
2014-05-10 15:23:07 --- STRACE: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 15:31:03 --- ERROR: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
2014-05-10 15:31:03 --- STRACE: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 15:33:29 --- ERROR: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
2014-05-10 15:33:29 --- STRACE: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 15:33:34 --- ERROR: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
2014-05-10 15:33:34 --- STRACE: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 15:34:50 --- ERROR: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
2014-05-10 15:34:50 --- STRACE: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 15:35:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 3 ]
2014-05-10 15:35:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 3 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 3, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-10 15:37:55 --- ERROR: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
2014-05-10 15:37:55 --- STRACE: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 15:39:32 --- ERROR: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
2014-05-10 15:39:32 --- STRACE: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 15:39:35 --- ERROR: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
2014-05-10 15:39:35 --- STRACE: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 15:40:20 --- ERROR: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
2014-05-10 15:40:20 --- STRACE: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 15:40:58 --- ERROR: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
2014-05-10 15:40:58 --- STRACE: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 15:41:15 --- ERROR: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
2014-05-10 15:41:15 --- STRACE: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 15:42:36 --- ERROR: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
2014-05-10 15:42:36 --- STRACE: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 15:42:42 --- ERROR: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 16 ]
2014-05-10 15:42:42 --- STRACE: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 15:52:30 --- ERROR: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
2014-05-10 15:52:30 --- STRACE: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 15:53:33 --- ERROR: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
2014-05-10 15:53:33 --- STRACE: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 15:53:36 --- ERROR: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
2014-05-10 15:53:36 --- STRACE: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 15:55:09 --- ERROR: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
2014-05-10 15:55:09 --- STRACE: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 15:55:44 --- ERROR: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
2014-05-10 15:55:44 --- STRACE: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 15:55:46 --- ERROR: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
2014-05-10 15:55:46 --- STRACE: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 15:55:47 --- ERROR: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
2014-05-10 15:55:47 --- STRACE: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 15:57:02 --- ERROR: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
2014-05-10 15:57:02 --- STRACE: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 15:57:06 --- ERROR: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
2014-05-10 15:57:06 --- STRACE: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 15:57:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/sprites/sprite.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-10 15:57:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/sprites/sprite.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 15:58:23 --- ERROR: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
2014-05-10 15:58:23 --- STRACE: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 15:58:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 3 ]
2014-05-10 15:58:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 3 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 3, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-10 15:59:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 3 ]
2014-05-10 15:59:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 3 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 3, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-10 15:59:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 3 ]
2014-05-10 15:59:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 3 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 3, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-10 15:59:45 --- ERROR: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT * FROM `` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-10 15:59:45 --- STRACE: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT * FROM `` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(98): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(57): Cruds->select_table()
#3 /var/www/kohana/modules/crud/classes/controller/crud.php(25): Cruds->render()
#4 [internal function]: Controller_Crud->action_delete()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-10 16:04:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 3 ]
2014-05-10 16:04:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 3 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 3, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-10 16:04:20 --- ERROR: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
2014-05-10 16:04:20 --- STRACE: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 16:04:54 --- ERROR: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
2014-05-10 16:04:54 --- STRACE: ErrorException [ 1 ]: Class 'Parameters_Registry' not found ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 16:32:31 --- ERROR: ErrorException [ 8 ]: Undefined index: foo ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
2014-05-10 16:32:31 --- STRACE: ErrorException [ 8 ]: Undefined index: foo ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(15): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 15, Array)
#1 [internal function]: Controller_Crud->action_delete()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-10 16:45:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: table_name ~ MODPATH/crud/views/page/page.php [ 25 ]
2014-05-10 16:45:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: table_name ~ MODPATH/crud/views/page/page.php [ 25 ]
--
#0 /var/www/kohana/modules/crud/views/page/page.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 25, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/main_template.php(3): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Test))
#10 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/kohana/index.php(109): Kohana_Request->execute()
#13 {main}
2014-05-10 16:45:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: table_name ~ MODPATH/crud/views/page/page.php [ 25 ]
2014-05-10 16:45:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: table_name ~ MODPATH/crud/views/page/page.php [ 25 ]
--
#0 /var/www/kohana/modules/crud/views/page/page.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 25, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/main_template.php(3): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Test))
#10 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/kohana/index.php(109): Kohana_Request->execute()
#13 {main}
2014-05-10 16:48:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 3 ]
2014-05-10 16:48:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 3 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 3, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-10 16:49:25 --- ERROR: ErrorException [ 8 ]: unserialize(): Error at offset 0 of 4 bytes ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
2014-05-10 16:49:25 --- STRACE: ErrorException [ 8 ]: unserialize(): Error at offset 0 of 4 bytes ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'unserialize(): ...', '/var/www/kohana...', 15, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(15): unserialize('s:8:')
#2 [internal function]: Controller_Crud->action_delete()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-10 16:49:32 --- ERROR: ErrorException [ 8 ]: unserialize(): Error at offset 0 of 4 bytes ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
2014-05-10 16:49:32 --- STRACE: ErrorException [ 8 ]: unserialize(): Error at offset 0 of 4 bytes ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'unserialize(): ...', '/var/www/kohana...', 15, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(15): unserialize('s:8:')
#2 [internal function]: Controller_Crud->action_delete()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-10 16:57:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 3 ]
2014-05-10 16:57:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 3 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 3, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-10 17:08:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/delete/1/rovaOnkv/GSqJ9JreoNwkBbhS9F25DDO ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-10 17:08:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/delete/1/rovaOnkv/GSqJ9JreoNwkBbhS9F25DDO ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 17:11:08 --- ERROR: ErrorException [ 1 ]: Call to a member function param() on a non-object ~ MODPATH/crud/classes/controller/crud.php [ 23 ]
2014-05-10 17:11:08 --- STRACE: ErrorException [ 1 ]: Call to a member function param() on a non-object ~ MODPATH/crud/classes/controller/crud.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 17:11:45 --- ERROR: ErrorException [ 1 ]: Call to a member function param() on a non-object ~ MODPATH/crud/classes/controller/crud.php [ 23 ]
2014-05-10 17:11:45 --- STRACE: ErrorException [ 1 ]: Call to a member function param() on a non-object ~ MODPATH/crud/classes/controller/crud.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 17:13:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/delete/1//QfC4LpN2g9njWS6IqEkpDMr49XenSWO ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-10 17:13:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/delete/1//QfC4LpN2g9njWS6IqEkpDMr49XenSWO ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 17:14:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/delete/1//QfC4LpN2g9njWS6IqEkpDMr49XenSWO ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-10 17:14:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/delete/1//QfC4LpN2g9njWS6IqEkpDMr49XenSWO ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 17:14:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/delete/1//QfC4LpN2g9njWS6IqEkpDMr49XenSWO ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-10 17:14:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/delete/1//QfC4LpN2g9njWS6IqEkpDMr49XenSWO ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 17:17:39 --- ERROR: ErrorException [ 1 ]: Call to a member function param() on a non-object ~ MODPATH/crud/classes/controller/crud.php [ 18 ]
2014-05-10 17:17:39 --- STRACE: ErrorException [ 1 ]: Call to a member function param() on a non-object ~ MODPATH/crud/classes/controller/crud.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 17:21:21 --- ERROR: ErrorException [ 1 ]: Call to a member function param() on a non-object ~ MODPATH/crud/classes/controller/crud.php [ 18 ]
2014-05-10 17:21:21 --- STRACE: ErrorException [ 1 ]: Call to a member function param() on a non-object ~ MODPATH/crud/classes/controller/crud.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 17:25:06 --- ERROR: ErrorException [ 1 ]: Call to a member function param() on a non-object ~ MODPATH/crud/classes/controller/crud.php [ 18 ]
2014-05-10 17:25:06 --- STRACE: ErrorException [ 1 ]: Call to a member function param() on a non-object ~ MODPATH/crud/classes/controller/crud.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 17:25:41 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2014-05-10 17:25:41 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 17:26:27 --- ERROR: ErrorException [ 8 ]: unserialize(): Error at offset 0 of 4 bytes ~ MODPATH/crud/classes/controller/crud.php [ 22 ]
2014-05-10 17:26:27 --- STRACE: ErrorException [ 8 ]: unserialize(): Error at offset 0 of 4 bytes ~ MODPATH/crud/classes/controller/crud.php [ 22 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'unserialize(): ...', '/var/www/kohana...', 22, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(22): unserialize('s:8:')
#2 [internal function]: Controller_Crud->action_delete()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-10 17:26:58 --- ERROR: ErrorException [ 8 ]: unserialize(): Error at offset 0 of 4 bytes ~ MODPATH/crud/classes/controller/crud.php [ 22 ]
2014-05-10 17:26:58 --- STRACE: ErrorException [ 8 ]: unserialize(): Error at offset 0 of 4 bytes ~ MODPATH/crud/classes/controller/crud.php [ 22 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'unserialize(): ...', '/var/www/kohana...', 22, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(22): unserialize('s:8:')
#2 [internal function]: Controller_Crud->action_delete()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-10 17:27:03 --- ERROR: ErrorException [ 8 ]: unserialize(): Error at offset 9 of 13 bytes ~ MODPATH/crud/classes/controller/crud.php [ 22 ]
2014-05-10 17:27:03 --- STRACE: ErrorException [ 8 ]: unserialize(): Error at offset 9 of 13 bytes ~ MODPATH/crud/classes/controller/crud.php [ 22 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'unserialize(): ...', '/var/www/kohana...', 22, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(22): unserialize('a:1:{i:0;s:8:')
#2 [internal function]: Controller_Crud->action_delete()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-10 17:29:37 --- ERROR: ErrorException [ 8 ]: unserialize(): Error at offset 9 of 13 bytes ~ MODPATH/crud/classes/controller/crud.php [ 22 ]
2014-05-10 17:29:37 --- STRACE: ErrorException [ 8 ]: unserialize(): Error at offset 9 of 13 bytes ~ MODPATH/crud/classes/controller/crud.php [ 22 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'unserialize(): ...', '/var/www/kohana...', 22, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(22): unserialize('a:1:{i:0;s:8:')
#2 [internal function]: Controller_Crud->action_delete()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-10 17:29:47 --- ERROR: ErrorException [ 8 ]: unserialize(): Error at offset 5 of 9 bytes ~ MODPATH/crud/classes/controller/crud.php [ 22 ]
2014-05-10 17:29:47 --- STRACE: ErrorException [ 8 ]: unserialize(): Error at offset 5 of 9 bytes ~ MODPATH/crud/classes/controller/crud.php [ 22 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'unserialize(): ...', '/var/www/kohana...', 22, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(22): unserialize('a:1:{s:5:')
#2 [internal function]: Controller_Crud->action_delete()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-10 17:56:32 --- ERROR: ErrorException [ 8 ]: unserialize(): Error at offset 0 of 8 bytes ~ MODPATH/crud/classes/controller/crud.php [ 22 ]
2014-05-10 17:56:32 --- STRACE: ErrorException [ 8 ]: unserialize(): Error at offset 0 of 8 bytes ~ MODPATH/crud/classes/controller/crud.php [ 22 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'unserialize(): ...', '/var/www/kohana...', 22, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(22): unserialize('articles')
#2 [internal function]: Controller_Crud->action_delete()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-10 17:59:30 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2014-05-10 17:59:30 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 18:00:25 --- ERROR: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT * FROM `` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-10 18:00:25 --- STRACE: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT * FROM `` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(78): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(37): Cruds->select_table()
#3 /var/www/kohana/modules/crud/classes/controller/crud.php(26): Cruds->render()
#4 [internal function]: Controller_Crud->action_delete()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-10 18:00:45 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2014-05-10 18:00:45 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 18:01:30 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2014-05-10 18:01:30 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 18:03:22 --- ERROR: ErrorException [ 1 ]: Call to undefined method HTTP::redirect() ~ MODPATH/crud/classes/controller/crud.php [ 27 ]
2014-05-10 18:03:22 --- STRACE: ErrorException [ 1 ]: Call to undefined method HTTP::redirect() ~ MODPATH/crud/classes/controller/crud.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 18:03:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/sprites/sprite.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-10 18:03:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/sprites/sprite.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 18:06:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL delete/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-10 18:06:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL delete/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-10 18:06:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL delete/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-10 18:06:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL delete/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-10 18:06:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL delete/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-10 18:06:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL delete/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-10 18:06:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL twitter was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-10 18:06:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL twitter was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-10 18:06:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-10 18:06:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 18:06:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL delete/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-10 18:06:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL delete/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-10 18:07:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL delete/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-10 18:07:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL delete/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-10 18:07:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL twitter was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-10 18:07:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL twitter was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-10 18:07:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-10 18:07:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-10 18:09:05 --- ERROR: ErrorException [ 1 ]: Call to a member function param() on a non-object ~ MODPATH/crud/classes/controller/crud.php [ 24 ]
2014-05-10 18:09:05 --- STRACE: ErrorException [ 1 ]: Call to a member function param() on a non-object ~ MODPATH/crud/classes/controller/crud.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 18:21:21 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2014-05-10 18:21:21 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 19:02:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/delete/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-10 19:02:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/delete/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-10 19:04:24 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2014-05-10 19:04:24 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 19:04:38 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2014-05-10 19:04:38 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 19:05:10 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2014-05-10 19:05:10 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 19:05:12 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2014-05-10 19:05:12 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 19:05:30 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2014-05-10 19:05:30 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 19:05:53 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2014-05-10 19:05:53 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 19:05:55 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2014-05-10 19:05:55 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 19:06:39 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2014-05-10 19:06:39 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 19:06:41 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2014-05-10 19:06:41 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 19:06:52 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2014-05-10 19:06:52 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 19:07:09 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2014-05-10 19:07:09 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 19:07:58 --- ERROR: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 32 ~ SYSPATH/classes/kohana/route.php [ 402 ]
2014-05-10 19:07:58 --- STRACE: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 32 ~ SYSPATH/classes/kohana/route.php [ 402 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/kohana...', 402, Array)
#1 /var/www/kohana/system/classes/kohana/route.php(402): preg_match('#^admin/edit/(?...', 'admin/delete/1', NULL)
#2 /var/www/kohana/system/classes/kohana/request.php(582): Kohana_Route->matches('admin/delete/1')
#3 /var/www/kohana/system/classes/kohana/request.php(800): Kohana_Request::process_uri('admin/delete/1', Array)
#4 /var/www/kohana/system/classes/kohana/request.php(208): Kohana_Request->__construct('admin/delete/1', NULL, Array)
#5 /var/www/kohana/index.php(108): Kohana_Request::factory()
#6 {main}
2014-05-10 19:08:01 --- ERROR: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 32 ~ SYSPATH/classes/kohana/route.php [ 402 ]
2014-05-10 19:08:01 --- STRACE: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 32 ~ SYSPATH/classes/kohana/route.php [ 402 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/kohana...', 402, Array)
#1 /var/www/kohana/system/classes/kohana/route.php(402): preg_match('#^admin/edit/(?...', 'admin/delete/1', NULL)
#2 /var/www/kohana/system/classes/kohana/request.php(582): Kohana_Route->matches('admin/delete/1')
#3 /var/www/kohana/system/classes/kohana/request.php(800): Kohana_Request::process_uri('admin/delete/1', Array)
#4 /var/www/kohana/system/classes/kohana/request.php(208): Kohana_Request->__construct('admin/delete/1', NULL, Array)
#5 /var/www/kohana/index.php(108): Kohana_Request::factory()
#6 {main}
2014-05-10 19:08:23 --- ERROR: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 37 ~ SYSPATH/classes/kohana/route.php [ 402 ]
2014-05-10 19:08:23 --- STRACE: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 37 ~ SYSPATH/classes/kohana/route.php [ 402 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/kohana...', 402, Array)
#1 /var/www/kohana/system/classes/kohana/route.php(402): preg_match('#^admin/edit(?:...', 'admin/delete/1', NULL)
#2 /var/www/kohana/system/classes/kohana/request.php(582): Kohana_Route->matches('admin/delete/1')
#3 /var/www/kohana/system/classes/kohana/request.php(800): Kohana_Request::process_uri('admin/delete/1', Array)
#4 /var/www/kohana/system/classes/kohana/request.php(208): Kohana_Request->__construct('admin/delete/1', NULL, Array)
#5 /var/www/kohana/index.php(108): Kohana_Request::factory()
#6 {main}
2014-05-10 19:08:24 --- ERROR: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 37 ~ SYSPATH/classes/kohana/route.php [ 402 ]
2014-05-10 19:08:24 --- STRACE: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 37 ~ SYSPATH/classes/kohana/route.php [ 402 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/kohana...', 402, Array)
#1 /var/www/kohana/system/classes/kohana/route.php(402): preg_match('#^admin/edit(?:...', 'admin/delete/1', NULL)
#2 /var/www/kohana/system/classes/kohana/request.php(582): Kohana_Route->matches('admin/delete/1')
#3 /var/www/kohana/system/classes/kohana/request.php(800): Kohana_Request::process_uri('admin/delete/1', Array)
#4 /var/www/kohana/system/classes/kohana/request.php(208): Kohana_Request->__construct('admin/delete/1', NULL, Array)
#5 /var/www/kohana/index.php(108): Kohana_Request::factory()
#6 {main}
2014-05-10 19:17:12 --- ERROR: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 37 ~ SYSPATH/classes/kohana/route.php [ 402 ]
2014-05-10 19:17:12 --- STRACE: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 37 ~ SYSPATH/classes/kohana/route.php [ 402 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/kohana...', 402, Array)
#1 /var/www/kohana/system/classes/kohana/route.php(402): preg_match('#^admin/edit(?:...', 'admin/delete', NULL)
#2 /var/www/kohana/system/classes/kohana/request.php(582): Kohana_Route->matches('admin/delete')
#3 /var/www/kohana/system/classes/kohana/request.php(800): Kohana_Request::process_uri('admin/delete', Array)
#4 /var/www/kohana/system/classes/kohana/request.php(208): Kohana_Request->__construct('admin/delete', NULL, Array)
#5 /var/www/kohana/index.php(108): Kohana_Request::factory()
#6 {main}
2014-05-10 19:17:51 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2014-05-10 19:17:51 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 19:18:24 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2014-05-10 19:18:24 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 19:18:30 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2014-05-10 19:18:30 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 19:21:10 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2014-05-10 19:21:10 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 19:21:26 --- ERROR: Database_Exception [ 1103 ]: Incorrect table name '' [ DELETE FROM `` WHERE `id` = '0' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-10 19:21:26 --- STRACE: Database_Exception [ 1103 ]: Incorrect table name '' [ DELETE FROM `` WHERE `id` = '0' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(4, 'DELETE FROM `` ...', false, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(30): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Crud->action_delete()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-10 19:23:55 --- ERROR: ErrorException [ 8 ]: unserialize(): Error at offset 5 of 9 bytes ~ MODPATH/crud/classes/controller/crud.php [ 26 ]
2014-05-10 19:23:55 --- STRACE: ErrorException [ 8 ]: unserialize(): Error at offset 5 of 9 bytes ~ MODPATH/crud/classes/controller/crud.php [ 26 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'unserialize(): ...', '/var/www/kohana...', 26, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(26): unserialize('a:1:{s:5:')
#2 [internal function]: Controller_Crud->action_delete()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-10 19:24:29 --- ERROR: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 26 ]
2014-05-10 19:24:29 --- STRACE: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 26 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(26): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 26, Array)
#1 [internal function]: Controller_Crud->action_delete()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-10 19:24:53 --- ERROR: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 27 ]
2014-05-10 19:24:53 --- STRACE: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 27 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(27): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 27, Array)
#1 [internal function]: Controller_Crud->action_delete()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-10 19:25:18 --- ERROR: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 27 ]
2014-05-10 19:25:18 --- STRACE: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 27 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(27): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 27, Array)
#1 [internal function]: Controller_Crud->action_delete()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-10 19:25:32 --- ERROR: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 27 ]
2014-05-10 19:25:32 --- STRACE: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 27 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(27): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 27, Array)
#1 [internal function]: Controller_Crud->action_delete()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-10 19:25:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: re ~ MODPATH/crud/classes/controller/crud.php [ 28 ]
2014-05-10 19:25:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: re ~ MODPATH/crud/classes/controller/crud.php [ 28 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 28, Array)
#1 [internal function]: Controller_Crud->action_delete()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-10 19:25:48 --- ERROR: Database_Exception [ 1103 ]: Incorrect table name '' [ DELETE FROM `` WHERE `id` = '0' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-10 19:25:48 --- STRACE: Database_Exception [ 1103 ]: Incorrect table name '' [ DELETE FROM `` WHERE `id` = '0' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(4, 'DELETE FROM `` ...', false, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(33): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Crud->action_delete()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-10 19:26:14 --- ERROR: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 27 ]
2014-05-10 19:26:14 --- STRACE: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 27 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(27): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 27, Array)
#1 [internal function]: Controller_Crud->action_delete()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-10 19:26:27 --- ERROR: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 27 ]
2014-05-10 19:26:27 --- STRACE: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 27 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(27): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 27, Array)
#1 [internal function]: Controller_Crud->action_delete()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-10 19:26:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: re ~ MODPATH/crud/classes/controller/crud.php [ 28 ]
2014-05-10 19:26:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: re ~ MODPATH/crud/classes/controller/crud.php [ 28 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 28, Array)
#1 [internal function]: Controller_Crud->action_delete()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-10 19:26:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: re ~ MODPATH/crud/classes/controller/crud.php [ 28 ]
2014-05-10 19:26:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: re ~ MODPATH/crud/classes/controller/crud.php [ 28 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 28, Array)
#1 [internal function]: Controller_Crud->action_delete()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-10 19:27:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: re ~ MODPATH/crud/classes/controller/crud.php [ 28 ]
2014-05-10 19:27:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: re ~ MODPATH/crud/classes/controller/crud.php [ 28 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 28, Array)
#1 [internal function]: Controller_Crud->action_delete()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-10 19:27:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: re ~ MODPATH/crud/classes/controller/crud.php [ 28 ]
2014-05-10 19:27:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: re ~ MODPATH/crud/classes/controller/crud.php [ 28 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 28, Array)
#1 [internal function]: Controller_Crud->action_delete()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-10 19:27:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: re ~ MODPATH/crud/classes/controller/crud.php [ 28 ]
2014-05-10 19:27:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: re ~ MODPATH/crud/classes/controller/crud.php [ 28 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 28, Array)
#1 [internal function]: Controller_Crud->action_delete()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-10 19:27:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: re ~ MODPATH/crud/classes/controller/crud.php [ 28 ]
2014-05-10 19:27:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: re ~ MODPATH/crud/classes/controller/crud.php [ 28 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 28, Array)
#1 [internal function]: Controller_Crud->action_delete()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-10 19:31:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: re ~ MODPATH/crud/classes/controller/crud.php [ 28 ]
2014-05-10 19:31:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: re ~ MODPATH/crud/classes/controller/crud.php [ 28 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 28, Array)
#1 [internal function]: Controller_Crud->action_delete()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-10 19:31:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: re ~ MODPATH/crud/classes/controller/crud.php [ 28 ]
2014-05-10 19:31:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: re ~ MODPATH/crud/classes/controller/crud.php [ 28 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 28, Array)
#1 [internal function]: Controller_Crud->action_delete()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-10 19:31:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: re ~ MODPATH/crud/classes/controller/crud.php [ 28 ]
2014-05-10 19:31:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: re ~ MODPATH/crud/classes/controller/crud.php [ 28 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 28, Array)
#1 [internal function]: Controller_Crud->action_delete()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-10 19:32:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: re ~ MODPATH/crud/classes/controller/crud.php [ 28 ]
2014-05-10 19:32:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: re ~ MODPATH/crud/classes/controller/crud.php [ 28 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 28, Array)
#1 [internal function]: Controller_Crud->action_delete()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-10 19:32:53 --- ERROR: ErrorException [ 8 ]: unserialize(): Error at offset 9 of 13 bytes ~ MODPATH/crud/classes/controller/crud.php [ 26 ]
2014-05-10 19:32:53 --- STRACE: ErrorException [ 8 ]: unserialize(): Error at offset 9 of 13 bytes ~ MODPATH/crud/classes/controller/crud.php [ 26 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'unserialize(): ...', '/var/www/kohana...', 26, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(26): unserialize('a:1:{i:1;s:8:')
#2 [internal function]: Controller_Crud->action_delete()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-10 19:35:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: re ~ MODPATH/crud/classes/controller/crud.php [ 28 ]
2014-05-10 19:35:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: re ~ MODPATH/crud/classes/controller/crud.php [ 28 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 28, Array)
#1 [internal function]: Controller_Crud->action_delete()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-10 19:35:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: re ~ MODPATH/crud/classes/controller/crud.php [ 28 ]
2014-05-10 19:35:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: re ~ MODPATH/crud/classes/controller/crud.php [ 28 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 28, Array)
#1 [internal function]: Controller_Crud->action_delete()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-10 19:39:21 --- ERROR: ErrorException [ 2 ]: base64_encode() expects parameter 1 to be string, array given ~ MODPATH/crud/classes/cruds.php [ 95 ]
2014-05-10 19:39:21 --- STRACE: ErrorException [ 2 ]: base64_encode() expects parameter 1 to be string, array given ~ MODPATH/crud/classes/cruds.php [ 95 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'base64_encode()...', '/var/www/kohana...', 95, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(95): base64_encode(Array)
#2 /var/www/kohana/modules/crud/classes/cruds.php(37): Cruds->select_table()
#3 /var/www/kohana/modules/crud/classes/controller/test.php(18): Cruds->render()
#4 [internal function]: Controller_Test->action_index()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-10 19:39:27 --- ERROR: ErrorException [ 2 ]: base64_encode() expects parameter 1 to be string, array given ~ MODPATH/crud/classes/cruds.php [ 95 ]
2014-05-10 19:39:27 --- STRACE: ErrorException [ 2 ]: base64_encode() expects parameter 1 to be string, array given ~ MODPATH/crud/classes/cruds.php [ 95 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'base64_encode()...', '/var/www/kohana...', 95, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(95): base64_encode(Array)
#2 /var/www/kohana/modules/crud/classes/cruds.php(37): Cruds->select_table()
#3 /var/www/kohana/modules/crud/classes/controller/test.php(18): Cruds->render()
#4 [internal function]: Controller_Test->action_index()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-10 19:39:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: re ~ MODPATH/crud/classes/controller/crud.php [ 28 ]
2014-05-10 19:39:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: re ~ MODPATH/crud/classes/controller/crud.php [ 28 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 28, Array)
#1 [internal function]: Controller_Crud->action_delete()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-10 19:40:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: re ~ MODPATH/crud/classes/controller/crud.php [ 28 ]
2014-05-10 19:40:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: re ~ MODPATH/crud/classes/controller/crud.php [ 28 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 28, Array)
#1 [internal function]: Controller_Crud->action_delete()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-10 19:40:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: re ~ MODPATH/crud/classes/controller/crud.php [ 28 ]
2014-05-10 19:40:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: re ~ MODPATH/crud/classes/controller/crud.php [ 28 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 28, Array)
#1 [internal function]: Controller_Crud->action_delete()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-10 21:16:46 --- ERROR: ErrorException [ 8 ]: Use of undefined constant __FUNCTION_ - assumed '__FUNCTION_' ~ MODPATH/crud/classes/cruds.php [ 111 ]
2014-05-10 21:16:46 --- STRACE: ErrorException [ 8 ]: Use of undefined constant __FUNCTION_ - assumed '__FUNCTION_' ~ MODPATH/crud/classes/cruds.php [ 111 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(111): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/kohana...', 111, Array)
#1 /var/www/kohana/modules/crud/classes/controller/test.php(16): Cruds->callback_befor_delete()
#2 [internal function]: Controller_Test->action_index()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-10 22:58:41 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/crud/classes/controller/test.php [ 16 ]
2014-05-10 22:58:41 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/crud/classes/controller/test.php [ 16 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/test.php(16): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/kohana...', 16, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-10 23:24:53 --- ERROR: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 26 ]
2014-05-10 23:24:53 --- STRACE: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 26 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(26): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 26, Array)
#1 [internal function]: Controller_Crud->action_delete()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-10 23:28:28 --- ERROR: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 26 ]
2014-05-10 23:28:28 --- STRACE: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 26 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(26): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 26, Array)
#1 [internal function]: Controller_Crud->action_delete()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-10 23:28:31 --- ERROR: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 26 ]
2014-05-10 23:28:31 --- STRACE: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 26 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(26): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 26, Array)
#1 [internal function]: Controller_Crud->action_delete()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-10 23:32:06 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /var/www/kohana/modules/crud/classes/controller/crud.php on line 28 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
2014-05-10 23:32:06 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /var/www/kohana/modules/crud/classes/controller/crud.php on line 28 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
--
#0 /var/www/kohana/system/classes/kohana/controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/kohana...', 43, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(28): Kohana_Controller->__construct()
#2 [internal function]: Controller_Crud->action_delete()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-10 23:33:27 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /var/www/kohana/modules/crud/classes/controller/crud.php on line 28 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
2014-05-10 23:33:27 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /var/www/kohana/modules/crud/classes/controller/crud.php on line 28 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
--
#0 /var/www/kohana/system/classes/kohana/controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/kohana...', 43, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(28): Kohana_Controller->__construct()
#2 [internal function]: Controller_Crud->action_delete()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-10 23:33:45 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /var/www/kohana/modules/crud/classes/controller/crud.php on line 28 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
2014-05-10 23:33:45 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /var/www/kohana/modules/crud/classes/controller/crud.php on line 28 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
--
#0 /var/www/kohana/system/classes/kohana/controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/kohana...', 43, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(28): Kohana_Controller->__construct()
#2 [internal function]: Controller_Crud->action_delete()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-10 23:34:47 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /var/www/kohana/modules/crud/classes/controller/crud.php on line 28 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
2014-05-10 23:34:47 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /var/www/kohana/modules/crud/classes/controller/crud.php on line 28 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
--
#0 /var/www/kohana/system/classes/kohana/controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/kohana...', 43, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(28): Kohana_Controller->__construct()
#2 [internal function]: Controller_Crud->action_delete()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-10 23:35:01 --- ERROR: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 26 ]
2014-05-10 23:35:01 --- STRACE: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 26 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(26): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 26, Array)
#1 [internal function]: Controller_Crud->action_delete()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-10 23:35:16 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /var/www/kohana/modules/crud/classes/controller/crud.php on line 28 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
2014-05-10 23:35:16 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /var/www/kohana/modules/crud/classes/controller/crud.php on line 28 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
--
#0 /var/www/kohana/system/classes/kohana/controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/kohana...', 43, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(28): Kohana_Controller->__construct()
#2 [internal function]: Controller_Crud->action_delete()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-10 23:35:31 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /var/www/kohana/modules/crud/classes/controller/crud.php on line 28 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
2014-05-10 23:35:31 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /var/www/kohana/modules/crud/classes/controller/crud.php on line 28 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
--
#0 /var/www/kohana/system/classes/kohana/controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/kohana...', 43, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(28): Kohana_Controller->__construct()
#2 [internal function]: Controller_Crud->action_delete()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-10 23:41:45 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ MODPATH/crud/classes/controller/test.php [ 14 ]
2014-05-10 23:41:45 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ MODPATH/crud/classes/controller/test.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 23:46:09 --- ERROR: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 26 ]
2014-05-10 23:46:09 --- STRACE: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 26 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(26): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 26, Array)
#1 [internal function]: Controller_Crud->action_delete()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-10 23:47:44 --- ERROR: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 26 ]
2014-05-10 23:47:44 --- STRACE: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 26 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(26): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 26, Array)
#1 [internal function]: Controller_Crud->action_delete()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-10 23:50:11 --- ERROR: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 26 ]
2014-05-10 23:50:11 --- STRACE: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 26 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(26): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 26, Array)
#1 [internal function]: Controller_Crud->action_delete()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-10 23:54:45 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: Controller_Test::$re ~ MODPATH/crud/classes/controller/crud.php [ 28 ]
2014-05-10 23:54:45 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: Controller_Test::$re ~ MODPATH/crud/classes/controller/crud.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-10 23:55:18 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/crud/classes/controller/crud.php [ 29 ]
2014-05-10 23:55:18 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/crud/classes/controller/crud.php [ 29 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(29): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/kohana...', 29, Array)
#1 [internal function]: Controller_Crud->action_delete()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-10 23:55:32 --- ERROR: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 26 ]
2014-05-10 23:55:32 --- STRACE: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 26 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(26): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 26, Array)
#1 [internal function]: Controller_Crud->action_delete()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}