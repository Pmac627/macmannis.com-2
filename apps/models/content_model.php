<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Content_model extends CI_Model {

	function __construct() {
		$this->load->database(); // Connects to the database
		parent::__construct();
	}

	function post_dump($p) {
		$this->db->select('pages.page_id, content.content_id, content.content_title, content.content_subtitle, content.content_date, content.content_body')->from('pages')->join('page_content', 'pages.page_id = page_content.page_id', 'inner')->join('content', 'page_content.content_id = content.content_id', 'inner')->where('pages.page_id', $p)->where('pages.page_show', '1')->where('content.content_show', '1')->where('content.content_delete', '0')->order_by("content.content_date", "desc")->limit(1); // Chained query
		$post_query = $this->db->get(); // Run the query
		$post_dump = $post_query->result_array(); // Returns the query results as an array
		$post_query->free_result(); // Clears the database results from memory

		return $post_dump;
	}
}
?>