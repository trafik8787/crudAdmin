<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-15 01:40:47 --- ERROR: ErrorException [ 2 ]: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object ~ MODPATH/crud/classes/controller/crud.php [ 91 ]
2014-06-15 01:40:47 --- STRACE: ErrorException [ 2 ]: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object ~ MODPATH/crud/classes/controller/crud.php [ 91 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func(...', '/var/www/kohana...', 91, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(91): call_user_func(Array)
#2 [internal function]: Controller_Crud->action_edit()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-15 01:42:11 --- ERROR: ErrorException [ 2 ]: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object ~ MODPATH/crud/classes/controller/crud.php [ 91 ]
2014-06-15 01:42:11 --- STRACE: ErrorException [ 2 ]: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object ~ MODPATH/crud/classes/controller/crud.php [ 91 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func(...', '/var/www/kohana...', 91, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(91): call_user_func(Array)
#2 [internal function]: Controller_Crud->action_edit()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-15 12:38:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-15 12:38:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-15 12:38:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-15 12:38:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-15 20:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-15 20:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-15 20:49:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-15 20:49:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}