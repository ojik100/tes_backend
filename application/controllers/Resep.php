<?php

class Resep extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('M_Bahan');
		$this->load->model('M_Resep');
 
	}
	public function index()
	{
		$data['resep'] = $this->M_Resep->tampil_data()->result();
		$this->load->view('admin/resep/index',$data);
	}
	public function add()
	{
		$data['bahan'] = $this->M_Bahan->tampil_data()->result();
		$this->load->view('admin/resep/add',$data);
	}
	public function store()
	{
		$id_bahan = $this->input->post('id_bahan');
		$nama_makanan = $this->input->post('nama_makanan');
	
		$data = array(
			'id_bahan' => $id_bahan,
			'nama_makanan' => $nama_makanan,
			);
		$this->M_Resep->input_data($data,'resep_makanan');
		redirect('Resep/index');
	
	}
	function update(){
		$id = $this->input->post('id');
		$id_bahan = $this->input->post('id_bahan');
		$nama_makanan = $this->input->post('nama_makanan');
	 
		$data = array(
			'id_bahan' => $id_bahan,
			'nama_makanan' => $nama_makanan,
			
		);
	 
		$where = array(
			'id' => $id
		);
	 
		$this->M_Resep->update_data($where,$data,'resep_makanan');
		redirect('Resep/index');
	}
	function delete($id){
		$where = array('id','id_bahan' => $id);
		$this->M_Resep->hapus_data($where,'resep_makanan');
		redirect('Resep/index');
	}
	function edit($id){
		$where = array('id','id_bahan' => $id);
		$data['bahan'] = $this->M_Bahan->tampil_data()->result();
		$data['resep'] = $this->M_Resep->edit_data($where,'resep_makanan')->result();
		$this->load->view('admin/resep/edit',$data);
	}
	
}
