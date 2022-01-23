<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}

###submit_file
public function submit_file()
	{
		// $this->load->view('index');
		echo "Uploaded";
	}


}
