<?php
class ReporteModal extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }
  function obtenerTodos1()
  {
    $listadoLugares=$this->db->select()->where('dignidad_can','Presidente')->get("candidato");

    if ($listadoLugares->num_rows()>0){
      return $listadoLugares->result();
    }
    return false;
  }
  function obtenerTodos2()
  {
    $listadoLugares=$this->db->select()->where('dignidad_can','Asambleista Nacional')->get("candidato");
    if ($listadoLugares->num_rows()>0){
      return $listadoLugares->result();
    }
    return false;
  }
  function obtenerTodos3()
  {
    $listadoLugares=$this->db->select()->where('dignidad_can','Asambleista Provincial')->get("candidato");
    if ($listadoLugares->num_rows()>0){
      return $listadoLugares->result();
    }
    return false;
  }
  function obtenerDerecha()
  {
    $listadoLugares=$this->db->select()->where('tipo_can','Derecha')->get("candidato");
    if ($listadoLugares->num_rows()>0){
      return $listadoLugares->result();
    }
    return false;
  }
  function obtenerIzquierda()
  {
    $listadoLugares=$this->db->select()->where('tipo_can','Izquierda')->get("candidato");
    if ($listadoLugares->num_rows()>0){
      return $listadoLugares->result();
    }
    return false;
  }
}
?>
