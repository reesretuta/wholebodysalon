<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{	
		// if (isset($_GET['pass'] ) && $_GET['pass'] == '1') {
		// 	$this->landing();
		// }else{
		// 	$this->splash();
		// }
		$this->landing();
	}
	
	public function splash(){
		$this->load->view('splash');
	}
	
	public function landing(){
		$data['content'] = $this->load->view('index',false,true);
		$this->load->view('shell',$data);
	}
	
	public function about(){
		$data['content'] = $this->load->view('about',false,true);
		$this->load->view('shell',$data);
	}
	
	public function contact(){
		$data['content'] = $this->load->view('contact',false,true);
		$this->load->view('shell',$data);
	}
	
	public function sanitation(){
		$data['content'] = $this->load->view('sanitation',false,true);
		$this->load->view('shell',$data);
	}
	
	public function partypackages(){
		$data['content'] = $this->load->view('partypackages',false,true);
		$this->load->view('shell',$data);
	}
	
	public function products(){
		$data['content'] = $this->load->view('products',false,true);
		$this->load->view('shell',$data);
	}
	
	public function email(){
		$this->load->database();
		$data = array('email' => $_GET['email']);
		$this->db->insert('emails', $data); 
		echo 'Thank You!';
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */