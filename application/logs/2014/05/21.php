<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-21 00:37:19 --- ERROR: ErrorException [ 8 ]: Undefined index: id ~ MODPATH/crud/views/page/page.php [ 28 ]
2014-05-21 00:37:19 --- STRACE: ErrorException [ 8 ]: Undefined index: id ~ MODPATH/crud/views/page/page.php [ 28 ]
--
#0 /var/www/kohana/modules/crud/views/page/page.php(28): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 28, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Test))
#10 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/kohana/index.php(109): Kohana_Request->execute()
#13 {main}
2014-05-21 00:44:41 --- ERROR: ErrorException [ 8 ]: Undefined index: id ~ MODPATH/crud/views/page/page.php [ 28 ]
2014-05-21 00:44:41 --- STRACE: ErrorException [ 8 ]: Undefined index: id ~ MODPATH/crud/views/page/page.php [ 28 ]
--
#0 /var/www/kohana/modules/crud/views/page/page.php(28): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 28, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Test))
#10 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/kohana/index.php(109): Kohana_Request->execute()
#13 {main}
2014-05-21 00:45:56 --- ERROR: ErrorException [ 8 ]: Undefined index: key_primary ~ MODPATH/crud/views/page/page.php [ 28 ]
2014-05-21 00:45:56 --- STRACE: ErrorException [ 8 ]: Undefined index: key_primary ~ MODPATH/crud/views/page/page.php [ 28 ]
--
#0 /var/www/kohana/modules/crud/views/page/page.php(28): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 28, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Test))
#10 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/kohana/index.php(109): Kohana_Request->execute()
#13 {main}
2014-05-21 00:46:43 --- ERROR: ErrorException [ 8 ]: Undefined index: key_primary ~ MODPATH/crud/views/page/page.php [ 27 ]
2014-05-21 00:46:43 --- STRACE: ErrorException [ 8 ]: Undefined index: key_primary ~ MODPATH/crud/views/page/page.php [ 27 ]
--
#0 /var/www/kohana/modules/crud/views/page/page.php(27): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 27, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Test))
#10 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/kohana/index.php(109): Kohana_Request->execute()
#13 {main}
2014-05-21 00:49:28 --- ERROR: ErrorException [ 8 ]: Undefined index: key_primary ~ MODPATH/crud/views/page/page.php [ 28 ]
2014-05-21 00:49:28 --- STRACE: ErrorException [ 8 ]: Undefined index: key_primary ~ MODPATH/crud/views/page/page.php [ 28 ]
--
#0 /var/www/kohana/modules/crud/views/page/page.php(28): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 28, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Test))
#10 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/kohana/index.php(109): Kohana_Request->execute()
#13 {main}
2014-05-21 00:49:59 --- ERROR: ErrorException [ 8 ]: Undefined index: key_primary ~ MODPATH/crud/views/page/page.php [ 28 ]
2014-05-21 00:49:59 --- STRACE: ErrorException [ 8 ]: Undefined index: key_primary ~ MODPATH/crud/views/page/page.php [ 28 ]
--
#0 /var/www/kohana/modules/crud/views/page/page.php(28): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 28, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Test))
#10 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/kohana/index.php(109): Kohana_Request->execute()
#13 {main}
2014-05-21 00:50:16 --- ERROR: ErrorException [ 8 ]: Undefined index: key_primary ~ MODPATH/crud/views/page/page.php [ 28 ]
2014-05-21 00:50:16 --- STRACE: ErrorException [ 8 ]: Undefined index: key_primary ~ MODPATH/crud/views/page/page.php [ 28 ]
--
#0 /var/www/kohana/modules/crud/views/page/page.php(28): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 28, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Test))
#10 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/kohana/index.php(109): Kohana_Request->execute()
#13 {main}
2014-05-21 00:51:33 --- ERROR: ErrorException [ 8 ]: Undefined index: id ~ MODPATH/crud/views/page/page.php [ 37 ]
2014-05-21 00:51:33 --- STRACE: ErrorException [ 8 ]: Undefined index: id ~ MODPATH/crud/views/page/page.php [ 37 ]
--
#0 /var/www/kohana/modules/crud/views/page/page.php(37): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 37, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Test))
#10 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/kohana/index.php(109): Kohana_Request->execute()
#13 {main}
2014-05-21 01:43:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: new_colums ~ MODPATH/crud/classes/cruds.php [ 130 ]
2014-05-21 01:43:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: new_colums ~ MODPATH/crud/classes/cruds.php [ 130 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(130): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 130, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(81): Cruds->select_table()
#2 /var/www/kohana/modules/crud/classes/controller/test.php(14): Cruds->render()
#3 [internal function]: Controller_Test->action_index()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-21 01:43:52 --- ERROR: ErrorException [ 8 ]: Undefined index: title ~ MODPATH/crud/classes/controller/test.php [ 74 ]
2014-05-21 01:43:52 --- STRACE: ErrorException [ 8 ]: Undefined index: title ~ MODPATH/crud/classes/controller/test.php [ 74 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/test.php(74): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 74, Array)
#1 [internal function]: Controller_Test::cal_bef_inser(Array)
#2 /var/www/kohana/modules/crud/classes/controller/crud.php(200): call_user_func(Array, Array)
#3 [internal function]: Controller_Crud->action_add()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-21 01:45:50 --- ERROR: ErrorException [ 8 ]: Undefined index: id ~ MODPATH/crud/classes/controller/crud.php [ 105 ]
2014-05-21 01:45:50 --- STRACE: ErrorException [ 8 ]: Undefined index: id ~ MODPATH/crud/classes/controller/crud.php [ 105 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(105): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 105, Array)
#1 [internal function]: Controller_Crud->action_edit()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-21 02:01:13 --- ERROR: ErrorException [ 2 ]: array_values() expects parameter 1 to be array, null given ~ MODPATH/crud/classes/controller/crud.php [ 209 ]
2014-05-21 02:01:13 --- STRACE: ErrorException [ 2 ]: array_values() expects parameter 1 to be array, null given ~ MODPATH/crud/classes/controller/crud.php [ 209 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_values() ...', '/var/www/kohana...', 209, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(209): array_values(NULL)
#2 [internal function]: Controller_Crud->action_add()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-21 02:01:32 --- ERROR: ErrorException [ 2 ]: array_values() expects parameter 1 to be array, null given ~ MODPATH/crud/classes/controller/crud.php [ 209 ]
2014-05-21 02:01:32 --- STRACE: ErrorException [ 2 ]: array_values() expects parameter 1 to be array, null given ~ MODPATH/crud/classes/controller/crud.php [ 209 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_values() ...', '/var/www/kohana...', 209, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(209): array_values(NULL)
#2 [internal function]: Controller_Crud->action_add()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-21 02:06:37 --- ERROR: ErrorException [ 2 ]: array_values() expects parameter 1 to be array, null given ~ MODPATH/crud/classes/controller/crud.php [ 209 ]
2014-05-21 02:06:37 --- STRACE: ErrorException [ 2 ]: array_values() expects parameter 1 to be array, null given ~ MODPATH/crud/classes/controller/crud.php [ 209 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_values() ...', '/var/www/kohana...', 209, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(209): array_values(NULL)
#2 [internal function]: Controller_Crud->action_add()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-21 02:21:40 --- ERROR: ErrorException [ 2 ]: array_values() expects parameter 1 to be array, null given ~ MODPATH/crud/classes/controller/crud.php [ 214 ]
2014-05-21 02:21:40 --- STRACE: ErrorException [ 2 ]: array_values() expects parameter 1 to be array, null given ~ MODPATH/crud/classes/controller/crud.php [ 214 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_values() ...', '/var/www/kohana...', 214, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(214): array_values(NULL)
#2 [internal function]: Controller_Crud->action_add()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-21 02:23:13 --- ERROR: ErrorException [ 2 ]: array_values() expects parameter 1 to be array, null given ~ MODPATH/crud/classes/controller/crud.php [ 214 ]
2014-05-21 02:23:13 --- STRACE: ErrorException [ 2 ]: array_values() expects parameter 1 to be array, null given ~ MODPATH/crud/classes/controller/crud.php [ 214 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_values() ...', '/var/www/kohana...', 214, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(214): array_values(NULL)
#2 [internal function]: Controller_Crud->action_add()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-21 02:25:24 --- ERROR: ErrorException [ 2 ]: array_values() expects parameter 1 to be array, null given ~ MODPATH/crud/classes/controller/crud.php [ 214 ]
2014-05-21 02:25:24 --- STRACE: ErrorException [ 2 ]: array_values() expects parameter 1 to be array, null given ~ MODPATH/crud/classes/controller/crud.php [ 214 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_values() ...', '/var/www/kohana...', 214, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(214): array_values(NULL)
#2 [internal function]: Controller_Crud->action_add()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-21 02:52:56 --- ERROR: ErrorException [ 2 ]: array_values() expects parameter 1 to be array, boolean given ~ MODPATH/crud/classes/controller/crud.php [ 210 ]
2014-05-21 02:52:56 --- STRACE: ErrorException [ 2 ]: array_values() expects parameter 1 to be array, boolean given ~ MODPATH/crud/classes/controller/crud.php [ 210 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_values() ...', '/var/www/kohana...', 210, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(210): array_values(false)
#2 [internal function]: Controller_Crud->action_add()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-21 03:06:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: result ~ MODPATH/crud/classes/controller/crud.php [ 224 ]
2014-05-21 03:06:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: result ~ MODPATH/crud/classes/controller/crud.php [ 224 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(224): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 224, Array)
#1 [internal function]: Controller_Crud->action_add()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-21 03:14:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: result ~ MODPATH/crud/classes/controller/crud.php [ 216 ]
2014-05-21 03:14:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: result ~ MODPATH/crud/classes/controller/crud.php [ 216 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(216): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 216, Array)
#1 [internal function]: Controller_Crud->action_add()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-21 10:30:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-21 10:30:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-21 11:06:27 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/crud/classes/controller/test.php [ 43 ]
2014-05-21 11:06:27 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/crud/classes/controller/test.php [ 43 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-21 11:07:19 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Test::$db ~ MODPATH/crud/classes/controller/test.php [ 13 ]
2014-05-21 11:07:19 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Test::$db ~ MODPATH/crud/classes/controller/test.php [ 13 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/test.php(13): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/kohana...', 13, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-21 11:08:23 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_All::$db ~ MODPATH/crud/classes/model/all.php [ 15 ]
2014-05-21 11:08:23 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_All::$db ~ MODPATH/crud/classes/model/all.php [ 15 ]
--
#0 /var/www/kohana/modules/crud/classes/model/all.php(15): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/kohana...', 15, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(136): Model_All->select_all_where('articles')
#2 /var/www/kohana/modules/crud/classes/cruds.php(81): Cruds->select_table()
#3 /var/www/kohana/modules/crud/classes/controller/test.php(14): Cruds->render()
#4 [internal function]: Controller_Test->action_index()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-21 12:35:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ MODPATH/crud/classes/cruds.php [ 198 ]
2014-05-21 12:35:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ MODPATH/crud/classes/cruds.php [ 198 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(198): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 198, Array)
#1 /var/www/kohana/modules/crud/classes/controller/test.php(25): Cruds->callback_befor_delete('call_del')
#2 /var/www/kohana/modules/crud/classes/controller/test.php(14): Controller_Test::asd()
#3 [internal function]: Controller_Test->action_index()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-21 12:43:49 --- ERROR: ErrorException [ 2 ]: array_values() expects parameter 1 to be array, boolean given ~ MODPATH/crud/classes/controller/crud.php [ 212 ]
2014-05-21 12:43:49 --- STRACE: ErrorException [ 2 ]: array_values() expects parameter 1 to be array, boolean given ~ MODPATH/crud/classes/controller/crud.php [ 212 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_values() ...', '/var/www/kohana...', 212, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(212): array_values(false)
#2 [internal function]: Controller_Crud->action_add()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-21 13:04:22 --- ERROR: ErrorException [ 2 ]: call_user_func() expects parameter 1 to be a valid callback, second array member is not a valid method ~ MODPATH/crud/classes/controller/crud.php [ 40 ]
2014-05-21 13:04:22 --- STRACE: ErrorException [ 2 ]: call_user_func() expects parameter 1 to be a valid callback, second array member is not a valid method ~ MODPATH/crud/classes/controller/crud.php [ 40 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func(...', '/var/www/kohana...', 40, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(40): call_user_func(Array, Array)
#2 [internal function]: Controller_Crud->action_delete()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-21 13:04:53 --- ERROR: ErrorException [ 2 ]: call_user_func() expects parameter 1 to be a valid callback, second array member is not a valid method ~ MODPATH/crud/classes/controller/crud.php [ 40 ]
2014-05-21 13:04:53 --- STRACE: ErrorException [ 2 ]: call_user_func() expects parameter 1 to be a valid callback, second array member is not a valid method ~ MODPATH/crud/classes/controller/crud.php [ 40 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func(...', '/var/www/kohana...', 40, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(40): call_user_func(Array, Array)
#2 [internal function]: Controller_Crud->action_delete()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-21 13:16:07 --- ERROR: ErrorException [ 2 ]: call_user_func() expects parameter 1 to be a valid callback, second array member is not a valid method ~ MODPATH/crud/classes/controller/crud.php [ 40 ]
2014-05-21 13:16:07 --- STRACE: ErrorException [ 2 ]: call_user_func() expects parameter 1 to be a valid callback, second array member is not a valid method ~ MODPATH/crud/classes/controller/crud.php [ 40 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func(...', '/var/www/kohana...', 40, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(40): call_user_func(Array, Array)
#2 [internal function]: Controller_Crud->action_delete()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-21 13:16:12 --- ERROR: ErrorException [ 2 ]: call_user_func() expects parameter 1 to be a valid callback, second array member is not a valid method ~ MODPATH/crud/classes/controller/crud.php [ 40 ]
2014-05-21 13:16:12 --- STRACE: ErrorException [ 2 ]: call_user_func() expects parameter 1 to be a valid callback, second array member is not a valid method ~ MODPATH/crud/classes/controller/crud.php [ 40 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func(...', '/var/www/kohana...', 40, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(40): call_user_func(Array, Array)
#2 [internal function]: Controller_Crud->action_delete()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-21 13:16:37 --- ERROR: ErrorException [ 2 ]: call_user_func() expects parameter 1 to be a valid callback, second array member is not a valid method ~ MODPATH/crud/classes/controller/crud.php [ 40 ]
2014-05-21 13:16:37 --- STRACE: ErrorException [ 2 ]: call_user_func() expects parameter 1 to be a valid callback, second array member is not a valid method ~ MODPATH/crud/classes/controller/crud.php [ 40 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func(...', '/var/www/kohana...', 40, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(40): call_user_func(Array, Array)
#2 [internal function]: Controller_Crud->action_delete()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-21 13:19:39 --- ERROR: ErrorException [ 2 ]: call_user_func() expects parameter 1 to be a valid callback, second array member is not a valid method ~ MODPATH/crud/classes/controller/crud.php [ 41 ]
2014-05-21 13:19:39 --- STRACE: ErrorException [ 2 ]: call_user_func() expects parameter 1 to be a valid callback, second array member is not a valid method ~ MODPATH/crud/classes/controller/crud.php [ 41 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func(...', '/var/www/kohana...', 41, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(41): call_user_func(Array, Array)
#2 [internal function]: Controller_Crud->action_delete()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-21 13:23:14 --- ERROR: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 19 ]
2014-05-21 13:23:14 --- STRACE: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 19 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(19): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 19, Array)
#1 [internal function]: Controller_Crud->action_delete()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-21 13:29:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ MODPATH/crud/classes/cruds.php [ 196 ]
2014-05-21 13:29:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ MODPATH/crud/classes/cruds.php [ 196 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(196): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 196, Array)
#1 /var/www/kohana/modules/crud/classes/controller/test.php(25): Cruds->callback_befor_delete('call_del')
#2 /var/www/kohana/modules/crud/classes/controller/test.php(14): Controller_Test::asd()
#3 [internal function]: Controller_Test->action_index()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-21 13:32:36 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH/crud/classes/cruds.php [ 192 ]
2014-05-21 13:32:36 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH/crud/classes/cruds.php [ 192 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-21 13:35:02 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ')' ~ MODPATH/crud/classes/cruds.php [ 194 ]
2014-05-21 13:35:02 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ')' ~ MODPATH/crud/classes/cruds.php [ 194 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-21 13:53:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ MODPATH/crud/classes/cruds.php [ 204 ]
2014-05-21 13:53:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ MODPATH/crud/classes/cruds.php [ 204 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(204): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 204, Array)
#1 /var/www/kohana/modules/crud/classes/controller/test.php(25): Cruds->callback_befor_delete('call_del')
#2 /var/www/kohana/modules/crud/classes/controller/test.php(14): Controller_Test::asd()
#3 [internal function]: Controller_Test->action_index()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-21 13:54:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ MODPATH/crud/classes/cruds.php [ 204 ]
2014-05-21 13:54:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ MODPATH/crud/classes/cruds.php [ 204 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(204): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 204, Array)
#1 /var/www/kohana/modules/crud/classes/controller/test.php(25): Cruds->callback_befor_delete('call_del')
#2 /var/www/kohana/modules/crud/classes/controller/test.php(14): Controller_Test::asd()
#3 [internal function]: Controller_Test->action_index()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-21 13:54:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ MODPATH/crud/classes/cruds.php [ 204 ]
2014-05-21 13:54:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ MODPATH/crud/classes/cruds.php [ 204 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(204): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 204, Array)
#1 /var/www/kohana/modules/crud/classes/controller/test.php(25): Cruds->callback_befor_delete('call_del')
#2 /var/www/kohana/modules/crud/classes/controller/test.php(14): Controller_Test::asd()
#3 [internal function]: Controller_Test->action_index()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-21 14:22:06 --- ERROR: ErrorException [ 2 ]: call_user_func() expects parameter 1 to be a valid callback, second array member is not a valid method ~ MODPATH/crud/classes/controller/crud.php [ 42 ]
2014-05-21 14:22:06 --- STRACE: ErrorException [ 2 ]: call_user_func() expects parameter 1 to be a valid callback, second array member is not a valid method ~ MODPATH/crud/classes/controller/crud.php [ 42 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func(...', '/var/www/kohana...', 42, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(42): call_user_func(Array, Array)
#2 [internal function]: Controller_Crud->action_delete()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-21 14:22:20 --- ERROR: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 19 ]
2014-05-21 14:22:20 --- STRACE: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 19 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(19): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 19, Array)
#1 [internal function]: Controller_Crud->action_delete()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-21 14:22:26 --- ERROR: ErrorException [ 2 ]: call_user_func() expects parameter 1 to be a valid callback, second array member is not a valid method ~ MODPATH/crud/classes/controller/crud.php [ 42 ]
2014-05-21 14:22:26 --- STRACE: ErrorException [ 2 ]: call_user_func() expects parameter 1 to be a valid callback, second array member is not a valid method ~ MODPATH/crud/classes/controller/crud.php [ 42 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func(...', '/var/www/kohana...', 42, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(42): call_user_func(Array, Array)
#2 [internal function]: Controller_Crud->action_delete()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-21 14:45:48 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Cruds::callback_befor_delete(), called in /var/www/kohana/modules/crud/classes/controller/test.php on line 25 and defined ~ MODPATH/crud/classes/cruds.php [ 189 ]
2014-05-21 14:45:48 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Cruds::callback_befor_delete(), called in /var/www/kohana/modules/crud/classes/controller/test.php on line 25 and defined ~ MODPATH/crud/classes/cruds.php [ 189 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(189): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/kohana...', 189, Array)
#1 /var/www/kohana/modules/crud/classes/controller/test.php(25): Cruds->callback_befor_delete('call_del')
#2 /var/www/kohana/modules/crud/classes/controller/test.php(14): Controller_Test::asd()
#3 [internal function]: Controller_Test->action_index()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-21 15:00:01 --- ERROR: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 19 ]
2014-05-21 15:00:01 --- STRACE: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 19 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(19): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 19, Array)
#1 [internal function]: Controller_Crud->action_delete()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-21 15:36:36 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Cruds::callback_befor_delete(), called in /var/www/kohana/modules/crud/classes/controller/test.php on line 25 and defined ~ MODPATH/crud/classes/cruds.php [ 189 ]
2014-05-21 15:36:36 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Cruds::callback_befor_delete(), called in /var/www/kohana/modules/crud/classes/controller/test.php on line 25 and defined ~ MODPATH/crud/classes/cruds.php [ 189 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(189): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/kohana...', 189, Array)
#1 /var/www/kohana/modules/crud/classes/controller/test.php(25): Cruds->callback_befor_delete('call_del')
#2 /var/www/kohana/modules/crud/classes/controller/test.php(14): Controller_Test::asd()
#3 [internal function]: Controller_Test->action_index()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-21 15:42:36 --- ERROR: ErrorException [ 2 ]: array_values() expects parameter 1 to be array, null given ~ MODPATH/crud/classes/controller/crud.php [ 212 ]
2014-05-21 15:42:36 --- STRACE: ErrorException [ 2 ]: array_values() expects parameter 1 to be array, null given ~ MODPATH/crud/classes/controller/crud.php [ 212 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_values() ...', '/var/www/kohana...', 212, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(212): array_values(NULL)
#2 [internal function]: Controller_Crud->action_add()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-21 15:43:18 --- ERROR: ErrorException [ 2 ]: array_values() expects parameter 1 to be array, null given ~ MODPATH/crud/classes/controller/crud.php [ 212 ]
2014-05-21 15:43:18 --- STRACE: ErrorException [ 2 ]: array_values() expects parameter 1 to be array, null given ~ MODPATH/crud/classes/controller/crud.php [ 212 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_values() ...', '/var/www/kohana...', 212, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(212): array_values(NULL)
#2 [internal function]: Controller_Crud->action_add()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-21 15:44:51 --- ERROR: ErrorException [ 2 ]: array_values() expects parameter 1 to be array, null given ~ MODPATH/crud/classes/controller/crud.php [ 212 ]
2014-05-21 15:44:51 --- STRACE: ErrorException [ 2 ]: array_values() expects parameter 1 to be array, null given ~ MODPATH/crud/classes/controller/crud.php [ 212 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_values() ...', '/var/www/kohana...', 212, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(212): array_values(NULL)
#2 [internal function]: Controller_Crud->action_add()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-21 15:49:12 --- ERROR: ErrorException [ 2 ]: array_values() expects parameter 1 to be array, null given ~ MODPATH/crud/classes/controller/crud.php [ 215 ]
2014-05-21 15:49:12 --- STRACE: ErrorException [ 2 ]: array_values() expects parameter 1 to be array, null given ~ MODPATH/crud/classes/controller/crud.php [ 215 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_values() ...', '/var/www/kohana...', 215, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(215): array_values(NULL)
#2 [internal function]: Controller_Crud->action_add()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-21 17:43:44 --- ERROR: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, second array member is not a valid method ~ MODPATH/crud/classes/controller/crud.php [ 107 ]
2014-05-21 17:43:44 --- STRACE: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, second array member is not a valid method ~ MODPATH/crud/classes/controller/crud.php [ 107 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/var/www/kohana...', 107, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(107): call_user_func_array(Array, Array)
#2 [internal function]: Controller_Crud->action_edit()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-21 17:44:25 --- ERROR: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, second array member is not a valid method ~ MODPATH/crud/classes/controller/crud.php [ 107 ]
2014-05-21 17:44:25 --- STRACE: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, second array member is not a valid method ~ MODPATH/crud/classes/controller/crud.php [ 107 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/var/www/kohana...', 107, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(107): call_user_func_array(Array, Array)
#2 [internal function]: Controller_Crud->action_edit()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-21 17:46:54 --- ERROR: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, second array member is not a valid method ~ MODPATH/crud/classes/controller/crud.php [ 107 ]
2014-05-21 17:46:54 --- STRACE: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, second array member is not a valid method ~ MODPATH/crud/classes/controller/crud.php [ 107 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/var/www/kohana...', 107, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(107): call_user_func_array(Array, Array)
#2 [internal function]: Controller_Crud->action_edit()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-21 17:50:54 --- ERROR: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, second array member is not a valid method ~ MODPATH/crud/classes/controller/crud.php [ 107 ]
2014-05-21 17:50:54 --- STRACE: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, second array member is not a valid method ~ MODPATH/crud/classes/controller/crud.php [ 107 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/var/www/kohana...', 107, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(107): call_user_func_array(Array, Array)
#2 [internal function]: Controller_Crud->action_edit()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-21 17:51:02 --- ERROR: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, second array member is not a valid method ~ MODPATH/crud/classes/controller/crud.php [ 107 ]
2014-05-21 17:51:02 --- STRACE: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, second array member is not a valid method ~ MODPATH/crud/classes/controller/crud.php [ 107 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/var/www/kohana...', 107, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(107): call_user_func_array(Array, Array)
#2 [internal function]: Controller_Crud->action_edit()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-21 17:52:49 --- ERROR: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, second array member is not a valid method ~ MODPATH/crud/classes/controller/crud.php [ 107 ]
2014-05-21 17:52:49 --- STRACE: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, second array member is not a valid method ~ MODPATH/crud/classes/controller/crud.php [ 107 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/var/www/kohana...', 107, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(107): call_user_func_array(Array, Array)
#2 [internal function]: Controller_Crud->action_edit()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}