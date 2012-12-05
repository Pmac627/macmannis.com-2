<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Code extends CI_Controller {

/* Index Function */
	function index() {
		$this->load->model('Header_model', 'header');
		$sb_dump = $this->header->switchboard_dump();
		$portfolio_dropdown = $this->header->portfolio_dropdown();

		$this->db->close(); // Kills the database connection

		$this->load->library('github_lib');
		$username = "Pmac627";
		$results = $this->github_lib->user_info($username);

		$this->load->view('header', array('sb_dump' => $sb_dump, 'portfolio_dropdown' => $portfolio_dropdown));
		$this->load->view('code/main', array('results' => $results));
		$this->load->view('footer');
	}

	function main() {
		$this->load->model('Header_model', 'header');
		$sb_dump = $this->header->switchboard_dump();
		$portfolio_dropdown = $this->header->portfolio_dropdown();

		$this->db->close(); // Kills the database connection

		$this->load->library('github_lib');
		$username = "Pmac627";
		$results = $this->github_lib->user_info($username);

		$this->load->view('header', array('sb_dump' => $sb_dump, 'portfolio_dropdown' => $portfolio_dropdown));
		$this->load->view('code/main', array('results' => $results));
		$this->load->view('footer');
	}
}