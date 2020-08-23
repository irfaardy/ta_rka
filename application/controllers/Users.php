<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->auth->protect(5);
	}
	public function index()
	{
		$user = $this->user->getAll();
		$this->load->template('kelola_user/index',['title' => 'Kelola User','user' => $user]);
	}

	public function create()
	{
		$daftar_jurusan = $this->jurusan->getAll();
		$this->load->template('kelola_user/form',['title' => 'Tambah User','url' => base_url('user/simpan'), 'user' => null, 'daftar_jurusan' => $daftar_jurusan]);
	}
	public function edit()
	{
		$daftar_jurusan = $this->jurusan->getAll();
		$user = $this->check_user();
		$this->load->template('kelola_user/form',['user' => $user,'title' => 'Ubah User','url' => base_url('user/update'), 'daftar_jurusan' => $daftar_jurusan]);
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


	public function delete($id)
	{
		$this->check_user($id);
		$this->user->delete(['id' => $id]);
		$this->session->set_flashdata('success','Sukses menghapus data.');
		return redirect(base_url('/users'));
	}

	private function check_user($id=null){
		if($id == null){
			$input = empty($this->input->post('id')) ?$this->input->get('id'):$this->input->post('id');
		} else{
			$input = $id;
		}

		$user = $this->user->getBy(['id' => $input ]);
		if(empty($user)){
			$this->session->set_flashdata('fail','User tidak ditemukan.');
			return redirect(base_url('/users'));
		}
		return $user;
	}

}
