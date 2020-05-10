<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_member extends CI_Controller {

	public function index()
	{
		$this->Model_keamanan->getkeamananadmin();
		$isi['data'] = $this->Model_data->getdataanggota();
		$isi['konten'] = 'admin/v_konten_member';
		$this->load->view('admin/v_member', $isi);
	}

	public function edit()
	{
		$this->Model_keamanan->getkeamananadmin();
		$key = $this->uri->segment(3);
		$this->db->where('nim', $key);
		$query = $this->db->get('anggota');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{
				$isi['nim'] 		= $this->uri->segment(3);
				$isi['nama']		= $row->nama;
				$isi['th_masuk']	= $row->th_masuk;
				$isi['th_lulus']	= $row->th_lulus;
				$isi['jdl_skripsi']	= $row->jdl_skripsi;
				$isi['link']		= $row->link;
			}
		}
		else
		{
			$isi['nim'] 		= '';
			$isi['nama']		= '';
			$isi['th_masuk']	= '';
			$isi['th_lulus']	= '';
			$isi['jdl_skripsi']	= '';
			$isi['link']		= '';
		}
		$this->load->view('admin/v_member_edit', $isi);
	}

	public function nambah()
	{
		$this->Model_keamanan->getkeamananadmin();
		$key = $this->uri->segment(3);
		$this->db->where('nim', $key);
		$query = $this->db->get('anggota');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{
				$isi['nim'] 		= $this->uri->segment(3);
				$isi['nama']		= $row->nama;
				$isi['th_masuk']	= $row->th_masuk;
				$isi['th_lulus']	= $row->th_lulus;
				$isi['jdl_skripsi']	= $row->jdl_skripsi;
				$isi['link']		= $row->link;
			}
		}
		else
		{
			$isi['nim'] 		= '';
			$isi['nama']		= '';
			$isi['th_masuk']	= '';
			$isi['th_lulus']	= '';
			$isi['jdl_skripsi']	= '';
			$isi['link']		= '';
		}
		$this->load->view('admin/v_member_nambah', $isi);
	}


	public function simpan_edit()
	{
		$this->Model_keamanan->getkeamananadmin();
		$nim = $this->input->post('nim');
		$old_nim=$this->input->post('old_nim');
		$ceknim = $this->Model_data->cek_nim($nim);
		if($old_nim != $nim)
		{
			if ($ceknim == false) 
			{
				echo "<script> window.alert('NIM Telah ada di database') </script>";
				echo "<meta http-equiv='refresh' content='0;url=http://localhost/hmif/admin_member'>";
			}
		}
		else
		{
			$nama = $this->input->post('nama');
			$th_masuk = $this->input->post('th_masuk');
			$th_lulus = $this->input->post('th_lulus');
			$jdl_skripsi = $this->input->post('jdl_skripsi');
			$link = $this->input->post('link');
			$this->M_upload->simpan_edit_member($nim,$nama,$th_masuk,$th_lulus,$jdl_skripsi,$old_nim,$link);
		}
	}

	public function hapus()
	{
		$this->Model_keamanan->getkeamananadmin();
		$key = $this->uri->segment(3);
		$this->Model_data->hapus_anggota($key);
		redirect('admin_member');
	}

	public function simpan_nambah()
	{
		$this->Model_keamanan->getkeamananadmin();
		$nim = $this->input->post('nim');
		$ceknim = $this->Model_data->cek_nim($nim);
		if ($ceknim == false) {
			echo "<script> window.alert('NIM Telah ada di database') </script>";
			echo "<meta http-equiv='refresh' content='0;url=http://localhost/hmif/admin_member/nambah'>";
		}
		else{
			$nama = $this->input->post('nama');
			$th_masuk = $this->input->post('th_masuk');
			$th_lulus = $this->input->post('th_lulus');
			$jdl_skripsi = $this->input->post('jdl_skripsi');
			$link = $this->input->post('link');
			$this->M_upload->simpan_nambah_member($nim,$nama,$th_masuk,$th_lulus,$jdl_skripsi,$link);
		}
	}
}