<?php 
/**
 * Auth Library
 * @author	Irfa Ardiasnyah
 * @link	https://github.com/irfaardy
 * @version	1.0.0
 */
class Auth{
	
	private $CI;

	function __construct(){
		$this->CI = & get_instance();
	}
	/**
     * Cek username dan password, jika password yang diinputkan sama dengan di database sama maka login sukses.
     *
     * @param string $username
     * @param string $password
     * @return boolean
     */
	public function verify($username,$password){
		$get = $this->CI->user->getBy(['username' => $username]);
		if(password_verify($password, $get->password)) {
			$user_datas = array(
			        'user_id'  => $get->id,
			        'logged_in' => TRUE
			);
			$this->CI->session->sess_regenerate();
			$this->CI->session->set_userdata($user_datas);

			return true;
		} else {
			return false;
		}
	}
	/**
     * Cek sudah login apa belum.
     *
     * @return boolean
     */
	public function check(){
		if($this->CI->session->logged_in) {
			return true;
		} 

		return false;
	}

	/**
     * Ambil data user sesuai dengan id yang login.
     *
     * @return mixed
     */
	public function user(){
		if($this->check()) {
			$get = $this->CI->user->getBy(['id' => $this->CI->session->user_id]);
			return $get;
		}

		return false;
	}

	/**
     * Keluar dari sesi.
     *
     * @return void
     */
	public function logout(){
		$this->CI->session->sess_regenerate(TRUE);
		$this->CI->session->sess_destroy();
		return redirect(base_url('login'));
	}

	/** 
	* Mencegah guest untuk mengakses halaman
	* @return void
	*/
	public function protect(){
		if(!$this->check()){
			$this->logout();
		}
	}
}