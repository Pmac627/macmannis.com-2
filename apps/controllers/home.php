<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

/* Index Function */
	function index() {
		$this->load->model('Header_model', 'header');
		$sb_dump = $this->header->switchboard_dump();
		$portfolio_dropdown = $this->header->portfolio_dropdown();

		$this->load->model('home/Welcome_model', 'welcome');
		$slide_dump = $this->welcome->slide_dump();

		$this->db->close(); // Kills the database connection

		$this->load->view('header', array('sb_dump' => $sb_dump, 'portfolio_dropdown' => $portfolio_dropdown));
		$this->load->view('home/welcome', array('slide_array' => $slide_dump));
		$this->load->view('footer');
	}

	function about() {
		$this->load->model('Header_model', 'header');
		$sb_dump = $this->header->switchboard_dump();
		$portfolio_dropdown = $this->header->portfolio_dropdown();

		$this->db->close(); // Kills the database connection

		$this->load->view('header', array('sb_dump' => $sb_dump, 'portfolio_dropdown' => $portfolio_dropdown));
		$this->load->view('home/about');
		$this->load->view('footer');
	}

	function contact() {
		$this->load->model('Header_model', 'header');
		$sb_dump = $this->header->switchboard_dump();
		$portfolio_dropdown = $this->header->portfolio_dropdown();

		$this->db->close(); // Kills the database connection

		$this->load->view('header', array('sb_dump' => $sb_dump, 'portfolio_dropdown' => $portfolio_dropdown));
		$this->load->view('home/contact');
		$this->load->view('footer');
	}
}