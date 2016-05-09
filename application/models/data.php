<?php

Class Data extends CI_Model{
	
public function cata(){

$query = $this->db->get('product');
 
 return $query->result_array();
}

function getdata($limit,$start,$x){

$query =$this->db->query("SELECT * FROM mobile WHERE mobile_name='{$x}' limit {$start},{$limit}");

return $query->result_array();	
}

function count_data_mobile($x)
{
	$query =$this->db->query("SELECT * FROM mobile WHERE mobile_name='{$x}'");

	return $query->num_rows();
}

function need($p){


$query =$this->db->query("SELECT * FROM mobile WHERE id='{$p}'");

return $query->result_array();	
}
function get_search($s) {

 $query= $this->db->query("SELECT * FROM mobile WHERE mobile_model LIKE '%$s%'");
 
 return $query->result_array();
}

function get_compare($cp){

	$query=$this->db->query("SELECT * FROM mobile WHERE mobile_model LIKE '$cp'");

	return $query->result_array();
}

}

 ?>