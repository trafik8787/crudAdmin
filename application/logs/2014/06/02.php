<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-02 11:22:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-02 11:22:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-02 11:23:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-02 11:23:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-02 11:25:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-02 11:25:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-02 20:29:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-02 20:29:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-02 20:37:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: file ~ MODPATH/crud/views/page/page.php [ 17 ]
2014-06-02 20:37:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: file ~ MODPATH/crud/views/page/page.php [ 17 ]
--
#0 /var/www/kohana/modules/crud/views/page/page.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 17, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /var/www/kohana/modules/crud/classes/controller/test.php(15): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Test->action_index()
#7 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#8 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/kohana/index.php(109): Kohana_Request->execute()
#11 {main}
2014-06-02 20:39:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: file ~ MODPATH/crud/views/page/page.php [ 17 ]
2014-06-02 20:39:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: file ~ MODPATH/crud/views/page/page.php [ 17 ]
--
#0 /var/www/kohana/modules/crud/views/page/page.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 17, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /var/www/kohana/modules/crud/classes/controller/test.php(15): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Test->action_index()
#7 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#8 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/kohana/index.php(109): Kohana_Request->execute()
#11 {main}
2014-06-02 21:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL twitter was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-02 21:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL twitter was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-02 21:39:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL userguide was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-02 21:39:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL userguide was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-02 21:39:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userguide. ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-02 21:39:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userguide. ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-02 21:39:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL userguide was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-02 21:39:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL userguide was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-02 21:40:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL userguide was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-02 21:40:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL userguide was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-02 22:00:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: styles ~ MODPATH/crud/views/page/page.php [ 4 ]
2014-06-02 22:00:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: styles ~ MODPATH/crud/views/page/page.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/page/page.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /var/www/kohana/modules/crud/classes/controller/test.php(15): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Test->action_index()
#7 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#8 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/kohana/index.php(109): Kohana_Request->execute()
#11 {main}
2014-06-02 22:05:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: styles ~ MODPATH/crud/views/page/page.php [ 4 ]
2014-06-02 22:05:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: styles ~ MODPATH/crud/views/page/page.php [ 4 ]
--
#0 /var/www/kohana/modules/crud/views/page/page.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 4, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /var/www/kohana/modules/crud/classes/controller/test.php(15): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Test->action_index()
#7 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#8 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/kohana/index.php(109): Kohana_Request->execute()
#11 {main}
2014-06-02 23:17:35 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /var/www/kohana/modules/crud/classes/controller/test.php on line 22 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
2014-06-02 23:17:35 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /var/www/kohana/modules/crud/classes/controller/test.php on line 22 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
--
#0 /var/www/kohana/system/classes/kohana/controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/kohana...', 43, Array)
#1 /var/www/kohana/modules/crud/classes/controller/test.php(22): Kohana_Controller->__construct()
#2 /var/www/kohana/modules/crud/classes/controller/test.php(15): Controller_Test::asd()
#3 [internal function]: Controller_Test->action_index()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-02 23:18:16 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /var/www/kohana/modules/crud/classes/controller/test.php on line 22 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
2014-06-02 23:18:16 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /var/www/kohana/modules/crud/classes/controller/test.php on line 22 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
--
#0 /var/www/kohana/system/classes/kohana/controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/kohana...', 43, Array)
#1 /var/www/kohana/modules/crud/classes/controller/test.php(22): Kohana_Controller->__construct()
#2 /var/www/kohana/modules/crud/classes/controller/test.php(15): Controller_Test::asd()
#3 [internal function]: Controller_Test->action_index()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-02 23:18:21 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /var/www/kohana/modules/crud/classes/controller/test.php on line 22 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
2014-06-02 23:18:21 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /var/www/kohana/modules/crud/classes/controller/test.php on line 22 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
--
#0 /var/www/kohana/system/classes/kohana/controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/kohana...', 43, Array)
#1 /var/www/kohana/modules/crud/classes/controller/test.php(22): Kohana_Controller->__construct()
#2 /var/www/kohana/modules/crud/classes/controller/test.php(15): Controller_Test::asd()
#3 [internal function]: Controller_Test->action_index()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-02 23:19:21 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /var/www/kohana/modules/crud/classes/controller/test.php on line 22 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
2014-06-02 23:19:21 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /var/www/kohana/modules/crud/classes/controller/test.php on line 22 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
--
#0 /var/www/kohana/system/classes/kohana/controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/kohana...', 43, Array)
#1 /var/www/kohana/modules/crud/classes/controller/test.php(22): Kohana_Controller->__construct()
#2 /var/www/kohana/modules/crud/classes/controller/test.php(15): Controller_Test::asd()
#3 [internal function]: Controller_Test->action_index()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-02 23:19:23 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /var/www/kohana/modules/crud/classes/controller/test.php on line 22 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
2014-06-02 23:19:23 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /var/www/kohana/modules/crud/classes/controller/test.php on line 22 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
--
#0 /var/www/kohana/system/classes/kohana/controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/kohana...', 43, Array)
#1 /var/www/kohana/modules/crud/classes/controller/test.php(22): Kohana_Controller->__construct()
#2 /var/www/kohana/modules/crud/classes/controller/test.php(15): Controller_Test::asd()
#3 [internal function]: Controller_Test->action_index()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-02 23:20:11 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /var/www/kohana/modules/crud/classes/controller/test.php on line 22 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
2014-06-02 23:20:11 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /var/www/kohana/modules/crud/classes/controller/test.php on line 22 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
--
#0 /var/www/kohana/system/classes/kohana/controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/kohana...', 43, Array)
#1 /var/www/kohana/modules/crud/classes/controller/test.php(22): Kohana_Controller->__construct()
#2 /var/www/kohana/modules/crud/classes/controller/test.php(15): Controller_Test::asd()
#3 [internal function]: Controller_Test->action_index()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-02 23:26:14 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /var/www/kohana/modules/crud/classes/cruds.php on line 98 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
2014-06-02 23:26:14 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /var/www/kohana/modules/crud/classes/cruds.php on line 98 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
--
#0 /var/www/kohana/system/classes/kohana/controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/kohana...', 43, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(98): Kohana_Controller->__construct()
#2 /var/www/kohana/modules/crud/classes/controller/test.php(15): Cruds->render()
#3 [internal function]: Controller_Test->action_index()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-02 23:26:20 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /var/www/kohana/modules/crud/classes/cruds.php on line 98 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
2014-06-02 23:26:20 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /var/www/kohana/modules/crud/classes/cruds.php on line 98 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
--
#0 /var/www/kohana/system/classes/kohana/controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/kohana...', 43, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(98): Kohana_Controller->__construct()
#2 /var/www/kohana/modules/crud/classes/controller/test.php(15): Cruds->render()
#3 [internal function]: Controller_Test->action_index()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-02 23:31:35 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /var/www/kohana/modules/crud/classes/controller/test.php on line 22 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
2014-06-02 23:31:35 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /var/www/kohana/modules/crud/classes/controller/test.php on line 22 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
--
#0 /var/www/kohana/system/classes/kohana/controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/kohana...', 43, Array)
#1 /var/www/kohana/modules/crud/classes/controller/test.php(22): Kohana_Controller->__construct()
#2 /var/www/kohana/modules/crud/classes/controller/test.php(15): Controller_Test::asd()
#3 [internal function]: Controller_Test->action_index()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-02 23:37:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: styles ~ MODPATH/crud/views/page/main_template.php [ 14 ]
2014-06-02 23:37:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: styles ~ MODPATH/crud/views/page/main_template.php [ 14 ]
--
#0 /var/www/kohana/modules/crud/views/page/main_template.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 14, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /var/www/kohana/modules/crud/classes/controller/test.php(15): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Test->action_index()
#7 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#8 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/kohana/index.php(109): Kohana_Request->execute()
#11 {main}
2014-06-02 23:39:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/crud/media/fonts/glyphicons-halflings-regular.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-02 23:39:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/crud/media/fonts/glyphicons-halflings-regular.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-02 23:39:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/crud/media/fonts/glyphicons-halflings-regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-02 23:39:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/crud/media/fonts/glyphicons-halflings-regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-02 23:39:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/crud/media/fonts/glyphicons-halflings-regular.svg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-02 23:39:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/crud/media/fonts/glyphicons-halflings-regular.svg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-02 23:39:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/crud/media/fonts/glyphicons-halflings-regular.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-02 23:39:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/crud/media/fonts/glyphicons-halflings-regular.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-02 23:39:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/crud/media/fonts/glyphicons-halflings-regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-02 23:39:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/crud/media/fonts/glyphicons-halflings-regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-02 23:39:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/crud/media/fonts/glyphicons-halflings-regular.svg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-02 23:39:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/crud/media/fonts/glyphicons-halflings-regular.svg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-02 23:42:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/page/main_template.php [ 21 ]
2014-06-02 23:42:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/page/main_template.php [ 21 ]
--
#0 /var/www/kohana/modules/crud/views/page/main_template.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 21, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-02 23:42:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/page/main_template.php [ 21 ]
2014-06-02 23:42:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/page/main_template.php [ 21 ]
--
#0 /var/www/kohana/modules/crud/views/page/main_template.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 21, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-02 23:44:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/page/main_template.php [ 21 ]
2014-06-02 23:44:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/page/main_template.php [ 21 ]
--
#0 /var/www/kohana/modules/crud/views/page/main_template.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 21, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /var/www/kohana/modules/crud/classes/controller/main.php(54): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Main->after()
#6 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#7 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/kohana/index.php(109): Kohana_Request->execute()
#10 {main}
2014-06-02 23:44:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: styles ~ MODPATH/crud/views/page/main_template.php [ 15 ]
2014-06-02 23:44:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: styles ~ MODPATH/crud/views/page/main_template.php [ 15 ]
--
#0 /var/www/kohana/modules/crud/views/page/main_template.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 15, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /var/www/kohana/modules/crud/classes/controller/test.php(15): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Test->action_index()
#7 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#8 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/kohana/index.php(109): Kohana_Request->execute()
#11 {main}
2014-06-02 23:45:18 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2014-06-02 23:45:18 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-02 23:47:27 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2014-06-02 23:47:27 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-02 23:47:28 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2014-06-02 23:47:28 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-02 23:48:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: styles ~ MODPATH/crud/views/page/main_template.php [ 15 ]
2014-06-02 23:48:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: styles ~ MODPATH/crud/views/page/main_template.php [ 15 ]
--
#0 /var/www/kohana/modules/crud/views/page/main_template.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 15, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /var/www/kohana/modules/crud/classes/controller/test.php(15): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Test->action_index()
#7 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#8 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/kohana/index.php(109): Kohana_Request->execute()
#11 {main}
2014-06-02 23:49:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-02 23:49:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-02 23:49:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-02 23:49:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-02 23:49:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-02 23:49:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-02 23:49:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-02 23:49:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-02 23:50:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/page/main_template.php [ 21 ]
2014-06-02 23:50:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/page/main_template.php [ 21 ]
--
#0 /var/www/kohana/modules/crud/views/page/main_template.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 21, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-02 23:51:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/page/main_template.php [ 21 ]
2014-06-02 23:51:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: render ~ MODPATH/crud/views/page/main_template.php [ 21 ]
--
#0 /var/www/kohana/modules/crud/views/page/main_template.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 21, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}