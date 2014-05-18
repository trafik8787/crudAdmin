<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-09 01:54:31 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Crud::load_table() ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
2014-05-09 01:54:31 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Crud::load_table() ~ MODPATH/crud/classes/controller/crud.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-09 02:15:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 3 ]
2014-05-09 02:15:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 3 ]
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
2014-05-09 02:16:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 3 ]
2014-05-09 02:16:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 3 ]
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
2014-05-09 02:22:52 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Crud::action_index() ~ MODPATH/crud/classes/controller/crud.php [ 18 ]
2014-05-09 02:22:52 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Crud::action_index() ~ MODPATH/crud/classes/controller/crud.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-09 02:30:09 --- ERROR: ErrorException [ 2 ]: get_class() expects parameter 1 to be object, string given ~ MODPATH/crud/classes/controller/crud.php [ 16 ]
2014-05-09 02:30:09 --- STRACE: ErrorException [ 2 ]: get_class() expects parameter 1 to be object, string given ~ MODPATH/crud/classes/controller/crud.php [ 16 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'get_class() exp...', '/var/www/kohana...', 16, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(16): get_class('action_index')
#2 [internal function]: Controller_Crud->action_delete()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-09 02:37:50 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/crud/classes/controller/crud.php [ 16 ]
2014-05-09 02:37:50 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/crud/classes/controller/crud.php [ 16 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(16): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/kohana...', 16, Array)
#1 [internal function]: Controller_Crud->action_delete()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-09 03:22:43 --- ERROR: ErrorException [ 4096 ]: Object of class Cruds could not be converted to string ~ MODPATH/crud/views/page/page.php [ 5 ]
2014-05-09 03:22:43 --- STRACE: ErrorException [ 4096 ]: Object of class Cruds could not be converted to string ~ MODPATH/crud/views/page/page.php [ 5 ]
--
#0 /var/www/kohana/modules/crud/views/page/page.php(5): Kohana_Core::error_handler(4096, 'Object of class...', '/var/www/kohana...', 5, Array)
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
2014-05-09 11:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-09 11:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-09 11:42:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-09 11:42:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-09 21:40:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: del ~ MODPATH/crud/views/page/page.php [ 5 ]
2014-05-09 21:40:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: del ~ MODPATH/crud/views/page/page.php [ 5 ]
--
#0 /var/www/kohana/modules/crud/views/page/page.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 5, Array)
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
2014-05-09 21:40:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-09 21:40:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-09 21:40:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: del ~ MODPATH/crud/views/page/page.php [ 5 ]
2014-05-09 21:40:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: del ~ MODPATH/crud/views/page/page.php [ 5 ]
--
#0 /var/www/kohana/modules/crud/views/page/page.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 5, Array)
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
2014-05-09 21:59:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: del ~ MODPATH/crud/views/page/page.php [ 5 ]
2014-05-09 21:59:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: del ~ MODPATH/crud/views/page/page.php [ 5 ]
--
#0 /var/www/kohana/modules/crud/views/page/page.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 5, Array)
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
2014-05-09 22:23:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: del ~ MODPATH/crud/views/page/page.php [ 5 ]
2014-05-09 22:23:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: del ~ MODPATH/crud/views/page/page.php [ 5 ]
--
#0 /var/www/kohana/modules/crud/views/page/page.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 5, Array)
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
2014-05-09 22:23:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: del ~ MODPATH/crud/views/page/page.php [ 5 ]
2014-05-09 22:23:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: del ~ MODPATH/crud/views/page/page.php [ 5 ]
--
#0 /var/www/kohana/modules/crud/views/page/page.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 5, Array)
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
2014-05-09 22:52:46 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/crud/views/page/page.php [ 9 ]
2014-05-09 22:52:46 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/crud/views/page/page.php [ 9 ]
--
#0 /var/www/kohana/modules/crud/views/page/page.php(9): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/kohana...', 9, Array)
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
2014-05-09 23:01:50 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/crud/views/page/page.php [ 4 ]
2014-05-09 23:01:50 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/crud/views/page/page.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/page/page.php(4): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/kohana...', 4, Array)
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
2014-05-09 23:10:33 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':tab' at line 1 [ SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = :tab ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-09 23:10:33 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':tab' at line 1 [ SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = :tab ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COLUMN_N...', false, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(22): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(49): Cruds->select_table()
#3 /var/www/kohana/modules/crud/classes/controller/test.php(16): Cruds->render()
#4 [internal function]: Controller_Test->action_index()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-09 23:10:57 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':tab' at line 1 [ SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = :tab ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-09 23:10:57 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':tab' at line 1 [ SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = :tab ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COLUMN_N...', false, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(22): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(49): Cruds->select_table()
#3 /var/www/kohana/modules/crud/classes/controller/test.php(16): Cruds->render()
#4 [internal function]: Controller_Test->action_index()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-09 23:11:58 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':tab' at line 1 [ SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = :tab ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-09 23:11:58 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':tab' at line 1 [ SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = :tab ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COLUMN_N...', false, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(22): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(49): Cruds->select_table()
#3 /var/www/kohana/modules/crud/classes/controller/test.php(16): Cruds->render()
#4 [internal function]: Controller_Test->action_index()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-09 23:12:00 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':tab' at line 1 [ SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = :tab ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-09 23:12:00 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':tab' at line 1 [ SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = :tab ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COLUMN_N...', false, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(22): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(49): Cruds->select_table()
#3 /var/www/kohana/modules/crud/classes/controller/test.php(16): Cruds->render()
#4 [internal function]: Controller_Test->action_index()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-09 23:13:07 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':tab' at line 1 [ SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = :tab ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-09 23:13:07 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':tab' at line 1 [ SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = :tab ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COLUMN_N...', false, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(22): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(48): Cruds->select_table()
#3 /var/www/kohana/modules/crud/classes/controller/test.php(16): Cruds->render()
#4 [internal function]: Controller_Test->action_index()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-09 23:13:59 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':tab' at line 1 [ SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = :tab ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-09 23:13:59 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':tab' at line 1 [ SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = :tab ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COLUMN_N...', false, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(22): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(48): Cruds->select_table()
#3 /var/www/kohana/modules/crud/classes/controller/test.php(16): Cruds->render()
#4 [internal function]: Controller_Test->action_index()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-09 23:16:37 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':tab' at line 1 [ SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = :tab ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-09 23:16:37 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':tab' at line 1 [ SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = :tab ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COLUMN_N...', false, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(22): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(48): Cruds->select_table()
#3 /var/www/kohana/modules/crud/classes/controller/test.php(16): Cruds->render()
#4 [internal function]: Controller_Test->action_index()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-09 23:17:47 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'articles' in 'where clause' [ SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = articles ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-09 23:17:47 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'articles' in 'where clause' [ SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = articles ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COLUMN_N...', false, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(22): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(48): Cruds->select_table()
#3 /var/www/kohana/modules/crud/classes/controller/test.php(16): Cruds->render()
#4 [internal function]: Controller_Test->action_index()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-09 23:18:42 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query::as_array() ~ MODPATH/crud/classes/cruds.php [ 23 ]
2014-05-09 23:18:42 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query::as_array() ~ MODPATH/crud/classes/cruds.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-09 23:19:03 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ MODPATH/crud/classes/cruds.php [ 22 ]
2014-05-09 23:19:03 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ MODPATH/crud/classes/cruds.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-09 23:19:15 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'articles' in 'where clause' [ SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = articles ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-09 23:19:15 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'articles' in 'where clause' [ SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = articles ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COLUMN_N...', false, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(22): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(49): Cruds->select_table()
#3 /var/www/kohana/modules/crud/classes/controller/test.php(16): Cruds->render()
#4 [internal function]: Controller_Test->action_index()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-09 23:19:36 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':tab' at line 1 [ SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = :tab ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-09 23:19:36 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':tab' at line 1 [ SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = :tab ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COLUMN_N...', false, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(22): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/cruds.php(49): Cruds->select_table()
#3 /var/www/kohana/modules/crud/classes/controller/test.php(16): Cruds->render()
#4 [internal function]: Controller_Test->action_index()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-09 23:22:52 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$name_colums_table' (T_VARIABLE) ~ MODPATH/crud/classes/cruds.php [ 24 ]
2014-05-09 23:22:52 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$name_colums_table' (T_VARIABLE) ~ MODPATH/crud/classes/cruds.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-09 23:24:14 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$table' (T_VARIABLE) ~ MODPATH/crud/classes/cruds.php [ 22 ]
2014-05-09 23:24:14 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$table' (T_VARIABLE) ~ MODPATH/crud/classes/cruds.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-09 23:33:31 --- ERROR: ErrorException [ 8 ]: Undefined index: title ~ MODPATH/crud/views/page/page.php [ 15 ]
2014-05-09 23:33:31 --- STRACE: ErrorException [ 8 ]: Undefined index: title ~ MODPATH/crud/views/page/page.php [ 15 ]
--
#0 /var/www/kohana/modules/crud/views/page/page.php(15): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 15, Array)
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