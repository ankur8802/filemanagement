<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

function __construct()
{
	parent::__construct();
	if($this->session->userdata('mguloginuserdetails349'))
	{
		return redirect('dashboard');
	}
}

function index()
{
	$this->load->view('login');	
}
function check_login()
{
	$userac=$this->input->post('userac');
	$pass=md5($this->input->post('pass'));
	$this->load->model('Fmsmodel','model');
	$check_login=$this->model->check_login($userac,$pass);
	if($check_login==1)
	{
		 $fetchloginid=$this->model->fetchuserdetais($userac,$pass);
         $this->session->set_userdata('mguloginuserdetails349',$fetchloginid);
		 return redirect('dashboard');
	}
	else
	{
		$this->session->set_flashdata('error','Wrong Email or Password !');
		return redirect();
	}
}


	
}
