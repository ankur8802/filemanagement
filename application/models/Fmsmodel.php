<?php

 defined('BASEPATH') OR exit('No Direct Script Access Allowed');

 class Fmsmodel extends CI_Model {
 
function check_login($userac,$pass)
{
    $output=$this->db->select()->from('users')->where('email',$userac)->where('password',$pass)->get();
    return $output->num_rows();
}
function fetchuserdetais($userac,$pass)
{
    $output=$this->db->select()->from('users')->where('email',$userac)->where('password',$pass)->get();
    return $output->row();
}
function add_files($data)
{
   $this->db->insert('files',$data);
}
function importantfiles10($type)
{
     $sessionuser=$this->session->userdata('mguloginuserdetails349');
     $output=$this->db->select()->from('files')->like('filemark',$type)->where('user_id',$sessionuser->id)->limit(10)->order_by('id','desc')->get();
     return $output->result();
}
function publicfiles10()
{
     $sessionuser=$this->session->userdata('mguloginuserdetails349');
     $output=$this->db->select()->from('files')->like('filemark','Public File')->limit(10)->order_by('id','desc')->get();
     return $output->result();
}
function publicfiles()
{
     $sessionuser=$this->session->userdata('mguloginuserdetails349');
     $output=$this->db->select()->from('files')->like('filemark','Public File')->order_by('id','desc')->get();
     return $output->result();
}
function all_files()
{
     $sessionuser=$this->session->userdata('mguloginuserdetails349');
     $output=$this->db->select()->from('files')->order_by('id','desc')->get();
     return $output->result();
}
function importantfiles($type)
{
     $sessionuser=$this->session->userdata('mguloginuserdetails349');
     $output=$this->db->select()->from('files')->like('filemark',$type)->where('user_id',$sessionuser->id)->order_by('id','desc')->get();
     return $output->result();
}
function latestfiles10()
{
     $sessionuser=$this->session->userdata('mguloginuserdetails349');
     $output=$this->db->select()->from('files')->where('user_id',$sessionuser->id)->limit(10)->order_by('id','desc')->get();
     return $output->result();
}
function latestfiles()
{
     $sessionuser=$this->session->userdata('mguloginuserdetails349');
     $output=$this->db->select()->from('files')->where('user_id',$sessionuser->id)->order_by('id','desc')->get();
     return $output->result();
}
function userfiles10()
{
    $output=$this->db->select()->from('files')->where('ftype !=','sadmin')->limit(10)->order_by('id','desc')->get();
    return $output->result();  
}
function userfiles()
{
    $output=$this->db->select()->from('files')->where('ftype !=','sadmin')->order_by('id','desc')->get();
    return $output->result();  
}
function myfiles()
{
     $sessionuser=$this->session->userdata('mguloginuserdetails349');
     $output=$this->db->select()->from('files')->where('user_id',$sessionuser->id)->order_by('id','desc')->get();
     return $output->result();
}
function allusers()
{
    $sessionuser=$this->session->userdata('mguloginuserdetails349');
     $output=$this->db->select()->from('users')->where('id !=',$sessionuser->id)->order_by('id','desc')->get();
     return $output->result();   
}
function create_group($data)
{
    $this->db->insert('group',$data);
}
function find_active_groups()
{
    $sessionuser=$this->session->userdata('mguloginuserdetails349');
    if($sessionuser->type=='sadmin')
    {
        $output=$this->db->select()->from('group')->where('status','1')->order_by('id','desc')->get();
        return $output->result();
    }
    else
    {
       $output=$this->db->select()->from('group')->like('groupmember',$sessionuser->email)->where('status','1')->order_by('id','desc')->get();
        return $output->result();
    }
}
function find_closed_groups()
{
    $sessionuser=$this->session->userdata('mguloginuserdetails349');
    if($sessionuser->type=='sadmin')
    {
        $output=$this->db->select()->from('group')->where('status','2')->order_by('id','desc')->get();
        return $output->result();
    }
    else
    {
       $output=$this->db->select()->from('group')->like('groupmember',$sessionuser->email)->where('status','2')->order_by('id','desc')->get();
        return $output->result();
    }
}
function closed_group_by_super_admin($gid)
{
    $data['status']='2';
    $this->db->where('id',$gid)->update('group',$data);
}
function reactive_group_by_super_admin($gid)
{
    $data['status']='1';
    $this->db->where('id',$gid)->update('group',$data);
}
function permanent_delete_group_by_super_admin($gid)
{
    $this->db->where('id',$gid)->delete('group');
}
function add_user_by_super_admin($data)
{
   $this->db->insert('users',$data);   
}
function checkfilenameexist($name)
{
   $output=$this->db->select()->from('files')->where('fname',$name)->get();
   return $output->num_rows();
}
function group_details($gid)
{
    $output=$this->db->select()->from('group')->where('id',$gid)->get();
    return $output->row();
}
function add_file_in_group($data)
{
    $this->db->insert('group_more_files',$data);  
}
function add_user_in_group($gid,$data)
{
    $this->db->where('id',$gid)->update('group',$data);
}
function checkcpassword($email,$ecycpassword)
{
   $output=$this->db->select()->from('users')->where('email',$email)->where('password',$ecycpassword)->get();
    return $output->num_rows(); 
}
function updatecpassword($email,$newecycpassword)
{
    $data['password']=$newecycpassword;
    $this->db->where('email',$email)->update('users',$data);
}
function checkfileingroup($data)
{
    $group_id=$data['group_id'];
    $file_id=$data['file_id'];
    $output=$this->db->select()->from('group_more_files')->where('group_id',$group_id)->where('file_id',$file_id)->get();
    return $output->num_rows(); 
}
}
?>