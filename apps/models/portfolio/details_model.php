<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Details_model extends CI_Model {

	function __construct() {
		$this->load->database(); // Connects to the database
		parent::__construct();
	}

	function details_dump($p) {
		$this->db->select('portfolio.portfolio_title, content.content_id, content.content_title, content.content_subtitle, content.content_date, content.content_body, detail_type.detail_type_name, detail_type.detail_type_description')->from('portfolio')->join('portfolio_content', 'portfolio_content.portfolio_id = portfolio.portfolio_id', 'inner')->join('content', 'portfolio_content.content_id = content.content_id', 'inner')->join('content_detail', 'content_detail.content_id = content.content_id', 'inner')->join('detail_type', 'detail_type.detail_type_id = content_detail.detail_type_id', 'inner')->like('portfolio.portfolio_title', $p); // Chained query
		$details_query = $this->db->get(); // Run the query
		$details_dump = $details_query->result_array(); // Returns the query results as an array
		$details_query->free_result(); // Clears the database results from memory

		return $details_dump;
	}
}
?>