<?php
defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Base extends Controller_Template
{
	const DEFAULT_PAGE_TITLE = 'Resolve.co';
	const PAGE_TITLE_APPENDIX = 'Resolve.co';
	const PAGE_TITLE_SEPARATOR = '-';

	const AJAX_OK = 1;
	const AJAX_FAIL = 2;

	public $template = 'layouts/main';

	private $data = array
	(
		'layout' => array(),
		'content' => array(),
		'js' => array()
	);

	private $assets = array
	(
		'css' => array(),
		'js' => array()
	);

	private $libs = array();

	private $loaded_libs = array
	(
		'pre_loaded' => array
		(
			'bootstrap',
			'bootbox',
			'underscore'
		),
		'user_loaded' => array()
	);

	protected $is_ajax = FALSE;

	private $session;

	protected $user;

	private $start_time;

	private function setup_libs()
	{
		$this->libs['underscore'] = array
		(
			'js' => REL_LIBS_DIR . 'underscore/underscore.js'
		);

		$this->libs['bootstrap'] = array
		(
			'css' => REL_LIBS_DIR . 'bootstrap/bootstrap.css',
			'js' => REL_LIBS_DIR . 'bootstrap/bootstrap.js'
		);

		$this->libs['bootbox'] = array
		(
			'js' => REL_LIBS_DIR . 'bootbox/bootbox.js'
		);
	}

	// Initialize
	public function before()
	{
		parent::before();

		$this->start_time = microtime(TRUE);

		$this->is_ajax = $this->request->is_ajax();

		$this->session = Session::instance();

		$this->user = Auth::instance()->logged_in() ? Auth::instance()->get_user() : NULL;

		$this->setup_libs();

		$this->assign('BASE_URL', BASE_URL, array('js'));
		$this->assign('DEBUG', DEBUG, array('layout', 'content', 'js'));

		$this->assign('AJAX_OK', self::AJAX_OK, array('js'));
		$this->assign('AJAX_FAIL', self::AJAX_FAIL, array('js'));

		$this->assign('user', $this->user, array('layout', 'content'));

		// Alert
		if ( ($alert = $this->session->get('alert_popup')) )
		{
			$this->assign('alert_popup', json_encode($alert), array('js'));

			$this->session->delete('alert_popup');
		}

		// Profiler
		$this->assign('show_profiler', $this->request->query('profiler', NULL, FILTER_VALIDATE_INT) ? TRUE : FALSE, array('layout'));
	}

	public function after()
	{
		parent::after();

		if ( DEBUG )
		{
			$execution_time = microtime(TRUE) - $this->start_time;

			error_log($this->request->controller() . '/' . $this->request->action() . ($this->is_ajax ? ' (AJAX)' : '') . "\t\t" . number_format($execution_time, 4));
		}
	}

	// Assign variable to template/JS
	protected function assign($key, $value, $section = 'content')
	{
		if ( is_array($section) )
		{
			$types = (array)$section;

			foreach ( $types as $section )
			{
				if ( isset($this->data[$section][$key]) )
					throw new Exception('Var "' . $key . '" already assiged.');

				if ( $section === 'js' )
				{
					if ( is_bool($value) )
						$value = $value ? 'true' : 'false';
				}

				$this->data[$section][$key] = $value;
			}
		}
		else
		{
			if ( isset($this->data[$section][$key]) )
				throw new Exception('Var "' . $key . '" already assiged.');

			if ( $section === 'js' )
				if ( is_bool($value) )
					$value = $value ? 'true' : 'false';

			$this->data[$section][$key] = $value;
		}
	}

	// Include CSS file
	public function add_css($css_file)
	{
		if ( in_array($css_file, $this->assets['css']) )
			throw new Exception('Stylesheet file "' . $css_file . '" already added.');

		$this->assets['css'][] = $css_file;
	}

	// Include JS file
	public function add_js($js_file)
	{
		if ( in_array($js_file, $this->assets['js']) )
			throw new Exception('JavaScript file "' . $js_file . '" already added.');
		elseif ( !file_exists(DOCROOT . $js_file) )
			throw new Exception('JavaScript file "' . $js_file . '" does not exist.');

		$this->assets['js'][] = $js_file;
	}

	// Load library
	public function load_lib($lib_name, $pre_loaded = FALSE)
	{
		if ( !isset($this->libs[$lib_name]) )
			throw new Exception('Library "' . $lib_name . '" does not exist.');

		$this->loaded_libs[$pre_loaded ? 'pre_loaded' : 'user_loaded'][] = $lib_name;
	}

	// Display page
	public function display($file, $page_title = '', $page_title_appendix = TRUE)
	{
		// Set page title
		$this->template->page_title = ($page_title !== '') ? $page_title . ($page_title_appendix ? ' ' . self::PAGE_TITLE_SEPARATOR . ' ' . self::PAGE_TITLE_APPENDIX : '') : self::DEFAULT_PAGE_TITLE;

		// Pre-loaded libs
		foreach ( $this->loaded_libs['pre_loaded'] as $lib_name )
		{
			$lib = $this->libs[$lib_name];

			if ( isset($lib['css']) )
				if ( is_array($lib['css']) )
					foreach ( $lib['css'] as $css_file )
						$this->add_css($css_file);
				else
					$this->add_css($lib['css']);

			if ( isset($lib['js']) )
				if ( is_array($lib['js']) )
					foreach ( $lib['js'] as $js_file )
						$this->add_js($js_file);
				else
					$this->add_js($lib['js']);
		}

		// Include base.js
		$this->add_js(REL_JS_DIR . 'base.js');

		// User-loaded libs
		foreach ( $this->loaded_libs['user_loaded'] as $lib_name )
		{
			$lib = $this->libs[$lib_name];

			if ( isset($lib['css']) )
				if ( is_array($lib['css']) )
					foreach ( $lib['css'] as $css_file )
						$this->add_css($css_file);
				else
					$this->add_css($lib['css']);

			if ( isset($lib['js']) )
				if ( is_array($lib['js']) )
					foreach ( $lib['js'] as $js_file )
						$this->add_js($js_file);
				else
					$this->add_js($lib['js']);
		}

		// Include CSS & JS based off template
		$template_basename = basename($this->template->getFile(), '.php');

		if ( file_exists(ABS_CSS_DIR . 'layouts/' . $template_basename . '.css') )
			$this->add_css(REL_CSS_DIR . 'layouts/' . $template_basename . '.css');

		if ( file_exists(ABS_JS_DIR . 'layouts/' . $template_basename . '.js') )
			$this->add_js(REL_JS_DIR . 'layouts/' . $template_basename . '.js');

		// Include CSS & JS based off route
		$controller = strtolower($this->request->controller());

		if ( file_exists(ABS_CSS_DIR . $controller . '/' . $this->request->action() . '.css') )
			$this->add_css(REL_CSS_DIR . $controller . '/' . $this->request->action() . '.css');

		if ( file_exists(ABS_JS_DIR . $controller . '/' . $this->request->action() . '.js') )
			$this->add_js(REL_JS_DIR . $controller . '/' . $this->request->action() . '.js');

		// Attach CSS & JS to template
		$this->template->assets = $this->assets;

		// Attach layout variables to template
		foreach ( $this->data['layout'] as $key => $value )
			$this->template->$key = $value;

		// Attach JS variables to template
		$this->template->js_vars = $this->data['js'];

		// Attach jQuery to template
		$this->template->jquery = View::factory('layouts/partials/jquery_script');

		// Attach content to template
		$this->template->content = View::factory($file)->render();
	}

	// Initialize AJAX
	public function init_ajax()
	{
		$this->auto_render = FALSE;

		if ( !$this->is_ajax && !DEBUG )
			return FALSE;

		return TRUE;
	}

	// Return AJAX response
	public function ajax_result($return_code, $data)
	{
		if ( is_array($data) )
		{
			$this->response->headers('Content-Type', 'application/json');
			$this->response->body(
				json_encode(
					array
					(
						'return_code' => $return_code,
						'data' => $data
					)
				)
			);
		}
		else
		{
			$this->response->body($data);
		}
	}

	// Show alert
	public function show_alert($title, $message)
	{
		$this->session->set('alert_popup', array
		(
			'title' => $title,
			'message' => $message
		));
	}
}