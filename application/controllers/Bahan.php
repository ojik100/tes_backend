<?php

class Bahan extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('M_Bahan');
		$this->load->model('M_kategori');
 
	}
	public function index()
	{
		$data['bahan'] = $this->M_Bahan->tampil_data()->result();
		$this->load->view('admin/bahan/index',$data);
	}
	function delete($id){
		$where = array('id' => $id);
		$this->M_Bahan->hapus_data($where,'bahan_makanan');
		redirect('Bahan/index');
	}

	public function add()
	{
		$data['kategori'] = $this->M_kategori->tampil_data()->result();
		$this->load->view('admin/bahan/add',$data);
	}
	public function store()
	{
		$id_kategori = $this->input->post('id_kategori');
		$nama_bahan = $this->input->post('nama_bahan');
	
		$data = array(
			'id_kategori' => $id_kategori,
			'nama_bahan' => $nama_bahan,
			);
		$this->M_Bahan->input_data($data,'bahan_makanan');
		redirect('Bahan/index');
	
	}
}
