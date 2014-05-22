<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-22 00:34:53 --- ERROR: ErrorException [ 1 ]: Call to undefined method Cruds::shows_type_input() ~ MODPATH/crud/classes/controller/crud.php [ 142 ]
2014-05-22 00:34:53 --- STRACE: ErrorException [ 1 ]: Call to undefined method Cruds::shows_type_input() ~ MODPATH/crud/classes/controller/crud.php [ 142 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-22 00:35:50 --- ERROR: ErrorException [ 8 ]: Undefined index: timestamp ~ MODPATH/crud/classes/cruds.php [ 278 ]
2014-05-22 00:35:50 --- STRACE: ErrorException [ 8 ]: Undefined index: timestamp ~ MODPATH/crud/classes/cruds.php [ 278 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(278): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 278, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(142): Cruds->shows_type_input_default(Array)
#2 [internal function]: Controller_Crud->action_edit()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-22 02:41:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-22 02:41:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-22 02:41:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-22 02:41:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-22 02:49:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-22 02:49:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-22 02:49:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-22 02:49:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-22 11:27:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-22 11:27:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-22 20:25:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-22 20:25:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}