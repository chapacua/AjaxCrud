<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Registro extends CI_Model {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function save($data)
	{	
		$this->db->set("fecha", 'CURDATE()', FALSE);
		$this->db->insert('registro', $data); 
		return true;
	}

    public function getData()
    {	
    	$this->db->where('estado =', 1);
        $query = $this->db->get('registro');
        if($query->num_rows()>0){
			foreach($query->result() as $fila):
				$base[]=$fila;
			endforeach;
			return $base;
      	}else{
      		return false;
      	}
	   $this->db->close();
    }	

	public function delete($id)
	{	
		$data = array('estado' => 2);

		$this->db->where('id', $id);
		$this->db->update('registro', $data); 
		return true;
	}    
}
