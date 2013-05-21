<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Projects extends CI_Controller {

	/**
	 * Index page for guests
	 *
	 */
	public function index(){
        $this->load->helper('menu');
        makeClientNav("Audentio Dashboard", "Projects");  //De parámetros tiene el nombre de la página y cuál página está en estado activo
        
        $this->load->view('view_projects');
        
        $this->load->view('templates/footer');
	}
    


}
