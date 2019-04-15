<?php

class Painel_model extends CI_Model {

    public function __construct()
    {
        parent::__construct(); // construct the Model class
        $this->load->database();
    }


    public function get_data($tabela){
        $query=$this->db->get($tabela);

        $result['data']=$query->result_array();
        
        return $result;
    }

    public function get_specific_data($tabela, $coluna, $valor){
    
        $this->db->select('*');
        $this->db->from($tabela);
        $this->db->where($coluna,$valor);
      
        if($query=$this->db->get())
        {
            return $query->row_array();
        }else{
            return false;
        }    
    }

}