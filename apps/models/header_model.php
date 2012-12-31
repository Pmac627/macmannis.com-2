<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Header_model extends CI_Model {

	function __construct() {
		$this->load->database(); // Connects to the database
		parent::__construct();
	}

	function switchboard_dump() {
		$sb_query = $this->db->get_where('switchboard', array('sb_site' => '1')); // SELECT Query with a WHERE clause
		$sb_dump = $sb_query->row_array(); // Returns the first row of the query results as an array
		$sb_query->free_result(); // Clears the database results from memory

		return $sb_dump;
	}

	function page_dump($p) {
		$page_query = $this->db->get_where('pages', array('page_id' => $p)); // SELECT Query with a WHERE clause
		$page_dump = $page_query->row_array(); // Returns the first row of the query results as an array
		$page_query->free_result(); // Clears the database results from memory

		return $page_dump;
	}
}
?>