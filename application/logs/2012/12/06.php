<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-12-06 09:52:28 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Kohana_Form::submit(), called in /Users/Dennis/Sites/Base/application/views/Home.php on line 12 and defined ~ SYSPATH/classes/Kohana/Form.php [ 354 ] in /Users/Dennis/Sites/Base/system/classes/Kohana/Form.php:354
2012-12-06 09:52:28 --- DEBUG: #0 /Users/Dennis/Sites/Base/system/classes/Kohana/Form.php(354): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/Dennis/S...', 354, Array)
#1 /Users/Dennis/Sites/Base/application/views/Home.php(12): Kohana_Form::submit('Log In')
#2 /Users/Dennis/Sites/Base/system/classes/Kohana/View.php(61): include('/Users/Dennis/S...')
#3 /Users/Dennis/Sites/Base/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Dennis/S...', Array)
#4 /Users/Dennis/Sites/Base/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Users/Dennis/Sites/Base/application/views/Layout/Base.php(16): Kohana_View->__toString()
#6 /Users/Dennis/Sites/Base/system/classes/Kohana/View.php(61): include('/Users/Dennis/S...')
#7 /Users/Dennis/Sites/Base/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Dennis/S...', Array)
#8 /Users/Dennis/Sites/Base/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /Users/Dennis/Sites/Base/application/classes/Controller/Base.php(50): Kohana_Controller_Template->after()
#10 /Users/Dennis/Sites/Base/system/classes/Kohana/Controller.php(87): Controller_Base->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#13 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Users/Dennis/Sites/Base/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 /Users/Dennis/Sites/Base/index.php(118): Kohana_Request->execute()
#16 {main} in /Users/Dennis/Sites/Base/system/classes/Kohana/Form.php:354
2012-12-06 10:18:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_User::$user ~ APPPATH/classes/Controller/User.php [ 8 ] in /Users/Dennis/Sites/Base/application/classes/Controller/User.php:8
2012-12-06 10:18:03 --- DEBUG: #0 /Users/Dennis/Sites/Base/application/classes/Controller/User.php(8): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Dennis/S...', 8, Array)
#1 /Users/Dennis/Sites/Base/system/classes/Kohana/Controller.php(69): Controller_User->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Dennis/Sites/Base/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Dennis/Sites/Base/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Dennis/Sites/Base/application/classes/Controller/User.php:8
2012-12-06 10:18:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_User::$user ~ APPPATH/classes/Controller/User.php [ 8 ] in /Users/Dennis/Sites/Base/application/classes/Controller/User.php:8
2012-12-06 10:18:17 --- DEBUG: #0 /Users/Dennis/Sites/Base/application/classes/Controller/User.php(8): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Dennis/S...', 8, Array)
#1 /Users/Dennis/Sites/Base/system/classes/Kohana/Controller.php(69): Controller_User->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Dennis/Sites/Base/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Dennis/Sites/Base/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Dennis/Sites/Base/application/classes/Controller/User.php:8
2012-12-06 10:18:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_User::$user ~ APPPATH/classes/Controller/User.php [ 8 ] in /Users/Dennis/Sites/Base/application/classes/Controller/User.php:8
2012-12-06 10:18:26 --- DEBUG: #0 /Users/Dennis/Sites/Base/application/classes/Controller/User.php(8): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Dennis/S...', 8, Array)
#1 /Users/Dennis/Sites/Base/system/classes/Kohana/Controller.php(69): Controller_User->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Dennis/Sites/Base/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Dennis/Sites/Base/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Dennis/Sites/Base/application/classes/Controller/User.php:8
2012-12-06 10:18:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_User::$user ~ APPPATH/classes/Controller/User.php [ 8 ] in /Users/Dennis/Sites/Base/application/classes/Controller/User.php:8
2012-12-06 10:18:27 --- DEBUG: #0 /Users/Dennis/Sites/Base/application/classes/Controller/User.php(8): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Dennis/S...', 8, Array)
#1 /Users/Dennis/Sites/Base/system/classes/Kohana/Controller.php(69): Controller_User->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Dennis/Sites/Base/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Dennis/Sites/Base/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Dennis/Sites/Base/application/classes/Controller/User.php:8
2012-12-06 10:18:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_User::$user ~ APPPATH/classes/Controller/User.php [ 8 ] in /Users/Dennis/Sites/Base/application/classes/Controller/User.php:8
2012-12-06 10:18:28 --- DEBUG: #0 /Users/Dennis/Sites/Base/application/classes/Controller/User.php(8): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Dennis/S...', 8, Array)
#1 /Users/Dennis/Sites/Base/system/classes/Kohana/Controller.php(69): Controller_User->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Dennis/Sites/Base/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Dennis/Sites/Base/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Dennis/Sites/Base/application/classes/Controller/User.php:8
2012-12-06 10:18:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_User::$user ~ APPPATH/classes/Controller/User.php [ 8 ] in /Users/Dennis/Sites/Base/application/classes/Controller/User.php:8
2012-12-06 10:18:28 --- DEBUG: #0 /Users/Dennis/Sites/Base/application/classes/Controller/User.php(8): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Dennis/S...', 8, Array)
#1 /Users/Dennis/Sites/Base/system/classes/Kohana/Controller.php(69): Controller_User->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Dennis/Sites/Base/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Dennis/Sites/Base/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Dennis/Sites/Base/application/classes/Controller/User.php:8
2012-12-06 10:18:37 --- EMERGENCY: ErrorException [ 1 ]: Access to undeclared static property: Controller::$user ~ APPPATH/classes/Controller/User.php [ 8 ] in :
2012-12-06 10:18:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-06 10:18:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_User::$user ~ APPPATH/classes/Controller/User.php [ 8 ] in /Users/Dennis/Sites/Base/application/classes/Controller/User.php:8
2012-12-06 10:18:43 --- DEBUG: #0 /Users/Dennis/Sites/Base/application/classes/Controller/User.php(8): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Dennis/S...', 8, Array)
#1 /Users/Dennis/Sites/Base/system/classes/Kohana/Controller.php(69): Controller_User->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Dennis/Sites/Base/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Dennis/Sites/Base/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Dennis/Sites/Base/application/classes/Controller/User.php:8
2012-12-06 10:18:52 --- EMERGENCY: ErrorException [ 1 ]: Class 'Base_Controller' not found ~ APPPATH/classes/Controller/User.php [ 4 ] in :
2012-12-06 10:18:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-06 10:19:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: page_title ~ APPPATH/views/Layout/Base.php [ 5 ] in /Users/Dennis/Sites/Base/application/views/Layout/Base.php:5
2012-12-06 10:19:02 --- DEBUG: #0 /Users/Dennis/Sites/Base/application/views/Layout/Base.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Dennis/S...', 5, Array)
#1 /Users/Dennis/Sites/Base/system/classes/Kohana/View.php(61): include('/Users/Dennis/S...')
#2 /Users/Dennis/Sites/Base/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Dennis/S...', Array)
#3 /Users/Dennis/Sites/Base/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/Dennis/Sites/Base/application/classes/Controller/Base.php(56): Kohana_Controller_Template->after()
#5 /Users/Dennis/Sites/Base/system/classes/Kohana/Controller.php(87): Controller_Base->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/Dennis/Sites/Base/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /Users/Dennis/Sites/Base/index.php(118): Kohana_Request->execute()
#11 {main} in /Users/Dennis/Sites/Base/application/views/Layout/Base.php:5
2012-12-06 10:19:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: page_title ~ APPPATH/views/Layout/Base.php [ 5 ] in /Users/Dennis/Sites/Base/application/views/Layout/Base.php:5
2012-12-06 10:19:20 --- DEBUG: #0 /Users/Dennis/Sites/Base/application/views/Layout/Base.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Dennis/S...', 5, Array)
#1 /Users/Dennis/Sites/Base/system/classes/Kohana/View.php(61): include('/Users/Dennis/S...')
#2 /Users/Dennis/Sites/Base/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Dennis/S...', Array)
#3 /Users/Dennis/Sites/Base/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/Dennis/Sites/Base/application/classes/Controller/Base.php(56): Kohana_Controller_Template->after()
#5 /Users/Dennis/Sites/Base/system/classes/Kohana/Controller.php(87): Controller_Base->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/Dennis/Sites/Base/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /Users/Dennis/Sites/Base/index.php(118): Kohana_Request->execute()
#11 {main} in /Users/Dennis/Sites/Base/application/views/Layout/Base.php:5
2012-12-06 10:20:29 --- EMERGENCY: View_Exception [ 0 ]: The requested view user/radio_shows could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Dennis/Sites/Base/system/classes/Kohana/View.php:137
2012-12-06 10:20:29 --- DEBUG: #0 /Users/Dennis/Sites/Base/system/classes/Kohana/View.php(137): Kohana_View->set_filename('user/radio_show...')
#1 /Users/Dennis/Sites/Base/system/classes/Kohana/View.php(30): Kohana_View->__construct('user/radio_show...', NULL)
#2 /Users/Dennis/Sites/Base/application/classes/Controller/User.php(15): Kohana_View::factory('user/radio_show...')
#3 /Users/Dennis/Sites/Base/system/classes/Kohana/Controller.php(84): Controller_User->action_radio_shows()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Dennis/Sites/Base/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Dennis/Sites/Base/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Dennis/Sites/Base/system/classes/Kohana/View.php:137