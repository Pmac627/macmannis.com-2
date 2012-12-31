<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Visitor_model extends CI_Model {

	function __construct() {
		$this->load->database(); // Connects to the database
		parent::__construct();
	}

	function visitor_record() {
		if(isset($_COOKIE['macmannis-dot-com-visitor'])) {
			// Do nothing
		} else {
			$ipv4 = $ipv6 = ''; // Create ip_var property

			if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
				$ipv4 = $_SERVER['HTTP_CLIENT_IP']; // Adjust ip_var property
			} elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
				$ipv4 = $_SERVER['HTTP_X_FORWARDED_FOR']; // Adjust ip_var property
			} elseif(!empty($_SERVER['REMOTE_ADDR'])) {
				$ipv4 = $_SERVER['REMOTE_ADDR']; // Adjust ip_var property
			} else {
				$ipv4 = 'Unknown'; // Adjust ip_var property
			}

			$ip_query = $this->db->get_where('visitors', array('visitor_ip4' => $ipv4)); // SELECT Query with a WHERE clause
			$ip_dump = $ip_query->row_array(); // Returns the first row of the query results as an array
			$ip_query->free_result(); // Clears the database results from memory

			if($ip_dump != NULL) {
				$visit_total = $ip_dump['visitor_total'];
				$visit_total++;

				// Update Query
				$data = array(
					'visitor_total' => $visit_total
				);
				$this->db->where('visitor_ip4', $ipv4);
				$this->db->update('visitors', $data);
			} else {
				$visit_total = 1;

				// Insert Query
				$data = array(
					'visitor_ip4' => $ipv4 ,
					'visitor_ip6' => $ipv6 ,
					'visitor_total' => $visit_total
				);
				$this->db->insert('visitors', $data);
			}

			setcookie('macmannis-dot-com-visitor', 'Thanks For Visiting', time() + 3600); // 1-hour cookie
		}
	}
}
?>