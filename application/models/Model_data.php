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
}