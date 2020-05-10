<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_repository extends CI_Controller {
	public function index()
	{
		$this->Model_keamanan->getkeamananadmin();
	    $isi['data'] = $this->Model_data->getdatarepository();
	    $this->load->view('admin/v_repository', $isi);
	}
	public function nambah()
	{
		$this->Model_keamanan->getkeamananadmin();
		$key = $this->uri->segment(3);
		$this->db->where('id_rep', $key);
		$query = $this->db->get('repositori');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{
				$isi['id_rep'] 		= $this->uri->segment(3);
				$isi['nama_folder']	= $row->nama_folder;
				$isi['nama_file']	= $row->nama_file;
				$isi['link']		= $row->link;				
			}
		}
		else
		{
			$isi['id_rep'] 		= '';
			$isi['nama_folder']	= '';
			$isi['nama_file']	= '';
			$isi['link']		= '';
		}
		$this->load->view('admin/v_repository_nambah', $isi);
	}
	public function simpan_nambah()
	{
		$this->Model_keamanan->getkeamananadmin();
		$nama_folder = $this->input->post('nama_folder');
		$nama_file = $this->input->post('nama_file');
		$link = $this->input->post('link');
		$this->M_upload->simpan_nambah_repository($nama_folder,$nama_file,$link);
	}
	public function simpan_edit()
	{
		$this->Model_keamanan->getkeamananadmin();
		$id_rep = $this->input->post('id_rep');
		$nama_folder = $this->input->post('nama_folder');
		$nama_file = $this->input->post('nama_file');
		$link = $this->input->post('link');
		$this->M_upload->simpan_edit_repository($id_rep,$nama_folder,$nama_file,$link);
	}
	public function edit()
	{
		$this->Model_keamanan->getkeamananadmin();
		$key = $this->uri->segment(3);
		$this->db->where('id_rep', $key);
		$query = $this->db->get('repositori');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{
				$isi['id_rep'] 		= $this->uri->segment(3);
				$isi['nama_folder']	= $row->nama_folder;
				$isi['nama_file']	= $row->nama_file;
				$isi['link']		= $row->link;				
			}
		}
		else
		{
			$isi['id_rep'] 		= '';
			$isi['nama_folder']	= '';
			$isi['nama_file']	= '';
			$isi['link']		= '';
		}
		$this->load->view('admin/v_repository_edit', $isi);
	}
	public function hapus()
	{
		$this->Model_keamanan->getkeamananadmin();
		$key = $this->uri->segment(3);
		$this->Model_data->hapus_repository($key);
		redirect('Admin_repository');
	}
}