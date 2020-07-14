<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->auth->protect();
	}
	public function index()
	{
		$user = $this->user->getAll();
		$this->load->template('kelola_user/index',['title' => 'Kelola User','user' => $user]);
	}

	public function create()
	{
		
		$this->load->template('kelola_user/form',['title' => 'Tambah User','url' => base_url('user/simpan')]);
	}
	public function edit()
	{
		$user = $this->user->getBy(['id' => $this->input->get('id')]);
		if(empty($user)){
			$this->session->set_flashdata('fail','User tidak ditemukan.');
			return redirect(base_url('/users'));
		}
		$this->load->template('kelola_user/form',['user' => $user,'title' => 'Update User','url' => base_url('user/update')]);
	}

	public function update()
	{	
		$user = $this->user->getBy(['id' => $this->input->post('id')]);
		if(empty($user)){
			$this->session->set_flashdata('fail','User tidak ditemukan.');
			return redirect(base_url('/users'));
		}
		$this->user->update(['id' => $this->input->post('id')]);
		$this->session->set_flashdata('success','Sukses menyimpan data.');
		return redirect(base_url('/users'));
	}
	public function save()
	{
		if($this->user->create()){
			$this->session->set_flashdata('success','Berhasil Menambahkan data user.');

			return redirect(base_url('/users'));
		} else{
			$this->session->set_flashdata('fail','Gagal menambahkan data user.');
			return redirect(base_url('/users/tambah'));
		}
	}
	
}
