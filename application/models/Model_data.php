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

	public function hapus_anggota($key)
	{
		return $this->db->query("DELETE FROM `anggota` WHERE `anggota`.`nim` = $key;");
	}
	public function hapus_profile($key)
	{
		return $this->db->query("DELETE FROM `profil` WHERE `profil`.`id_profil` = $key;");
	}
}