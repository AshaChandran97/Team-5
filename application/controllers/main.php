<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	//view index page
	public function index ()
	{
		$this->load->view('index');
	}
	//view register
	public function register()
	{
		$this->load->view('register');
	}
	//view customer home 
	public function adminhome()
	{
		$this->load->view('adminhome');
	}
	//view admin home
	public function userhome()
	{
		$this->load->view('userhome');
	}

	//registration action
	public function regaction()
	{
	$this->load->library('form_validation');
	$this->form_validation->set_rules("fname","fname",'required');
	$this->form_validation->set_rules("lname","lname",'required');
	$this->form_validation->set_rules("age","age",'required');
	$this->form_validation->set_rules("gender","gender",'required');
	$this->form_validation->set_rules("address","address",'required');
	$this->form_validation->set_rules("phno","phno",'required');
	$this->form_validation->set_rules("email","email",'required');
	$this->form_validation->set_rules("password","password",'required');
	if($this->form_validation->run())
	{
	$this->load->model('mainmodel');
	$pass=$this->input->post('password');
	$encpass=$this->mainmodel->encpaswd($pass);
	$a=array("fname"=>$this->input->post("fname"),
			"lname"=>$this->input->post("lname"),
			"age"=>$this->input->post("age"),
			"gender"=>$this->input->post("gender"),
			"phno"=>$this->input->post("phno"));
	$b=array("email"=>$this->input->post("email"),
			"password"=>$encpass,"utype"=>'1');
	$this->mainmodel->regaction($a,$b);
	redirect(base_url().'main/register');

	}
   } 
   //login action
   public function techlog()
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules("email","email",'required');
			$this->form_validation->set_rules("password","password",'required');
			if($this->form_validation->run())
		{

			$this->load->model('mainmodel');
			$email=$this->input->post("email");
			$pass=$this->input->post("password");
			$rslt=$this->mainmodel->selectpass($email,$pass);
			if($rslt)
		{
			$id=$this->mainmodel->getuserid($email);
			$user=$this->mainmodel->getuser($id);
			$this->load->library(array('session'));
			$this->session->set_userdata(array('id'=>(int)$user->id,'utype'=>$user->utype));

		if($_SESSION['utype']=='0')
		{
			redirect(base_url().'main/adminhome');
		}
		elseif ($_SESSION['utype']=='1')
		{
			redirect(base_url().'main/userhome');
		}

		else
		{
			echo"invalid user";
		}
		}
		
		}
		}

}