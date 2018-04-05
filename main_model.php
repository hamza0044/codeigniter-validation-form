<?php
class Main_model extends CI_Model {


	

public function insert($data)
{
	$this->db->insert('lists',$data);
}

}

























?>