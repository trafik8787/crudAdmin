<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-01 09:16:57 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-03-01 09:16:57 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/kohana/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('_gitlab_session', NULL)
#1 /var/www/kohana/system/classes/kohana/request.php(202): Kohana_Cookie::get('_gitlab_session')
#2 /var/www/kohana/index.php(108): Kohana_Request::factory()
#3 {main}
2014-03-01 09:16:57 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-03-01 09:16:57 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/kohana/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('_gitlab_session', NULL)
#1 /var/www/kohana/system/classes/kohana/request.php(202): Kohana_Cookie::get('_gitlab_session')
#2 /var/www/kohana/index.php(108): Kohana_Request::factory()
#3 {main}
2014-03-01 09:16:58 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-03-01 09:16:58 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/kohana/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('_gitlab_session', NULL)
#1 /var/www/kohana/system/classes/kohana/request.php(202): Kohana_Cookie::get('_gitlab_session')
#2 /var/www/kohana/index.php(108): Kohana_Request::factory()
#3 {main}
2014-03-01 09:16:58 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-03-01 09:16:58 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/kohana/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('_gitlab_session', NULL)
#1 /var/www/kohana/system/classes/kohana/request.php(202): Kohana_Cookie::get('_gitlab_session')
#2 /var/www/kohana/index.php(108): Kohana_Request::factory()
#3 {main}
2014-03-01 09:16:58 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-03-01 09:16:58 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/kohana/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('_gitlab_session', NULL)
#1 /var/www/kohana/system/classes/kohana/request.php(202): Kohana_Cookie::get('_gitlab_session')
#2 /var/www/kohana/index.php(108): Kohana_Request::factory()
#3 {main}
2014-03-01 09:16:58 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2014-03-01 09:16:58 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /var/www/kohana/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('_gitlab_session', NULL)
#1 /var/www/kohana/system/classes/kohana/request.php(202): Kohana_Cookie::get('_gitlab_session')
#2 /var/www/kohana/index.php(108): Kohana_Request::factory()
#3 {main}
2014-03-01 09:18:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-01 09:18:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-03-01 11:22:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL welccome/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-01 11:22:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL welccome/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-03-01 11:25:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-03-01 11:25:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-03-01 11:27:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/welcome/test ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-01 11:27:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/welcome/test ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-03-01 11:27:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/welcome/test ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-01 11:27:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/welcome/test ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-03-01 11:27:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/welcome/test ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-01 11:27:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/welcome/test ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-03-01 11:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/welcome/test ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-01 11:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/welcome/test ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-03-01 11:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/welcome/test ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-01 11:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/welcome/test ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-03-01 11:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/welcome/test ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-01 11:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/welcome/test ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-03-01 11:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/welcome/test ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-01 11:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/welcome/test ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-03-01 11:27:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/welcome/test ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-01 11:27:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/welcome/test ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-03-01 21:51:03 --- ERROR: ErrorException [ 2 ]: include(/var/www/kohana/application/config/mysite.php): failed to open stream: Permission denied ~ SYSPATH/classes/kohana/core.php [ 800 ]
2014-03-01 21:51:03 --- STRACE: ErrorException [ 2 ]: include(/var/www/kohana/application/config/mysite.php): failed to open stream: Permission denied ~ SYSPATH/classes/kohana/core.php [ 800 ]
--
#0 /var/www/kohana/system/classes/kohana/core.php(800): Kohana_Core::error_handler(2, 'include(/var/ww...', '/var/www/kohana...', 800, Array)
#1 /var/www/kohana/system/classes/kohana/core.php(800): Kohana_Core::load()
#2 /var/www/kohana/system/classes/kohana/config/file/reader.php(49): Kohana_Core::load('/var/www/kohana...')
#3 /var/www/kohana/system/classes/kohana/config.php(124): Kohana_Config_File_Reader->load('mysite')
#4 /var/www/kohana/application/classes/controller/welcome.php(7): Kohana_Config->load('mysite')
#5 [internal function]: Controller_Welcome->action_index()
#6 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/kohana/index.php(109): Kohana_Request->execute()
#10 {main}
2014-03-01 21:59:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/welcome/test ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-01 21:59:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/welcome/test ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-03-01 21:59:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/welcome/test ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-01 21:59:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/welcome/test ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-03-01 22:03:51 --- ERROR: ErrorException [ 2 ]: include(/var/www/kohana/application/views/welcome.php): failed to open stream: Permission denied ~ SYSPATH/classes/kohana/view.php [ 61 ]
2014-03-01 22:03:51 --- STRACE: ErrorException [ 2 ]: include(/var/www/kohana/application/views/welcome.php): failed to open stream: Permission denied ~ SYSPATH/classes/kohana/view.php [ 61 ]
--
#0 /var/www/kohana/system/classes/kohana/view.php(61): Kohana_Core::error_handler(2, 'include(/var/ww...', '/var/www/kohana...', 61, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): Kohana_View::capture()
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /var/www/kohana/application/classes/controller/welcome.php(14): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Welcome->action_index()
#7 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/kohana/index.php(109): Kohana_Request->execute()
#11 {main}
2014-03-01 22:04:01 --- ERROR: ErrorException [ 2 ]: include(/var/www/kohana/application/views/welcome.php): failed to open stream: Permission denied ~ SYSPATH/classes/kohana/view.php [ 61 ]
2014-03-01 22:04:01 --- STRACE: ErrorException [ 2 ]: include(/var/www/kohana/application/views/welcome.php): failed to open stream: Permission denied ~ SYSPATH/classes/kohana/view.php [ 61 ]
--
#0 /var/www/kohana/system/classes/kohana/view.php(61): Kohana_Core::error_handler(2, 'include(/var/ww...', '/var/www/kohana...', 61, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): Kohana_View::capture()
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /var/www/kohana/application/classes/controller/welcome.php(14): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Welcome->action_index()
#7 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/kohana/index.php(109): Kohana_Request->execute()
#11 {main}
2014-03-01 22:15:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: conten ~ APPPATH/views/template.php [ 10 ]
2014-03-01 22:15:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: conten ~ APPPATH/views/template.php [ 10 ]
--
#0 /var/www/kohana/application/views/template.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 10, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-03-01 22:38:50 --- ERROR: View_Exception [ 0 ]: The requested view main could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-03-01 22:38:50 --- STRACE: View_Exception [ 0 ]: The requested view main could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('main')
#1 /var/www/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('main', NULL)
#2 /var/www/kohana/system/classes/kohana/controller/template.php(33): Kohana_View::factory('main')
#3 [internal function]: Kohana_Controller_Template->before()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Page))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-03-01 22:39:57 --- ERROR: ErrorException [ 2 ]: include(/var/www/kohana/application/views/main.php): failed to open stream: Permission denied ~ SYSPATH/classes/kohana/view.php [ 61 ]
2014-03-01 22:39:57 --- STRACE: ErrorException [ 2 ]: include(/var/www/kohana/application/views/main.php): failed to open stream: Permission denied ~ SYSPATH/classes/kohana/view.php [ 61 ]
--
#0 /var/www/kohana/system/classes/kohana/view.php(61): Kohana_Core::error_handler(2, 'include(/var/ww...', '/var/www/kohana...', 61, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): Kohana_View::capture()
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Page))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-03-01 22:39:59 --- ERROR: ErrorException [ 2 ]: include(/var/www/kohana/application/views/main.php): failed to open stream: Permission denied ~ SYSPATH/classes/kohana/view.php [ 61 ]
2014-03-01 22:39:59 --- STRACE: ErrorException [ 2 ]: include(/var/www/kohana/application/views/main.php): failed to open stream: Permission denied ~ SYSPATH/classes/kohana/view.php [ 61 ]
--
#0 /var/www/kohana/system/classes/kohana/view.php(61): Kohana_Core::error_handler(2, 'include(/var/ww...', '/var/www/kohana...', 61, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): Kohana_View::capture()
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Page))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-03-01 22:41:13 --- ERROR: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-03-01 22:41:13 --- STRACE: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('template')
#1 /var/www/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/kohana/system/classes/kohana/controller/template.php(33): Kohana_View::factory('template')
#3 [internal function]: Kohana_Controller_Template->before()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}