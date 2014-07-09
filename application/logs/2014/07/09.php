<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-09 00:52:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-09 00:52:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-09 00:52:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-09 00:52:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-09 01:52:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-09 01:52:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-09 01:52:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-09 01:52:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-09 01:53:28 --- ERROR: ErrorException [ 8 ]: Undefined index: idRT ~ MODPATH/crud/classes/controller/crud.php [ 421 ]
2014-07-09 01:53:28 --- STRACE: ErrorException [ 8 ]: Undefined index: idRT ~ MODPATH/crud/classes/controller/crud.php [ 421 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(421): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 421, Array)
#1 [internal function]: Controller_Crud->action_add()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-07-09 01:56:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-09 01:56:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-09 01:59:48 --- ERROR: ErrorException [ 8 ]: Undefined index: idRT ~ MODPATH/crud/classes/controller/crud.php [ 421 ]
2014-07-09 01:59:48 --- STRACE: ErrorException [ 8 ]: Undefined index: idRT ~ MODPATH/crud/classes/controller/crud.php [ 421 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(421): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 421, Array)
#1 [internal function]: Controller_Crud->action_add()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-07-09 02:00:01 --- ERROR: ErrorException [ 8 ]: Undefined index: idRT ~ MODPATH/crud/classes/controller/crud.php [ 421 ]
2014-07-09 02:00:01 --- STRACE: ErrorException [ 8 ]: Undefined index: idRT ~ MODPATH/crud/classes/controller/crud.php [ 421 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(421): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 421, Array)
#1 [internal function]: Controller_Crud->action_add()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-07-09 02:01:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-09 02:01:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-09 02:01:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/admin/media/css/loader.GIF ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-09 02:01:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/admin/media/css/loader.GIF ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-09 02:01:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-09 02:01:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-09 02:01:13 --- ERROR: ErrorException [ 8 ]: Undefined index: idRT ~ MODPATH/crud/classes/controller/crud.php [ 421 ]
2014-07-09 02:01:13 --- STRACE: ErrorException [ 8 ]: Undefined index: idRT ~ MODPATH/crud/classes/controller/crud.php [ 421 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(421): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 421, Array)
#1 [internal function]: Controller_Crud->action_add()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-07-09 02:14:18 --- ERROR: ErrorException [ 8 ]: Undefined index: idRT ~ MODPATH/crud/classes/controller/crud.php [ 419 ]
2014-07-09 02:14:18 --- STRACE: ErrorException [ 8 ]: Undefined index: idRT ~ MODPATH/crud/classes/controller/crud.php [ 419 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(419): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 419, Array)
#1 [internal function]: Controller_Crud->action_add()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-07-09 02:19:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-09 02:19:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-09 02:25:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-09 02:25:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-09 02:27:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-09 02:27:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-09 02:28:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-09 02:28:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-09 02:28:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-09 02:28:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-09 02:28:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-09 02:28:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-09 02:28:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-09 02:28:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-09 02:29:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-09 02:29:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-09 02:29:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-09 02:29:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-09 02:30:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-09 02:30:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-09 02:31:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-09 02:31:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-09 02:34:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-09 02:34:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-09 02:34:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-09 02:34:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-09 02:34:39 --- ERROR: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `articles` (`title`, `author`, `data`, `status`) VALUES ('fghfgh', 'fghfghgfh', 'a:2:{i:0;s:30:\"/uploads/pre_53bc71ff2bb75.jpg\";i:1;s:30:\"/uploads/pre_53bc71ff2c96e.jpg\";}', '2014-07-10', 'a:2:{s:1:\"y\";s:1:\"y\";s:1:\"n\";s:1:\"n\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-09 02:34:39 --- STRACE: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `articles` (`title`, `author`, `data`, `status`) VALUES ('fghfgh', 'fghfghgfh', 'a:2:{i:0;s:30:\"/uploads/pre_53bc71ff2bb75.jpg\";i:1;s:30:\"/uploads/pre_53bc71ff2c96e.jpg\";}', '2014-07-10', 'a:2:{s:1:\"y\";s:1:\"y\";s:1:\"n\";s:1:\"n\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ar...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(79): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/controller/crud.php(509): Model_All->insert('articles', Array, Array)
#3 [internal function]: Controller_Crud->action_add()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-07-09 02:36:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-09 02:36:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-09 02:37:13 --- ERROR: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `articles` (`title`, `author`, `data`, `status`) VALUES ('ftghf', 'fghfg', 'a:2:{i:0;s:30:\"/uploads/pre_53bc729978c62.jpg\";i:1;s:30:\"/uploads/pre_53bc729979b24.jpg\";}', '2014-07-09', 'a:1:{s:1:\"y\";s:1:\"y\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-09 02:37:13 --- STRACE: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `articles` (`title`, `author`, `data`, `status`) VALUES ('ftghf', 'fghfg', 'a:2:{i:0;s:30:\"/uploads/pre_53bc729978c62.jpg\";i:1;s:30:\"/uploads/pre_53bc729979b24.jpg\";}', '2014-07-09', 'a:1:{s:1:\"y\";s:1:\"y\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ar...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(79): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/controller/crud.php(495): Model_All->insert('articles', Array, Array)
#3 [internal function]: Controller_Crud->action_add()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-07-09 02:39:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-09 02:39:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-09 02:39:14 --- ERROR: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `articles` (`title`, `author`, `data`, `status`) VALUES ('fghfg', 'hdfghfdh', '/uploads/pre_53bc73122d82c.jpg', '2014-07-09', 'a:1:{s:1:\"y\";s:1:\"y\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-09 02:39:14 --- STRACE: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `articles` (`title`, `author`, `data`, `status`) VALUES ('fghfg', 'hdfghfdh', '/uploads/pre_53bc73122d82c.jpg', '2014-07-09', 'a:1:{s:1:\"y\";s:1:\"y\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ar...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(79): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/controller/crud.php(495): Model_All->insert('articles', Array, Array)
#3 [internal function]: Controller_Crud->action_add()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-07-09 02:41:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-09 02:41:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-09 02:44:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-09 02:44:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-09 02:49:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-09 02:49:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-09 02:54:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-09 02:54:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-09 02:58:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-09 02:58:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-09 03:04:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-09 03:04:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-09 03:04:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-09 03:04:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-09 03:04:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-09 03:04:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-09 03:04:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-09 03:04:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-09 11:55:41 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/crud/classes/controller/crud.php [ 270 ]
2014-07-09 11:55:41 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/crud/classes/controller/crud.php [ 270 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(270): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/kohana...', 270, Array)
#1 [internal function]: Controller_Crud->action_edit()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-07-09 11:55:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-07-09 11:55:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-09 11:55:44 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/crud/classes/controller/crud.php [ 270 ]
2014-07-09 11:55:44 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/crud/classes/controller/crud.php [ 270 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(270): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/kohana...', 270, Array)
#1 [internal function]: Controller_Crud->action_edit()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-07-09 15:17:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-09 15:17:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-09 15:17:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-09 15:17:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-09 15:17:29 --- ERROR: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `articles` (`title`, `author`, `data`, `status`) VALUES ('івапвап', 'вапвапва', '/uploads/pre_53bd24c9caae4.jpg', '', 'a:1:{s:1:\"y\";s:1:\"y\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-07-09 15:17:29 --- STRACE: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `articles` (`title`, `author`, `data`, `status`) VALUES ('івапвап', 'вапвапва', '/uploads/pre_53bd24c9caae4.jpg', '', 'a:1:{s:1:\"y\";s:1:\"y\";}') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ar...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(79): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/controller/crud.php(497): Model_All->insert('articles', Array, Array)
#3 [internal function]: Controller_Crud->action_add()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-07-09 16:32:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-09 16:32:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-09 16:32:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-09 16:32:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-09 16:35:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-09 16:35:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-09 16:35:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-09 16:35:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-09 16:35:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-09 16:35:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-09 16:35:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-09 16:35:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-09 16:40:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-09 16:40:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}