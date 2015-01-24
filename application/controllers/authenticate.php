<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authenticate extends CI_Controller {

	public function Authenticate(){
		parent::__construct();
		$this->template->use_ci_parser = TRUE;
	}

	public function index(){
		$this->template->render("login");
	}

	public function login(){
		
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		if($username == $password && !empty($password) ){
			$user_logged['user_logged']['logged_in'] = TRUE;
			$this->session->set_userdata($user_logged);
			redirect('cargo', 'refresh');
		} else {
			redirect('authenticate', 'refresh');
		}

	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('authenticate', 'refresh');
	}

}

/* End of file Authenticate.php */
/* Location: ./application/controllers/Authenticate.php */