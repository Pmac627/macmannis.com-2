<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Portfolio extends CI_Controller {

/* Index Function */
	function index() {
		$this->load->model('Header_model', 'header');
		$sb_dump = $this->header->switchboard_dump();
		$portfolio_dropdown = $this->header->portfolio_dropdown();

		$this->db->close(); // Kills the database connection

		$this->load->view('header', array('sb_dump' => $sb_dump, 'portfolio_dropdown' => $portfolio_dropdown));
		$this->load->view('portfolio/main');
		$this->load->view('footer');
	}

	function main() {
		$this->load->model('Header_model', 'header');
		$sb_dump = $this->header->switchboard_dump();
		$portfolio_dropdown = $this->header->portfolio_dropdown();

		$this->db->close(); // Kills the database connection

		$this->load->view('header', array('sb_dump' => $sb_dump, 'portfolio_dropdown' => $portfolio_dropdown));
		$this->load->view('portfolio/main');
		$this->load->view('footer');
	}
}