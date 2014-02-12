<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class OlayController extends CI_Controller {

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
		$data["title"] = 'Anasayfa - Takvim';
		$this->load->view('header',$data);
	}

	public function goster($id = null){

		$data["title"] = 'Göster - Takvim';
		$this->load->view('header',$data);

		$data['olay'] = $this->olaymodel->goster($id);

		$this->load->view('goster',$data);
		$this->load->view('footer');
	}

	/*public function hepsi(){
		$data["title"] = 'Hepsi - Takvim';
		$this->load->view('header',$data);

		$data['olay'] = $this->olaymodel->hepsi();

		$this->load->view('hepsi',$data);
		$this->load->view('footer');
	}*/
	
	public function hepsi($offset = 0){
		$data["title"] = 'Hepsi - Takvim';
		$this->load->view('header',$data);
		
		$limit = 15;
		
		$this->load->model('olaymodel');
		
		$results = $this->olaymodel->search($limit, $offset);
		
		$data['olay'] = $results['rows'];
		$data['num_results'] = $results['num_rows'];
		
		// pagination
		$this->load->library('pagination');
		
		$config = array();
		$config['base_url'] = site_url('olaycontroller/hepsi');
		$config['total_rows'] = $data['num_results'];
		$config['per_page'] = $limit;
		$config['uri_segment'] = 3;
		$this->pagination->initialize($config);
		
		$data['pagination'] = $this->pagination->create_links();
		
		$this->load->view('hepsi',$data);
		$this->load->view('footer');
	}

	public function ekle(){
		$data["title"] = 'Ekle - Takvim';
		$this->load->view('header',$data);

		$this->load->view('ekle');
		$this->load->view('footer');

		$olay = $this->input->post("olay",TRUE);
		$this->olaymodel->ekle($olay);
	}

	public function sil($id = null){
		$data["title"] = 'Sil - Takvim';
		$this->load->view('header',$data);

		$this->olaymodel->sil($id);

		$this->load->view('sil');
		$this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */