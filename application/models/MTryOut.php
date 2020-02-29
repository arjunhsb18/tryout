<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MTryOut extends CI_Model {

	function checkpin($kodepin){
		$data = array();
		$this->db->select('kode_voucher');
		$this->db->where('kode_voucher',$kodepin);
		$this->db->where('username',$_SESSION['username']);
		$this->db->where('status','active');
		$Q=$this->db->get('kode_voucher_member');
		if($Q->num_rows()>0){
			$data=$Q->row_array();
			$data['message']= 'success';
			$this->session->set_userdata('kode_pin',$kodepin);
		}else{
			$data = 'Kode Anda Salah, Silahkan Masukkan Kode yang Benar';
		}
		$Q->free_result();
		return $data;
	}
	function getSubject($subject){
		$this->db->select('kode_subject,nama_subject,menit,detik,total_soal');
		$this->db->where('kode_subject',$subject);
		$Q=$this->db->get('subject_to');
		if($Q->num_rows()>0){
			$data = $Q->row_array();
		}
		$Q->free_result();
		return $data;
	}
	function getMenuSubject($pilihan){
		$data = array();
		$this->db->select('kode_subject,nama_subject,status,rumpun_test');
		$this->db->where('hak_akses',$pilihan);
		$this->db->where('status','active');
		$Q=$this->db->get('akses_subject_to');
		if($Q->num_rows()>0){
			$data = $Q->row_array();
		}
		$Q->free_result();
		return $data;
	}
	function getNumRows($subject){
		$this->db->select('total_soal');
		$this->db->where('kode_subject',$subject);
		$Q=$this->db->get('subject_to');
		if($Q->num_rows()>0){
			$data = $Q->row_array();
		}
		$Q->free_result();
		return $data;
	}
	function pilihanTo(){
		$this->db->select('jenis_pilihan');
		$this->db->where('username',$_SESSION['username']);
		$Q=$this->db->get('pilihan_member_to');
		if($Q->num_rows()>0){
			$data = $Q->row_array();
			$this->session->set_userdata('pilihan_to',$data['jenis_pilihan']);
		}
		$Q->free_result();
		return $data;
	}
	function getQuestion($subject){
		$this->db->select('nomor_soal,soal,image,tipe_soal,opsi_a,opsi_b,opsi_c,opsi_d,opsi_e');
		$this->db->where('kode_topik',$subject);
		$Q=$this->db->get('soal_to_fix');
		if($Q->num_rows()>0){
			$data = $Q->result_array();
		}
		$Q->free_result();
		return $data;
	}

	function insertAnswer($kode,$answer){
		$this->db->select('username,kode_subject');
		$this->db->where('kode_subject',$kode);
		$this->db->where('username',$_SESSION['username']);
		$Q=$this->db->get('lembar_jawaban_to');
		if($Q->num_rows()==1){
			$data = array(
				'jawaban' => json_encode($answer,true)
			);
			$this->db->where('kode_subject',$kode);
			$this->db->where('username',$_SESSION['username']);
			$this->db->update('lembar_jawaban_to',$data);
		}else{
			$data = array(
				'username' => $_SESSION['username'],
				'kode_subject' => $kode,
				'jawaban' => json_encode($answer,true)
			);
			$this->db->insert('lembar_jawaban_to',$data);
		}
		return $data;
	}
	function getLembar(){
		$this->db->select('jawaban');
		$this->db->where('kode_subject','tp1');
		$Q = $this->db->get('lembar_jawaban_to');
		if($Q->num_rows()>0){
			$data = $Q->row_array();
		}
		$Q->free_result();
		return $data;
	}
}

