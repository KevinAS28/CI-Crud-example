<?php

class Saya extends CI_Controller {

	function edit($olduname)
	{
		//redirect("login");//butuh $this->load->helper("url");
		if (null!=($this->input->post("username")))
		{
			$ubaru = $this->input->post("username");
			$pbaru = $this->input->post("password");
			$this->modelsaya->editLogin($olduname, $ubaru, $pbaru);
			redirect("login");
		}
		$dat = array("olduname" => $olduname);
		$this->load->view("edit.php", $dat);
	}
	function table()
	{
		$login = array("alldata" => $this->modelsaya->bacaLogin());
		$this->load->view('crud', $login);
	}
	function hapus($username)
	{
		$this->modelsaya->hapusLogin($username);
		redirect("table");
	}
	public function create()
	{
		$this->load->view("create");
		if ($this->input->post("username")!=null)
		{
			$uname = $this->input->post("username");
			$passw = $this->input->post("password");
			$this->modelsaya->tambahLogin($uname, $passw);
			redirect("table");
		}
	}
	public function login()
	{
		$data = array("error"=>"Username atau Password Salah");
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$auth = $this->modelsaya->bacaLogin($username);
		if (count($auth)==1)
		{
			redirect("table");
			echo "uy";
			return;
		}
		$this->load->view('login');
	}
}
?>