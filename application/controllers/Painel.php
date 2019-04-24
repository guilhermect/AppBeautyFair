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

	public function edit_expositor()
	{

		$id=$this->input->post('id');

		$sheet=$this->painel_model->get_specific_data('expositores','id',$id);

		$this->load->view('painel/frontend/html-header');
		$this->load->view('painel/frontend/header');
		$this->load->view('painel/frontend/menu');
		$this->load->view('painel/expositores/atualizar_expositores',$sheet);
		$this->load->view('painel/frontend/footer');
		$this->load->view('painel/frontend/html-footer');
	}


	public function upload_file(){
		
		

	}

	public function update_expositor(){
		$id=$this->input->post('id');
		$title=$this->input->post('title');
        $category=$this->input->post('category');
        $logo=$this->input->post('logo');
        $spotlight=$this->input->post('spotlight');
		$news=$this->input->post('news');
		$image=$this->input->post('image');

		
		$img_name = $_FILES['file']['name'];  
		$temp_name  = $_FILES['file']['tmp_name'];  
		
    	if(isset($img_name)){
        	if(!empty($img_name)){      
            	$location = $_SERVER['DOCUMENT_ROOT'].'/appbeautyfair/uploads/';      
				if(move_uploaded_file($temp_name, $location.$img_name)){
					$image=$location.$img_name;
				}
			}
		}
		
		
		
        $content=$this->input->post('content');
        $gallery=$this->input->post('gallery');
       
         $expositor=array(
              'id'=>$id,
              'title'=>$title,
              'category'=>$category,
              //'logo'=>$logo,
              'spotlight'=>$spotlight,
              'news'=>$news,
              'image'=>$image,
              'content'=>$content,
              //'gallery'=>$gallery,
           );
        
		$update = $this->painel_model->update_expositor($expositor);

		if($update){
			redirect(base_url('painel/ver_expositores'));
		}
		
	}

	
}
