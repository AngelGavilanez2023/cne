<?php
/**
 *
 */
class Modulos extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
  }
  public function nosotros()
  {
    $this->load->view('header');
    $this->load->view('modulos/nosotros');
    $this->load->view('footer');
  }
  public function noticias()
  {
    $this->load->view('header');
    $this->load->view('modulos/noticias');
    $this->load->view('footer');
  }
}

?>
