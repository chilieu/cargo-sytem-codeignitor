<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once "MY_Controller" .EXT;
class Dashboard extends MY_Controller {
	private $pageTitle ="Dashboard";
	public function Cargo(){
		parent::__construct();
		$this->template->use_ci_parser = TRUE;
		$this->template->set('pageTitle', $this->pageTitle);
	}

	public function index(){
		$this->template->render();
	}
}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */