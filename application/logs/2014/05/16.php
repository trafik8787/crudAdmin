<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-16 01:13:39 --- ERROR: ErrorException [ 8 ]: Undefined index: author ~ MODPATH/crud/classes/controller/test.php [ 47 ]
2014-05-16 01:13:39 --- STRACE: ErrorException [ 8 ]: Undefined index: author ~ MODPATH/crud/classes/controller/test.php [ 47 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/test.php(47): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 47, Array)
#1 [internal function]: Controller_Test::call_bef_edit(Array, Array)
#2 /var/www/kohana/modules/crud/classes/controller/crud.php(96): call_user_func_array(Array, Array)
#3 [internal function]: Controller_Crud->action_edit()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-16 01:14:03 --- ERROR: ErrorException [ 8 ]: Undefined index: author ~ MODPATH/crud/classes/controller/test.php [ 47 ]
2014-05-16 01:14:03 --- STRACE: ErrorException [ 8 ]: Undefined index: author ~ MODPATH/crud/classes/controller/test.php [ 47 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/test.php(47): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 47, Array)
#1 [internal function]: Controller_Test::call_bef_edit(Array, Array)
#2 /var/www/kohana/modules/crud/classes/controller/crud.php(96): call_user_func_array(Array, Array)
#3 [internal function]: Controller_Crud->action_edit()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-16 01:16:30 --- ERROR: ErrorException [ 8 ]: Undefined index: id ~ MODPATH/crud/classes/controller/crud.php [ 85 ]
2014-05-16 01:16:30 --- STRACE: ErrorException [ 8 ]: Undefined index: id ~ MODPATH/crud/classes/controller/crud.php [ 85 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(85): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 85, Array)
#1 [internal function]: Controller_Crud->action_edit()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-16 01:17:02 --- ERROR: ErrorException [ 8 ]: Undefined index: id ~ MODPATH/crud/classes/controller/crud.php [ 105 ]
2014-05-16 01:17:02 --- STRACE: ErrorException [ 8 ]: Undefined index: id ~ MODPATH/crud/classes/controller/crud.php [ 105 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(105): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 105, Array)
#1 [internal function]: Controller_Crud->action_edit()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-16 01:27:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/D was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-16 01:27:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/D was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-16 01:43:42 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH/database/classes/kohana/database.php [ 505 ]
2014-05-16 01:43:42 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH/database/classes/kohana/database.php [ 505 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database.php(505): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/kohana...', 505, Array)
#1 [internal function]: Kohana_Database->quote_column(Array)
#2 /var/www/kohana/modules/database/classes/kohana/database/query/builder/insert.php(125): array_map(Array, Array)
#3 /var/www/kohana/modules/database/classes/kohana/database/query.php(228): Kohana_Database_Query_Builder_Insert->compile(Object(Database_MySQL))
#4 /var/www/kohana/modules/crud/classes/model/all.php(56): Kohana_Database_Query->execute()
#5 /var/www/kohana/modules/crud/classes/controller/crud.php(175): Model_All->insert('articles', Array, Array)
#6 [internal function]: Controller_Crud->action_add()
#7 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#8 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/kohana/index.php(109): Kohana_Request->execute()
#11 {main}
2014-05-16 11:21:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-16 11:21:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-16 23:28:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-16 23:28:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}