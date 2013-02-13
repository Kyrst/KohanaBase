<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-11-20 12:54:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Welcome::$action ~ APPPATH/classes/Controller/Base.php [ 62 ] in /Users/Dennis/Sites/Base/application/classes/Controller/Base.php:62
2012-11-20 12:54:53 --- DEBUG: #0 /Users/Dennis/Sites/Base/application/classes/Controller/Base.php(62): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Dennis/S...', 62, Array)
#1 /Users/Dennis/Sites/Base/application/classes/Controller/Base.php(23): Controller_Base->scanCSS()
#2 /Users/Dennis/Sites/Base/system/classes/Kohana/Controller.php(69): Controller_Base->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Dennis/Sites/Base/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Dennis/Sites/Base/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Dennis/Sites/Base/application/classes/Controller/Base.php:62
2012-11-20 12:55:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Welcome::$action ~ APPPATH/classes/Controller/Base.php [ 62 ] in /Users/Dennis/Sites/Base/application/classes/Controller/Base.php:62
2012-11-20 12:55:00 --- DEBUG: #0 /Users/Dennis/Sites/Base/application/classes/Controller/Base.php(62): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Dennis/S...', 62, Array)
#1 /Users/Dennis/Sites/Base/application/classes/Controller/Base.php(23): Controller_Base->scanCSS()
#2 /Users/Dennis/Sites/Base/system/classes/Kohana/Controller.php(69): Controller_Base->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Dennis/Sites/Base/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Dennis/Sites/Base/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Dennis/Sites/Base/application/classes/Controller/Base.php:62
2012-11-20 12:55:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Welcome::$action ~ APPPATH/classes/Controller/Base.php [ 65 ] in /Users/Dennis/Sites/Base/application/classes/Controller/Base.php:65
2012-11-20 12:55:39 --- DEBUG: #0 /Users/Dennis/Sites/Base/application/classes/Controller/Base.php(65): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Dennis/S...', 65, Array)
#1 /Users/Dennis/Sites/Base/application/classes/Controller/Base.php(23): Controller_Base->scanCSS()
#2 /Users/Dennis/Sites/Base/system/classes/Kohana/Controller.php(69): Controller_Base->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Dennis/Sites/Base/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Dennis/Sites/Base/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Dennis/Sites/Base/application/classes/Controller/Base.php:65
2012-11-20 13:14:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Welcome::$action ~ APPPATH/classes/Controller/Base.php [ 65 ] in /Users/Dennis/Sites/Base/application/classes/Controller/Base.php:65
2012-11-20 13:14:06 --- DEBUG: #0 /Users/Dennis/Sites/Base/application/classes/Controller/Base.php(65): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Dennis/S...', 65, Array)
#1 /Users/Dennis/Sites/Base/application/classes/Controller/Base.php(23): Controller_Base->scanCSS()
#2 /Users/Dennis/Sites/Base/system/classes/Kohana/Controller.php(69): Controller_Base->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Dennis/Sites/Base/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Dennis/Sites/Base/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Dennis/Sites/Base/application/classes/Controller/Base.php:65
2012-11-20 13:16:17 --- EMERGENCY: View_Exception [ 0 ]: The requested view Layout/Base could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Dennis/Sites/Base/system/classes/Kohana/View.php:137
2012-11-20 13:16:17 --- DEBUG: #0 /Users/Dennis/Sites/Base/system/classes/Kohana/View.php(137): Kohana_View->set_filename('Layout/Base')
#1 /Users/Dennis/Sites/Base/system/classes/Kohana/View.php(30): Kohana_View->__construct('Layout/Base', NULL)
#2 /Users/Dennis/Sites/Base/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('Layout/Base')
#3 /Users/Dennis/Sites/Base/application/classes/Controller/Base.php(19): Kohana_Controller_Template->before()
#4 /Users/Dennis/Sites/Base/system/classes/Kohana/Controller.php(69): Controller_Base->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Dennis/Sites/Base/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Dennis/Sites/Base/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/Dennis/Sites/Base/system/classes/Kohana/View.php:137
2012-11-20 13:17:37 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Home::scanJS() ~ APPPATH/classes/Controller/Base.php [ 24 ] in :
2012-11-20 13:17:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-20 13:20:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: css_files ~ APPPATH/views/Layout/Base.php [ 7 ] in /Users/Dennis/Sites/Base/application/views/Layout/Base.php:7
2012-11-20 13:20:00 --- DEBUG: #0 /Users/Dennis/Sites/Base/application/views/Layout/Base.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Dennis/S...', 7, Array)
#1 /Users/Dennis/Sites/Base/system/classes/Kohana/View.php(61): include('/Users/Dennis/S...')
#2 /Users/Dennis/Sites/Base/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Dennis/S...', Array)
#3 /Users/Dennis/Sites/Base/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/Dennis/Sites/Base/application/classes/Controller/Base.php(41): Kohana_Controller_Template->after()
#5 /Users/Dennis/Sites/Base/system/classes/Kohana/Controller.php(87): Controller_Base->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/Dennis/Sites/Base/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /Users/Dennis/Sites/Base/index.php(118): Kohana_Request->execute()
#11 {main} in /Users/Dennis/Sites/Base/application/views/Layout/Base.php:7
2012-11-20 21:26:07 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant ABS_PATH - assumed 'ABS_PATH' ~ APPPATH/classes/Controller/Ajax.php [ 15 ] in /Users/Dennis/Sites/Base/application/classes/Controller/Ajax.php:15
2012-11-20 21:26:07 --- DEBUG: #0 /Users/Dennis/Sites/Base/application/classes/Controller/Ajax.php(15): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/Dennis/S...', 15, Array)
#1 /Users/Dennis/Sites/Base/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_combine_css()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Dennis/Sites/Base/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Dennis/Sites/Base/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Dennis/Sites/Base/application/classes/Controller/Ajax.php:15
2012-11-20 21:26:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: out ~ APPPATH/classes/Controller/Ajax.php [ 21 ] in /Users/Dennis/Sites/Base/application/classes/Controller/Ajax.php:21
2012-11-20 21:26:16 --- DEBUG: #0 /Users/Dennis/Sites/Base/application/classes/Controller/Ajax.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Dennis/S...', 21, Array)
#1 /Users/Dennis/Sites/Base/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_combine_css()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Dennis/Sites/Base/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Dennis/Sites/Base/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Dennis/Sites/Base/application/classes/Controller/Ajax.php:21
2012-11-20 21:28:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: str ~ APPPATH/classes/Common.php [ 6 ] in /Users/Dennis/Sites/Base/application/classes/Common.php:6
2012-11-20 21:28:28 --- DEBUG: #0 /Users/Dennis/Sites/Base/application/classes/Common.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Dennis/S...', 6, Array)
#1 /Users/Dennis/Sites/Base/application/classes/Controller/Ajax.php(23): Common::minify_css('/*! normalize.c...')
#2 /Users/Dennis/Sites/Base/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_combine_css()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Dennis/Sites/Base/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Dennis/Sites/Base/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Dennis/Sites/Base/application/classes/Common.php:6
2012-11-20 21:28:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: str ~ APPPATH/classes/Common.php [ 6 ] in /Users/Dennis/Sites/Base/application/classes/Common.php:6
2012-11-20 21:28:31 --- DEBUG: #0 /Users/Dennis/Sites/Base/application/classes/Common.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Dennis/S...', 6, Array)
#1 /Users/Dennis/Sites/Base/application/classes/Controller/Ajax.php(23): Common::minify_css('/*! normalize.c...')
#2 /Users/Dennis/Sites/Base/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_combine_css()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Dennis/Sites/Base/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Dennis/Sites/Base/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Dennis/Sites/Base/application/classes/Common.php:6
2012-11-20 19:39:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: HTTP_IF_MODIFIED_SINCE ~ APPPATH/classes/Controller/Ajax.php [ 40 ] in /Users/Dennis/Sites/Base/application/classes/Controller/Ajax.php:40
2012-11-20 19:39:20 --- DEBUG: #0 /Users/Dennis/Sites/Base/application/classes/Controller/Ajax.php(40): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Dennis/S...', 40, Array)
#1 /Users/Dennis/Sites/Base/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_combine_css()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Dennis/Sites/Base/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Dennis/Sites/Base/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Dennis/Sites/Base/application/classes/Controller/Ajax.php:40
2012-11-20 19:39:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: HTTP_IF_MODIFIED_SINCE ~ APPPATH/classes/Controller/Ajax.php [ 40 ] in /Users/Dennis/Sites/Base/application/classes/Controller/Ajax.php:40
2012-11-20 19:39:21 --- DEBUG: #0 /Users/Dennis/Sites/Base/application/classes/Controller/Ajax.php(40): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Dennis/S...', 40, Array)
#1 /Users/Dennis/Sites/Base/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_combine_css()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Dennis/Sites/Base/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Dennis/Sites/Base/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Dennis/Sites/Base/application/classes/Controller/Ajax.php:40
2012-11-20 19:46:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: last_modified_time ~ APPPATH/classes/Controller/Ajax.php [ 36 ] in /Users/Dennis/Sites/Base/application/classes/Controller/Ajax.php:36
2012-11-20 19:46:35 --- DEBUG: #0 /Users/Dennis/Sites/Base/application/classes/Controller/Ajax.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Dennis/S...', 36, Array)
#1 /Users/Dennis/Sites/Base/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_combine_css()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Dennis/Sites/Base/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Dennis/Sites/Base/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Dennis/Sites/Base/application/classes/Controller/Ajax.php:36
2012-11-20 19:46:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: latest_modified_time ~ APPPATH/classes/Controller/Ajax.php [ 25 ] in /Users/Dennis/Sites/Base/application/classes/Controller/Ajax.php:25
2012-11-20 19:46:40 --- DEBUG: #0 /Users/Dennis/Sites/Base/application/classes/Controller/Ajax.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Dennis/S...', 25, Array)
#1 /Users/Dennis/Sites/Base/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_combine_css()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Dennis/Sites/Base/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Dennis/Sites/Base/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Dennis/Sites/Base/application/classes/Controller/Ajax.php:25
2012-11-20 19:49:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: etag_header ~ APPPATH/classes/Controller/Ajax.php [ 40 ] in /Users/Dennis/Sites/Base/application/classes/Controller/Ajax.php:40
2012-11-20 19:49:43 --- DEBUG: #0 /Users/Dennis/Sites/Base/application/classes/Controller/Ajax.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Dennis/S...', 40, Array)
#1 /Users/Dennis/Sites/Base/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_combine_css()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Dennis/Sites/Base/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Dennis/Sites/Base/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Dennis/Sites/Base/application/classes/Controller/Ajax.php:40
2012-11-20 19:49:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: etag_header ~ APPPATH/classes/Controller/Ajax.php [ 40 ] in /Users/Dennis/Sites/Base/application/classes/Controller/Ajax.php:40
2012-11-20 19:49:44 --- DEBUG: #0 /Users/Dennis/Sites/Base/application/classes/Controller/Ajax.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Dennis/S...', 40, Array)
#1 /Users/Dennis/Sites/Base/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_combine_css()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /Users/Dennis/Sites/Base/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Dennis/Sites/Base/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Dennis/Sites/Base/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Dennis/Sites/Base/application/classes/Controller/Ajax.php:40