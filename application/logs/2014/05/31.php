<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-31 18:11:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-31 18:11:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-31 18:11:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL twitter was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-31 18:11:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL twitter was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-31 18:11:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-31 18:11:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-31 18:12:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL testAjax was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-31 18:12:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL testAjax was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-31 18:12:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL testAjax was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-31 18:12:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL testAjax was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-31 18:13:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL testAjax was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-31 18:13:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL testAjax was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-31 18:13:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL testAjax was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-31 18:13:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL testAjax was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-31 19:24:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: rows_query ~ MODPATH/crud/views/page/page.php [ 39 ]
2014-05-31 19:24:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: rows_query ~ MODPATH/crud/views/page/page.php [ 39 ]
--
#0 /var/www/kohana/modules/crud/views/page/page.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 39, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/main_template.php(5): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Test))
#10 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/kohana/index.php(109): Kohana_Request->execute()
#13 {main}
2014-05-31 19:25:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: rows_query ~ MODPATH/crud/views/page/page.php [ 39 ]
2014-05-31 19:25:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: rows_query ~ MODPATH/crud/views/page/page.php [ 39 ]
--
#0 /var/www/kohana/modules/crud/views/page/page.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 39, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/main_template.php(5): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Test))
#10 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/kohana/index.php(109): Kohana_Request->execute()
#13 {main}
2014-05-31 19:34:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL twitter was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-31 19:34:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL twitter was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-31 19:34:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-31 19:34:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-31 19:56:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL twitter was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-31 19:56:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL twitter was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-31 19:56:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-31 19:56:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-31 19:57:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL twitter was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-31 19:57:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL twitter was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-31 19:57:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-31 19:57:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-31 19:58:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL twitter was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-31 19:58:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL twitter was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-31 19:58:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-31 19:58:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-31 19:59:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL twitter was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-31 19:59:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL twitter was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-31 19:59:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-31 19:59:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-31 20:02:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 7 ]
2014-05-31 20:02:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 7 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 7, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-31 21:03:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL twitter was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-31 21:03:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL twitter was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-31 21:03:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-31 21:03:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-31 21:11:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 7 ]
2014-05-31 21:11:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 7 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 7, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-31 21:12:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 7 ]
2014-05-31 21:12:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 7 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 7, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-31 21:14:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 7 ]
2014-05-31 21:14:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/main_template.php [ 7 ]
--
#0 /var/www/kohana/modules/crud/views/main_template.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 7, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-31 23:29:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-31 23:29:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}