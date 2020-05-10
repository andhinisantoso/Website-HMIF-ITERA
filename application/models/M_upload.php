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

	function simpan_edit_member($nim,$nama,$th_masuk,$th_lulus,$jdl_skripsi,$old_nim,$link)
	{
		$this->db->query("UPDATE `anggota` SET `nim` = '$nim', `nama` = '$nama', `th_masuk` = '$th_masuk', `th_lulus` = '$th_lulus', `jdl_skripsi` = '$jdl_skripsi', `link` = '$link' WHERE `anggota`.`nim` = $old_nim;");
		redirect('admin_member');
	}

	function simpan_nambah_member($nim,$nama,$th_masuk,$th_lulus,$jdl_skripsi,$link)
	{
		$this->db->query("INSERT INTO `anggota` (`nim`, `nama`, `th_masuk`, `th_lulus`, `jdl_skripsi`, `link`) VALUES ('$nim', '$nama', '$th_masuk', '$th_lulus', '$jdl_skripsi', '$link');");
		
		redirect('admin_member');
	}

	function simpan_nambah_profile($nm_kepengurusan,$periode)
	{
		$this->db->query("INSERT INTO `profil` (`nm_kepengurusan`, `periode`) VALUES ('$nm_kepengurusan', '$periode');");
		
		redirect('admin_profile');
	}
	function simpan_nambah_news($judul,$foto,$deskripsi,$tempat)
	{
		$this->db->query("INSERT INTO `berita` (`judul`, `foto`, `deskripsi`, `tempat`) VALUES ('$judul', '$foto', '$deskripsi', '$tempat');");
		
		redirect('admin_news');
	}
	function simpan_edit_news($id_berita,$judul,$foto,$deskripsi,$tempat)
	{
		$this->db->query("UPDATE `berita` SET `judul` = '$judul', `foto` = '$foto', `deskripsi` = '$deskripsi', `tempat` = '$tempat' WHERE `berita`.`id_berita` = $id_berita;");
		
		redirect('admin_news');
	}
	function simpan_nambah_repository($nama_folder,$nama_file,$link)
	{
		$this->db->query("INSERT INTO `repositori` (`nama_folder`, `nama_file`, `link`) VALUES ('$nama_folder', '$nama_file', '$link');");
		
		redirect('admin_repository');
	}
	function simpan_edit_repository($id_rep,$nama_folder,$nama_file,$link)
	{
		$this->db->query("UPDATE `repositori` SET `nama_folder` = '$nama_folder', `nama_file` = '$nama_file', `link` = '$link' WHERE `repositori`.`id_rep` = '$id_rep';");
		
		redirect('admin_repository');
	}
}