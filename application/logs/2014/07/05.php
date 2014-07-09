<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-05 01:35:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-05 01:35:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-05 01:38:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-05 01:38:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}