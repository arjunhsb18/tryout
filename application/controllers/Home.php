<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('home/home');
	}
	function login(){
		$this->load->view('login_v');
	}
	function verifyUser(){
		$input = $this->uri->segment(3);
		if($input == 1){
			$this->MMember->signUp();
			$this->load->view('home/home');
		}
		elseif($input == 2){
			$data['data'] = $this->MMember->logIn();
			if(count($data['data'])){
				redirect('dashboard/dashboard');
			}else{
				redirect('home/home/login','refresh');
			}
		}
	}
	function logout(){
		unset($_SESSION['username']);
		unset($_SESSION['role_id']);
		$this->session->set_flashdata('error',"You've been logged out!");
		redirect('home/login','refresh');
	}
}
