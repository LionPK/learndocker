<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Install1 extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	public function install1()
	{
		$this->load->view('install1');
	}
}