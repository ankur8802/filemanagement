<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mgulogin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('mguloginuserdetails349'))
		{
			return redirect('Welcome/index');
		}
		$this->load->model('Fmsmodel','model');
	}

function index()
{
	$data['importantfiles']=$this->model->importantfiles10('Important File');
	$data['publicfiles']=$this->model->publicfiles10();
	$data['latestfiles']=$this->model->latestfiles10();
	$data['userfiles']=$this->model->userfiles10();
	$this->load->view('index',$data);	
}
function logout()
{
	$this->session->unset_userdata('mguloginuserdetails349');
	$this->session->set_flashdata('success','Account Logout Successfully');
	return redirect();
}
function upload_file()
{
	$this->load->view('fileupload');
}
function add_files()
{
	$sessionuser=$this->session->userdata('mguloginuserdetails349');

	$data['fname']=$this->input->post('fname');
    
	$checkfilenameexist=$this->model->checkfilenameexist($data['fname']);
	if($checkfilenameexist!=0)
	{
        $this->session->set_flashdata('warning','File Name Already Exists');
        return redirect('upload-file');
	}

	$data['fremark']=$this->input->post('fremark');
	$filemark=$this->input->post('filemark');
	if(!empty($filemark))
	{
		$data['filemark']=implode(",",$filemark);
	}
	else
	{
		$data['filemark']='';
	}
	$data['ftype']=$sessionuser->type;
	$data['user_id']=$sessionuser->id;
    
        $this->load->library('upload');
         
        $config['upload_path'] = './uploads/mgufiles/';
        $config['allowed_types'] = 'png|jpg|xlsx|xls|csv|zip|docx|pdf|txt|ppt|pptx';
        $config['encrypt_name'] = TRUE;
        $this->upload->initialize($config);
        
        if($this->upload->do_upload('docfile'))
		{
			$upload=$this->upload->data();
			$uploadfile=$upload['raw_name'].$upload['file_ext'];
			$data['docfile']=$uploadfile;
		}
		else
		{  
			$errormsg=$this->upload->display_errors();
			$formatted_text = str_replace(['<p>', '</p>'], '', $errormsg);
            $this->session->set_flashdata('error',"$formatted_text");
            return redirect('upload-file');
			// echo "File Error";
			// die();
		}
            $this->model->add_files($data);
            $this->session->set_flashdata('success','File Upload Successfully');
            return redirect('upload-file');

}
function important_files()
{
	$data['importantfiles']=$this->model->importantfiles('Important File');
	$this->load->view('important_files',$data);
}
function latest_files()
{
	$data['latestfiles']=$this->model->latestfiles();
	$this->load->view('latest_files',$data);
}
function public_files()
{
	$data['publicfiles']=$this->model->publicfiles();
	$this->load->view('public_files',$data);
}
function all_files()
{
	$data['allfiles']=$this->model->all_files();
	$this->load->view('all_files',$data);
}
function all_users()
{
	$data['allusers']=$this->model->allusers();
	$this->load->view('all_users',$data);
}
function create_new_group()
{
	$data['myfiles']=$this->model->myfiles();
	$data['allusers']=$this->model->allusers();
	$this->load->view('create_new_group',$data);
}
function active_groups()
{
	$data['findgroup']=$this->model->find_active_groups();
	$this->load->view('active_groups',$data);
}
function close_groups()
{
	$data['findgroup']=$this->model->find_closed_groups();
	$this->load->view('close_groups',$data);
}
function create_group()
{
	$groupmember=$this->input->post('groupmember');
	$data['gname']=$this->input->post('gname');
	// $data['gfileid']=$this->input->post('gfileid');
	$data['gremark']=$this->input->post('gremark');
	$data['groupmember']=implode(",",$groupmember);
	$this->model->create_group($data);
	$this->session->set_flashdata('success','Create Group Successfully');
	return redirect('create-new-group');
}
function closed_group_by_super_admin($gid)
{
    $this->model->closed_group_by_super_admin($gid);
	$this->session->set_flashdata('success','Closed Group Successfully');
	return redirect('active-groups');
}
function reactive_group_by_super_admin($gid)
{
    $this->model->reactive_group_by_super_admin($gid);
	$this->session->set_flashdata('success','Reactivate Group Successfully');
	return redirect('close-groups');
}
function permanent_delete_group_by_super_admin($gid)
{
    $this->model->permanent_delete_group_by_super_admin($gid);
	$this->session->set_flashdata('success','Group Delete Successfully');
	return redirect('close-groups');
}
function add_user()
{
	$this->load->view('add_user');	
}
function add_user_by_super_admin()
{
   $data['name']=$this->input->post('name');
   $data['email']=$this->input->post('email');
   $data['type']=$this->input->post('type');
   $data['password']=md5($this->input->post('password'));
   $this->model->add_user_by_super_admin($data);
   $this->session->set_flashdata('success','User Add Successfully');
   return redirect('add-user');
}
function check_file_name()
{
	$name=$this->input->post('fname');
	$checkfilenameexist=$this->model->checkfilenameexist($name);
	if($checkfilenameexist==0)
	{
      echo "ok";
	}
	else
	{
       echo "sorry";
	}
}
function group_details($gid)
{
	$data['myfiles']=$this->model->myfiles();
	$data['group_details']=$this->model->group_details($gid);
	$data['allusers']=$this->model->allusers();
    $this->load->view('group_details',$data);
}
function add_file_in_group()
{
	$data=$this->input->post();
	$group_id=$data['group_id'];
    $checkfileingroup=$this->model->checkfileingroup($data);
    if($checkfileingroup!=0)
	{
		$this->session->set_flashdata('warning','File Already in Group');
        return redirect("group-detail/$group_id");
	}
	$this->model->add_file_in_group($data);
	$this->session->set_flashdata('success','Add File Successfully');
    return redirect("group-detail/$group_id");
}
function add_user_in_group()
{
	$user=$this->input->post('user');
	$gid=$this->input->post('group_id');
	$group_details=$this->model->group_details($gid);
	$groupusers=explode(',',$group_details->groupmember);
	$checkuseringroup=in_array($user,$groupusers);
	if($checkuseringroup)
	{
		$this->session->set_flashdata('warning','User Already In Group');
        return redirect("group-detail/$gid");
	}
	else
	{
       $groupusers[]=$user;
	   $newuserlist=implode(',',$groupusers);
	   $data['groupmember']=$newuserlist;
	   $this->model->add_user_in_group($gid,$data);
	   $this->session->set_flashdata('success','User Add In Group Successfully');
        return redirect("group-detail/$gid");
	}
}
function change_password()
{
	$sessionuser=$this->session->userdata('mguloginuserdetails349');

	$opassword=$this->input->post('opassword');
	$password=$this->input->post('password');
	$cpassword=$this->input->post('cpassword');
	if($password!=$cpassword)
	{
	    $this->session->set_flashdata('warning','New Password and Confirm Password does not match');
        return redirect("dashboard");	
	}
	$ecycpassword=md5($opassword);
	$newecycpassword=md5($password);
	$email=$sessionuser->email;
	$checkcpassword=$this->model->checkcpassword($email,$ecycpassword);
	if($checkcpassword==0)
	{
		$this->session->set_flashdata('warning','Wrong Current Password');
        return redirect("dashboard");	
	}
	else
	{
	  $this->model->updatecpassword($email,$newecycpassword);
	  $this->session->set_flashdata('success','Change Password Successfully');
      return redirect("dashboard");	
	}
}


}
