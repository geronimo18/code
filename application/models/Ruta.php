<?php

class Ruta extends CI_Model{
    
    function obtenerlistado($id = ""){
        
        
            
            $query = $this->db->get_where('ruta');
        return $query->result_array();
        
}
}


