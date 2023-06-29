<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportes extends CI_Controller {
	function __construct()
	{
		parent::__construct();
    $this->load->model("ReporteModal");
	}


  public function presidente()
  {
    $data["presidente_api"]=$this->ReporteModal->obtenerTodos1();
    $this->load->view('header');
    $this->load->view('reportes/presidente',$data);
    $this->load->view('footer');
  }
	public function asambleistaN()
	{
		$data["asambleistaN_api"]=$this->ReporteModal->obtenerTodos2();
		$this->load->view('header');
		$this->load->view('reportes/asambleistaN',$data);
		$this->load->view('footer');
	}
	public function asambleistaP()
	{
		$data["asambleistaP_api"]=$this->ReporteModal->obtenerTodos3();
		$this->load->view('header');
		$this->load->view('reportes/asambleistaP',$data);
		$this->load->view('footer');
	}
	public function toditos()
	{
		$data["presidente_api"]=$this->ReporteModal->obtenerTodos1();
		$data["asambleistaN_api"]=$this->ReporteModal->obtenerTodos2();
		$data["asambleistaP_api"]=$this->ReporteModal->obtenerTodos3();
		$this->load->view('header');
		$this->load->view('reportes/toditos',$data);
		$this->load->view('footer');
	}
	public function tipo()
	{
		$data["derecha_api"]=$this->ReporteModal->obtenerDerecha();
		$data["izquierda_api"]=$this->ReporteModal->obtenerIzquierda();
		$this->load->view('header');
		$this->load->view('reportes/tipo',$data);
		$this->load->view('footer');
	}



}
?>
