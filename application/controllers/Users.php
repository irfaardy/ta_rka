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
		$user = $this->check_user();
		$this->load->template('kelola_user/form',['user' => $user,'title' => 'Update User','url' => base_url('user/update')]);
	}

	public function update()
	{	
		$this->check_user();

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


	public function delete()
	{	
		$this->check_user();
		$this->user->delete(['id' => $this->input->post('id')]);
		$this->session->set_flashdata('success','Sukses menghapus data.');
		return redirect(base_url('/users'));
	}

	private function check_user(){
		$input = empty($this->input->post('id')) ?$this->input->get('id'):$this->input->post('id');
		$user = $this->user->getBy(['id' => $input ]);
		if(empty($user)){
			$this->session->set_flashdata('fail','User tidak ditemukan.');
			return redirect(base_url('/users'));
		} 
		return $user;
	}

}
