<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Portfolio_model extends CI_Model {

	function __construct() {
		$this->load->database(); // Connects to the database
		parent::__construct();
	}

	function portfolio_dump() {
		$this->db->select('portfolio_id, portfolio_title, portfolio_subtitle, portfolio_url, portfolio_description, portfolio_image')->from('portfolio')->where('portfolio_live', '1')->where('portfolio_show', '1')->where('portfolio_delete', '0'); // Chained query
		$portfolio_query = $this->db->get(); // Run the query
		$portfolio_dump = $portfolio_query->result_array(); // Returns the query results as an array
		$portfolio_query->free_result(); // Clears the database results from memory

		return $portfolio_dump;
	}
}
?>