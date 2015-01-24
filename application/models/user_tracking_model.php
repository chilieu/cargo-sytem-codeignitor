<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_tracking_model extends CI_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

	function new_user_tracking($data)
	{
		$data = array_change_key_case($data, CASE_UPPER);
		$this->db->insert('user_tracking', $data);
		return $this->db->insert_id();
	}

	public function list_all_user_tracking($limit, $start)
	{
		$this->db->limit($limit, $start);
        //$query = $this->db->get("user_tracking");
		$this->db->select('t1.*, t2.USERNAME, t2.AGENT_ID');
		$this->db->from('user_tracking as t1, users as t2');
		$this->db->where('t1.USER_ID = t2.ID');
		$this->db->order_by('t1.ID DESC');
		$query = $this->db->get();

        if ($query->num_rows() > 0) {
		foreach ($query->result_array() as $row) {
			$row = array_change_key_case($row, CASE_LOWER);
			$data[] = $row;
		}
		return $data;
        }
        return false;
	}

	public function record_count() {
		return $this->db->count_all("user_tracking");
	}
	
}

/* End of file user_tracking_model.php */
/* Location: ./application/models/user_tracking_model.php */