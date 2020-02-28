<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($_SESSION['role_id']==''){
			redirect('home/login','refresh');
		}
	}
	public function index()
	{
		$data['main'] = 'home'; 
		$this->load->view('dashboard/dashboard',$data);
	}
	public function tryout(){
		if($_SESSION['status_to']=='success' && $_SESSION['status']=='active'){
			if($this->uri->segment(4)==1){
				$data['pilihan'] = $this->MTryOut->pilihanTo();
				$data['subject'] = $this->MTryOut->getMenuSubject($data['pilihan']['jenis_pilihan']); 
				$data['data'] = $this->MTryOut->getSubject($data['subject']['kode_subject']);
				$data['main'] = 'tryout_menu_subject';
				$this->load->view('dashboard/dashboard',$data);	
			}else{
				$data['main'] = 'tryout_verify';
				$this->load->view('dashboard/dashboard',$data);
			}
		}else{
			$data['main'] = 'tryout_verify';
			$this->load->view('dashboard/dashboard',$data);
		}
	}
	function verify(){
		if($this->uri->segment(4)==1){
			$this->MMember->verification();
			redirect('dashboard/dashboard');
		}else{
		$message = "<p>Terima kasih telah melakukan registrasi.</p>
						
		<form  action='".base_url()."'index.php/dashboard/dashboard/verify/1' method='post'>
			<input  style='height:1px;visibility:hidden;' type='text' name='username' value='".$_SESSION['username']."' disabled>
			<p style='line-height:5px;'>Silahkan tekan tombol verifikasi di bawah ini.</p>
			<button style='display:block;border:none;width:auto;height:30px;background-color:#007bff;color:white;border-radius:10px; padding:0px 10px;'>Verifikasi Sekarang</button>
		</form>
		<br>
		<p>Admin Tryout Knowlej.ID</p>";
		$config = array();
		$config['charset'] = 'utf-8';
		$config['useragent'] = 'Codeigniter';
		$config['protocol']= "smtp";
		$config['mailtype']= "html";
		$config['smtp_host']= "ssl://smtp.gmail.com";//pengaturan smtp
		$config['smtp_port']= "465";
		$config['smtp_timeout']= "400";
		$config['smtp_user']= "arjunhsb30@gmail.com"; // isi dengan email kamu
		$config['smtp_pass']= "Sukses123"; // isi dengan password kamu
		$config['crlf']="\r\n";
		$config['newline']="\r\n";
		$config['wordwrap'] = TRUE;
 
		//memanggil library email dan set konfigurasi untuk pengiriman email
		$this->email->initialize($config);
		$this->email->from($config['smtp_user']);
		$this->email->to('coolarjun73@gmail.com');
		$this->email->subject('Verifikasi Akun');
		$this->email->message('aaaaa <br>'.$message);
		$this->email->send();
		$data['main'] = 'cekmail';
		$this->load->view('dashboard/dashboard',$data);
		
	}
	}

	//Check Kode PIN Try OUT//
	function checkpin(){
		$kodepin = $this->input->post('kodepin');
		if($kodepin==''){
			$result['message']='Mohon untuk mengisi Kode PIN Try Out Anda';
		}else{
			$result = $this->MTryOut->checkpin($kodepin);
			$this->session->set_userdata('status_to','success');
		}
		echo json_encode($result);
	}

	function tryout_start(){
		$subject = $this->uri->segment(4);
		$data['questions'] = $this->MTryOut->getQuestion($subject);
		$data['subject'] = $this->MTryOut->getSubject($subject);
		$data['total_question'] = $this->MTryOut->getNumRows($subject);
		$data['main'] = 'tryout_home';
		$this->session->set_userdata('kode_subject',$data['subject']['kode_subject']);
		$this->load->view('dashboard/dashboard',$data);
	}

	function sendanswer(){
		$kode = $_POST['kode'];
		$answer = $_POST['answer'];
		$this->MTryOut->insertAnswer($kode,$answer);
		$result['message'] = 'success';
		print_r($_SESSION['username']);
		echo json_encode($result);
	}
}
