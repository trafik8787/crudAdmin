<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-13 00:32:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-13 00:32:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-13 01:19:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 3 ]
2014-05-13 01:19:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 3 ]
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
2014-05-13 01:48:10 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Test::call_bef_edit() ~ MODPATH/crud/classes/controller/test.php [ 36 ]
2014-05-13 01:48:10 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Test::call_bef_edit() ~ MODPATH/crud/classes/controller/test.php [ 36 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/test.php(36): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/kohana...', 36, Array)
#1 [internal function]: Controller_Test::call_bef_edit()
#2 /var/www/kohana/modules/crud/classes/cruds.php(188): call_user_func(Array)
#3 /var/www/kohana/modules/crud/classes/controller/test.php(27): Cruds->callback_befor_edit('call_bef_edit')
#4 /var/www/kohana/modules/crud/classes/controller/test.php(14): Controller_Test::asd()
#5 [internal function]: Controller_Test->action_index()
#6 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#7 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/kohana/index.php(109): Kohana_Request->execute()
#10 {main}
2014-05-13 01:51:52 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Test::call_bef_edit() ~ MODPATH/crud/classes/controller/test.php [ 36 ]
2014-05-13 01:51:52 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Test::call_bef_edit() ~ MODPATH/crud/classes/controller/test.php [ 36 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/test.php(36): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/kohana...', 36, Array)
#1 [internal function]: Controller_Test::call_bef_edit()
#2 /var/www/kohana/modules/crud/classes/cruds.php(188): call_user_func(Array)
#3 /var/www/kohana/modules/crud/classes/controller/test.php(27): Cruds->callback_befor_edit('call_bef_edit')
#4 /var/www/kohana/modules/crud/classes/controller/test.php(14): Controller_Test::asd()
#5 [internal function]: Controller_Test->action_index()
#6 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#7 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/kohana/index.php(109): Kohana_Request->execute()
#10 {main}
2014-05-13 18:01:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-13 18:01:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-13 22:52:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-13 22:52:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-13 23:51:54 --- ERROR: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 69 ]
2014-05-13 23:51:54 --- STRACE: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 69 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(69): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 69, Array)
#1 [internal function]: Controller_Crud->action_edit()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}