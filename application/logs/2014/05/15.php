<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-15 02:41:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 3 ]
2014-05-15 02:41:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 3 ]
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
2014-05-15 02:42:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 3 ]
2014-05-15 02:42:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 3 ]
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
2014-05-15 02:48:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: edit_property ~ MODPATH/crud/views/page/edit.php [ 2 ]
2014-05-15 02:48:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: edit_property ~ MODPATH/crud/views/page/edit.php [ 2 ]
--
#0 /var/www/kohana/modules/crud/views/page/edit.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 2, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/main_template.php(3): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#10 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/kohana/index.php(109): Kohana_Request->execute()
#13 {main}
2014-05-15 02:48:41 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '?>' ~ MODPATH/crud/views/page/edit.php [ 2 ]
2014-05-15 02:48:41 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '?>' ~ MODPATH/crud/views/page/edit.php [ 2 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-15 02:48:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: edit_property ~ MODPATH/crud/views/page/edit.php [ 6 ]
2014-05-15 02:48:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: edit_property ~ MODPATH/crud/views/page/edit.php [ 6 ]
--
#0 /var/www/kohana/modules/crud/views/page/edit.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 6, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/main_template.php(3): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#10 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/kohana/index.php(109): Kohana_Request->execute()
#13 {main}
2014-05-15 03:08:29 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/crud/views/page/add.php [ 7 ]
2014-05-15 03:08:29 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/crud/views/page/add.php [ 7 ]
--
#0 /var/www/kohana/modules/crud/views/page/add.php(7): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/kohana...', 7, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/main_template.php(3): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#10 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/kohana/index.php(109): Kohana_Request->execute()
#13 {main}
2014-05-15 03:08:59 --- ERROR: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 153 ]
2014-05-15 03:08:59 --- STRACE: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 153 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(153): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 153, Array)
#1 [internal function]: Controller_Crud->action_add()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-15 03:10:19 --- ERROR: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 153 ]
2014-05-15 03:10:19 --- STRACE: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 153 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(153): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 153, Array)
#1 [internal function]: Controller_Crud->action_add()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-15 03:14:22 --- ERROR: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 153 ]
2014-05-15 03:14:22 --- STRACE: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 153 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(153): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 153, Array)
#1 [internal function]: Controller_Crud->action_add()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-15 03:14:27 --- ERROR: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 153 ]
2014-05-15 03:14:27 --- STRACE: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 153 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(153): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 153, Array)
#1 [internal function]: Controller_Crud->action_add()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-15 03:15:34 --- ERROR: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 69 ]
2014-05-15 03:15:34 --- STRACE: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 69 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(69): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 69, Array)
#1 [internal function]: Controller_Crud->action_edit()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-15 03:17:19 --- ERROR: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 116 ]
2014-05-15 03:17:19 --- STRACE: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 116 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(116): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 116, Array)
#1 [internal function]: Controller_Crud->action_edit()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-15 03:18:54 --- ERROR: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 177 ]
2014-05-15 03:18:54 --- STRACE: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 177 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(177): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 177, Array)
#1 [internal function]: Controller_Crud->action_add()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-15 11:10:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-15 11:10:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}