<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-19 00:57:50 --- ERROR: ErrorException [ 2 ]: array_intersect(): Argument #1 is not an array ~ MODPATH/crud/classes/controller/crud.php [ 119 ]
2014-05-19 00:57:50 --- STRACE: ErrorException [ 2 ]: array_intersect(): Argument #1 is not an array ~ MODPATH/crud/classes/controller/crud.php [ 119 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_intersect...', '/var/www/kohana...', 119, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(119): array_intersect('title', Array)
#2 [internal function]: Controller_Crud->action_edit()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-19 00:59:28 --- ERROR: ErrorException [ 2 ]: array_flip() expects parameter 1 to be array, string given ~ MODPATH/crud/classes/controller/crud.php [ 119 ]
2014-05-19 00:59:28 --- STRACE: ErrorException [ 2 ]: array_flip() expects parameter 1 to be array, string given ~ MODPATH/crud/classes/controller/crud.php [ 119 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_flip() ex...', '/var/www/kohana...', 119, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(119): array_flip('title')
#2 [internal function]: Controller_Crud->action_edit()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-19 01:00:47 --- ERROR: ErrorException [ 2 ]: array_flip() expects parameter 1 to be array, string given ~ MODPATH/crud/classes/controller/crud.php [ 119 ]
2014-05-19 01:00:47 --- STRACE: ErrorException [ 2 ]: array_flip() expects parameter 1 to be array, string given ~ MODPATH/crud/classes/controller/crud.php [ 119 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_flip() ex...', '/var/www/kohana...', 119, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(119): array_flip('title')
#2 [internal function]: Controller_Crud->action_edit()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-19 01:06:07 --- ERROR: ErrorException [ 8 ]: Undefined index: id ~ MODPATH/crud/classes/controller/crud.php [ 105 ]
2014-05-19 01:06:07 --- STRACE: ErrorException [ 8 ]: Undefined index: id ~ MODPATH/crud/classes/controller/crud.php [ 105 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(105): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 105, Array)
#1 [internal function]: Controller_Crud->action_edit()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-19 01:22:10 --- ERROR: ErrorException [ 8 ]: Undefined index: id ~ MODPATH/crud/classes/controller/crud.php [ 105 ]
2014-05-19 01:22:10 --- STRACE: ErrorException [ 8 ]: Undefined index: id ~ MODPATH/crud/classes/controller/crud.php [ 105 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(105): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 105, Array)
#1 [internal function]: Controller_Crud->action_edit()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-19 01:46:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: name_colums_table_show ~ MODPATH/crud/views/page/edit.php [ 3 ]
2014-05-19 01:46:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: name_colums_table_show ~ MODPATH/crud/views/page/edit.php [ 3 ]
--
#0 /var/www/kohana/modules/crud/views/page/edit.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 3, Array)
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
2014-05-19 01:54:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: name_colums_table_show ~ MODPATH/crud/views/page/edit.php [ 3 ]
2014-05-19 01:54:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: name_colums_table_show ~ MODPATH/crud/views/page/edit.php [ 3 ]
--
#0 /var/www/kohana/modules/crud/views/page/edit.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 3, Array)
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
2014-05-19 01:55:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: name_colums_table_show ~ MODPATH/crud/views/page/edit.php [ 3 ]
2014-05-19 01:55:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: name_colums_table_show ~ MODPATH/crud/views/page/edit.php [ 3 ]
--
#0 /var/www/kohana/modules/crud/views/page/edit.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 3, Array)
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
2014-05-19 01:57:18 --- ERROR: ErrorException [ 8 ]: Undefined variable: name_colums_table_show ~ MODPATH/crud/views/page/edit.php [ 3 ]
2014-05-19 01:57:18 --- STRACE: ErrorException [ 8 ]: Undefined variable: name_colums_table_show ~ MODPATH/crud/views/page/edit.php [ 3 ]
--
#0 /var/www/kohana/modules/crud/views/page/edit.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 3, Array)
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
2014-05-19 01:57:25 --- ERROR: ErrorException [ 8 ]: Undefined variable: name_colums_table_show ~ MODPATH/crud/views/page/edit.php [ 3 ]
2014-05-19 01:57:25 --- STRACE: ErrorException [ 8 ]: Undefined variable: name_colums_table_show ~ MODPATH/crud/views/page/edit.php [ 3 ]
--
#0 /var/www/kohana/modules/crud/views/page/edit.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 3, Array)
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
2014-05-19 01:59:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: name_colums_table_show ~ MODPATH/crud/views/page/edit.php [ 3 ]
2014-05-19 01:59:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: name_colums_table_show ~ MODPATH/crud/views/page/edit.php [ 3 ]
--
#0 /var/www/kohana/modules/crud/views/page/edit.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 3, Array)
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
2014-05-19 02:00:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: name_colums_table_show ~ MODPATH/crud/views/page/edit.php [ 3 ]
2014-05-19 02:00:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: name_colums_table_show ~ MODPATH/crud/views/page/edit.php [ 3 ]
--
#0 /var/www/kohana/modules/crud/views/page/edit.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 3, Array)
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
2014-05-19 11:31:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-19 11:31:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-19 11:31:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-19 11:31:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-19 13:57:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-19 13:57:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-19 14:01:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-19 14:01:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-19 22:32:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: name_fied ~ MODPATH/crud/views/page/add.php [ 8 ]
2014-05-19 22:32:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: name_fied ~ MODPATH/crud/views/page/add.php [ 8 ]
--
#0 /var/www/kohana/modules/crud/views/page/add.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 8, Array)
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
2014-05-19 22:33:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: name_fied ~ MODPATH/crud/views/page/add.php [ 8 ]
2014-05-19 22:33:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: name_fied ~ MODPATH/crud/views/page/add.php [ 8 ]
--
#0 /var/www/kohana/modules/crud/views/page/add.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 8, Array)
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
2014-05-19 22:34:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: name_fied ~ MODPATH/crud/views/page/add.php [ 8 ]
2014-05-19 22:34:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: name_fied ~ MODPATH/crud/views/page/add.php [ 8 ]
--
#0 /var/www/kohana/modules/crud/views/page/add.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 8, Array)
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
2014-05-19 22:35:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: name_fied ~ MODPATH/crud/views/page/add.php [ 9 ]
2014-05-19 22:35:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: name_fied ~ MODPATH/crud/views/page/add.php [ 9 ]
--
#0 /var/www/kohana/modules/crud/views/page/add.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 9, Array)
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
2014-05-19 22:35:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: name_fied ~ MODPATH/crud/views/page/add.php [ 13 ]
2014-05-19 22:35:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: name_fied ~ MODPATH/crud/views/page/add.php [ 13 ]
--
#0 /var/www/kohana/modules/crud/views/page/add.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 13, Array)
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
2014-05-19 22:38:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: name_fied ~ MODPATH/crud/views/page/add.php [ 8 ]
2014-05-19 22:38:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: name_fied ~ MODPATH/crud/views/page/add.php [ 8 ]
--
#0 /var/www/kohana/modules/crud/views/page/add.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 8, Array)
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
2014-05-19 22:39:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: name_fied ~ MODPATH/crud/views/page/add.php [ 8 ]
2014-05-19 22:39:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: name_fied ~ MODPATH/crud/views/page/add.php [ 8 ]
--
#0 /var/www/kohana/modules/crud/views/page/add.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 8, Array)
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