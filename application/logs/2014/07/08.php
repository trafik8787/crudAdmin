<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-08 13:27:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-08 13:27:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-08 13:27:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-08 13:27:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 16:57:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-08 16:57:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-08 17:26:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-08 17:26:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-08 17:28:39 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/crud/views/controls/input_text.php [ 6 ]
2014-07-08 17:28:39 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/crud/views/controls/input_text.php [ 6 ]
--
#0 /var/www/kohana/modules/crud/views/controls/input_text.php(6): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/kohana...', 6, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/page/add.php(168): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/kohana/modules/crud/views/page/main_template.php(10): Kohana_View->__toString()
#9 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#10 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#11 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#14 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/kohana/index.php(109): Kohana_Request->execute()
#17 {main}
2014-07-08 17:28:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-08 17:28:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-08 17:28:41 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/crud/views/controls/input_text.php [ 6 ]
2014-07-08 17:28:41 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/crud/views/controls/input_text.php [ 6 ]
--
#0 /var/www/kohana/modules/crud/views/controls/input_text.php(6): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/kohana...', 6, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/page/add.php(168): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/kohana/modules/crud/views/page/main_template.php(10): Kohana_View->__toString()
#9 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#10 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#11 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#14 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/kohana/index.php(109): Kohana_Request->execute()
#17 {main}
2014-07-08 17:29:51 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/crud/views/controls/input_text.php [ 6 ]
2014-07-08 17:29:51 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/crud/views/controls/input_text.php [ 6 ]
--
#0 /var/www/kohana/modules/crud/views/controls/input_text.php(6): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/kohana...', 6, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/page/add.php(168): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/kohana/modules/crud/views/page/main_template.php(10): Kohana_View->__toString()
#9 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#10 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#11 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#14 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/kohana/index.php(109): Kohana_Request->execute()
#17 {main}
2014-07-08 17:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-08 17:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-08 17:29:54 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/crud/views/controls/input_text.php [ 6 ]
2014-07-08 17:29:54 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/crud/views/controls/input_text.php [ 6 ]
--
#0 /var/www/kohana/modules/crud/views/controls/input_text.php(6): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/kohana...', 6, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/page/add.php(168): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/kohana/modules/crud/views/page/main_template.php(10): Kohana_View->__toString()
#9 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#10 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#11 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#14 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/kohana/index.php(109): Kohana_Request->execute()
#17 {main}
2014-07-08 17:30:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-08 17:30:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-08 17:30:43 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ INSERT INTO `articles` (`title`, `author`, `data`, `status`) VALUES ('кеукеукеф', 'кккк', '2014-07-17', ('y', 'n', 'ner')) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 17:30:43 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ INSERT INTO `articles` (`title`, `author`, `data`, `status`) VALUES ('кеукеукеф', 'кккк', '2014-07-17', ('y', 'n', 'ner')) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ar...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(79): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/controller/crud.php(400): Model_All->insert('articles', Array, Array)
#3 [internal function]: Controller_Crud->action_add()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-07-08 17:30:50 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ INSERT INTO `articles` (`title`, `author`, `data`, `status`) VALUES ('кеукеукеф', 'кккк', '2014-07-17', ('y', 'n', 'ner')) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 17:30:50 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ INSERT INTO `articles` (`title`, `author`, `data`, `status`) VALUES ('кеукеукеф', 'кккк', '2014-07-17', ('y', 'n', 'ner')) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ar...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(79): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/controller/crud.php(400): Model_All->insert('articles', Array, Array)
#3 [internal function]: Controller_Crud->action_add()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-07-08 17:30:51 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ INSERT INTO `articles` (`title`, `author`, `data`, `status`) VALUES ('кеукеукеф', 'кккк', '2014-07-17', ('y', 'n', 'ner')) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 17:30:51 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ INSERT INTO `articles` (`title`, `author`, `data`, `status`) VALUES ('кеукеукеф', 'кккк', '2014-07-17', ('y', 'n', 'ner')) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ar...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(79): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/controller/crud.php(400): Model_All->insert('articles', Array, Array)
#3 [internal function]: Controller_Crud->action_add()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-07-08 18:03:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-08 18:03:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-08 18:03:31 --- ERROR: ErrorException [ 8 ]: Undefined index: idRT ~ MODPATH/crud/classes/controller/crud.php [ 403 ]
2014-07-08 18:03:31 --- STRACE: ErrorException [ 8 ]: Undefined index: idRT ~ MODPATH/crud/classes/controller/crud.php [ 403 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(403): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 403, Array)
#1 [internal function]: Controller_Crud->action_add()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-07-08 18:04:47 --- ERROR: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `articles` (`status`) VALUES ('фывфыв', 'фывффывфы', '2014-07-19', 'a:2:{s:1:\"y\";s:1:\"y\";s:1:\"n\";s:1:\"n\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-08 18:04:47 --- STRACE: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `articles` (`status`) VALUES ('фывфыв', 'фывффывфы', '2014-07-19', 'a:2:{s:1:\"y\";s:1:\"y\";s:1:\"n\";s:1:\"n\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ar...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(79): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/controller/crud.php(436): Model_All->insert('articles', Array, Array)
#3 [internal function]: Controller_Crud->action_add()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-07-08 18:05:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-08 18:05:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-08 18:05:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-08 18:05:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-08 18:06:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-08 18:06:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-08 18:12:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-08 18:12:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-08 18:12:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-08 18:12:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-08 18:22:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-08 18:22:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-08 18:23:23 --- ERROR: ErrorException [ 8 ]: Undefined index: status ~ MODPATH/crud/classes/controller/crud.php [ 167 ]
2014-07-08 18:23:23 --- STRACE: ErrorException [ 8 ]: Undefined index: status ~ MODPATH/crud/classes/controller/crud.php [ 167 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(167): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 167, Array)
#1 [internal function]: Controller_Crud->action_edit()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-07-08 18:23:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-08 18:23:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-08 18:24:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-08 18:24:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-08 18:25:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-08 18:25:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-08 18:34:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-08 18:34:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-08 18:38:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-08 18:38:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-08 18:39:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-08 18:39:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-08 18:39:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-08 18:39:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-08 18:39:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-08 18:39:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-08 18:41:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-08 18:41:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-08 18:42:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-08 18:42:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-08 18:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-08 18:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-08 18:46:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-08 18:46:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-08 18:49:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-08 18:49:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-08 18:55:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-08 18:55:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-08 18:55:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-08 18:55:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-08 18:56:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-08 18:56:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-08 18:56:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-08 18:56:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}