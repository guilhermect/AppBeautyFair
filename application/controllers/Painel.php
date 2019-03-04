<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Painel extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		
		$this->load->helper('url');
	}
		
	public function index()
	{
		$this->load->view('painel/frontend/html-header');
		$this->load->view('painel/frontend/header');
		$this->load->view('painel/frontend/menu');
		$this->load->view('painel/ver_noticias');
		$this->load->view('painel/frontend/footer');
		$this->load->view('painel/frontend/html-footer');
	}

	public function ver_noticias()
	{
		$this->load->view('painel/frontend/html-header');
		$this->load->view('painel/frontend/header');
		$this->load->view('painel/frontend/menu');
		$this->load->view('painel/ver_noticias');
		$this->load->view('painel/frontend/footer');
		$this->load->view('painel/frontend/html-footer');
	}

	public function inserir_noticias()
	{
		$this->load->view('painel/frontend/html-header');
		$this->load->view('painel/frontend/header');
		$this->load->view('painel/frontend/menu');
		$this->load->view('painel/inserir_noticias');
		$this->load->view('painel/frontend/footer');
		$this->load->view('painel/frontend/html-footer');
	}
}
