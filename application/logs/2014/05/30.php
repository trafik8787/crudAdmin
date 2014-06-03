<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-30 11:09:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-30 11:09:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-30 16:33:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 16:33:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Test))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 16:34:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 16:34:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Test))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 17:34:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 17:34:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 17:46:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 17:46:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 17:46:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 17:46:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 17:46:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 17:46:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 17:47:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 17:47:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 17:47:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 17:47:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 17:47:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 17:47:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 17:47:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 17:47:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 17:49:18 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 17:49:18 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 17:50:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 17:50:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 17:50:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 17:50:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 17:52:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 17:52:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 17:57:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 17:57:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 17:57:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 17:57:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 18:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.php/admin/testAjax ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-30 18:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.php/admin/testAjax ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-30 18:02:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/admin/testAjax ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-30 18:02:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/admin/testAjax ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-30 18:02:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 18:02:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 18:03:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 18:03:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 18:11:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 18:11:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 18:15:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 18:15:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 18:15:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 18:15:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 18:15:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 18:15:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 18:17:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 18:17:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 18:17:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 18:17:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 18:22:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 18:22:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 18:22:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 18:22:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 18:28:18 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 18:28:18 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 18:32:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 18:32:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 18:36:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 18:36:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 18:38:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 18:38:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 18:38:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 18:38:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 18:41:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 18:41:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 18:41:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 18:41:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 18:53:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 18:53:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 18:55:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 18:55:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 18:56:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 18:56:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 19:07:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: asd ~ MODPATH/crud/views/page/page.php [ 51 ]
2014-05-30 19:07:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: asd ~ MODPATH/crud/views/page/page.php [ 51 ]
--
#0 /var/www/kohana/modules/crud/views/page/page.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 51, Array)
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
2014-05-30 19:08:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: table_propery ~ MODPATH/crud/views/page/page.php [ 53 ]
2014-05-30 19:08:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: table_propery ~ MODPATH/crud/views/page/page.php [ 53 ]
--
#0 /var/www/kohana/modules/crud/views/page/page.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 53, Array)
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
2014-05-30 19:10:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 19:10:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 19:11:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 19:11:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 19:11:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 19:11:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 19:11:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 19:11:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 19:11:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 19:11:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 19:13:18 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 19:13:18 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 19:13:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 19:13:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 19:14:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 19:14:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 19:14:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 19:14:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 19:15:45 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 19:15:45 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 19:17:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 19:17:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 19:17:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 19:17:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 19:19:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
2014-05-30 19:19:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-30 19:30:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: table_propery ~ MODPATH/crud/views/page/page.php [ 53 ]
2014-05-30 19:30:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: table_propery ~ MODPATH/crud/views/page/page.php [ 53 ]
--
#0 /var/www/kohana/modules/crud/views/page/page.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 53, Array)
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
2014-05-30 19:31:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: table_propery ~ MODPATH/crud/views/page/page.php [ 53 ]
2014-05-30 19:31:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: table_propery ~ MODPATH/crud/views/page/page.php [ 53 ]
--
#0 /var/www/kohana/modules/crud/views/page/page.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 53, Array)
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
2014-05-30 19:35:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: table_propery ~ MODPATH/crud/views/page/page.php [ 53 ]
2014-05-30 19:35:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: table_propery ~ MODPATH/crud/views/page/page.php [ 53 ]
--
#0 /var/www/kohana/modules/crud/views/page/page.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 53, Array)
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
2014-05-30 19:36:53 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /var/www/kohana/modules/crud/classes/controller/crud.php on line 19 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
2014-05-30 19:36:53 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /var/www/kohana/modules/crud/classes/controller/crud.php on line 19 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
--
#0 /var/www/kohana/system/classes/kohana/controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/kohana...', 43, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(19): Kohana_Controller->__construct()
#2 [internal function]: Controller_Crud->action_testAjax()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-30 19:42:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: edit_property ~ MODPATH/crud/views/page/edit.php [ 17 ]
2014-05-30 19:42:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: edit_property ~ MODPATH/crud/views/page/edit.php [ 17 ]
--
#0 /var/www/kohana/modules/crud/views/page/edit.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 17, Array)
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
2014-05-30 19:45:45 --- ERROR: ErrorException [ 8 ]: Undefined variable: edit_property ~ MODPATH/crud/views/page/edit.php [ 17 ]
2014-05-30 19:45:45 --- STRACE: ErrorException [ 8 ]: Undefined variable: edit_property ~ MODPATH/crud/views/page/edit.php [ 17 ]
--
#0 /var/www/kohana/modules/crud/views/page/edit.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 17, Array)
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
2014-05-30 19:51:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: table_propery ~ MODPATH/crud/views/page/page.php [ 53 ]
2014-05-30 19:51:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: table_propery ~ MODPATH/crud/views/page/page.php [ 53 ]
--
#0 /var/www/kohana/modules/crud/views/page/page.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 53, Array)
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
2014-05-30 19:56:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: add_property ~ MODPATH/crud/views/page/add.php [ 20 ]
2014-05-30 19:56:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: add_property ~ MODPATH/crud/views/page/add.php [ 20 ]
--
#0 /var/www/kohana/modules/crud/views/page/add.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 20, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/classes/controller/crud.php(22): Kohana_View->__toString()
#5 [internal function]: Controller_Crud->action_testAjax()
#6 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#7 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/kohana/index.php(109): Kohana_Request->execute()
#10 {main}
2014-05-30 19:57:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: add_property ~ MODPATH/crud/views/page/add.php [ 20 ]
2014-05-30 19:57:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: add_property ~ MODPATH/crud/views/page/add.php [ 20 ]
--
#0 /var/www/kohana/modules/crud/views/page/add.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 20, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/classes/controller/crud.php(22): Kohana_View->__toString()
#5 [internal function]: Controller_Crud->action_testAjax()
#6 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#7 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/kohana/index.php(109): Kohana_Request->execute()
#10 {main}