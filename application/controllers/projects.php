<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Projects extends CI_Controller {

	/**
	 * Index page for guests
	 *
	 */
	public function index(){
        $this->load->helper('menu');
        makeClientNav("Audentio Dashboard", "Projects");  //De parámetros tiene el nombre de la página y cuál página está en estado activo
        
        //La plantilla debe recibir un array con los proyectos de esta forma.
        /**
         *   'id' => int
         *   'name' => String
         *   'client' => String
         *   'status' => int (0:pending, 2:rejected, 3:accepted)
         * **/
        $data['projects'] = array(
          array('id'=>10, 'name'=>"Nombre de proyecto", 'client'=>"Benito", 'status'=>0),
          array('id'=>11, 'name'=>"Nombre de proyecto 2", 'client'=>"Oscar", 'status'=>1)
        );
        //Se carga la plantilla
        $this->load->view('project_list', $data);
        
        $this->load->view('templates/footer');
	}
    
    public function request(){
        $this->load->helper('menu');
        makeClientNav("Audentio Dashboard", "Request Project");  //De parámetros tiene el nombre de la página y cuál página está en estado activo
        
        //La plantilla debe recibir un array con los proyectos de esta forma.
        /**
         *   'id' => int
         *   'name' => String
         *   'client' => String
         *   'status' => int (0:pending, 2:rejected, 3:accepted)
         * **/
        $data['projects'] = array(
          array('id'=>10, 'name'=>"Nombre de proyecto", 'client'=>"Benito", 'status'=>0),
          array('id'=>11, 'name'=>"Nombre de proyecto 2", 'client'=>"Oscar", 'status'=>1)
        );
        //Se carga la plantilla
        $this->load->view('project_request', $data);
        
        $this->load->view('templates/footer');
    }
    
    public function view($id){
        $this->load->helper('menu');
        makeClientNav("Audentio Dashboard", "Projects"); 
        
        //La plantilla debe recibir un proyecto de esta forma.
        /**
         *   'id' => int
         *   'name' => String proyect name
         *   'client' => String
         *   'company_name' => String
         *   'website_name' => String
         *   'website_url' => string
         *   'status' => int (0:pending, 2:rejected, 3:accepted)
         *   'description' = String,
         *   'colors' => String,
         *   'website' => String
         * **/
        $data['project'] = array('id'=>10, 'name'=>"Nombre de proyecto", 
            'client'=>"Benito", 'status'=>0,
            'company_name' => "Ben Corp", 'website_name' => "Ben eats noobs",
            'website_url' => "eatnoobs.ben",
            'description' => "A nice description explaining stuff.",
            'colors'=>"Red, yellow, poop", 'liked_websites'=>"Google, because it's Google");
        
        //Se carga la plantilla
        $this->load->view('project_view', $data);
        
        $this->load->view('templates/footer');
    }


}
