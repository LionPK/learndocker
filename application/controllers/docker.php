<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Docker extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	public function docker()
	{
		$this->load->view('docker');
	}
}