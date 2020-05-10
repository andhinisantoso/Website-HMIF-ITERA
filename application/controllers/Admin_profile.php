<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_profile extends CI_Controller {

	public function index()
	{
		$this->Model_keamanan->getkeamananadmin();
		$isi['data'] = $this->Model_data->getdataprofile();
		$this->load->view('admin/v_profile', $isi);
	}

	public function aktivasi_pengurusan()
	{
		$key = $this->uri->segment(3);
		$this->Model_data->get_nonaktif();
		$this->Model_data->aktivasi_profil($key);
		redirect('admin_profile');

	}
// untuk melakukan penguploadan file ke database
	function do_upload_visimisi()
	{
		$this->Model_keamanan->getkeamananadmin();
		$config['upload_path'] = './assets/gambar/visimisi/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['encrypt_name'] = FALSE;

		$this->upload->initialize($config);
		if (!empty($_FILES['visimisi']['name'])) 
		{
			if ($this->upload->do_upload('visimisi')) 
			{
				$bnr = $this->upload->data();
				$id_profil = $this->input->post('id_profil');
				$visimisi = $bnr['file_name'];
				$this->M_upload->simpan_visimisi($visimisi, $id_profil);
			}
		}
	}

	function do_upload_staff()
	{
		$this->Model_keamanan->getkeamananadmin();
		$config['upload_path'] = './assets/gambar/staff/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['encrypt_name'] = FALSE;

		$this->upload->initialize($config);
		if (!empty($_FILES['staff']['name'])) 
		{
			if ($this->upload->do_upload('staff')) 
			{
				$bnr = $this->upload->data();
				$staff = $bnr['file_name'];
				$id_profil = $this->input->post('id_profil');
				$this->M_upload->simpan_staff($staff, $id_profil);
			}
		}
	}

	function do_upload_sejarah()
	{
		$this->Model_keamanan->getkeamananadmin();
		$config['upload_path'] = './assets/gambar/sejarah/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['encrypt_name'] = FALSE;

		$this->upload->initialize($config);
		if (!empty($_FILES['sejarah']['name'])) 
		{
			if ($this->upload->do_upload('sejarah')) 
			{
				$bnr = $this->upload->data();
				$id_profil = $this->input->post('id_profil');
				$sejarah = $bnr['file_name'];
				$this->M_upload->simpan_sejarah($sejarah, $id_profil);
			}
		}
	}

	function do_upload_banner()
	{
		$this->Model_keamanan->getkeamananadmin();
		$config['upload_path'] = './assets/gambar/banner/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['encrypt_name'] = FALSE;

		$this->upload->initialize($config);
		if (!empty($_FILES['banner']['name'])) 
		{
			if ($this->upload->do_upload('banner')) 
			{
				$bnr = $this->upload->data();
				$id_profil = $this->input->post('id_profil');
				$banner = $bnr['file_name'];
				$this->M_upload->simpan_banner($banner,$id_profil);
			}
		}
	}

		function do_upload_logo()
	{
		$this->Model_keamanan->getkeamananadmin();
		$config['upload_path'] = './assets/gambar/logo/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['encrypt_name'] = FALSE;

		$this->upload->initialize($config);
		if (!empty($_FILES['logo']['name'])) 
		{
			if ($this->upload->do_upload('logo')) 
			{
				$bnr = $this->upload->data();
				$logo = $bnr['file_name'];
				$id_profil = $this->input->post('id_profil');
				$this->M_upload->simpan_logo($logo, $id_profil);
			}
		}
	}
// untuk ngambil data yang ingin di edit
	public function uploadvisimisi()
	{
		$this->Model_keamanan->getkeamananadmin();
		$key = $this->uri->segment(3);
		$this->db->where('id_profil', $key);
		$query = $this->db->get('profil');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{
				$isi['data_foto'] = $row->foto_visimisi;
				$isi['id_profil'] = $row->id_profil;
			}
		}
		else
		{
			$isi['data_foto'] 	= '';
			$isi['id_profil'] 	= '';
		}
		$this->load->view('admin/v_popvisimisi', $isi);
	}
	

	public function uploadsejarah()
	{
		$this->Model_keamanan->getkeamananadmin();
		$key = $this->uri->segment(3);
		$this->db->where('id_profil', $key);
		$query = $this->db->get('profil');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{
				$isi['data_foto'] = $row->foto_sejarah;
				$isi['id_profil'] = $row->id_profil;
			}
		}
		else
		{
			$isi['data_foto'] 	= '';
			$isi['id_profil'] 	= '';
		}
		$this->load->view('admin/v_popsejarah', $isi);
	}
	

	public function uploadlogo()
	{
		$this->Model_keamanan->getkeamananadmin();
		$key = $this->uri->segment(3);
		$this->db->where('id_profil', $key);
		$query = $this->db->get('profil');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{
				$isi['data_foto'] = $row->foto_logo;
				$isi['id_profil'] = $row->id_profil;
			}
		}
		else
		{
			$isi['data_foto'] 	= '';
			$isi['id_profil'] 	= '';
		}
		$this->load->view('admin/v_poplogo', $isi);
	}


	public function uploadstaff()
	{
		$this->Model_keamanan->getkeamananadmin();
		$key = $this->uri->segment(3);
		$this->db->where('id_profil', $key);
		$query = $this->db->get('profil');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{
				$isi['data_foto'] = $row->foto_staff;
				$isi['id_profil'] = $row->id_profil;
			}
		}
		else
		{
			$isi['data_foto'] 	= '';
			$isi['id_profil'] 	= '';
		}
		$this->load->view('admin/v_popstaff', $isi);
	}

	public function upploadbanner()
	{
		$this->Model_keamanan->getkeamananadmin();
		$key = $this->uri->segment(3);
		$this->db->where('id_profil', $key);
		$query = $this->db->get('profil');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{
				$isi['data_foto'] = $row->foto_baner;
				$isi['id_profil'] = $row->id_profil;
			}
		}
		else
		{
			$isi['data_foto'] 	= '';
			$isi['id_profil'] 	= '';
		}
		$this->load->view('admin/v_popbanner', $isi);
	}


	// untuk mengedit data profile sesuai id yang dipilih 
	function edit()
	{
		$this->Model_keamanan->getkeamananadmin();
		$key = $this->uri->segment(3);
		$this->db->where('id_profil', $key);
		$query = $this->db->get('profil');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{
				$isi['key'] 				= $this->uri->segment(3);
				$isi['nm_kepengurusan']		= $row->nm_kepengurusan;
				$isi['periode']				= $row->periode;
				$isi['foto_sejarah']		= $row->foto_sejarah;
				$isi['foto_kepengurusan']	= $row->foto_kepengurusan;
				$isi['foto_logo']			= $row->foto_logo;
				$isi['foto_baner']			= $row->foto_baner;
				$isi['foto_visimisi']		= $row->foto_visimisi;
				$isi['foto_staff']			= $row->foto_staff;
			}
		}
		else
		{
			$isi['key'] 				= '';
			$isi['nm_kepengurusan']		= '';
			$isi['periode']				= '';
			$isi['foto_sejarah']		= '';
			$isi['foto_kepengurusan']	= '';
			$isi['foto_logo']			= '';
			$isi['foto_baner']			= '';
			$isi['foto_visimisi']		= '';
			$isi['foto_staff']			= '';
		}
		$this->load->view('admin/v_pop_edit', $isi);
	}

	function nambah()
		{
			$this->Model_keamanan->getkeamananadmin();
			$key = $this->uri->segment(3);
			$this->db->where('id_profil', $key);
			$query = $this->db->get('profil');
			if($query->num_rows()>0)
			{
				foreach ($query->result() as $row) 
				{
					$isi['key'] 				= $this->uri->segment(3);
					$isi['nm_kepengurusan']		= $row->nm_kepengurusan;
					$isi['periode']				= $row->periode;
					$isi['foto_sejarah']		= $row->foto_sejarah;
					$isi['foto_kepengurusan']	= $row->foto_kepengurusan;
					$isi['foto_logo']			= $row->foto_logo;
					$isi['foto_baner']			= $row->foto_baner;
					$isi['foto_visimisi']		= $row->foto_visimisi;
					$isi['foto_staff']			= $row->foto_staff;
				}
			}
			else
			{
				$isi['key'] 				= '';
				$isi['nm_kepengurusan']		= '';
				$isi['periode']				= '';
				$isi['foto_sejarah']		= '';
				$isi['foto_kepengurusan']	= '';
				$isi['foto_logo']			= '';
				$isi['foto_baner']			= '';
				$isi['foto_visimisi']		= '';
				$isi['foto_staff']			= '';
			}
			$this->load->view('admin/v_pop_nambah', $isi);
		}

	public function hapus()
	{
		$this->Model_keamanan->getkeamananadmin();
		$key = $this->uri->segment(3);
		$this->Model_data->hapus_profile($key);
		redirect('admin_profile');
	}
	public function simpan_nambah()
	{
		$this->Model_keamanan->getkeamananadmin();
		$nm_kepengurusan = $this->input->post('nm_kepengurusan');
		$periode = $this->input->post('periode');
		$this->M_upload->simpan_nambah_profile($nm_kepengurusan,$periode);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('admin');
	}
}