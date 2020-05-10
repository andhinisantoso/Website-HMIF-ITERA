<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_news extends CI_Controller {
  public function index()
  {
    $this->Model_keamanan->getkeamananadmin();
    $isi['data'] = $this->Model_data->getdatanews_admin();
    $this->load->view('admin/v_news', $isi);
  }

function edit()
  {
    $this->Model_keamanan->getkeamananadmin();
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
      $isi['waktu']         = '';
      $isi['tempat']        = '';
    }
    $this->load->view('admin/v_news_edit', $isi);
  }

  public function simpan_edit()
  {
    $this->Model_keamanan->getkeamananadmin();
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
        $tempat = $this->input->post('tempat');
        $this->M_upload->simpan_edit_news($id_berita,$judul,$foto,$deskripsi,$tempat);
      }
    }
    else {
        $id_berita = $this->input->post('id_berita');
        $foto = $this->input->post('foto_lama');
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $tempat = $this->input->post('tempat');
        $this->M_upload->simpan_edit_news($id_berita,$judul,$foto,$deskripsi,$tempat);
      }
  }


  function nambah()
  {
    $this->Model_keamanan->getkeamananadmin();
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
      $isi['waktu']         = '';
      $isi['tempat']        = '';
    }
    $this->load->view('admin/v_news_nambah', $isi);
  }

  function simpan_nambah()
  {
    $this->Model_keamanan->getkeamananadmin();
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
        $tempat = $this->input->post('tempat');
        $this->M_upload->simpan_nambah_news($judul,$foto,$deskripsi,$tempat);
      }
    }else{
        $foto = $this->input->post('NULL');
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $tempat = $this->input->post('tempat');
        $this->M_upload->simpan_nambah_news($judul,$foto,$deskripsi,$tempat);
    }
  }

  public function hapus()
  {
    $this->Model_keamanan->getkeamananadmin();
    $key = $this->uri->segment(3);
    $this->Model_data->hapus_news($key);
    redirect('admin_news');
  }
}