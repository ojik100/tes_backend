<?php

class Kategori extends CI_Controller {


	function __construct(){
		parent::__construct();		
		$this->load->model('M_kategori');
	
 
	}
	public function index()
	{
		$data['kategori'] = $this->M_kategori->tampil_data()->result();
		$this->load->view('admin/kategori/index',$data);
	}
	public function add()
	{
		$this->load->view('admin/kategori/add');
	}
	public function store()
	{
		$kategori = $this->input->post('kategori');
	
		$data = array(
			'kategori' => $kategori,
			);
		$this->M_kategori->input_data($data,'kategori_makanan');
		redirect('Kategori/index');
	
	}
	function edit($id){
		$where = array('id' => $id);
		$data['kategori'] = $this->M_kategori->edit_data($where,'kategori_makanan')->result();
		$this->load->view('admin/kategori/edit',$data);
	}
	function delete($id){
		$where = array('id' => $id);
		$this->M_kategori->hapus_data($where,'kategori_makanan');
		redirect('Kategori/index');
	}

	function update(){
		$id = $this->input->post('id');
		$kategori = $this->input->post('kategori');
	 
		$data = array(
			'kategori' => $kategori,
			
		);
	 
		$where = array(
			'id' => $id
		);
	 
		$this->M_kategori->update_data($where,$data,'kategori_makanan');
		redirect('Kategori/index');
	}

}

