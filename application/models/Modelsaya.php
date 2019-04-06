<?php
class Modelsaya extends CI_Model{
	public function bacaLogin($uname="")
	{
		if ($uname=="")
		{
			
			return $this->db->query("select * from login")->result_array();
		}else{
			
			return $this->db->query(sprintf("select * from login where username='%s'", $uname))->result_array();
		}
	}
	public function editLogin($olduname, $newuname, $pass)
	{
		$this->db->query(sprintf("update login set username='%s', password='%s' where username='%s'", $newuname, $pass, $olduname));
	}
	public function hapusLogin($uname)
	{
		$this->db->query(sprintf("delete from login where username='%s'", $uname));
	}
	public function tambahLogin($uname, $pass)
	{
		$this->db->query(sprintf("insert into login (username, password) values('%s', '%s')", $uname, $pass));
	}


}
?>