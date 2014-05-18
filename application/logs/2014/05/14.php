<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-14 00:54:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/new/ban was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-14 00:54:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/new/ban was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-14 00:58:43 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Route::compile() must be of the type array, string given, called in /var/www/kohana/system/classes/kohana/route.php on line 342 and defined ~ SYSPATH/classes/kohana/route.php [ 227 ]
2014-05-14 00:58:43 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Route::compile() must be of the type array, string given, called in /var/www/kohana/system/classes/kohana/route.php on line 342 and defined ~ SYSPATH/classes/kohana/route.php [ 227 ]
--
#0 /var/www/kohana/system/classes/kohana/route.php(227): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/var/www/kohana...', 227, Array)
#1 /var/www/kohana/system/classes/kohana/route.php(342): Kohana_Route::compile(Array, 'admin/new(/<bar...')
#2 /var/www/kohana/system/classes/kohana/route.php(90): Kohana_Route->__construct(Array, 'admin/new(/<bar...')
#3 /var/www/kohana/modules/crud/classes/cruds.php(215): Kohana_Route::set('custom1', Array, 'admin/new(/<bar...')
#4 /var/www/kohana/modules/crud/classes/controller/test.php(30): Cruds->add_action('addAction', 'Ban', 'ban/actionAdd')
#5 /var/www/kohana/modules/crud/classes/controller/test.php(14): Controller_Test::asd()
#6 [internal function]: Controller_Test->action_index()
#7 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#8 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/kohana/index.php(109): Kohana_Request->execute()
#11 {main}
2014-05-14 00:58:51 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Route::compile() must be of the type array, string given, called in /var/www/kohana/system/classes/kohana/route.php on line 342 and defined ~ SYSPATH/classes/kohana/route.php [ 227 ]
2014-05-14 00:58:51 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Route::compile() must be of the type array, string given, called in /var/www/kohana/system/classes/kohana/route.php on line 342 and defined ~ SYSPATH/classes/kohana/route.php [ 227 ]
--
#0 /var/www/kohana/system/classes/kohana/route.php(227): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/var/www/kohana...', 227, Array)
#1 /var/www/kohana/system/classes/kohana/route.php(342): Kohana_Route::compile(Array, 'admin/new(/<bar...')
#2 /var/www/kohana/system/classes/kohana/route.php(90): Kohana_Route->__construct(Array, 'admin/new(/<bar...')
#3 /var/www/kohana/modules/crud/classes/cruds.php(215): Kohana_Route::set('custom1', Array, 'admin/new(/<bar...')
#4 /var/www/kohana/modules/crud/classes/controller/test.php(30): Cruds->add_action('addAction', 'Ban', 'ban/actionAdd')
#5 /var/www/kohana/modules/crud/classes/controller/test.php(14): Controller_Test::asd()
#6 [internal function]: Controller_Test->action_index()
#7 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#8 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/kohana/index.php(109): Kohana_Request->execute()
#11 {main}
2014-05-14 01:27:46 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'name_function' ~ MODPATH/crud/classes/controller/crud.php [ 54 ]
2014-05-14 01:27:46 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'name_function' ~ MODPATH/crud/classes/controller/crud.php [ 54 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(54): Kohana_Core::error_handler(2, 'Illegal string ...', '/var/www/kohana...', 54, Array)
#1 [internal function]: Controller_Crud->action_delete()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-14 01:29:12 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'name_function' ~ MODPATH/crud/classes/controller/crud.php [ 54 ]
2014-05-14 01:29:12 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'name_function' ~ MODPATH/crud/classes/controller/crud.php [ 54 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(54): Kohana_Core::error_handler(2, 'Illegal string ...', '/var/www/kohana...', 54, Array)
#1 [internal function]: Controller_Crud->action_delete()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-14 01:32:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ban/actionAdd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-14 01:32:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ban/actionAdd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-14 01:33:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/new/ban/actionAdd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-14 01:33:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/new/ban/actionAdd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 01:36:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/new/ban/actionAdd/sdfs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-14 01:36:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/new/ban/actionAdd/sdfs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 01:56:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ MODPATH/crud/classes/cruds.php [ 193 ]
2014-05-14 01:56:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ MODPATH/crud/classes/cruds.php [ 193 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(193): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 193, Array)
#1 /var/www/kohana/modules/crud/classes/controller/test.php(22): Cruds->callback_befor_delete('call_del')
#2 /var/www/kohana/modules/crud/classes/controller/test.php(14): Controller_Test::asd()
#3 [internal function]: Controller_Test->action_index()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-14 02:29:48 --- ERROR: ErrorException [ 1 ]: Cannot access private property Cruds::$render ~ MODPATH/crud/classes/controller/crud.php [ 25 ]
2014-05-14 02:29:48 --- STRACE: ErrorException [ 1 ]: Cannot access private property Cruds::$render ~ MODPATH/crud/classes/controller/crud.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-14 02:35:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/new/ban/actionAdd/sdfs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-14 02:35:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/new/ban/actionAdd/sdfs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 02:37:17 --- ERROR: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 125 ]
2014-05-14 02:37:17 --- STRACE: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 125 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(125): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 125, Array)
#1 [internal function]: Controller_Crud->action_newAction()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-14 02:41:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 3 ]
2014-05-14 02:41:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 3 ]
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
2014-05-14 03:14:23 --- ERROR: ErrorException [ 8 ]: Undefined index: function ~ MODPATH/crud/views/page/page.php [ 47 ]
2014-05-14 03:14:23 --- STRACE: ErrorException [ 8 ]: Undefined index: function ~ MODPATH/crud/views/page/page.php [ 47 ]
--
#0 /var/www/kohana/modules/crud/views/page/page.php(47): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 47, Array)
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
2014-05-14 10:59:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-14 10:59:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}