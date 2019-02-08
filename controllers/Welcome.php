<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}
	

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function coba()
	{
		$data['kiriman'] = array(1,2,3,4,5);
		$this->load->view('coba', $data);
	}

	public function test(){
		$this->load->view('hasil');
	}

	public function kalkulator(){

		$input = $this->input->post('operasi');

		if ($input == "tambah") {
			$angka1 = $this->input->post('angka1');
			$angka2 = $this->input->post('angka2');
			$hasil = $angka1 + $angka2;
			$data['hasil'] = $hasil;
		}elseif ($input == "kurang") {
			$angka1 = $this->input->post('angka1');
			$angka2 = $this->input->post('angka2');
			$hasil = $angka1 - $angka2;
			$data['hasil'] = $hasil;
		}elseif ($input == "bagi") {
			$angka1 = $this->input->post('angka1');
			$angka2 = $this->input->post('angka2');
			$hasil = $angka1 / $angka2;
			$data['hasil'] = $hasil;
		}elseif ($input == "kali") {
			$angka1 = $this->input->post('angka1');
			$angka2 = $this->input->post('angka2');
			$hasil = $angka1 * $angka2;
			$data['hasil'] = $hasil;
		}

		$this->load->view('hasil', $data);

	}

	public function login(){

		$this->load->view('login');

	}

	public function cek(){
		$user = array(
			array('username' => 'ikhsan', 'password' => '123'),
			array('username' => 'herdi', 'password' => '321'),
			array('username' => 'qwerty', 'password' => '221')
		);

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		

		for ($i=0; $i <= count($user) ; $i++) {
			if ($user[$i]['username'] == $username && $user[$i]['password'] == $password){
				$_SESSION['user'] = $user;
				redirect('/Welcome/home','refresh');
			}
		}redirect('/Welcome/login','refresh');
	}

	public function home(){
		$this->load->view('badan');
		$this->load->view('logout');
	}

	public function logout(){
		$this->session->sess_destroy();
		$this->load->view('login');
			
	}

 }
