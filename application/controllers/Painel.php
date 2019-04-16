<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Painel extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		
		$this->load->helper('url');
		$this->load->model('painel_model');
	}
		
	public function index()
	{
		$this->load->view('painel/frontend/html-header');
		$this->load->view('painel/frontend/header_login');
		$this->load->view('painel/login/login');
		$this->load->view('painel/frontend/footer');
		$this->load->view('painel/frontend/html-footer');
	}


	//Noticias

	public function ver_noticias()
	{
		$this->load->view('painel/frontend/html-header');
		$this->load->view('painel/frontend/header');
		$this->load->view('painel/frontend/menu');
		$this->load->view('painel/noticias/ver_noticias');
		$this->load->view('painel/frontend/footer');
		$this->load->view('painel/frontend/html-footer');
	}

	public function inserir_noticias()
	{
		$this->load->view('painel/frontend/html-header');
		$this->load->view('painel/frontend/header');
		$this->load->view('painel/frontend/menu');
		$this->load->view('painel/noticias/inserir_noticias');
		$this->load->view('painel/frontend/footer');
		$this->load->view('painel/frontend/html-footer');
	}

	//Cursos

	public function ver_cursos()
	{
		$this->load->view('painel/frontend/html-header');
		$this->load->view('painel/frontend/header');
		$this->load->view('painel/frontend/menu');
		$this->load->view('painel/cursos/ver_cursos');
		$this->load->view('painel/frontend/footer');
		$this->load->view('painel/frontend/html-footer');
	}

	public function inserir_cursos()
	{
		$this->load->view('painel/frontend/html-header');
		$this->load->view('painel/frontend/header');
		$this->load->view('painel/frontend/menu');
		$this->load->view('painel/cursos/inserir_cursos');
		$this->load->view('painel/frontend/footer');
		$this->load->view('painel/frontend/html-footer');
	}

	//Cursos

	public function ver_caravanistas()
	{
		$this->load->view('painel/frontend/html-header');
		$this->load->view('painel/frontend/header');
		$this->load->view('painel/frontend/menu');
		$this->load->view('painel/caravanistas/ver_caravanistas');
		$this->load->view('painel/frontend/footer');
		$this->load->view('painel/frontend/html-footer');
	}

	public function inserir_caravanistas()
	{
		$this->load->view('painel/frontend/html-header');
		$this->load->view('painel/frontend/header');
		$this->load->view('painel/frontend/menu');
		$this->load->view('painel/caravanistas/inserir_caravanistas');
		$this->load->view('painel/frontend/footer');
		$this->load->view('painel/frontend/html-footer');
	}

	//Cursos

	public function ver_expositores()
	{
		$sheet=$this->painel_model->get_data('expositores');

		$this->load->view('painel/frontend/html-header');
		$this->load->view('painel/frontend/header');
		$this->load->view('painel/frontend/menu');
		$this->load->view('painel/expositores/ver_expositores',$sheet);
		$this->load->view('painel/frontend/footer');
		$this->load->view('painel/frontend/html-footer');
	}

	public function inserir_expositores()
	{
		$this->load->view('painel/frontend/html-header');
		$this->load->view('painel/frontend/header');
		$this->load->view('painel/frontend/menu');
		$this->load->view('painel/expositores/inserir_expositores');
		$this->load->view('painel/frontend/footer');
		$this->load->view('painel/frontend/html-footer');
	}


	public function upload_file(){
		if($_FILES['caravanas']['name'] != ""){

            $path='./import_json/';
            
            $config = array(
                 'upload_path'   => $path,
                 'allowed_types'=>'pdf',
                 'max_size'      => '2048000'
             );  
    
            $this->load->library('upload');
            
            $this->upload->initialize($config);
            
			$upload =  $this->upload->do_upload('caravanas');
			
			return $upload;
        } 
	}

	
}
