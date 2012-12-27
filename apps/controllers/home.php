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

	function contact() {
		$this->load->model('Header_model', 'header');
		$sb_dump = $this->header->switchboard_dump();
		$portfolio_dropdown = $this->header->portfolio_dropdown();

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		$this->db->close(); // Kills the database connection

		$this->load->view('header', array('sb_dump' => $sb_dump, 'portfolio_dropdown' => $portfolio_dropdown));
		$this->load->view('home/contact');
		$this->load->view('footer');
	}

	function contactprocess() {
		$this->load->model('Header_model', 'header');
		$sb_dump = $this->header->switchboard_dump();
		$portfolio_dropdown = $this->header->portfolio_dropdown();

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		$this->form_validation->set_rules('contact_ipv4', 'IPv4', 'valid_ip[IPv4]');
		$this->form_validation->set_rules('contact_name', 'Full Name', 'required|min_length[3]|max_length[60]|xss_clean');
		$this->form_validation->set_rules('contact_email', 'Email', 'required|valid_email|min_length[3]|max_length[60]|xss_clean');
		$this->form_validation->set_rules('contact_message', 'Message', 'required|min_length[3]|max_length[1000]|xss_clean');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('header', array('sb_dump' => $sb_dump, 'portfolio_dropdown' => $portfolio_dropdown));
			$this->load->view('home/contact');
			$this->load->view('footer');
		} else {
			// $this->db->close(); // Kills the database connection
			$mail_to = "Patrick MacMannis <pat.macmannis@gmail.com>"; // Create mail_to variable
			$mail_subject = "MacMannis.com Contact Form"; // Create mail_subject variable
			$mail_message = wordwrap("NEW MESSAGE:<br><br><strong>Date:</strong> " . date("m-d-Y") . "<br><strong>IPv4:</strong> " . $_POST['contact_ipv4'] . "<br><strong>Name:</strong> " . $_POST['contact_name'] . "<br><strong>Email:</strong> " . $_POST['contact_email'] . "<br><strong>Message:</strong><br>" . $_POST['contact_message'], 70); // Create mail_message variable
			$mail_headers = 'From: no_reply@macmannis.com' . "\r\n" .
				'Reply-To: no_reply@macmannis.com' . "\r\n" .
				'MIME-Version: 1.0' . "\r\n" .
				'Content-type: text/html; charset=UTF-8' . "\r\n" .
				'X-Mailer: PHP/' . phpversion(); // Create mail_headers variable
			mail($mail_to, $mail_subject, $mail_message, $mail_headers); // Mail object

			$this->load->view('header', array('sb_dump' => $sb_dump, 'portfolio_dropdown' => $portfolio_dropdown));
			$this->load->view('home/contactsuccess');
			$this->load->view('footer');
		}
	}

	function contactsuccess() {
		$this->load->model('Header_model', 'header');
		$sb_dump = $this->header->switchboard_dump();
		$portfolio_dropdown = $this->header->portfolio_dropdown();

		$this->db->close(); // Kills the database connection

		$this->load->view('header', array('sb_dump' => $sb_dump, 'portfolio_dropdown' => $portfolio_dropdown));
		$this->load->view('home/contactsuccess');
		$this->load->view('footer');
	}

	function contactfailed() {
		$this->load->model('Header_model', 'header');
		$sb_dump = $this->header->switchboard_dump();
		$portfolio_dropdown = $this->header->portfolio_dropdown();

		$this->db->close(); // Kills the database connection

		$this->load->view('header', array('sb_dump' => $sb_dump, 'portfolio_dropdown' => $portfolio_dropdown));
		$this->load->view('home/contactfailed');
		$this->load->view('footer');
	}
}