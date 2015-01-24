<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cargo_model extends CI_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

	
	public function new_cargo($data)
	{
		$this->db->insert('cargo', $data);
		return $this->db->insert_id();
	}

	public function update($data){
		if(empty($data['id'])) return;
		$this->db->where('id', $data['id']);
		$this->db->update('cargo', $data);
		return $data['id'];
	}

	public function get_by_id($id)
	{
		if(empty($id)) return;
		$query = $this->db->query("SELECT * FROM cargo WHERE id='{$id}' LIMIT 1");
		$row = $query->row_array();
		return $row;
	}

	public function delete($id)
	{
		if(empty($id)) return;
		return $this->db->delete('cargo', array('id' => $id));
	}

	public function get_all_by_id($id){
		if(empty($id)) return;
		$query = $this->db->query("SELECT a.*, b.*, c.* FROM cargo a ,sender b, recipient c WHERE a.sender_id = b.id AND a.recipient_id = c.id AND a.id ='{$id}' LIMIT 1");
		$row = $query->row_array();
		return $row;
	}

	public function get_sender_by_id($id){
		if(empty($id)) return;
		$query = $this->db->query("SELECT b.* FROM cargo a ,sender b WHERE a.sender_id = b.id AND a.id ='{$id}' LIMIT 1");
		$row = $query->row_array();
		return $row;
	}

	public function get_recipient_by_id($id){
		if(empty($id)) return;
		$query = $this->db->query("SELECT b.* FROM cargo a ,recipient b WHERE a.sender_id = b.id AND a.id ='{$id}' LIMIT 1");
		$row = $query->row_array();
		return $row;
	}

	public function get_all(){

		$this->db->select('*');
		$this->db->from('cargo');
		$this->db->order_by('create_time', 'desc');
		$query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
	}

}

/* End of file cargo_model.php */
/* Location: ./application/models/cargo_model.php */