<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class api extends REST_Controller {
	// function __construct(){
	// 	parent::__construct();	
    // }
    function __construct($config = 'rest') {
        parent::__construct($config);
      
    }

    //Menampilkan data kategori
    function index_get() {
        $id = $this->get('id');
        if ($id == '') {
            $kategori = $this->db->get('kategori_makanan')->result();
        } else {
            $this->db->where('id', $id);
            $kategori = $this->db->get('kategori_makanan')->result();
        }
        $this->response($kategori, 200);
    }


    //Masukan function selanjutnya disini
}
?>