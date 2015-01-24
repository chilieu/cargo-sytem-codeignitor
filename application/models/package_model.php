<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Package_model extends CI_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

	public function new_package($data)
	{
		$this->db->insert('package', $data);
		return $this->db->insert_id();
	}

	public function update($data){
		if(empty($data['id'])) return;
		$this->db->where('id', $data['id']);
		$this->db->update('package', $data);
		return $data['id'];
	}

	public function get_by_id($id)
	{
		if(empty($id)) return;
		$query = $this->db->query("SELECT * FROM package WHERE id='{$id}' LIMIT 1");
		$row = $query->row_array();
		return $row;
	}

	public function get_by_cargo_id($id)
	{
		if(empty($id)) return;
		$this->db->select('*');
		$this->db->from('package');
		$this->db->where("cargo_id = '{$id}' ");
		$query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
	}

	public function delete($id)
	{
		if(empty($id)) return;
		return $this->db->delete('package', array('id' => $id));
	}

}

/* End of file package_model.php */
/* Location: ./application/models/package_model.php */