<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {

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
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Registro');
    }
	public function index()
	{
		$this->load->view('inicio');
	}

	public function save()
	{
		$data = array
		(
			'email' => $this->input->post('email'),
			'nombre' => $this->input->post('name'), 
			'apellido' => $this->input->post('lastname'),
			'estado' => 1,
		);

		$this->Model_Registro->save($data);
		$datosBack = $this->Model_Registro->getData();
		print json_encode($datosBack);
	}

	public function delete($id)
	{
		$this->Model_Registro->delete($id);
		$datosBack = $this->Model_Registro->getData();
		print json_encode($datosBack);

	}
}
