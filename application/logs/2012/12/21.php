<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-12-21 10:15:26 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /Users/Dennis/Sites/Base/system/classes/Kohana/Session.php:125
2012-12-21 10:15:26 --- DEBUG: #0 /Users/Dennis/Sites/Base/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /Users/Dennis/Sites/Base/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /Users/Dennis/Sites/Base/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /Users/Dennis/Sites/Base/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /Users/Dennis/Sites/Base/application/classes/Controller/Base.php(35): Kohana_Auth::instance()
#5 /Users/Dennis/Sites/Base/system/classes/Kohana/Controller.php(69): Controller_Base->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/Dennis/Sites/Base/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /Users/Dennis/Sites/Base/index.php(118): Kohana_Request->execute()
#11 {main} in /Users/Dennis/Sites/Base/system/classes/Kohana/Session.php:125
2012-12-21 10:15:29 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /Users/Dennis/Sites/Base/system/classes/Kohana/Session.php:125
2012-12-21 10:15:29 --- DEBUG: #0 /Users/Dennis/Sites/Base/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /Users/Dennis/Sites/Base/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /Users/Dennis/Sites/Base/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /Users/Dennis/Sites/Base/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /Users/Dennis/Sites/Base/application/classes/Controller/Base.php(35): Kohana_Auth::instance()
#5 /Users/Dennis/Sites/Base/system/classes/Kohana/Controller.php(69): Controller_Base->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/Dennis/Sites/Base/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /Users/Dennis/Sites/Base/index.php(118): Kohana_Request->execute()
#11 {main} in /Users/Dennis/Sites/Base/system/classes/Kohana/Session.php:125
2012-12-21 10:15:30 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /Users/Dennis/Sites/Base/system/classes/Kohana/Session.php:125
2012-12-21 10:15:30 --- DEBUG: #0 /Users/Dennis/Sites/Base/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /Users/Dennis/Sites/Base/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /Users/Dennis/Sites/Base/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /Users/Dennis/Sites/Base/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /Users/Dennis/Sites/Base/application/classes/Controller/Base.php(35): Kohana_Auth::instance()
#5 /Users/Dennis/Sites/Base/system/classes/Kohana/Controller.php(69): Controller_Base->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/Dennis/Sites/Base/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /Users/Dennis/Sites/Base/index.php(118): Kohana_Request->execute()
#11 {main} in /Users/Dennis/Sites/Base/system/classes/Kohana/Session.php:125