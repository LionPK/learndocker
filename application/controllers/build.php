<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Build extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	public function build()
	{
		$this->load->view('build');
	}
}