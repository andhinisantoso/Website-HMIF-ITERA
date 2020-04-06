<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_upload extends CI_model {

	function simpan_banner($banner,$id_profil)
	{
		$this->db->query("UPDATE `profil` SET `foto_baner` = '$banner' WHERE `profil`.`id_profil` = $id_profil;");
		
		redirect(base_url()."admin_profile/edit/".$id_profil);
	}
	function simpan_visimisi($visimisi,$id_profil)
	{
		$this->db->query("UPDATE `profil` SET `foto_visimisi` = '$visimisi' WHERE `profil`.`id_profil` = $id_profil;");
		
		redirect(base_url()."admin_profile/edit/".$id_profil);
	}
	function simpan_sejarah($sejarah,$id_profil)
	{
		$this->db->query("UPDATE `profil` SET `foto_sejarah` = '$sejarah' WHERE `profil`.`id_profil` = $id_profil;");
		
		redirect(base_url()."admin_profile/edit/".$id_profil);
	}

	function simpan_logo($logo,$id_profil)
	{
		$this->db->query("UPDATE `profil` SET `foto_logo` = '$logo' WHERE `profil`.`id_profil` = $id_profil;");
		
		redirect(base_url()."admin_profile/edit/".$id_profil);
	}

	function simpan_staff($staff,$id_profil)
	{
		$this->db->query("UPDATE `profil` SET `foto_staff` = '$staff' WHERE `profil`.`id_profil` = $id_profil;");
		
		redirect(base_url()."admin_profile/edit/".$id_profil);
	}

	function simpan_edit_member($nim,$nama,$th_masuk,$th_lulus,$jdl_skripsi)
	{
		$this->db->query("UPDATE `anggota` SET `nim` = '$nim', `nama` = '$nama', `th_masuk` = '$th_masuk', `th_lulus` = '$th_lulus', `jdl_skripsi` = '$jdl_skripsi' WHERE `anggota`.`nim` = $nim;");
		
		redirect('admin_member');
	}

	function simpan_nambah_member($nim,$nama,$th_masuk,$th_lulus,$jdl_skripsi)
	{
		$this->db->query("INSERT INTO `anggota` (`nim`, `nama`, `th_masuk`, `th_lulus`, `jdl_skripsi`) VALUES ('$nim', '$nama', '$th_masuk', '$th_lulus', '$jdl_skripsi');");
		
		redirect('admin_member');
	}

	function simpan_nambah_profile($nm_kepengurusan,$periode)
	{
		$this->db->query("INSERT INTO `profil` (`nm_kepengurusan`, `periode`) VALUES ('$nm_kepengurusan', '$periode');");
		
		redirect('admin_profile');
	}
}