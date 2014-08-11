<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index() {
		$this->load->view('main');
	}

	public function missing() {
		$this->load->view('missing');
	}
}
