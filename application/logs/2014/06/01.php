<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-01 00:24:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-01 00:24:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-01 11:15:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-01 11:15:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-01 14:53:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL twitter was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-01 14:53:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL twitter was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-01 14:53:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/3big.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-01 14:53:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/3big.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-01 14:53:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/8big.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-01 14:53:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/8big.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-01 20:20:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-01 20:20:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-01 22:27:57 --- ERROR: ErrorException [ 2 ]: Creating default object from empty value ~ MODPATH/crud/classes/controller/crud.php [ 174 ]
2014-06-01 22:27:57 --- STRACE: ErrorException [ 2 ]: Creating default object from empty value ~ MODPATH/crud/classes/controller/crud.php [ 174 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(174): Kohana_Core::error_handler(2, 'Creating defaul...', '/var/www/kohana...', 174, Array)
#1 [internal function]: Controller_Crud->action_edit()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-01 22:28:11 --- ERROR: ErrorException [ 2 ]: Creating default object from empty value ~ MODPATH/crud/classes/controller/crud.php [ 174 ]
2014-06-01 22:28:11 --- STRACE: ErrorException [ 2 ]: Creating default object from empty value ~ MODPATH/crud/classes/controller/crud.php [ 174 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(174): Kohana_Core::error_handler(2, 'Creating defaul...', '/var/www/kohana...', 174, Array)
#1 [internal function]: Controller_Crud->action_edit()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}