<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		if($this->auth->check()){
			return redirect(base_url('/'));
		}
		$this->load->loginTemplate('auth/form');
	}
	public function auth(){
		$verify = $this->auth->verify($this->input->post('username', TRUE), $this->input->post('password'));
		if($verify){
			redirect(base_url('/'));
		} else{
			$this->session->set_flashdata('fail','Username atau password salah.');
			redirect(base_url('login'));
		}
	}

	public function logout(){
		$this->auth->logout();
	}
}
