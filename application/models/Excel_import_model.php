<?php
class Excel_import_model extends CI_Model
{
	function select()
	{
		$this->db->order_by('CustomerID', 'DESC');
		$query = $this->db->get('tbl_customer');
		return $query;
	}

	function insert($data)
	{
		$this->db->insert_batch('tbl_customer', $data);
	}
}
