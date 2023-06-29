<?php
/**
 *
 */
class Candidatos extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('CandidatoModal');

  }
  function listado()
   {
       $data['candidatos']=$this->CandidatoModal->obtenerTodos();
       $this->load->view('header');
       $this->load->view('candidatos/listado', $data);
       $this->load->view('footer');
   }
  public function nuevo()
  {
    $this->load->view('header');
    $this->load->view('candidatos/nuevo');
    $this->load->view('footer');
  }
  public function guardar()
  {
      $datosNuevoCandidato = array(
          "dignidad_can" => $this->input->post('dignidad_can'),
          "apellido_can" => $this->input->post('apellido_can'),
          "nombre_can" => $this->input->post('nombre_can'),
          "edad_can" => $this->input->post('edad_can'),
          "telefono_can" => $this->input->post('telefono_can'),
          "tipo_can" => $this->input->post('tipo_can'),
          "movimiento_can" => $this->input->post('movimiento_can'),
          "latitud_can" => $this->input->post('latitud_can'),
          "longitud_can" => $this->input->post('longitud_can'),

      );

      if($this->CandidatoModal->insertar($datosNuevoCandidato))
      {
          redirect('candidatos/nuevo');
      }else{
          echo "<h1> Error al insertar</h1>";
      }

  }
  public function eliminar($id_can)
  {
      if ($this->CandidatoModal->borrar($id_can)) {
          redirect('candidatos/listado');
          # code...
      } else {
          # code...
          echo "ERROR AL BORRAR :(";
      }

  }
  //RENDERIZAR VISTA EDITAR CON EL Instructor
   public function editar($id_can)
   {
     $data["candidatoEditar"]=$this->CandidatoModal->obtenerPorId($id_can);
     $this->load->view('header');
     $this->load->view('candidatos/editar',$data);
     $this->load->view('footer');
   }
   public function procesarActualizacion()
    {
      $datosEditados=array(
        // "id_can" => $this->input->post('id_can'),
        "dignidad_can" => $this->input->post('dignidad_can'),
        "apellido_can" => $this->input->post('apellido_can'),
        "nombre_can" => $this->input->post('nombre_can'),
        "edad_can" => $this->input->post('edad_can'),
        "telefono_can" => $this->input->post('telefono_can'),
        "tipo_can" => $this->input->post('tipo_can'),
        "movimiento_can" => $this->input->post('movimiento_can'),
        "latitud_can" => $this->input->post('latitud_can'),
        "longitud_can" => $this->input->post('longitud_can'),

      );
      $id_can=$this->input->post("id_can");
      if ($this->CandidatoModal->actualizar($id_can,$datosEditados)) {
        // $this->session->set_flashdata("confirmacion", "Candidato ACTULIZADO exitosamente");

      } else {
        // $this->session->set_flashdata("error", "Error al ACTULIZAR, intenta de nuevo");

      }
      redirect("candidatos/listado");


    }



}//FIND DE CLASE

?>
