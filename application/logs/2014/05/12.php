<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-12 00:35:47 --- ERROR: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ MODPATH/crud/classes/controller/crud.php [ 51 ]
2014-05-12 00:35:47 --- STRACE: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ MODPATH/crud/classes/controller/crud.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-12 01:00:55 --- ERROR: ErrorException [ 1 ]: Class 'Model_All' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2014-05-12 01:00:55 --- STRACE: ErrorException [ 1 ]: Class 'Model_All' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-12 01:03:24 --- ERROR: ErrorException [ 8 ]: Undefined index: id ~ MODPATH/crud/classes/controller/test.php [ 28 ]
2014-05-12 01:03:24 --- STRACE: ErrorException [ 8 ]: Undefined index: id ~ MODPATH/crud/classes/controller/test.php [ 28 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/test.php(28): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 28, Array)
#1 [internal function]: Controller_Test::call_del(Array)
#2 /var/www/kohana/modules/crud/classes/controller/crud.php(39): call_user_func(Array, Array)
#3 [internal function]: Controller_Crud->action_delete()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-12 01:03:33 --- ERROR: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 26 ]
2014-05-12 01:03:33 --- STRACE: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 26 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(26): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 26, Array)
#1 [internal function]: Controller_Crud->action_delete()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-12 01:06:29 --- ERROR: ErrorException [ 8 ]: Undefined index: id ~ MODPATH/crud/classes/controller/test.php [ 29 ]
2014-05-12 01:06:29 --- STRACE: ErrorException [ 8 ]: Undefined index: id ~ MODPATH/crud/classes/controller/test.php [ 29 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/test.php(29): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 29, Array)
#1 [internal function]: Controller_Test::call_del(Array)
#2 /var/www/kohana/modules/crud/classes/controller/crud.php(39): call_user_func(Array, Array)
#3 [internal function]: Controller_Crud->action_delete()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-12 01:21:24 --- ERROR: ErrorException [ 1 ]: Call to undefined method Cruds::column_array() ~ MODPATH/crud/classes/controller/test.php [ 23 ]
2014-05-12 01:21:24 --- STRACE: ErrorException [ 1 ]: Call to undefined method Cruds::column_array() ~ MODPATH/crud/classes/controller/test.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-12 02:38:03 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Model_All::select_all_where(), called in /var/www/kohana/modules/crud/classes/cruds.php on line 117 and defined ~ MODPATH/crud/classes/model/all.php [ 11 ]
2014-05-12 02:38:03 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Model_All::select_all_where(), called in /var/www/kohana/modules/crud/classes/cruds.php on line 117 and defined ~ MODPATH/crud/classes/model/all.php [ 11 ]
--
#0 /var/www/kohana/modules/crud/classes/model/all.php(11): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/kohana...', 11, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(117): Model_All->select_all_where('articles')
#2 /var/www/kohana/modules/crud/classes/cruds.php(62): Cruds->select_table()
#3 /var/www/kohana/modules/crud/classes/controller/test.php(14): Cruds->render()
#4 [internal function]: Controller_Test->action_index()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-12 02:38:28 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Model_All::select_all_where(), called in /var/www/kohana/modules/crud/classes/cruds.php on line 117 and defined ~ MODPATH/crud/classes/model/all.php [ 11 ]
2014-05-12 02:38:28 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Model_All::select_all_where(), called in /var/www/kohana/modules/crud/classes/cruds.php on line 117 and defined ~ MODPATH/crud/classes/model/all.php [ 11 ]
--
#0 /var/www/kohana/modules/crud/classes/model/all.php(11): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/kohana...', 11, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(117): Model_All->select_all_where('articles')
#2 /var/www/kohana/modules/crud/classes/cruds.php(62): Cruds->select_table()
#3 /var/www/kohana/modules/crud/classes/controller/test.php(14): Cruds->render()
#4 [internal function]: Controller_Test->action_index()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-12 02:41:01 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Model_All::select_all_where(), called in /var/www/kohana/modules/crud/classes/cruds.php on line 117 and defined ~ MODPATH/crud/classes/model/all.php [ 11 ]
2014-05-12 02:41:01 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Model_All::select_all_where(), called in /var/www/kohana/modules/crud/classes/cruds.php on line 117 and defined ~ MODPATH/crud/classes/model/all.php [ 11 ]
--
#0 /var/www/kohana/modules/crud/classes/model/all.php(11): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/kohana...', 11, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(117): Model_All->select_all_where('articles')
#2 /var/www/kohana/modules/crud/classes/cruds.php(62): Cruds->select_table()
#3 /var/www/kohana/modules/crud/classes/controller/test.php(14): Cruds->render()
#4 [internal function]: Controller_Test->action_index()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-12 02:46:45 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::as_array() ~ MODPATH/crud/classes/model/all.php [ 19 ]
2014-05-12 02:46:45 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::as_array() ~ MODPATH/crud/classes/model/all.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-12 02:47:38 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::as_array() ~ MODPATH/crud/classes/model/all.php [ 19 ]
2014-05-12 02:47:38 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::as_array() ~ MODPATH/crud/classes/model/all.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-12 02:48:52 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::as_array() ~ MODPATH/crud/classes/model/all.php [ 19 ]
2014-05-12 02:48:52 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::as_array() ~ MODPATH/crud/classes/model/all.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-12 02:50:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: table ~ MODPATH/crud/classes/model/all.php [ 22 ]
2014-05-12 02:50:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: table ~ MODPATH/crud/classes/model/all.php [ 22 ]
--
#0 /var/www/kohana/modules/crud/classes/model/all.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 22, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(120): Model_All->select_all('articles')
#2 /var/www/kohana/modules/crud/classes/cruds.php(62): Cruds->select_table()
#3 /var/www/kohana/modules/crud/classes/controller/test.php(14): Cruds->render()
#4 [internal function]: Controller_Test->action_index()
#5 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#6 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2014-05-12 10:53:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2014-05-12 10:53:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-12 17:47:14 --- ERROR: ErrorException [ 8 ]: Undefined index: column ~ MODPATH/crud/classes/cruds.php [ 127 ]
2014-05-12 17:47:14 --- STRACE: ErrorException [ 8 ]: Undefined index: column ~ MODPATH/crud/classes/cruds.php [ 127 ]
--
#0 /var/www/kohana/modules/crud/classes/cruds.php(127): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 127, Array)
#1 /var/www/kohana/modules/crud/classes/cruds.php(68): Cruds->select_table()
#2 /var/www/kohana/modules/crud/classes/controller/test.php(14): Cruds->render()
#3 [internal function]: Controller_Test->action_index()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Test))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-12 19:14:48 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2014-05-12 19:14:48 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-12 19:15:59 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ MODPATH/crud/classes/controller/crud.php [ 62 ]
2014-05-12 19:15:59 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ MODPATH/crud/classes/controller/crud.php [ 62 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-12 19:16:41 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ MODPATH/crud/classes/controller/crud.php [ 62 ]
2014-05-12 19:16:41 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ MODPATH/crud/classes/controller/crud.php [ 62 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-12 19:17:22 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ MODPATH/crud/classes/controller/crud.php [ 62 ]
2014-05-12 19:17:22 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ MODPATH/crud/classes/controller/crud.php [ 62 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-12 19:18:29 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2014-05-12 19:18:29 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-12 19:19:01 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2014-05-12 19:19:01 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-12 19:19:31 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2014-05-12 19:19:31 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-12 19:19:55 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ MODPATH/crud/classes/controller/crud.php [ 62 ]
2014-05-12 19:19:55 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ MODPATH/crud/classes/controller/crud.php [ 62 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-12 19:21:17 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ MODPATH/crud/classes/controller/crud.php [ 62 ]
2014-05-12 19:21:17 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ MODPATH/crud/classes/controller/crud.php [ 62 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-12 19:23:35 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2014-05-12 19:23:35 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-12 19:28:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: edit_property ~ MODPATH/crud/views/page/edit.php [ 5 ]
2014-05-12 19:28:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: edit_property ~ MODPATH/crud/views/page/edit.php [ 5 ]
--
#0 /var/www/kohana/modules/crud/views/page/edit.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/kohana...', 5, Array)
#1 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#2 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#3 /var/www/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/kohana/modules/crud/views/main_template.php(3): Kohana_View->__toString()
#5 /var/www/kohana/system/classes/kohana/view.php(61): include('/var/www/kohana...')
#6 /var/www/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/kohana...', Array)
#7 /var/www/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/kohana/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Crud))
#10 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/kohana/index.php(109): Kohana_Request->execute()
#13 {main}
2014-05-12 19:30:47 --- ERROR: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 55 ]
2014-05-12 19:30:47 --- STRACE: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 55 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(55): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 55, Array)
#1 [internal function]: Controller_Crud->action_edit()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-12 20:04:44 --- ERROR: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 55 ]
2014-05-12 20:04:44 --- STRACE: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 55 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(55): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 55, Array)
#1 [internal function]: Controller_Crud->action_edit()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-12 20:20:03 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH/crud/classes/controller/crud.php [ 62 ]
2014-05-12 20:20:03 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH/crud/classes/controller/crud.php [ 62 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-12 20:21:49 --- ERROR: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 55 ]
2014-05-12 20:21:49 --- STRACE: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 55 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(55): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 55, Array)
#1 [internal function]: Controller_Crud->action_edit()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-12 20:58:11 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_All::upadate() ~ MODPATH/crud/classes/controller/crud.php [ 66 ]
2014-05-12 20:58:11 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_All::upadate() ~ MODPATH/crud/classes/controller/crud.php [ 66 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-12 20:58:41 --- ERROR: ErrorException [ 2 ]: Missing argument 3 for Model_All::update(), called in /var/www/kohana/modules/crud/classes/controller/crud.php on line 66 and defined ~ MODPATH/crud/classes/model/all.php [ 46 ]
2014-05-12 20:58:41 --- STRACE: ErrorException [ 2 ]: Missing argument 3 for Model_All::update(), called in /var/www/kohana/modules/crud/classes/controller/crud.php on line 66 and defined ~ MODPATH/crud/classes/model/all.php [ 46 ]
--
#0 /var/www/kohana/modules/crud/classes/model/all.php(46): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/kohana...', 46, Array)
#1 /var/www/kohana/modules/crud/classes/controller/crud.php(66): Model_All->update('articles', '0qoGeZ30P+YrLsl...')
#2 [internal function]: Controller_Crud->action_edit()
#3 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#4 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-12 20:59:08 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'password' in 'field list' [ UPDATE `articles` SET `password` = 321 WHERE `id` = 'aSKZe3dDBYz0hZ7hTQY1Xc8=' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-12 20:59:08 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'password' in 'field list' [ UPDATE `articles` SET `password` = 321 WHERE `id` = 'aSKZe3dDBYz0hZ7hTQY1Xc8=' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `article...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(50): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/controller/crud.php(66): Model_All->update('articles', Array, 'aSKZe3dDBYz0hZ7...')
#3 [internal function]: Controller_Crud->action_edit()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-12 21:00:17 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'password' in 'field list' [ UPDATE `articles` SET `password` = 321 WHERE `id` = '2' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-12 21:00:17 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'password' in 'field list' [ UPDATE `articles` SET `password` = 321 WHERE `id` = '2' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `article...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(50): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/controller/crud.php(65): Model_All->update('articles', Array, '2')
#3 [internal function]: Controller_Crud->action_edit()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-12 21:00:54 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'obj' in 'field list' [ UPDATE `articles` SET `id` = '2', `title` = 'Фреймворк Yii зззз', `author` = 'Вася Петров', `date` = '2012-04-01 17:20:33', `content_short` = 'Yii - это высокопроизводительныйвеб-фреймворк, написанный на PHP, и реализующий парадигму MVC. Yii — аббревиатура, котораярасшифровывается как ', `obj` = 'YToyOntzOjU6InRhYmxlIjtzOjg6ImFydGljbGVzIjtzOjI0OiJjYWxsYmFja19mdW5jdGlvbnNfYXJyYXkiO2E6Mzp7czo4OiJmdW5jdGlvbiI7czozOiJhc2QiO3M6NToiY2xhc3MiO3M6MTU6IkNvbnRyb2xsZXJfVGVzdCI7czoyMjoiY2FsbGJhY2tfZnVuY3Rpb25fbmFtZSI7czoxMDoibG9hZF90YWJsZSI7fX0=', `edit` = '' WHERE `id` = '2' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-12 21:00:54 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'obj' in 'field list' [ UPDATE `articles` SET `id` = '2', `title` = 'Фреймворк Yii зззз', `author` = 'Вася Петров', `date` = '2012-04-01 17:20:33', `content_short` = 'Yii - это высокопроизводительныйвеб-фреймворк, написанный на PHP, и реализующий парадигму MVC. Yii — аббревиатура, котораярасшифровывается как ', `obj` = 'YToyOntzOjU6InRhYmxlIjtzOjg6ImFydGljbGVzIjtzOjI0OiJjYWxsYmFja19mdW5jdGlvbnNfYXJyYXkiO2E6Mzp7czo4OiJmdW5jdGlvbiI7czozOiJhc2QiO3M6NToiY2xhc3MiO3M6MTU6IkNvbnRyb2xsZXJfVGVzdCI7czoyMjoiY2FsbGJhY2tfZnVuY3Rpb25fbmFtZSI7czoxMDoibG9hZF90YWJsZSI7fX0=', `edit` = '' WHERE `id` = '2' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `article...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(50): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/controller/crud.php(65): Model_All->update('articles', Array, '2')
#3 [internal function]: Controller_Crud->action_edit()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-12 21:02:37 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'obj' in 'field list' [ UPDATE `articles` SET `id` = '2', `title` = 'Фреймворк Yii', `author` = 'Вася Петров', `date` = '2012-04-01 17:20:33', `content_short` = 'Yii - это высокопроизводительныйвеб-фреймворк, написанный на PHP, и реализующий парадигму MVC. Yii — аббревиатура, котораярасшифровывается как ', `obj` = 'YToyOntzOjU6InRhYmxlIjtzOjg6ImFydGljbGVzIjtzOjI0OiJjYWxsYmFja19mdW5jdGlvbnNfYXJyYXkiO2E6Mzp7czo4OiJmdW5jdGlvbiI7czozOiJhc2QiO3M6NToiY2xhc3MiO3M6MTU6IkNvbnRyb2xsZXJfVGVzdCI7czoyMjoiY2FsbGJhY2tfZnVuY3Rpb25fbmFtZSI7czoxMDoibG9hZF90YWJsZSI7fX0=', `edit` = '' WHERE `id` = '2' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-12 21:02:37 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'obj' in 'field list' [ UPDATE `articles` SET `id` = '2', `title` = 'Фреймворк Yii', `author` = 'Вася Петров', `date` = '2012-04-01 17:20:33', `content_short` = 'Yii - это высокопроизводительныйвеб-фреймворк, написанный на PHP, и реализующий парадигму MVC. Yii — аббревиатура, котораярасшифровывается как ', `obj` = 'YToyOntzOjU6InRhYmxlIjtzOjg6ImFydGljbGVzIjtzOjI0OiJjYWxsYmFja19mdW5jdGlvbnNfYXJyYXkiO2E6Mzp7czo4OiJmdW5jdGlvbiI7czozOiJhc2QiO3M6NToiY2xhc3MiO3M6MTU6IkNvbnRyb2xsZXJfVGVzdCI7czoyMjoiY2FsbGJhY2tfZnVuY3Rpb25fbmFtZSI7czoxMDoibG9hZF90YWJsZSI7fX0=', `edit` = '' WHERE `id` = '2' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `article...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(50): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/controller/crud.php(66): Model_All->update('articles', Array, '2')
#3 [internal function]: Controller_Crud->action_edit()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-12 21:14:01 --- ERROR: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 56 ]
2014-05-12 21:14:01 --- STRACE: ErrorException [ 8 ]: Undefined index: obj ~ MODPATH/crud/classes/controller/crud.php [ 56 ]
--
#0 /var/www/kohana/modules/crud/classes/controller/crud.php(56): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/kohana...', 56, Array)
#1 [internal function]: Controller_Crud->action_edit()
#2 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#3 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-12 21:20:06 --- ERROR: Database_Exception [ 1054 ]: Unknown column '0' in 'field list' [ UPDATE `articles` SET `0` = ('2'), `1` = ('Фреймворк Yii в'), `2` = ('Вася Петров'), `3` = ('2012-04-01 17:20:33'), `4` = ('Yii - это высокопроизводительныйвеб-фреймворк, написанный на PHP, и реализующий парадигму MVC. Yii — аббревиатура, котораярасшифровывается как ') WHERE `id` = '2' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2014-05-12 21:20:06 --- STRACE: Database_Exception [ 1054 ]: Unknown column '0' in 'field list' [ UPDATE `articles` SET `0` = ('2'), `1` = ('Фреймворк Yii в'), `2` = ('Вася Петров'), `3` = ('2012-04-01 17:20:33'), `4` = ('Yii - это высокопроизводительныйвеб-фреймворк, написанный на PHP, и реализующий парадигму MVC. Yii — аббревиатура, котораярасшифровывается как ') WHERE `id` = '2' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `article...', false, Array)
#1 /var/www/kohana/modules/crud/classes/model/all.php(50): Kohana_Database_Query->execute()
#2 /var/www/kohana/modules/crud/classes/controller/crud.php(76): Model_All->update('articles', Array, '2')
#3 [internal function]: Controller_Crud->action_edit()
#4 /var/www/kohana/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Crud))
#5 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/kohana/index.php(109): Kohana_Request->execute()
#8 {main}