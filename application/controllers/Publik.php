<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publik extends CI_Controller {

	public function index()
	{
		$isi['title'] = 'HMIF - Profile Page'; 
		$isi['data'] = $this->db->query("SELECT * FROM `profil` WHERE aktif = 1");
		$this->load->view('publik/v_home', $isi);
	}

	public function news()
	{
		$isi['title'] = 'HMIF - News Page'; 
		$isi['data'] = $this->Model_data->getdatanews();
		$this->load->view('publik/v_news',$isi);
	}


	public function readmore()
	{
		$key = $this->uri->segment(3);
		$isi['data'] = $this->Model_data->getdatanewsreadmore($key);
		$this->load->view('publik/v_readmore',$isi);
	}

	public function repository()
	{
		$this->load->view('publik/v_repository');
	}

	public function member()
	{
		$isi['title'] = 'HMIF - Member Page'; 
		$isi['data'] = $this->Model_data->getdataanggota();
		$this->load->view('publik/v_member', $isi);
	}
}