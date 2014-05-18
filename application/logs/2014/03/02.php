<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-02 00:19:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/page ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-02 00:19:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/page ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-03-02 00:19:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/page/about ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-02 00:19:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/page/about ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-03-02 00:37:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/page/about ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-02 00:37:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/page/about ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-03-02 00:37:36 --- ERROR: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-03-02 00:37:36 --- STRACE: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('template')
#1 /var/www/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/kohana/system/classes/kohana/controller/template.php(33): Kohana_View::factory('template')
#3 [internal function]: Kohana_Controller_Template->before()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Page))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-03-02 00:37:37 --- ERROR: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-03-02 00:37:37 --- STRACE: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('template')
#1 /var/www/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/kohana/system/classes/kohana/controller/template.php(33): Kohana_View::factory('template')
#3 [internal function]: Kohana_Controller_Template->before()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Page))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-03-02 00:37:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/page/about ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-02 00:37:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/page/about ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-03-02 00:38:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/page/about ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-02 00:38:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/page/about ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-03-02 00:38:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/page/about ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-02 00:38:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/page/about ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-03-02 00:38:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/page/about ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-02 00:38:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/page/about ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-03-02 00:38:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/page/about ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-02 00:38:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/page/about ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-03-02 00:51:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-02 00:51:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-03-02 00:53:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pages/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-02 00:53:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pages/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-03-02 00:53:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pages/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-02 00:53:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pages/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-03-02 00:53:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pages/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-02 00:53:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pages/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-03-02 01:17:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pages/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-02 01:17:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pages/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-03-02 01:17:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pages/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-02 01:17:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pages/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-03-02 01:17:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pages/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-02 01:17:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pages/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-03-02 01:17:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pages/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-02 01:17:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pages/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-03-02 01:17:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pages/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-02 01:17:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pages/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-03-02 01:18:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/page/about ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-02 01:18:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/page/about ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-03-02 01:22:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/page/about ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-02 01:22:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/page/about ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-03-02 01:22:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/page/about ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-02 01:22:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/page/about ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-03-02 01:22:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/page/about ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-02 01:22:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/page/about ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-03-02 01:22:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/page/about ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-02 01:22:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/page/about ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-03-02 01:22:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/page/about ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-02 01:22:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/page/about ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-03-02 01:29:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-02 01:29:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-03-02 01:32:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-02 01:32:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-03-02 01:32:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-02 01:32:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-03-02 01:32:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-02 01:32:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-03-02 01:34:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-03-02 01:34:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-03-02 13:20:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-03-02 13:20:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}