<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){

        parent::__construct();
        $this->load->model('M_dashboard');
    }
	public function index()
	{
		if($this->session->userdata('login') == '1'){
		$data['praktikan'] = $this->M_dashboard->get_praktikan();
			$this->load->view('include/header',$data);
			$this->load->view('Dashboard');
			$this->load->view('include/footer');
		}
		else{
			redirect('Login','refresh');
		}
	}

	public function ubah($id){
		$data['praktikan'] = $this->M_dashboard->get_selected_praktikan($id);
		$this->load->view('include/header',$data);
		$this->load->view('Ubah');
		$this->load->view('include/footer');
	}

	public function tambah_praktikan(){
		$this->load->view('include/header');
			$this->load->view('Tambah_praktikan');
			$this->load->view('include/footer');
	}
	public function tambah_praktikan_submit(){
		$this->M_dashboard->tambah_praktik();
	}
	public function delete_data($id){
		$this->M_dashboard->hapus_data($id);
	}
	public function submit_ubah(){
		$this->M_dashboard->submit_edit();
	}

	}
	