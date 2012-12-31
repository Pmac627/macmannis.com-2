<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Portfolio extends CI_Controller {

/* Index Function */
	function index() {
		$this->load->model('Header_model', 'header');
		$sb_dump = $this->header->switchboard_dump();
		$page_dump = $this->header->page_dump(7);

		$this->load->model('Content_model', 'content');
		$post_dump = $this->content->post_dump(7);

		$this->load->model('Visitor_model', 'visitor');
		$this->visitor->visitor_record();

		$this->load->model('portfolio/Portfolio_model', 'portfolio');
		$portfolio_dump = $this->portfolio->portfolio_dump();
		$this->db->close(); // Kills the database connection

		$this->load->view('header', array('sb_dump' => $sb_dump, 'page_dump' => $page_dump));
		$this->load->view('portfolio/main', array('portfolio_dump' => $portfolio_dump, 'post_dump' => $post_dump));
		$this->load->view('footer');
	}

	function main() {
		$this->load->model('Header_model', 'header');
		$sb_dump = $this->header->switchboard_dump();
		$page_dump = $this->header->page_dump(7);

		$this->load->model('Content_model', 'content');
		$post_dump = $this->content->post_dump(7);

		$this->load->model('Visitor_model', 'visitor');
		$this->visitor->visitor_record();

		$this->load->model('portfolio/Portfolio_model', 'portfolio');
		$portfolio_dump = $this->portfolio->portfolio_dump();
		$this->db->close(); // Kills the database connection

		$this->load->view('header', array('sb_dump' => $sb_dump, 'page_dump' => $page_dump));
		$this->load->view('portfolio/main', array('portfolio_dump' => $portfolio_dump, 'post_dump' => $post_dump));
		$this->load->view('footer');
	}

	
	function details() {
		$this->load->model('Header_model', 'header');
		$sb_dump = $this->header->switchboard_dump();
		$page_dump = $this->header->page_dump(9);

		$this->load->model('Content_model', 'content');
		$post_dump = $this->content->post_dump(9);

		$this->load->model('Visitor_model', 'visitor');
		$this->visitor->visitor_record();

		if($this->uri->segment(3) != NULL) {
			$lookup = $this->uri->segment(3);
			$this->load->model('portfolio/Details_model', 'details');
			$details_dump = $this->details->details_dump($lookup);
		} else {
			$details_dump = "";
		}
		$this->db->close(); // Kills the database connection

		$this->load->view('header', array('sb_dump' => $sb_dump, 'page_dump' => $page_dump));
		$this->load->view('portfolio/details', array('post_dump' => $post_dump, 'details_dump' => $details_dump));
		$this->load->view('footer');
	}
}