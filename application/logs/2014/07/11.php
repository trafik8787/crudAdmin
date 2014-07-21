<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-11 01:15:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 01:15:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 01:15:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-11 01:15:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-11 01:37:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 01:37:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 01:37:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-11 01:37:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-11 02:36:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: arr_value ~ MODPATH/crud/views/controls/input_text.php [ 21 ]
2014-07-11 02:36:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: arr_value ~ MODPATH/crud/views/controls/input_text.php [ 21 ]
--
#0 /var/www/kohana/modules/crud/views/controls/input_text.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 21, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/page/add.php(169): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/kohana/modules/crud/views/page/main_template.php(10): Kohana_View->__toString()
#9 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#10 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#11 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#14 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/kohana/index.php(109): Kohana_Request->execute()
#17 {main}
2014-07-11 02:36:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 02:36:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 02:36:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: arr_value ~ MODPATH/crud/views/controls/input_text.php [ 21 ]
2014-07-11 02:36:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: arr_value ~ MODPATH/crud/views/controls/input_text.php [ 21 ]
--
#0 /var/www/kohana/modules/crud/views/controls/input_text.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 21, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/page/add.php(169): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/kohana/modules/crud/views/page/main_template.php(10): Kohana_View->__toString()
#9 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#10 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#11 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#14 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/kohana/index.php(109): Kohana_Request->execute()
#17 {main}
2014-07-11 02:39:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 02:39:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 02:52:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: origin_value_fild ~ MODPATH/crud/views/page/edit.php [ 154 ]
2014-07-11 02:52:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: origin_value_fild ~ MODPATH/crud/views/page/edit.php [ 154 ]
--
#0 /var/www/kohana/modules/crud/views/page/edit.php(154): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 154, Array)
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
2014-07-11 02:52:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 02:52:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 02:52:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: origin_value_fild ~ MODPATH/crud/views/page/edit.php [ 154 ]
2014-07-11 02:52:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: origin_value_fild ~ MODPATH/crud/views/page/edit.php [ 154 ]
--
#0 /var/www/kohana/modules/crud/views/page/edit.php(154): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 154, Array)
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
2014-07-11 02:52:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 02:52:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 02:52:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: origin_value_fild ~ MODPATH/crud/views/page/edit.php [ 154 ]
2014-07-11 02:52:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: origin_value_fild ~ MODPATH/crud/views/page/edit.php [ 154 ]
--
#0 /var/www/kohana/modules/crud/views/page/edit.php(154): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 154, Array)
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
2014-07-11 02:52:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 02:52:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 02:52:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: origin_value_fild ~ MODPATH/crud/views/page/edit.php [ 154 ]
2014-07-11 02:52:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: origin_value_fild ~ MODPATH/crud/views/page/edit.php [ 154 ]
--
#0 /var/www/kohana/modules/crud/views/page/edit.php(154): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 154, Array)
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
2014-07-11 02:53:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: origin_value_fild ~ MODPATH/crud/views/controls/select.php [ 7 ]
2014-07-11 02:53:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: origin_value_fild ~ MODPATH/crud/views/controls/select.php [ 7 ]
--
#0 /var/www/kohana/modules/crud/views/controls/select.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 7, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/page/add.php(146): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/kohana/modules/crud/views/page/main_template.php(10): Kohana_View->__toString()
#9 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#10 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#11 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#14 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/kohana/index.php(109): Kohana_Request->execute()
#17 {main}
2014-07-11 02:53:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 02:53:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 02:53:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: origin_value_fild ~ MODPATH/crud/views/controls/select.php [ 7 ]
2014-07-11 02:53:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: origin_value_fild ~ MODPATH/crud/views/controls/select.php [ 7 ]
--
#0 /var/www/kohana/modules/crud/views/controls/select.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 7, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/page/add.php(146): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/kohana/modules/crud/views/page/main_template.php(10): Kohana_View->__toString()
#9 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#10 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#11 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#14 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/kohana/index.php(109): Kohana_Request->execute()
#17 {main}
2014-07-11 02:54:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-11 02:54:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-11 02:54:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 02:54:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 02:54:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-11 02:54:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-11 02:56:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 02:56:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 02:56:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 02:56:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 02:56:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-11 02:56:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-11 02:56:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 02:56:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 02:56:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-11 02:56:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-11 02:56:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 02:56:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 02:56:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 02:56:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 02:56:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-11 02:56:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-11 03:09:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-11 03:09:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-11 03:09:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 03:09:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 03:09:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-11 03:09:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-11 11:33:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 11:33:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 11:33:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-11 11:33:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-11 11:33:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 11:33:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 15:59:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 15:59:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 15:59:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-11 15:59:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-11 15:59:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-11 15:59:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-11 16:00:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 16:00:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 16:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-11 16:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-11 16:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 16:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 16:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-11 16:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-11 16:01:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 16:01:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 16:01:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-11 16:01:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-11 16:01:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 16:01:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 16:02:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 16:02:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 16:02:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-11 16:02:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-11 16:04:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 16:04:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 16:04:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-11 16:04:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-11 16:04:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-11 16:04:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-11 16:11:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 16:11:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 16:11:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-11 16:11:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-11 16:11:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-11 16:11:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-11 16:14:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 16:14:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 16:14:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 16:14:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 16:15:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-11 16:15:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-11 16:15:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 16:15:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 16:15:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-11 16:15:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-11 16:26:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 16:26:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 16:26:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-11 16:26:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-11 16:26:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 16:26:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 16:26:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-11 16:26:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-11 16:27:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 16:27:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 16:27:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 16:27:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 16:27:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-11 16:27:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-11 16:27:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 16:27:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 16:27:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-11 16:27:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-11 16:27:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-11 16:27:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-11 16:27:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 16:27:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 16:27:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 16:27:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 16:27:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-11 16:27:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/pre_53adcf5bc5a11.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-11 16:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 16:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 16:27:51 --- ERROR: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `articles` (`title`, `author`, `content_short`, `data`, `status`) VALUES ('dfgdfg', 'dfgadfg', '2014-07-12', 'ner') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-11 16:27:51 --- STRACE: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `articles` (`title`, `author`, `content_short`, `data`, `status`) VALUES ('dfgdfg', 'dfgadfg', '2014-07-12', 'ner') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ar...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(79): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/controller/crud.php(507): Model_All->insert('articles', Array, Array)
#3 [internal function]: Controller_Crud->action_add()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-07-11 16:35:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 16:35:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 16:36:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 16:36:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 16:36:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 16:36:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 16:36:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 16:36:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 16:37:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 16:37:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 16:38:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 16:38:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 16:42:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 16:42:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 16:42:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 16:42:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 16:44:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 16:44:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 16:44:26 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/views/controls/input_text.php [ 22 ]
2014-07-11 16:44:26 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/views/controls/input_text.php [ 22 ]
--
#0 /var/www/kohana/modules/crud/views/controls/input_text.php(22): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 22, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/page/edit.php(186): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/kohana/modules/crud/views/page/main_template.php(10): Kohana_View->__toString()
#9 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#10 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#11 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#14 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/kohana/index.php(109): Kohana_Request->execute()
#17 {main}
2014-07-11 16:44:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 16:44:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 16:44:29 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/views/controls/input_text.php [ 22 ]
2014-07-11 16:44:29 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/views/controls/input_text.php [ 22 ]
--
#0 /var/www/kohana/modules/crud/views/controls/input_text.php(22): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 22, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/page/edit.php(186): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/kohana/modules/crud/views/page/main_template.php(10): Kohana_View->__toString()
#9 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#10 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#11 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#14 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/kohana/index.php(109): Kohana_Request->execute()
#17 {main}
2014-07-11 16:45:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 16:45:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 16:45:35 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/views/controls/input_text.php [ 22 ]
2014-07-11 16:45:35 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/views/controls/input_text.php [ 22 ]
--
#0 /var/www/kohana/modules/crud/views/controls/input_text.php(22): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 22, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/page/edit.php(186): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/kohana/modules/crud/views/page/main_template.php(10): Kohana_View->__toString()
#9 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#10 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#11 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#14 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/kohana/index.php(109): Kohana_Request->execute()
#17 {main}
2014-07-11 16:45:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 16:45:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 16:45:38 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/views/controls/input_text.php [ 22 ]
2014-07-11 16:45:38 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/views/controls/input_text.php [ 22 ]
--
#0 /var/www/kohana/modules/crud/views/controls/input_text.php(22): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 22, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/page/edit.php(186): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/kohana/modules/crud/views/page/main_template.php(10): Kohana_View->__toString()
#9 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#10 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#11 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#14 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/kohana/index.php(109): Kohana_Request->execute()
#17 {main}
2014-07-11 16:46:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 16:46:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 16:46:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 16:46:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 16:47:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 16:47:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 16:49:15 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/views/controls/input_text.php [ 22 ]
2014-07-11 16:49:15 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/views/controls/input_text.php [ 22 ]
--
#0 /var/www/kohana/modules/crud/views/controls/input_text.php(22): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 22, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/page/edit.php(186): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/kohana/modules/crud/views/page/main_template.php(10): Kohana_View->__toString()
#9 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#10 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#11 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#14 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/kohana/index.php(109): Kohana_Request->execute()
#17 {main}
2014-07-11 16:49:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 16:49:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 16:49:17 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/views/controls/input_text.php [ 22 ]
2014-07-11 16:49:17 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/views/controls/input_text.php [ 22 ]
--
#0 /var/www/kohana/modules/crud/views/controls/input_text.php(22): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 22, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/page/edit.php(186): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/kohana/modules/crud/views/page/main_template.php(10): Kohana_View->__toString()
#9 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#10 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#11 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#14 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/kohana/index.php(109): Kohana_Request->execute()
#17 {main}
2014-07-11 16:54:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 16:54:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 16:55:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 16:55:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 16:55:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 16:55:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 17:18:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 17:18:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 17:18:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 17:18:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 17:18:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 17:18:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 17:19:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 17:19:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 17:36:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 17:36:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 17:36:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 17:36:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 17:49:54 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/views/controls/select.php [ 24 ]
2014-07-11 17:49:54 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/views/controls/select.php [ 24 ]
--
#0 /var/www/kohana/modules/crud/views/controls/select.php(24): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 24, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/page/edit.php(161): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/kohana/modules/crud/views/page/main_template.php(10): Kohana_View->__toString()
#9 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#10 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#11 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#14 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/kohana/index.php(109): Kohana_Request->execute()
#17 {main}
2014-07-11 17:49:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 17:49:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 17:49:57 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/views/controls/select.php [ 24 ]
2014-07-11 17:49:57 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/views/controls/select.php [ 24 ]
--
#0 /var/www/kohana/modules/crud/views/controls/select.php(24): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 24, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/page/edit.php(161): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/kohana/modules/crud/views/page/main_template.php(10): Kohana_View->__toString()
#9 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#10 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#11 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#14 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/kohana/index.php(109): Kohana_Request->execute()
#17 {main}
2014-07-11 17:52:00 --- ERROR: ErrorException [ 8 ]: unserialize(): Error at offset 0 of 1 bytes ~ MODPATH/crud/views/controls/select.php [ 3 ]
2014-07-11 17:52:00 --- STRACE: ErrorException [ 8 ]: unserialize(): Error at offset 0 of 1 bytes ~ MODPATH/crud/views/controls/select.php [ 3 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'unserialize(): ...', '/var/www/kohana...', 3, Array)
#1 /var/www/kohana/modules/crud/views/controls/select.php(3): unserialize('n')
#2 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#3 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#4 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /var/www/kohana/modules/crud/views/page/edit.php(161): Kohana_View->__toString()
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
2014-07-11 17:52:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 17:52:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 17:52:03 --- ERROR: ErrorException [ 8 ]: unserialize(): Error at offset 0 of 1 bytes ~ MODPATH/crud/views/controls/select.php [ 3 ]
2014-07-11 17:52:03 --- STRACE: ErrorException [ 8 ]: unserialize(): Error at offset 0 of 1 bytes ~ MODPATH/crud/views/controls/select.php [ 3 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'unserialize(): ...', '/var/www/kohana...', 3, Array)
#1 /var/www/kohana/modules/crud/views/controls/select.php(3): unserialize('n')
#2 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#3 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#4 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /var/www/kohana/modules/crud/views/page/edit.php(161): Kohana_View->__toString()
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
2014-07-11 17:52:10 --- ERROR: ErrorException [ 8 ]: unserialize(): Error at offset 0 of 1 bytes ~ MODPATH/crud/views/controls/select.php [ 3 ]
2014-07-11 17:52:10 --- STRACE: ErrorException [ 8 ]: unserialize(): Error at offset 0 of 1 bytes ~ MODPATH/crud/views/controls/select.php [ 3 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'unserialize(): ...', '/var/www/kohana...', 3, Array)
#1 /var/www/kohana/modules/crud/views/controls/select.php(3): unserialize('n')
#2 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#3 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#4 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /var/www/kohana/modules/crud/views/page/edit.php(161): Kohana_View->__toString()
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
2014-07-11 17:52:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 17:52:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 17:52:13 --- ERROR: ErrorException [ 8 ]: unserialize(): Error at offset 0 of 1 bytes ~ MODPATH/crud/views/controls/select.php [ 3 ]
2014-07-11 17:52:13 --- STRACE: ErrorException [ 8 ]: unserialize(): Error at offset 0 of 1 bytes ~ MODPATH/crud/views/controls/select.php [ 3 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'unserialize(): ...', '/var/www/kohana...', 3, Array)
#1 /var/www/kohana/modules/crud/views/controls/select.php(3): unserialize('n')
#2 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#3 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#4 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /var/www/kohana/modules/crud/views/page/edit.php(161): Kohana_View->__toString()
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
2014-07-11 17:52:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 17:52:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 17:54:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 17:54:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 17:54:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 17:54:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 17:57:16 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'y' ~ MODPATH/crud/views/controls/select.php [ 31 ]
2014-07-11 17:57:16 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'y' ~ MODPATH/crud/views/controls/select.php [ 31 ]
--
#0 /var/www/kohana/modules/crud/views/controls/select.php(31): Kohana_Core::error_handler(2, 'Illegal string ...', '/var/www/kohana...', 31, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/page/edit.php(161): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/kohana/modules/crud/views/page/main_template.php(10): Kohana_View->__toString()
#9 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#10 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#11 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#14 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/kohana/index.php(109): Kohana_Request->execute()
#17 {main}
2014-07-11 17:57:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 17:57:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 17:57:19 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'y' ~ MODPATH/crud/views/controls/select.php [ 31 ]
2014-07-11 17:57:19 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'y' ~ MODPATH/crud/views/controls/select.php [ 31 ]
--
#0 /var/www/kohana/modules/crud/views/controls/select.php(31): Kohana_Core::error_handler(2, 'Illegal string ...', '/var/www/kohana...', 31, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/page/edit.php(161): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/kohana/modules/crud/views/page/main_template.php(10): Kohana_View->__toString()
#9 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#10 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#11 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#14 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/kohana/index.php(109): Kohana_Request->execute()
#17 {main}
2014-07-11 17:58:43 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'y' ~ MODPATH/crud/views/controls/select.php [ 29 ]
2014-07-11 17:58:43 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'y' ~ MODPATH/crud/views/controls/select.php [ 29 ]
--
#0 /var/www/kohana/modules/crud/views/controls/select.php(29): Kohana_Core::error_handler(2, 'Illegal string ...', '/var/www/kohana...', 29, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/page/edit.php(161): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/kohana/modules/crud/views/page/main_template.php(10): Kohana_View->__toString()
#9 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#10 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#11 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#14 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/kohana/index.php(109): Kohana_Request->execute()
#17 {main}
2014-07-11 17:58:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 17:58:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 17:58:45 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'y' ~ MODPATH/crud/views/controls/select.php [ 29 ]
2014-07-11 17:58:45 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'y' ~ MODPATH/crud/views/controls/select.php [ 29 ]
--
#0 /var/www/kohana/modules/crud/views/controls/select.php(29): Kohana_Core::error_handler(2, 'Illegal string ...', '/var/www/kohana...', 29, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/page/edit.php(161): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/kohana/modules/crud/views/page/main_template.php(10): Kohana_View->__toString()
#9 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#10 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#11 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#14 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/kohana/index.php(109): Kohana_Request->execute()
#17 {main}
2014-07-11 17:59:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 17:59:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 18:02:50 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/views/controls/select.php [ 24 ]
2014-07-11 18:02:50 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/views/controls/select.php [ 24 ]
--
#0 /var/www/kohana/modules/crud/views/controls/select.php(24): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 24, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/page/edit.php(161): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/kohana/modules/crud/views/page/main_template.php(10): Kohana_View->__toString()
#9 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#10 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#11 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#14 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/kohana/index.php(109): Kohana_Request->execute()
#17 {main}
2014-07-11 18:02:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 18:02:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 18:02:53 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/views/controls/select.php [ 24 ]
2014-07-11 18:02:53 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/views/controls/select.php [ 24 ]
--
#0 /var/www/kohana/modules/crud/views/controls/select.php(24): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 24, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/page/edit.php(161): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/kohana/modules/crud/views/page/main_template.php(10): Kohana_View->__toString()
#9 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#10 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#11 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#14 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/kohana/index.php(109): Kohana_Request->execute()
#17 {main}
2014-07-11 18:03:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 18:03:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 18:07:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 18:07:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 18:07:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 18:07:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 18:07:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 18:07:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 18:28:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: origin_value_fild ~ MODPATH/crud/views/controls/select.php [ 24 ]
2014-07-11 18:28:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: origin_value_fild ~ MODPATH/crud/views/controls/select.php [ 24 ]
--
#0 /var/www/kohana/modules/crud/views/controls/select.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 24, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/page/add.php(147): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/kohana/modules/crud/views/page/main_template.php(10): Kohana_View->__toString()
#9 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#10 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#11 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#14 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/kohana/index.php(109): Kohana_Request->execute()
#17 {main}
2014-07-11 18:28:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 18:28:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 18:28:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: origin_value_fild ~ MODPATH/crud/views/controls/select.php [ 24 ]
2014-07-11 18:28:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: origin_value_fild ~ MODPATH/crud/views/controls/select.php [ 24 ]
--
#0 /var/www/kohana/modules/crud/views/controls/select.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 24, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/page/add.php(147): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/kohana/modules/crud/views/page/main_template.php(10): Kohana_View->__toString()
#9 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#10 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#11 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#14 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/kohana/index.php(109): Kohana_Request->execute()
#17 {main}
2014-07-11 18:28:14 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/views/controls/select.php [ 24 ]
2014-07-11 18:28:14 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/views/controls/select.php [ 24 ]
--
#0 /var/www/kohana/modules/crud/views/controls/select.php(24): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 24, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/page/edit.php(161): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/kohana/modules/crud/views/page/main_template.php(10): Kohana_View->__toString()
#9 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#10 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#11 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#14 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/kohana/index.php(109): Kohana_Request->execute()
#17 {main}
2014-07-11 18:28:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 18:28:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 18:28:17 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/views/controls/select.php [ 24 ]
2014-07-11 18:28:17 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/views/controls/select.php [ 24 ]
--
#0 /var/www/kohana/modules/crud/views/controls/select.php(24): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 24, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/page/edit.php(161): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/kohana/modules/crud/views/page/main_template.php(10): Kohana_View->__toString()
#9 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#10 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#11 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#14 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/kohana/index.php(109): Kohana_Request->execute()
#17 {main}
2014-07-11 18:28:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 18:28:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 18:28:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 18:28:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 18:28:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 18:28:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 19:33:05 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/views/controls/select.php [ 24 ]
2014-07-11 19:33:05 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/views/controls/select.php [ 24 ]
--
#0 /var/www/kohana/modules/crud/views/controls/select.php(24): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 24, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/page/edit.php(161): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/kohana/modules/crud/views/page/main_template.php(10): Kohana_View->__toString()
#9 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#10 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#11 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#14 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/kohana/index.php(109): Kohana_Request->execute()
#17 {main}
2014-07-11 19:33:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 19:33:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 19:33:07 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/views/controls/select.php [ 24 ]
2014-07-11 19:33:07 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/crud/views/controls/select.php [ 24 ]
--
#0 /var/www/kohana/modules/crud/views/controls/select.php(24): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/kohana...', 24, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/page/edit.php(161): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/kohana/modules/crud/views/page/main_template.php(10): Kohana_View->__toString()
#9 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#10 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#11 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#14 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/kohana/index.php(109): Kohana_Request->execute()
#17 {main}
2014-07-11 19:34:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 19:34:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 19:35:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: origin_value_fild ~ MODPATH/crud/views/controls/select.php [ 24 ]
2014-07-11 19:35:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: origin_value_fild ~ MODPATH/crud/views/controls/select.php [ 24 ]
--
#0 /var/www/kohana/modules/crud/views/controls/select.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 24, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/page/add.php(147): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/kohana/modules/crud/views/page/main_template.php(10): Kohana_View->__toString()
#9 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#10 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#11 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#14 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/kohana/index.php(109): Kohana_Request->execute()
#17 {main}
2014-07-11 19:35:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 19:35:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 19:35:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: origin_value_fild ~ MODPATH/crud/views/controls/select.php [ 24 ]
2014-07-11 19:35:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: origin_value_fild ~ MODPATH/crud/views/controls/select.php [ 24 ]
--
#0 /var/www/kohana/modules/crud/views/controls/select.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 24, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/page/add.php(147): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/kohana/modules/crud/views/page/main_template.php(10): Kohana_View->__toString()
#9 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#10 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#11 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#14 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/kohana/index.php(109): Kohana_Request->execute()
#17 {main}
2014-07-11 19:37:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 19:37:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 19:37:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 19:37:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 19:37:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 19:37:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 19:37:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 19:37:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 20:00:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 20:00:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 20:00:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 20:00:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 20:00:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 20:00:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 20:36:07 --- ERROR: ErrorException [ 2 ]: file_get_contents(): Filename cannot be empty ~ MODPATH/crud/classes/controller/ajax.php [ 35 ]
2014-07-11 20:36:07 --- STRACE: ErrorException [ 2 ]: file_get_contents(): Filename cannot be empty ~ MODPATH/crud/classes/controller/ajax.php [ 35 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/var/www/kohana...', 35, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(35): file_get_contents('')
#2 [internal function]: Controller_Ajax->action_media()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-07-11 20:36:08 --- ERROR: ErrorException [ 2 ]: file_get_contents(): Filename cannot be empty ~ MODPATH/crud/classes/controller/ajax.php [ 35 ]
2014-07-11 20:36:08 --- STRACE: ErrorException [ 2 ]: file_get_contents(): Filename cannot be empty ~ MODPATH/crud/classes/controller/ajax.php [ 35 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/var/www/kohana...', 35, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(35): file_get_contents('')
#2 [internal function]: Controller_Ajax->action_media()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-07-11 20:36:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 20:36:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 20:40:24 --- ERROR: ErrorException [ 2 ]: file_get_contents(): Filename cannot be empty ~ MODPATH/crud/classes/controller/ajax.php [ 35 ]
2014-07-11 20:40:24 --- STRACE: ErrorException [ 2 ]: file_get_contents(): Filename cannot be empty ~ MODPATH/crud/classes/controller/ajax.php [ 35 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/var/www/kohana...', 35, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(35): file_get_contents('')
#2 [internal function]: Controller_Ajax->action_media()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-07-11 20:40:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 20:40:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 20:42:23 --- ERROR: ErrorException [ 2 ]: file_get_contents(): Filename cannot be empty ~ MODPATH/crud/classes/controller/ajax.php [ 35 ]
2014-07-11 20:42:23 --- STRACE: ErrorException [ 2 ]: file_get_contents(): Filename cannot be empty ~ MODPATH/crud/classes/controller/ajax.php [ 35 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/var/www/kohana...', 35, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(35): file_get_contents('')
#2 [internal function]: Controller_Ajax->action_media()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-07-11 20:42:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 20:42:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 20:42:34 --- ERROR: ErrorException [ 2 ]: file_get_contents(): Filename cannot be empty ~ MODPATH/crud/classes/controller/ajax.php [ 35 ]
2014-07-11 20:42:34 --- STRACE: ErrorException [ 2 ]: file_get_contents(): Filename cannot be empty ~ MODPATH/crud/classes/controller/ajax.php [ 35 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/var/www/kohana...', 35, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(35): file_get_contents('')
#2 [internal function]: Controller_Ajax->action_media()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-07-11 20:42:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 20:42:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 20:45:37 --- ERROR: ErrorException [ 2 ]: file_get_contents(): Filename cannot be empty ~ MODPATH/crud/classes/controller/ajax.php [ 35 ]
2014-07-11 20:45:37 --- STRACE: ErrorException [ 2 ]: file_get_contents(): Filename cannot be empty ~ MODPATH/crud/classes/controller/ajax.php [ 35 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/var/www/kohana...', 35, Array)
#1 /var/www/kohana/modules/crud/classes/controller/ajax.php(35): file_get_contents('')
#2 [internal function]: Controller_Ajax->action_media()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-07-11 20:45:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 20:45:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 20:46:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 20:46:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 20:47:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 20:47:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 20:47:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 20:47:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 20:47:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 20:47:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 20:48:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 20:48:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 20:52:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 20:52:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 21:34:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 21:34:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 21:35:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 21:35:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 21:36:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 21:36:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 21:37:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 21:37:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 21:37:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 21:37:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 23:22:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 23:22:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 23:24:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 23:24:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 23:25:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 23:25:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 23:25:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 23:25:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 23:27:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 23:27:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 23:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 23:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 23:31:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 23:31:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 23:33:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 23:33:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 23:34:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 23:34:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 23:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 23:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 23:39:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 23:39:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 23:40:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 23:40:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 23:41:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 23:41:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 23:41:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 23:41:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 23:42:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 23:42:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 23:43:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 23:43:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 23:44:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 23:44:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 23:45:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 23:45:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-11 23:50:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-11 23:50:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}