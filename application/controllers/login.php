<?php

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_login');

	}

	function index(){
		$data['status'] = "trying";
		$this->load->view('v_login',$data);
	}

  function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
    $prodi = $this->input->post('prodi');

		if($prodi == 'Pilih ...'){
			$this->session->set_flashdata('error', "<center><strong>Gagal Login!</strong> Prodi belum dipilih.</center>");
			redirect(base_url('index.php/login'));
		}

		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->m_login->cek_login("admin",$where)->num_rows();
		if($cek > 0){


			$data_session = array(
				'nama' => $username,
				'status' => "login",
        'prodi' => $prodi
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("index.php/admin"));

		}else{
			$this->session->set_flashdata('error', "<center><strong>Gagal Login!</strong> Username / Password yang anda masukkan salah.</center>");
			redirect(base_url('index.php/login'));
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/login'));
	}


}
