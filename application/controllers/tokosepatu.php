<?php
class tokosepatu extends CI_Controller
{
	public function __construct()
	{
		parent ::__construct();
		$this->load->model('ModelTokoSepatu');
	}
	
	public function index()
	{
		$this->load->view('input_tokosepatu');
	}
	
	public function cetak()
	{
		$this->form_validation->set_rules('nama', 'Nama_Pembeli'),
		'required|min_lenght[3]' ,[
			'required' => 'Nama Pembeli Harus Diisi'
		]);
		$this->form_validation->set_rules('nohp', 'No HP'),
		'required|min_lenght[3]' ,[
			'required' => 'No HP Harus Diisi'
		]);
		if ($this->form_validation->run() != true){
			$this->load->view('input_tokosepatu');
		}else{
			
		
		$data = [
			'nama' => $this->input->post('nama'),
			'nohp' => $this->input->post('nohp'),
			'merk' => $this->input->post('merk'),
			'ukuran' => $this->input->post('ukuran')
			'harga' => $this->ModelTokoSepatu->proses($this->input->post('merk'))
		];
		
		$this->load->view('output_tokosepatu', $data);
		}
	}
}