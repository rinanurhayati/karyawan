<?php
class M_panels extends CI_model {
	function_construct();{


	parent ::_construct();
}
	function_login ($where = '') 
	{
		return $this->db->query(select * from aplikasikkp $where;"")
	}
}
?>