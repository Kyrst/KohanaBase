<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-02-01 15:04:51 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_RadioShow' not found ~ APPPATH/classes/Controller/Home.php [ 19 ] in :
2013-02-01 15:04:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-01 15:05:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: view ~ APPPATH/classes/Controller/Home.php [ 12 ] in /Users/Dennis/Sites/Base/application/classes/Controller/Home.php:12
2013-02-01 15:05:27 --- DEBUG: #0 /Users/Dennis/Sites/Base/application/classes/Controller/Home.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Dennis/S...', 12, Array)
#1 /Users/Dennis/Sites/Base/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Dennis/Sites/Base/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Dennis/Sites/Base/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Dennis/Sites/Base/application/classes/Controller/Home.php:12
2013-02-01 15:05:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: radio_shows ~ APPPATH/views/Home.php [ 2 ] in /Users/Dennis/Sites/Base/application/views/Home.php:2
2013-02-01 15:05:52 --- DEBUG: #0 /Users/Dennis/Sites/Base/application/views/Home.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Dennis/S...', 2, Array)
#1 /Users/Dennis/Sites/Base/system/classes/Kohana/View.php(61): include('/Users/Dennis/S...')
#2 /Users/Dennis/Sites/Base/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Dennis/S...', Array)
#3 /Users/Dennis/Sites/Base/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Dennis/Sites/Base/application/views/Layout/Base.php(29): Kohana_View->__toString()
#5 /Users/Dennis/Sites/Base/system/classes/Kohana/View.php(61): include('/Users/Dennis/S...')
#6 /Users/Dennis/Sites/Base/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Dennis/S...', Array)
#7 /Users/Dennis/Sites/Base/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Dennis/Sites/Base/application/classes/Controller/Base.php(58): Kohana_Controller_Template->after()
#9 /Users/Dennis/Sites/Base/system/classes/Kohana/Controller.php(87): Controller_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/Dennis/Sites/Base/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /Users/Dennis/Sites/Base/index.php(118): Kohana_Request->execute()
#15 {main} in /Users/Dennis/Sites/Base/application/views/Home.php:2
2013-02-01 17:10:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: css_lib_files ~ APPPATH/views/Layout/Base.php [ 7 ] in /Users/Dennis/Sites/Base/application/views/Layout/Base.php:7
2013-02-01 17:10:14 --- DEBUG: #0 /Users/Dennis/Sites/Base/application/views/Layout/Base.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Dennis/S...', 7, Array)
#1 /Users/Dennis/Sites/Base/system/classes/Kohana/View.php(61): include('/Users/Dennis/S...')
#2 /Users/Dennis/Sites/Base/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Dennis/S...', Array)
#3 /Users/Dennis/Sites/Base/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/Dennis/Sites/Base/application/classes/Controller/Base.php(73): Kohana_Controller_Template->after()
#5 /Users/Dennis/Sites/Base/system/classes/Kohana/Controller.php(87): Controller_Base->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/Dennis/Sites/Base/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /Users/Dennis/Sites/Base/index.php(118): Kohana_Request->execute()
#11 {main} in /Users/Dennis/Sites/Base/application/views/Layout/Base.php:7
2013-02-01 17:12:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: css_lib_files ~ APPPATH/views/Layout/Base.php [ 7 ] in /Users/Dennis/Sites/Base/application/views/Layout/Base.php:7
2013-02-01 17:12:25 --- DEBUG: #0 /Users/Dennis/Sites/Base/application/views/Layout/Base.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Dennis/S...', 7, Array)
#1 /Users/Dennis/Sites/Base/system/classes/Kohana/View.php(61): include('/Users/Dennis/S...')
#2 /Users/Dennis/Sites/Base/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Dennis/S...', Array)
#3 /Users/Dennis/Sites/Base/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/Dennis/Sites/Base/application/classes/Controller/Base.php(71): Kohana_Controller_Template->after()
#5 /Users/Dennis/Sites/Base/system/classes/Kohana/Controller.php(87): Controller_Base->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/Dennis/Sites/Base/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /Users/Dennis/Sites/Base/index.php(118): Kohana_Request->execute()
#11 {main} in /Users/Dennis/Sites/Base/application/views/Layout/Base.php:7
2013-02-01 17:12:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: css_lib_files ~ APPPATH/views/Layout/Base.php [ 7 ] in /Users/Dennis/Sites/Base/application/views/Layout/Base.php:7
2013-02-01 17:12:26 --- DEBUG: #0 /Users/Dennis/Sites/Base/application/views/Layout/Base.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Dennis/S...', 7, Array)
#1 /Users/Dennis/Sites/Base/system/classes/Kohana/View.php(61): include('/Users/Dennis/S...')
#2 /Users/Dennis/Sites/Base/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Dennis/S...', Array)
#3 /Users/Dennis/Sites/Base/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/Dennis/Sites/Base/application/classes/Controller/Base.php(71): Kohana_Controller_Template->after()
#5 /Users/Dennis/Sites/Base/system/classes/Kohana/Controller.php(87): Controller_Base->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/Dennis/Sites/Base/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /Users/Dennis/Sites/Base/index.php(118): Kohana_Request->execute()
#11 {main} in /Users/Dennis/Sites/Base/application/views/Layout/Base.php:7