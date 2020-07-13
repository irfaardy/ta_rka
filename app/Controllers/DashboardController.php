<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class DashboardController extends Controller
{
	public function login(){
		return view('auth/login');
	}
	

}
