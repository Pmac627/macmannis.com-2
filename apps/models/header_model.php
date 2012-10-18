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

	function portfolio_dropdown() {
		$this->db->select('portfolio_title, portfolio_subtitle, portfolio_url')->from('portfolio')->where('portfolio_live', '1')->where('portfolio_show', '1')->where('portfolio_list', '1')->where('portfolio_delete', '0'); // Chained query
		$portfolio_query = $this->db->get(); // Run the query
		$portfolio_dropdown = $portfolio_query->result_array(); // Returns the query results as an array
		$portfolio_query->free_result(); // Clears the database results from memory

		return $portfolio_dropdown;
	}
}
?>