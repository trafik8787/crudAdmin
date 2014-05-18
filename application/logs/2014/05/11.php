<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-11 13:57:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-11 13:57:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-11 20:26:21 --- ERROR: ErrorException [ 8 ]: Undefined index: callback_befor_delete ~ MODPATH/crud/classes/controller/crud.php [ 27 ]
2014-05-11 20:26:21 --- STRACE: ErrorException [ 8 ]: Undefined index: callback_befor_delete ~ MODPATH/crud/classes/controller/crud.php [ 27 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(27): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 27, Array)
#1 [internal function]: Controller_Crud->action_delete()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-11 20:27:57 --- ERROR: ErrorException [ 8 ]: Undefined index: callback_befor_delete ~ MODPATH/crud/classes/controller/crud.php [ 27 ]
2014-05-11 20:27:57 --- STRACE: ErrorException [ 8 ]: Undefined index: callback_befor_delete ~ MODPATH/crud/classes/controller/crud.php [ 27 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(27): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 27, Array)
#1 [internal function]: Controller_Crud->action_delete()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-11 22:03:58 --- ERROR: ErrorException [ 2 ]: call_user_func() expects at least 1 parameter, 0 given ~ MODPATH/crud/classes/cruds.php [ 119 ]
2014-05-11 22:03:58 --- STRACE: ErrorException [ 2 ]: call_user_func() expects at least 1 parameter, 0 given ~ MODPATH/crud/classes/cruds.php [ 119 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func(...', '/var/www/kohana...', 119, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(119): call_user_func()
#2 /var/www/kohana/modules/crud/classes/controller/test.php(24): Cruds->callback_befor_delete(Object(Closure))
#3 /var/www/kohana/modules/crud/classes/controller/test.php(14): Controller_Test::asd()
#4 [internal function]: Controller_Test->action_index()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-11 23:24:37 --- ERROR: ErrorException [ 8 ]: Undefined index: callback_functions_array ~ MODPATH/crud/classes/cruds.php [ 118 ]
2014-05-11 23:24:37 --- STRACE: ErrorException [ 8 ]: Undefined index: callback_functions_array ~ MODPATH/crud/classes/cruds.php [ 118 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(118): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 118, Array)
#1 /var/www/kohana/modules/crud/classes/controller/test.php(21): Cruds->callback_befor_delete('call_del')
#2 /var/www/kohana/modules/crud/classes/controller/test.php(14): Controller_Test::asd()
#3 [internal function]: Controller_Test->action_index()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-11 23:26:09 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Test::call_del() ~ MODPATH/crud/classes/controller/test.php [ 25 ]
2014-05-11 23:26:09 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Test::call_del() ~ MODPATH/crud/classes/controller/test.php [ 25 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/test.php(25): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/kohana...', 25, Array)
#1 [internal function]: Controller_Test::call_del()
#2 /var/www/kohana/modules/crud/classes/cruds.php(119): call_user_func(Array)
#3 /var/www/kohana/modules/crud/classes/controller/test.php(21): Cruds->callback_befor_delete('call_del')
#4 /var/www/kohana/modules/crud/classes/controller/test.php(14): Controller_Test::asd()
#5 [internal function]: Controller_Test->action_index()
#6 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#7 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/kohana/index.php(109): Kohana_Request->execute()
#10 {main}
2014-05-11 23:48:48 --- ERROR: ErrorException [ 1 ]: Call to undefined function call_del() ~ MODPATH/crud/classes/controller/crud.php [ 37 ]
2014-05-11 23:48:48 --- STRACE: ErrorException [ 1 ]: Call to undefined function call_del() ~ MODPATH/crud/classes/controller/crud.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-11 23:57:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-11 23:57:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}