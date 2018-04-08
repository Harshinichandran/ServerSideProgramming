<?php
class ClassesModel extends CI_Model {
 
 function getClasses(){
  $this->db->select("classname,description"); 
  $this->db->from('class');
  $query = $this->db->get();
  return $query->result();
 }
 
}
?>