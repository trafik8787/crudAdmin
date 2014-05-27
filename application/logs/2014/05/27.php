<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-27 01:29:21 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'tag' ~ MODPATH/crud/views/page/edit.php [ 35 ]
2014-05-27 01:29:21 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'tag' ~ MODPATH/crud/views/page/edit.php [ 35 ]
--
#0 /var/www/kohana/modules/crud/views/page/edit.php(35): Kohana_Core::error_handler(2, 'Illegal string ...', '/var/www/kohana...', 35, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#10 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/kohana/index.php(109): Kohana_Request->execute()
#13 {main}
2014-05-27 01:47:16 --- ERROR: ErrorException [ 8 ]: Undefined index: title ~ MODPATH/crud/classes/cruds.php [ 364 ]
2014-05-27 01:47:16 --- STRACE: ErrorException [ 8 ]: Undefined index: title ~ MODPATH/crud/classes/cruds.php [ 364 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(364): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 364, Array)
#1 /var/www/kohana/modules/crud/classes/controller/test.php(39): Cruds->disable_editor('title')
#2 [internal function]: Controller_Test::asd()
#3 /var/www/kohana/modules/crud/classes/controller/crud.php(76): call_user_func(Array)
#4 [internal function]: Controller_Crud->action_edit()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-27 01:59:04 --- ERROR: ErrorException [ 8 ]: Undefined index: author ~ MODPATH/crud/views/page/edit.php [ 54 ]
2014-05-27 01:59:04 --- STRACE: ErrorException [ 8 ]: Undefined index: author ~ MODPATH/crud/views/page/edit.php [ 54 ]
--
#0 /var/www/kohana/modules/crud/views/page/edit.php(54): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 54, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#10 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/kohana/index.php(109): Kohana_Request->execute()
#13 {main}
2014-05-27 16:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-27 16:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-27 16:51:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/crud/js/DataTables-1.10.0/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-27 16:51:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/crud/js/DataTables-1.10.0/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-27 16:51:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/crud/js/DataTables-1.10.0/css/jquery.dataTables.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-27 16:51:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/crud/js/DataTables-1.10.0/css/jquery.dataTables.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-27 16:51:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/crud/js/DataTables-1.10.0/js/jquery.dataTables.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-27 16:51:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/crud/js/DataTables-1.10.0/js/jquery.dataTables.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-27 16:51:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/crud/js/DataTables-1.10.0/js/jquery.dataTables.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-27 16:51:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/crud/js/DataTables-1.10.0/js/jquery.dataTables.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-27 16:51:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/crud/js/DataTables-1.10.0/css/jquery.dataTables.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-27 16:51:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/crud/js/DataTables-1.10.0/css/jquery.dataTables.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-27 16:51:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/crud/js/DataTables-1.10.0/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-27 16:51:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/crud/js/DataTables-1.10.0/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-27 16:52:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/crud/js/DataTables-1.10.0/js/jquery.dataTables.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-27 16:52:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/crud/js/DataTables-1.10.0/js/jquery.dataTables.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-27 16:52:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/crud/js/DataTables-1.10.0/css/jquery.dataTables.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-27 16:52:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/crud/js/DataTables-1.10.0/css/jquery.dataTables.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-27 16:52:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/crud/js/DataTables-1.10.0/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-27 16:52:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/crud/js/DataTables-1.10.0/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-27 16:52:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/crud/js/DataTables-1.10.0/js/jquery.dataTables.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-27 16:52:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/crud/js/DataTables-1.10.0/js/jquery.dataTables.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-27 16:52:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/crud/js/DataTables-1.10.0/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-27 16:52:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/crud/js/DataTables-1.10.0/css/jquery.dataTables.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-27 16:52:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/crud/js/DataTables-1.10.0/css/jquery.dataTables.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-27 16:52:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/crud/js/DataTables-1.10.0/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}