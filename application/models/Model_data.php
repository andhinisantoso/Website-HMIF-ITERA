<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_data extends CI_model {

	public function getdataprofile()
	{
		$data = "SELECT * FROM profil";
		return $this->db->query($data);
	}

	public function getdataanggota()
	{
		$data = "SELECT * FROM anggota";
		return $this->db->query($data);
	}
	public function getdatanews()
	{
		$data = $data = "SELECT id_berita, DAYNAME(waktu) AS hari, DAY(waktu) AS tanggal, MONTHNAME(waktu) AS bulan, YEAR(waktu) AS tahun, judul, foto, deskripsi, tempat FROM berita";
		return $this->db->query($data);
	}

	public function getdatanewsreadmore($id_berita)
	{
		$data = "SELECT id_berita, DAYNAME(waktu) AS hari, DAY(waktu) AS tanggal, MONTHNAME(waktu) AS bulan, YEAR(waktu) AS tahun, judul, foto, deskripsi, tempat FROM berita WHERE id_berita = $id_berita";
		return $this->db->query($data);
	}

	public function aktivasi_profil($key)
	{
		$query = $this->db->query( "UPDATE profil SET aktif=1 WHERE `profil`.`id_profil` =$key;");
		return  $query;
	}

	public function get_nonaktif()
	{
		return $query = $this->db->query("UPDATE profil SET aktif = 0;");
	}

	public function getdatanews_admin()
	{
		$data = $data = "SELECT * FROM berita";
		return $this->db->query($data);
	}

	public function getdatarepository()
	{
		$data = $data = "SELECT * FROM repositori";
		return $this->db->query($data);
	}
	public function hapus_anggota($key)
	{
		return $this->db->query("DELETE FROM `anggota` WHERE `anggota`.`nim` = $key;");
	}
	public function hapus_profile($key)
	{
		return $this->db->query("DELETE FROM `profil` WHERE `profil`.`id_profil` = $key;");
	}
	public function hapus_news($key)
	{
		return $this->db->query("DELETE FROM `berita` WHERE `berita`.`id_berita` = $key;");
	}
	public function hapus_repository($key)
	{
		return $this->db->query("DELETE FROM `repositori` WHERE `repositori`.`id_rep` = $key;");
	}

	public function cek_nim($nim)
	{
		$data =  $this->db->query("SELECT * FROM anggota where nim = $nim;");
		if ($data->num_rows()> 0 ) {
			return false;
		}
		else{
			return true;
		}

	}

	function getlogin($e,$p)
	{
		$cekmail = $this->db->query("SELECT email FROM admin where email='$e';");
		$query = $this->db->query("SELECT * FROM admin where email='$e' and password='$p';");
		if ($cekmail->num_rows()>0) {
			if ($query->num_rows()>0) {
				foreach ($query->result() as $row) {
					if ($row->id_active == 1) {
						$sess = array('email' => $row->email,
							'password' => $row->password);
						$this->session->set_userdata($sess);
						redirect('admin_profile');
					} 
					else
					{
						$tgl = date("Y-m-d");
						$url = base_url();
						$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email Belum Aktif!
							<form action="'.$url.'/admin/resend_aktivasi" method="post">
							  <input type="email" name="email" value="'.$e.'" hidden><br>
							  <input type="text" name="tgl" value="'.$tgl.'" hidden><br><br>
							  <button type="submit" class="btn btn-primary btn-sm">Send mail</button>
							</form>
							</div>');
	                		redirect('admin');
					}
				}
			}
			else 
			{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
	                redirect('admin');
	        }
		} 
		elseif ($cekmail->num_rows()==0) 
		{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email Belum Terdaftar!</div>');
	                redirect('admin');
		}
	}

	public function aktivasimail($email, $tgl)
	{
		$data = array('id_active' => 1);
		$this->db->where('md5(email)', $email);
		$this->db->where('md5(tgl_daftar)', $tgl);
		return $this->db->update('admin', $data);
	}
}