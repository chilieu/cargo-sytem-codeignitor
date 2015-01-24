<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {

	var $username = '';
	var $password = '';

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
    
	function login()
	{
		$this->username   = $this->input->post('username');
		$this->password = $this->input->post('password');
		$query = $this->db->query("SELECT * FROM users WHERE USERNAME = '{$this->username}' AND PASSWORD = '{$this->password}' LIMIT 1");
		$row = $query->row_array();
		$row = array_change_key_case($row, CASE_LOWER);
		if(!empty($row['username'])) return $row;
		return false;
	}

	function get_user_by_id($id)
	{
		$this->username   = $this->input->post('username');
		$this->password = $this->input->post('password');
		$query = $this->db->query("SELECT * FROM users WHERE ID = '{$id}' LIMIT 1");
		$row = $query->row_array();
		$row = array_change_key_case($row, CASE_LOWER);
		if(!empty($row['username'])) return $row;
		return false;
	}
	
}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */