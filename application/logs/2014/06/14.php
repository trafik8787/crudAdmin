<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-14 00:15:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-14 00:15:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-14 00:15:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-14 00:15:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-14 00:55:02 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'id_del_array' ~ MODPATH/crud/classes/controller/crud.php [ 32 ]
2014-06-14 00:55:02 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'id_del_array' ~ MODPATH/crud/classes/controller/crud.php [ 32 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(32): Kohana_Core::error_handler(2, 'Illegal string ...', '/var/www/kohana...', 32, Array)
#1 [internal function]: Controller_Crud->action_delete()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-14 00:56:44 --- ERROR: ErrorException [ 8 ]: unserialize(): Error at offset 0 of 43 bytes ~ MODPATH/crud/classes/controller/crud.php [ 32 ]
2014-06-14 00:56:44 --- STRACE: ErrorException [ 8 ]: unserialize(): Error at offset 0 of 43 bytes ~ MODPATH/crud/classes/controller/crud.php [ 32 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'unserialize(): ...', '/var/www/kohana...', 32, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(32): unserialize('id_del_array%5B...')
#2 [internal function]: Controller_Crud->action_delete()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-14 01:02:39 --- ERROR: ErrorException [ 8 ]: unserialize(): Error at offset 0 of 43 bytes ~ MODPATH/crud/classes/controller/crud.php [ 32 ]
2014-06-14 01:02:39 --- STRACE: ErrorException [ 8 ]: unserialize(): Error at offset 0 of 43 bytes ~ MODPATH/crud/classes/controller/crud.php [ 32 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'unserialize(): ...', '/var/www/kohana...', 32, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(32): unserialize('id_del_array%5B...')
#2 [internal function]: Controller_Crud->action_delete()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-14 01:04:13 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'id_del_array' ~ MODPATH/crud/classes/controller/crud.php [ 32 ]
2014-06-14 01:04:13 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'id_del_array' ~ MODPATH/crud/classes/controller/crud.php [ 32 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(32): Kohana_Core::error_handler(2, 'Illegal string ...', '/var/www/kohana...', 32, Array)
#1 [internal function]: Controller_Crud->action_delete()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-14 01:16:08 --- ERROR: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 20 ]
2014-06-14 01:16:08 --- STRACE: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 20 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(20): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 20, Array)
#1 [internal function]: Controller_Crud->action_delete()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-14 20:59:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-14 20:59:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-14 21:27:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-14 21:27:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-14 21:27:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-06-14 21:27:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}