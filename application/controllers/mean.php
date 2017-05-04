<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mean extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	public function mean()
	{
		$this->load->view('meaning');
	}
}