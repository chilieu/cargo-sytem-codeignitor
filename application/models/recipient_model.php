<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Recipient_model extends CI_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

	public function new_recipient($data)
	{
		$this->db->insert('recipient', $data);
		return $this->db->insert_id();
	}

	public function update($data){
		if(empty($data['id'])) return;
		$this->db->where('id', $data['id']);
		$this->db->update('recipient', $data);
		return $data['id'];
	}

	public function get_by_id($id)
	{
		if(empty($id)) return;
		$query = $this->db->query("SELECT * FROM recipient WHERE id='{$id}' LIMIT 1");
		$row = $query->row_array();
		return $row;
	}

	public function delete($id)
	{
		if(empty($id)) return;
		return $this->db->delete('recipient', array('id' => $id));
	}

}

/* End of file recipient_model.php */
/* Location: ./application/models/recipient_model.php */