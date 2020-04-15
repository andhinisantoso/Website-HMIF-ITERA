<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_news extends CI_Controller {
  public function index()
  {
    $isi['data'] = $this->Model_data->getdatanews();
    $this->load->view('admin/v_news', $isi);
  }

function edit()
  {
    $key = $this->uri->segment(3);
    $this->db->where('id_berita', $key);
    $query = $this->db->get('berita');
    if($query->num_rows()>0)
    {
      foreach ($query->result() as $row) 
      {
        $isi['id_berita']     = $this->uri->segment(3);
        $isi['judul']         = $row->judul;
        $isi['foto']          = $row->foto;
        $isi['deskripsi']     = $row->deskripsi;
        $isi['tanggal']       = $row->tanggal;
        $isi['waktu']         = $row->waktu;
        $isi['tempat']        = $row->tempat;
      }
    }
    else
    {
      $isi['id_berita']     = '';
      $isi['judul']         = '';
      $isi['foto']          = '';
      $isi['deskripsi']     = '';
      $isi['tanggal']       = '';
      $isi['waktu']         = '';
      $isi['tempat']        = '';
    }
    $this->load->view('admin/v_news_edit', $isi);
  }

  public function simpan_edit()
  {
    $config['upload_path'] = './assets/gambar/news/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['encrypt_name'] = FALSE;
    $this->upload->initialize($config);
    if (!empty($_FILES['foto']['name'])) 
    {
      if ($this->upload->do_upload('foto')) 
      {
        $fto = $this->upload->data();
        $id_berita = $this->input->post('id_berita');
        $foto = $fto['file_name'];
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $tanggal = $this->input->post('tanggal');
        $waktu = $this->input->post('waktu');
        $tempat = $this->input->post('tempat');
        $this->M_upload->simpan_edit_news($id_berita,$judul,$foto,$deskripsi,$tanggal,$waktu,$tempat);
      }
    }
  }


  function nambah()
  {
    $key = $this->uri->segment(3);
    $this->db->where('id_berita', $key);
    $query = $this->db->get('berita');
    if($query->num_rows()>0)
    {
      foreach ($query->result() as $row) 
      {
        $isi['id_berita']     = $this->uri->segment(3);
        $isi['judul']         = $row->judul;
        $isi['foto']          = $row->foto;
        $isi['deskripsi']     = $row->deskripsi;
        $isi['tanggal']       = $row->tanggal;
        $isi['waktu']         = $row->waktu;
        $isi['tempat']        = $row->tempat;
      }
    }
    else
    {
      $isi['id_berita']     = '';
      $isi['judul']         = '';
      $isi['foto']          = '';
      $isi['deskripsi']     = '';
      $isi['tanggal']       = '';
      $isi['waktu']         = '';
      $isi['tempat']        = '';
    }
    $this->load->view('admin/v_news_nambah', $isi);
  }

  function simpan_nambah()
  {
    $config['upload_path'] = './assets/gambar/news/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['encrypt_name'] = FALSE;
    $this->upload->initialize($config);
    if (!empty($_FILES['foto']['name'])) 
    {
      if ($this->upload->do_upload('foto')) 
      {
        $fto = $this->upload->data();
        $foto = $fto['file_name'];
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $tanggal = $this->input->post('tanggal');
        $waktu = $this->input->post('waktu');
        $tempat = $this->input->post('tempat');
        $this->M_upload->simpan_nambah_news($judul,$foto,$deskripsi,$tanggal,$waktu,$tempat);
      }
    }
  }

  public function hapus()
  {
    $key = $this->uri->segment(3);
    $this->Model_data->hapus_news($key);
    redirect('admin_news');
  }
}