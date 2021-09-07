<?php

class doc_api extends CI_Controller {

	function __construct(){
		parent::__construct();		
	
 
	}
	public function index()
	{
	
		$this->load->view('admin/doc_api');
	}
}