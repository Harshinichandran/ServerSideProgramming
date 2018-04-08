<?php
class ContactModel extends CI_Model {

	 function form_insert($data){
	 	$this->db->insert('contact',$data);
	 }
	}
	?>