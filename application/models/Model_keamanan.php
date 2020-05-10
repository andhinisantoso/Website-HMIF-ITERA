<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_keamanan extends CI_model {
	public function getkeamananadmin()
	{
		$email = $this->session->userdata('email');
		if (empty($email)) 
		{
			$this->session->sess_destroy();
			redirect('admin');
		}
	}
}