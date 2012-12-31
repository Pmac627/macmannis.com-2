<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Contact_model extends CI_Model {

	function __construct() {
		$this->load->database(); // Connects to the database
		parent::__construct();
	}

	function contact_process($ipv4, $fullname, $email, $message) {
		$ipv6 = ''; // Create ipv6 property

		$ip_query = $this->db->get_where('visitors', array('visitor_ip4' => $ipv4)); // SELECT Query with a WHERE clause
		$ip_dump = $ip_query->row_array(); // Returns the first row of the query results as an array
		$ip_query->free_result(); // Clears the database results from memory

		if($ip_dump != NULL) {
			$visitor_id = $ip_dump['visitor_id'];
		} else {
			$visitor_id = 0;
		}

		// Insert Query
		$data = array(
			'contact_fullname' => $fullname,
			'contact_email' => $email,
			'contact_message' => $message
		);
		$this->db->insert('contact', $data);

		$contact_id = $this->db->insert_id(); // Grab the inserted contact_id

		// Insert Query
		$data = array(
			'visitor_id' => $visitor_id,
			'contact_id' => $contact_id
		);
		$this->db->insert('visitor_contact', $data);
	}
}
?>