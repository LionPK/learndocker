<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diction extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	public function diction()
	{
		$this->load->view('dictionary');
	}
}