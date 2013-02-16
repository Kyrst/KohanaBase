<?php
defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Base extends Controller_Template
{
	// Base template
	public $template = 'Layout/Base';
	
	private $page_title = DEFAULT_PAGE_TITLE;
	private $meta_description = DEFAULT_META_DESCRIPTION;

	// Blocks
	private $blocks = array(
		'bottom' => ''
	);

	// Autoloaded CSS & JS files
	private $autoloaded_css_files = array();
	private $autoloaded_js_files = array();

	// Library CSS & JS files
	private $lib_css_files = array();
	private $lib_js_files = array();

	// External libraries
	private $libs = array(
		'jquery' => array(
			'js' => array('/assets/js/jquery.js')
		),
		'jquery-ui' => array(
			'js' => array('/assets/libs/jquery-ui/js/jquery-ui-1.10.0.custom.min.js'),
			'css' => array('/assets/libs/jquery-ui/css/smoothness/jquery-ui-1.10.0.custom.min.css')
		),
		'bootstrap' => array(
			'css' => array('/assets/libs/bootstrap/css/bootstrap.min.css'),
			'js' => array('/assets/libs/bootstrap/js/bootstrap.min.js')
		)
	);

	// CSS & JS files
	private $css_files = array();
	private $js_files = array();

	// JS variables
	private $js_vars = array();

	// Session
	protected $session;

	// User
	protected $user;

	// What page
	private $current_page;

	// Initialize
	public function before()
	{
		parent::before();

		// External libraries that we always want to load
		$this->loadLib('jquery');
		$this->loadLib('bootstrap');
		$this->loadLib('jquery-ui');

		// CSS library files that we always want to load
		$this->lib_css_files[] = '/' . CSS_DIR . 'normalize.css';
		$this->lib_css_files[] = '/' . CSS_DIR . 'base.css';

		// JS library files that we always want to load
		// ...

		// CSS files that we always want to load
		// ...

		// JS files that we always want to load
		$this->js_files[] = '/' . JS_DIR . 'base.js';

		$this->addJSVar('BASE_URL', URL::base());
		$this->addJSVar('DEBUG', Kohana::$environment === Kohana::DEVELOPMENT);

		// Initialize session
		$this->session = Session::instance();

		// Initialize user
		$this->user = Auth::instance()->logged_in() ? Auth::instance()->get_user() : NULL;

		// Check for message popup
		if ( ($message_popup = $this->session->get('message_popup')) )
		{
			$this->addJSVar('message_popup', $message_popup);

			$this->session->delete('message_popup');
		}

		if ( $this->auto_render )
		{
			// Automatically load CSS & JS file from Controller and Action name
			$this->scanCSS();
			$this->scanJS();

			// Show profiler if requested
			if ( $this->request->query('profiler') ) {
				$this->blocks['bottom'] = View::factory('profiler/stats');
			}
		}
	}
	
	public function after()
	{
		if ( $this->auto_render )
		{
			$this->template->lib_css_files = $this->lib_css_files;
			$this->template->css_files = array_merge($this->autoloaded_css_files, $this->css_files);

			$this->template->lib_js_files = $this->lib_js_files;
			$this->template->js_files = array_merge($this->autoloaded_js_files, $this->js_files);

			$this->template->js_vars = $this->js_vars;

			$this->template->user = $this->user;

			$this->template->current_page = $this->getCurrentPage();
		}

		parent::after();
	}

	protected function display(View $view)
	{
		$this->template->page_title = $this->page_title;
		$this->template->meta_description = $this->meta_description;
		
		$this->template->content = $view;
		$this->template->blocks = $this->blocks;
	}

	// Set page title
	protected function setPageTitle($page_title, $include_suffix = TRUE)
	{
		$this->page_title = $page_title . ($include_suffix ? ' ' . PAGE_TITLE_SEPARATOR . ' ' . PAGE_TITLE_SUFFIX : '');
	}

	// Set meta description
	protected function setMetaDescription($meta_description) {
		$this->meta_description = str_replace(array("\r\n", "\n", "\r"), ' ', $meta_description);
	}

	// Add single CSS file
	protected function addCSS($path)
	{
		$this->css_files[] = $path;
	}

	// Add single JS file
	protected function addJS($path)
	{
		$this->js_files[] = $path;
	}

	// Automatically load CSS file from Controller and Action name
	protected function scanCSS()
	{
		if ( file_exists(DOCROOT . CSS_DIR . $this->request->controller() . '/' . $this->request->action() . '.css') )
			$this->css_files[] = '/' . CSS_DIR . $this->request->controller() . '/' . $this->request->action() . '.css';
	}

	// Automatically load JS file from Controller and Action name
	protected function scanJS()
	{
		if ( file_exists(DOCROOT . JS_DIR . $this->request->controller() . '/' . $this->request->action() . '.js') )
			$this->js_files[] = '/' . JS_DIR . $this->request->controller() . '/' . $this->request->action() . '.js';
	}

	// Load external library
	protected function loadLib($name) {
		if ( !isset($this->libs[$name]) )
			return;

		$lib = $this->libs[$name];

		if ( isset($lib['css']) )
			$this->lib_css_files = array_merge($this->lib_css_files, $lib['css']);

		if ( isset($lib['js']) )
			$this->lib_js_files = array_merge($this->lib_js_files, $lib['js']);
	}

	// Add JS variable
	protected function addJSVar($name, $value)
	{
		$this->js_vars[$name] = $value;
	}

	// Set content of a block
	protected function setBlock($block, $content)
	{
		if ( !isset($this->blocks[$block]) )
			return;

		$this->blocks[$block] = $content;
	}

	// Show message popup when on page load
	protected function showMessagePopup($title, $message, $buttons = '')
	{
		$message_popup = array(
			'title' => $title,
			'message' => $message
		);

		if ( $buttons !== '' )
			$message_popup['buttons'] = $buttons;

		$this->session->set('message_popup', $message_popup);
	}

	// Check what page it is...
	protected function getCurrentPage()
	{
		return strtolower($this->request->controller());
	}
}