<?php
class mainmodel extends CI_model 
{
	//insert to register table
	public function regaction($a,$b)
	{
		$this->db->insert("login",$b);
		$userid=$this->db->insert_id();
		$a["loginid"]=$userid;
		$this->db->insert("register",$a);
	}

	public function encpaswd($pass)
	{
		return password_hash($pass,PASSWORD_BCRYPT);
	}
	
	public function getuserid($email)
	{
		$this->db->select('id');
		$this->db->from("login");
		$this->db->where("email",$email);
		return $this->db->get()->row('id');
	}
	public function getuser($id)
	{
		$this->db->select('*');
		$this->db->from("login");
		$this->db->where("id",$id);
		return $this->db->get()->row();
	}
	
	public function selectpass($email,$pass)
	{
		$this->db->select('password');
		$this->db->from("login");
		$this->db->where("email",$email);
		$qry=$this->db->get()->row('password');
		return $this->verifypass($pass,$qry);
	}
	public function verifypass($pass,$qry)
	{
		return password_verify($pass,$qry);
	}
	
}
?>