<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sender_model extends CI_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

	public function new_sender($data)
	{
		$this->db->insert('sender', $data);
		return $this->db->insert_id();
	}
	
	public function update($data){
		if(empty($data['id'])) return;
		$this->db->where('id', $data['id']);
		$this->db->update('sender', $data);
		return $data['id'];
	}

	public function get_by_id($id)
	{
		if(empty($id)) return;
		$query = $this->db->query("SELECT * FROM sender WHERE id='{$id}' LIMIT 1");
		$row = $query->row_array();
		return $row;
	}

	public function delete($id)
	{
		if(empty($id)) return;
		return $this->db->delete('sender', array('id' => $id));
	}

}

/* End of file sender_model.php */
/* Location: ./application/models/sender_model.php */