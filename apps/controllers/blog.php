<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

/* Index Function */
	function index() {
		$this->load->model('Header_model', 'header');
		$sb_dump = $this->header->switchboard_dump();
		$page_dump = $this->header->page_dump(6);

		$this->load->model('Content_model', 'content');
		$post_dump = $this->content->post_dump(6);

		$this->load->model('Visitor_model', 'visitor');
		$this->visitor->visitor_record();

		$this->db->close(); // Kills the database connection

		$this->load->view('header', array('sb_dump' => $sb_dump, 'page_dump' => $page_dump));
		$this->load->view('blog/main', array('post_dump' => $post_dump));
		$this->load->view('footer');
	}

	function main() {
		$this->load->model('Header_model', 'header');
		$sb_dump = $this->header->switchboard_dump();
		$page_dump = $this->header->page_dump(6);

		$this->load->model('Content_model', 'content');
		$post_dump = $this->content->post_dump(6);

		$this->load->model('Visitor_model', 'visitor');
		$this->visitor->visitor_record();

		$this->db->close(); // Kills the database connection

		$this->load->view('header', array('sb_dump' => $sb_dump, 'page_dump' => $page_dump));
		$this->load->view('blog/main', array('post_dump' => $post_dump));
		$this->load->view('footer');
	}
}