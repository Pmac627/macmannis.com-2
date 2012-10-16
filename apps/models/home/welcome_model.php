<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Welcome_model extends CI_Model {

	function __construct() {
		$this->load->database(); // Connects to the database
		parent::__construct();
	}

	function slide_dump() {
		$this->db->select('slide_name, slide_small_url, slide_large_url')->from('home_slides')->where('slide_show', '1')->where('slide_delete', '0'); // Chained query
		$slide_query = $this->db->get(); // Run the query
		$slide_dump = $slide_query->result_array(); // Returns the query results as an array
		$slide_query->free_result(); // Clears the database results from memory

		return $slide_dump;
	}
}
?>