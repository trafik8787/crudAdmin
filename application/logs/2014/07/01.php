<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-01 00:01:57 --- ERROR: ErrorException [ 8 ]: Use of undefined constant ARRAY_AS_PROPS - assumed 'ARRAY_AS_PROPS' ~ MODPATH/crud/classes/controller/test.php [ 14 ]
2014-07-01 00:01:57 --- STRACE: ErrorException [ 8 ]: Use of undefined constant ARRAY_AS_PROPS - assumed 'ARRAY_AS_PROPS' ~ MODPATH/crud/classes/controller/test.php [ 14 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/test.php(14): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/kohana...', 14, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-07-01 00:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 00:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 00:04:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 00:04:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 00:27:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: multiple ~ MODPATH/crud/views/page/edit.php [ 160 ]
2014-07-01 00:27:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: multiple ~ MODPATH/crud/views/page/edit.php [ 160 ]
--
#0 /var/www/kohana/modules/crud/views/page/edit.php(160): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 160, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/page/main_template.php(10): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#10 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/kohana/index.php(109): Kohana_Request->execute()
#13 {main}
2014-07-01 00:27:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 00:27:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 00:33:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: multiple ~ MODPATH/crud/views/page/edit.php [ 160 ]
2014-07-01 00:33:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: multiple ~ MODPATH/crud/views/page/edit.php [ 160 ]
--
#0 /var/www/kohana/modules/crud/views/page/edit.php(160): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 160, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/page/main_template.php(10): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#10 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/kohana/index.php(109): Kohana_Request->execute()
#13 {main}
2014-07-01 00:33:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 00:33:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 00:34:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 00:34:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 00:34:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: multiple ~ MODPATH/crud/views/page/edit.php [ 161 ]
2014-07-01 00:34:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: multiple ~ MODPATH/crud/views/page/edit.php [ 161 ]
--
#0 /var/www/kohana/modules/crud/views/page/edit.php(161): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 161, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/page/main_template.php(10): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#10 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/kohana/index.php(109): Kohana_Request->execute()
#13 {main}
2014-07-01 00:34:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 00:34:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 00:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 00:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 00:43:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: multiple ~ MODPATH/crud/views/page/edit.php [ 161 ]
2014-07-01 00:43:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: multiple ~ MODPATH/crud/views/page/edit.php [ 161 ]
--
#0 /var/www/kohana/modules/crud/views/page/edit.php(161): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 161, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/page/main_template.php(10): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#10 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/kohana/index.php(109): Kohana_Request->execute()
#13 {main}
2014-07-01 00:43:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 00:43:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 00:48:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: multiple ~ MODPATH/crud/views/page/edit.php [ 161 ]
2014-07-01 00:48:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: multiple ~ MODPATH/crud/views/page/edit.php [ 161 ]
--
#0 /var/www/kohana/modules/crud/views/page/edit.php(161): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 161, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/page/main_template.php(10): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#10 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/kohana/index.php(109): Kohana_Request->execute()
#13 {main}
2014-07-01 00:48:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 00:48:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 00:50:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 00:50:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 00:50:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: multiple ~ MODPATH/crud/views/page/edit.php [ 161 ]
2014-07-01 00:50:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: multiple ~ MODPATH/crud/views/page/edit.php [ 161 ]
--
#0 /var/www/kohana/modules/crud/views/page/edit.php(161): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 161, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/page/main_template.php(10): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#10 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/kohana/index.php(109): Kohana_Request->execute()
#13 {main}
2014-07-01 00:50:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 00:50:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 00:54:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 00:54:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 00:54:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: multiple ~ MODPATH/crud/views/page/edit.php [ 161 ]
2014-07-01 00:54:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: multiple ~ MODPATH/crud/views/page/edit.php [ 161 ]
--
#0 /var/www/kohana/modules/crud/views/page/edit.php(161): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 161, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/page/main_template.php(10): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#10 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/kohana/index.php(109): Kohana_Request->execute()
#13 {main}
2014-07-01 00:54:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 00:54:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 00:55:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 00:55:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 00:56:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 00:56:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 00:56:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 00:56:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 00:57:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 00:57:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 01:05:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 01:05:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 01:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 01:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 01:20:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 01:20:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 01:20:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b0928307b18.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 01:20:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b0928307b18.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-01 01:20:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b0928308866.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 01:20:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b0928308866.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-01 01:20:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b0928308934.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 01:20:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b0928308934.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-01 01:20:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b0928308866.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 01:20:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b0928308866.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-01 01:20:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b0928308934.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 01:20:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b0928308934.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-01 01:20:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b0928307b18.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 01:20:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b0928307b18.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-01 01:20:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b0928307b18.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 01:20:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b0928307b18.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-01 01:20:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b0928308866.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 01:20:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b0928308866.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-01 01:20:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b0928308934.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 01:20:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b0928308934.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-01 01:20:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 01:20:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 01:20:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b0928308866.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 01:20:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b0928308866.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-01 01:20:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b0928307b18.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 01:20:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b0928307b18.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-01 01:20:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b0928308934.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 01:20:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b0928308934.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-01 01:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 01:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 01:21:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b1d4e37c5ca.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 01:21:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b1d4e37c5ca.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-01 01:21:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 01:21:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 01:21:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b1d4e37d387.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 01:21:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b1d4e37d387.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-01 01:21:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b1d4e37d387.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 01:21:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b1d4e37d387.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-01 01:21:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b1d4e37c5ca.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 01:21:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b1d4e37c5ca.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-01 01:21:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b1d4e37d387.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 01:21:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b1d4e37d387.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-01 01:23:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 01:23:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 01:23:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b1d4e37d387.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 01:23:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b1d4e37d387.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-01 01:23:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b1d4e37c5ca.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 01:23:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b1d4e37c5ca.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-01 01:23:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 01:23:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 01:23:15 --- ERROR: ErrorException [ 8 ]: unserialize(): Error at offset 0 of 30 bytes ~ MODPATH/crud/views/controls/input_file.php [ 26 ]
2014-07-01 01:23:15 --- STRACE: ErrorException [ 8 ]: unserialize(): Error at offset 0 of 30 bytes ~ MODPATH/crud/views/controls/input_file.php [ 26 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'unserialize(): ...', '/var/www/kohana...', 26, Array)
#1 /var/www/kohana/modules/crud/views/controls/input_file.php(26): unserialize('/uploads/pre_53...')
#2 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#3 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#4 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /var/www/kohana/modules/crud/views/page/edit.php(164): Kohana_View->__toString()
#6 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#7 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#8 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#9 /var/www/kohana/modules/crud/views/page/main_template.php(10): Kohana_View->__toString()
#10 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#11 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#12 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#13 [internal function]: Kohana_Controller_Template->after()
#14 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#15 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#17 /var/www/kohana/index.php(109): Kohana_Request->execute()
#18 {main}
2014-07-01 01:23:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 01:23:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 01:23:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 01:23:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 01:25:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 01:25:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 01:25:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 01:25:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 01:26:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 01:26:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 01:26:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b1d5e2c4397.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 01:26:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b1d5e2c4397.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-01 01:26:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b1d5e2c4f1d.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 01:26:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b1d5e2c4f1d.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-01 01:26:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 01:26:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 01:26:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b1d5e2c4f1d.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 01:26:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b1d5e2c4f1d.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-01 01:26:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b1d5e2c4397.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 01:26:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b1d5e2c4397.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-01 01:27:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 01:27:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 01:27:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b1d6221f642.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 01:27:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b1d6221f642.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-01 01:27:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b1d62220269.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 01:27:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b1d62220269.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-01 01:27:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 01:27:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 01:27:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b1d62220269.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 01:27:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b1d6221f642.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 01:27:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b1d6221f642.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-01 01:27:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b1d62220269.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-01 01:29:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 01:29:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 01:29:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b1d6221f642.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 01:29:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b1d6221f642.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-01 01:29:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b1d62220269.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 01:29:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b1d62220269.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-01 01:29:49 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::save() must be of the type array, string given, called in /var/www/kohana/modules/crud/classes/controller/crud.php on line 156 and defined ~ SYSPATH/classes/kohana/upload.php [ 52 ]
2014-07-01 01:29:49 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::save() must be of the type array, string given, called in /var/www/kohana/modules/crud/classes/controller/crud.php on line 156 and defined ~ SYSPATH/classes/kohana/upload.php [ 52 ]
--
#0 /var/www/kohana/system/classes/kohana/upload.php(52): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/kohana...', 52, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(156): Kohana_Upload::save('/tmp/php8qvoOe', 'pre_53b1d6cd383...', '/var/www/kohana...')
#2 [internal function]: Controller_Crud->action_edit()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-07-01 01:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 01:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 01:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 01:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 01:47:34 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ MODPATH/crud/views/controls/input_file.php [ 81 ]
2014-07-01 01:47:34 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ MODPATH/crud/views/controls/input_file.php [ 81 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-07-01 01:47:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 01:47:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 01:50:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 01:50:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 01:50:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 01:50:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 01:51:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 01:51:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 01:52:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 01:52:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 01:55:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 01:55:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 01:55:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 01:55:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 01:57:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 01:57:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 01:57:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 01:57:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 02:22:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 02:22:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 02:22:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 02:22:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 02:22:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 02:22:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 02:22:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b1e33be7c3e. ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 02:22:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b1e33be7c3e. ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-01 02:24:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 02:24:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 02:24:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b1e39f99293. ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 02:24:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b1e39f99293. ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-01 02:24:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 02:24:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 02:24:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b1e39f99293. ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 02:24:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b1e39f99293. ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-01 02:25:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b1e39f99293. ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 02:25:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b1e39f99293. ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-01 02:25:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 02:25:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 02:25:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b1e39f99293. ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 02:25:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b1e39f99293. ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-01 02:25:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 02:25:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 02:25:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 02:25:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 02:26:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 02:26:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 02:31:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 02:31:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 11:02:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 11:02:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 11:02:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 11:02:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-01 11:04:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 11:04:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-01 11:04:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 11:04:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-01 15:15:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 15:15:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 15:15:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 15:15:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 18:15:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 18:15:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 18:24:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 18:24:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 18:49:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 18:49:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 18:49:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 18:49:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 18:50:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 18:50:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 19:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 19:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 19:44:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 19:44:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 19:44:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 19:44:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 19:44:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b2d771c5b6d. ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-01 19:44:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53b2d771c5b6d. ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-01 19:48:26 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH/crud/classes/controller/crud.php [ 149 ]
2014-07-01 19:48:26 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH/crud/classes/controller/crud.php [ 149 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-07-01 20:01:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: file_update ~ MODPATH/crud/classes/controller/crud.php [ 171 ]
2014-07-01 20:01:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: file_update ~ MODPATH/crud/classes/controller/crud.php [ 171 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(171): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 171, Array)
#1 [internal function]: Controller_Crud->action_edit()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-07-01 20:06:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 20:06:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 20:06:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 20:06:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 20:06:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 20:06:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 20:06:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 20:06:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 20:07:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 20:07:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 20:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 20:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 20:07:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 20:07:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 20:07:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 20:07:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 22:14:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 22:14:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 22:15:38 --- ERROR: ErrorException [ 8 ]: Undefined index: editfile-content_short ~ MODPATH/crud/classes/controller/crud.php [ 174 ]
2014-07-01 22:15:38 --- STRACE: ErrorException [ 8 ]: Undefined index: editfile-content_short ~ MODPATH/crud/classes/controller/crud.php [ 174 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(174): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 174, Array)
#1 [internal function]: Controller_Crud->action_edit()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-07-01 22:17:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 22:17:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 22:17:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: file_update ~ MODPATH/crud/classes/controller/crud.php [ 177 ]
2014-07-01 22:17:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: file_update ~ MODPATH/crud/classes/controller/crud.php [ 177 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(177): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 177, Array)
#1 [internal function]: Controller_Crud->action_edit()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-07-01 22:20:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 22:20:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 22:20:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 22:20:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 23:59:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 23:59:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-01 23:59:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-01 23:59:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}