<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-12-05 11:51:57 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/Kohana/Auth.php [ 155 ] in :
2012-12-05 11:51:57 --- DEBUG: #0 [internal function]: Kohana_Auth->hash('p3edz9')
#1 /Users/Dennis/Sites/Base/modules/orm/classes/Kohana/ORM.php(1207): call_user_func_array(Array, Array)
#2 /Users/Dennis/Sites/Base/modules/orm/classes/Kohana/ORM.php(729): Kohana_ORM->run_filter('password', 'p3edz9')
#3 /Users/Dennis/Sites/Base/modules/orm/classes/Kohana/ORM.php(699): Kohana_ORM->set('password', 'p3edz9')
#4 /Users/Dennis/Sites/Base/application/classes/Controller/Base.php(44): Kohana_ORM->__set('password', 'p3edz9')
#5 /Users/Dennis/Sites/Base/system/classes/Kohana/Controller.php(69): Controller_Base->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/Dennis/Sites/Base/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /Users/Dennis/Sites/Base/index.php(118): Kohana_Request->execute()
#11 {main} in :
2012-12-05 11:53:43 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/Kohana/Cookie.php [ 152 ] in /Users/Dennis/Sites/Base/system/classes/Kohana/Cookie.php:67
2012-12-05 11:53:43 --- DEBUG: #0 /Users/Dennis/Sites/Base/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /Users/Dennis/Sites/Base/system/classes/Kohana/Request.php(155): Kohana_Cookie::get('session')
#2 /Users/Dennis/Sites/Base/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/Dennis/Sites/Base/system/classes/Kohana/Cookie.php:67