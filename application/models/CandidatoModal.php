<!-- <?php
/**
 *
 */
class CandidatoModal extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }
  function insertar($datos){
      //ACTIVE RECORD -> CODEiGNITER
      return $this->db->insert("candidato",$datos);
  }
  function obtenerTodos(){
    $listadoCandidatos=$this->db->get("candidato");//esto devuelve un array
    if($listadoCandidatos->num_rows()>0) { //si hay datos
        return $listadoCandidatos->result();
    }else{ //si no hay datos
        return false;
    }
  }
  function borrar($id_can)
  {
      //"id_ins"-> es el campo de la base de datos  y la $id_ins es la variable que creamos puede tener otro nombre
      $this->db->where("id_can",$id_can);

      //instructor tabla de base de datos
      if ($this->db->delete("candidato")) {
          return true;
      } else {
          return false;
      }

      //El codigo de arriba en una solo linea
      // return $this->db->delete("instructor");
  }
  //FUNCION PARA CONSULTAR INSTRUCTOR ESPECIFICOS
   function obtenerPorId($id_can)
   {
     $this->db->where("id_can",$id_can);
     $candidato=$this->db->get("candidato");
     if($candidato->num_rows()>0){
       return $candidato->row();
     }
     return false;
   }
   //FUNCION PARA ACTUALIZAR UN INSTRUCOTR
   function actualizar($id_can, $datosEditados)
   {
     $this->db->where("id_can",$id_can);
     return $this->db->update('candidato', $datosEditados);
   }
}//FIN CLASE

?> -->
