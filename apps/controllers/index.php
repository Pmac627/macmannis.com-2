<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	function resume() {
		$this->load->helper('url');
		redirect('resume', 'location', 301);
	}

	function demos() {
		$this->load->helper('url');
		redirect('code', 'location', 301);
	}

	function portfolio() {
		$this->load->helper('url');
		redirect('portfolio', 'location', 301);
	}

	function contact() {
		$this->load->helper('url');
		redirect('home/contact', 'location', 301);
	}
}