<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	
	public function __construct()
	{
			parent::__construct();
			$this->load->model('data');
	}
	public function index()
	{
		$this->load->view('login');
	}
	public function regis(){
		$this->load->view('regis');
	}
	public function login(){
		$nama = $_POST['name'];
		$pass = $_POST['password'];

		$data = $this->data->viewuser();
		foreach($data as $a){
			if ($nama == $a['nama'] && $pass == $a['password']){
				redirect(base_url('index.php/welcome/home'));
				break;
				
			}
			else if($nama == 'admin' && $pass == 'admin'){
				redirect(base_url('index.php/welcome/admin'));
				break;
			}	
		}
		
		$this->load->view('login');
		echo "<script>
     alert('maaf username atau password anda salah');
   </script>";	

	}
	public function home(){
		$this->load->view('far');
	}
	public function admin(){
		$data1['datauser'] = $this->data->viewuser();
		$data2['dataorder'] = $this->data->vieworder();
		
		$this->load->view('admin',$data1);
		$this->load->view('admin2',$data2);
	}
	public function order(){
		$this->load->view('order');
	}
	public function edituser(){
		$id = $_GET['id'];
		$data['data'] =$this->data->add_user($id);
		$this->load->view('edituser',$data);
	}
	public function updateuser(){
		$no = $_POST['nomor'];
		$name = $_POST['name'];
		$pass = $_POST['password'];

		$this->data->update_user($no, $name, $pass);
		redirect(base_url('index.php/welcome/admin'));

	}
	public function deleteuser(){
		$id = $_GET['id'];
		$this->data->delete_user($id);
		redirect(base_url('index.php/welcome/admin'));
	}
	public function editorder(){
		$id = $_GET['id'];
		$data['data'] =$this->data->add_order($id);
		$this->load->view('editorder',$data);
	}
	public function updateorder(){
		$no = $_POST['no'];
		$merek = $_POST['merek'];
		$ukuran = $_POST['ukuran'];
		$alamat = $_POST['alamat'];


		$this->data->update_order($no, $merek, $ukuran ,$alamat);
		redirect(base_url('index.php/welcome/admin'));

	}
	public function deleteorder(){
		$id = $_GET['id'];
		$this->data->delete_order($id);
		redirect(base_url('index.php/welcome/admin'));
	}
	public function addregis(){
		$name = $_POST['name'];
		$pass = $_POST['password'];
		$this->data->insert_user($name, $pass);
		redirect(base_url('index.php/welcome'));
	}
	public function addorder(){
		$merek = $_POST['merek'];
		$ukuran = $_POST['ukuran'];
		$alamat = $_POST['alamat'];
		$this->data->insert_order($merek, $ukuran, $alamat);
		$this->load->view('far');	
	}
}
