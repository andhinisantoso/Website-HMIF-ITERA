<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/v_login');
	}

	function login()
	{
		$e = $this->input->post('email');
		$p = md5($this->input->post('password'));
		$this->Model_data->getlogin($e,$p);
	}

	public function register()
	{
		$this->load->view('admin/v_register');
	}

	public function forgot()
	{
		$this->load->view('admin/v_forgot');
	}

	public function forgot_password()
	{
		$email = $this->uri->segment(3);
		$tgl = $this->uri->segment(4);
		$sql = $this->db->query("SELECT email FROM admin where md5(email)='$email' AND md5(tgl_daftar) = '$tgl';");
		if ($sql->num_rows()>0) 
		{
			foreach ($sql->result() as $row) {
				$isi['email']		= $row->email;
			}
			$isi['hashemail'] = $email;
			$isi['hashtgl']	  = $tgl;
			$this->load->view('admin/v_forgot_password', $isi);	
		}
		else
		{
			echo "data expired";
		}
		
	}
	
	public function sendpassword($e, $tgl)
	{
		$hashtgl = md5($tgl);
		$hashmail = md5($e);
		$url = base_url('admin/forgot_password');
		// Konfigurasi email
        $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_user' => 'ggrecknokolo@gmail.com',  // Email gmail
            'smtp_pass'   => '5466412k',  // Password gmail
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];

        // Load library email dan konfigurasinya
        $this->load->library('email', $config);

        // Email dan nama pengirim
        $this->email->from('$ggrecknokolo@gmail.com', 'Administrasi HMIF');

        // Email penerima
        $this->email->to($e); // Ganti dengan email tujuan

        // Lampiran email, isi dengan url/path file
        $this->email->attach('');

        // Subject email
        $this->email->subject('Ubah Password');

        // Isi email
        $this->email->message("Ini adalah pesan ubah password.<br><br> Klik <strong><a href='".$url."/".$hashmail."/".$hashtgl."' target='_blank' rel='noopener'>disini</a></strong> .");

        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
            echo 'Sukses! email berhasil dikirim.';
        } else {
            echo 'Error! email tidak dapat dikirim.';
        }
	}

	public function sendforgot()
	{
		$e = $this->input->post('email');
		$tgl = date("Y-m-d");
		$cekmail = $this->db->query("SELECT email FROM admin where email='$e';");
		if ($cekmail->num_rows()>0)
		{
			$ceket = $this->db->query("SELECT * FROM admin where email='$e' AND id_active = 1;");
			if($ceket->num_rows()>0)
			{
				$this->sendpassword($e, $tgl);
				$this->db->query("UPDATE `admin` SET `tgl_daftar` = '$tgl' WHERE `admin`.`email` = '$e';");
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Link ubah password sudah terkirim cek emain Anda!</div>');
				redirect('admin/index');	
			}
			else
			{
				$url = base_url();
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email Belum Aktif!
							<form action="'.$url.'/admin/resend_aktivasi" method="post">
							  <input type="email" name="email" value="'.$e.'" hidden><br>
							  <input type="text" name="tgl" value="'.$tgl.'" hidden><br><br>
							  <button type="submit" class="btn btn-primary btn-sm">Send mail</button>
							</form>
							</div>');
	                		redirect('admin/forgot');
			}
		} 
		else 
		{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email tidak terdaftar!</div>');
	            redirect('admin/forgot');
		}
	}

	public function changepassword()
	{
		$password1 = $this->input->post('password1');
		$password2 = $this->input->post('password2');
		$hashemail = $this->input->post('email');
		$hashtgl = $this->input->post('tanggal');
		$hashp	=	md5($password1);
		if ($password1 == $password2)
		{
			$this->db->query("UPDATE `admin` SET `password` = '$hashp' WHERE `admin`.`id_active` = 1;");
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password berhasil diubah!</div>');
	            redirect('admin');
		}
		else
		{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Harus Sama!</div>');
	            redirect('admin/forgot_password/'.$hashemail.'/'.$hashtgl.'');
		}
	}
	public function registration()
	{
		$e = $this->input->post('email');
		$cekmail = $this->db->query("SELECT email FROM admin where email='$e';");
		$cekaktif= $this->db->query("SELECT email FROM admin where email='$e' AND id_active=1;");
		$password1 = $this->input->post('password1');
		$password2 = $this->input->post('password2');
		$tgl = date("Y-m-d");
		if ($password1 == $password2) {
			if ($cekmail->num_rows()>0) 
			{
				if($cekaktif->num_rows()>0)
				{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email Sudah Terdaftar!</div>');
	            redirect('admin/register');
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
	                		redirect('admin/register');
	        	}
			}
			else
			{
				$data = [
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => md5($this->input->post('password1')),
                'id_active' => 0,
                'tgl_daftar' => $tgl,
            	];
	            $this->db->insert('admin', $data);
	            $this->sendmail($e, $tgl);
	            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat Akun Anda Sudah Didaftarkan. Mohon Cek Email Anda</div>');
	            redirect('admin');
			}
		}
		else 
		{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Harus Sama!</div>');
	            redirect('admin/register');
		}
	}


	public function sendmail($e, $tgl)
	{
		$hashtgl = md5($tgl);
		$hashmail = md5($e);
		$url = base_url('admin/aktivasi');
		// Konfigurasi email
        $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_user' => 'ggrecknokolo@gmail.com',  // Email gmail
            'smtp_pass'   => '5466412k',  // Password gmail
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];

        // Load library email dan konfigurasinya
        $this->load->library('email', $config);

        // Email dan nama pengirim
        $this->email->from('$ggrecknokolo@gmail.com', 'Administrasi HMIF');

        // Email penerima
        $this->email->to($e); // Ganti dengan email tujuan

        // Lampiran email, isi dengan url/path file
        $this->email->attach('');

        // Subject email
        $this->email->subject('Aktivasi Email');

        // Isi email
        $this->email->message("Ini adalah pesan aktivasi email.<br><br> Klik <strong><a href='".$url."/".$hashmail."/".$hashtgl."' target='_blank' rel='noopener'>disini</a></strong> .");

        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
            echo 'Sukses! email berhasil dikirim.';
        } else {
            echo 'Error! email tidak dapat dikirim.';
        }
	}

	public function resend_aktivasi()
	{
		$email = $this->input->post('email');
		$tgl = $this->input->post('tgl');
		$hashtgl = md5($tgl);
		$hashmail = md5($email);
		$this->db->query("UPDATE `admin` SET `tgl_daftar` = '$tgl' WHERE `admin`.`email` = '$email';");
		$this->sendmail_login($email, $tgl);
	}

	public function sendmail_login($email, $tgl)
	{
		$hashtgl = md5($tgl);
		$hashmail = md5($email);
		$url = base_url('admin/aktivasi');
		// Konfigurasi email
        $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_user' => 'ggrecknokolo@gmail.com',  // Email gmail
            'smtp_pass'   => '5466412k',  // Password gmail
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];

        // Load library email dan konfigurasinya
        $this->load->library('email', $config);

        // Email dan nama pengirim
        $this->email->from('$ggrecknokolo@gmail.com', 'Administrasi HMIF');

        // Email penerima
        $this->email->to($email); // Ganti dengan email tujuan

        // Lampiran email, isi dengan url/path file
        $this->email->attach('');

        // Subject email
        $this->email->subject('Aktivasi Email');

        // Isi email
        $this->email->message("Ini adalah pesan aktivasi email.<br><br> Klik <strong><a href='".$url."/".$hashmail."/".$hashtgl."' target='_blank' rel='noopener'>disini</a></strong> .");

        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Email <strong>Berhasil dikirim</strong>, silahkan aktivasi.
							</div>');
	                		redirect('admin');
        } else {
            echo 'Error! email tidak dapat dikirim.';
        }
	}

	public function aktivasi()
	{
		$email = $this->uri->segment(3);
		$tgl = $this->uri->segment(4);
		$ceket = $this->db->query("SELECT * FROM admin where md5(email)='$email' AND md5(tgl_daftar)='$tgl';");
		if($ceket->num_rows()>0)
		{
			$this->Model_data->aktivasimail($email, $tgl);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Email <strong>Berhasil diaktivasi</strong>, silahkan login.
							</div>');
	                		redirect('admin');
		}
		else
		{
			echo "data expired";
		}
	}
}