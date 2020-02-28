<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MMember extends CI_Model {

	public function index()
	{
		$this->load->view('welcome_message');
	}
	function verifyMember(){
		$this->db->where('username',$_POST['username']);

	}
	function signUp(){
		$data = array(
			'username' => $_POST['username'],
			'email'=>$_POST['email'],
			'role_id' => 'user',
			'password'=> md5($_POST['password']),
			'status' => 'inactive'
		);
		$this->db->insert('member',$data);
	}
	function logIn(){
		$data = array();
		$this->db->select('username,role_id,status');
		$this->db->where('username',$_POST['username']);
		$this->db->where('password',md5($_POST['password']));
		$Q = $this->db->get('member');
		if($Q->num_rows()>0){
			$data = $Q->row_array();
			$this->session->set_userdata('username',$data['username']); 
			$this->session->set_userdata('role_id',$data['role_id']); 
			$this->session->set_userdata('status',$data['status']); 
			$this->session->set_userdata('status_to','notsuccess'); 
		}else{
			$this->session->set_flashdata('error','Sorry your username/password is incorrect!');
		}
		$Q->free_result();
		return $data;
	}
	function verification(){
		$data = array(
			'status' =>'active'
		);
		$this->db->where('username',$_POST['username']);
		$this->db->update('member',$data);
		$this->session->set_userdata('status','active');
	}
	
}
