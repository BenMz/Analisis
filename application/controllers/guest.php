<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Guest extends CI_Controller {

	/**
	 * Index page for guests
	 *
	 */
	public function index(){
        $this->load->helper('menu');
        makeGuestNav("Audentio Dashboard", null);  //De parámetros tiene el nombre de la página y cuál página está en estado activo
        
        $this->load->view('guest_index');
        
        $this->load->view('templates/footer');
	}
    
    /**
     * Login page
     */
    public function login(){
        $this->load->helper('menu');
        makeGuestNav("Login to Audentio Dashboard", "Login");  //De parámetros tiene el nombre de la página y cuál página está en estado activo
        $this->load->view('guest_login');
        $this->load->view('templates/footer');
    }
    
    /**
     * Sign Up page
     */
    public function signup(){
        $this->load->helper('menu');
        makeGuestNav("Sign up to Audentio Dashboard", "Sign Up");  //De parámetros tiene el nombre de la página y cuál página está en estado activo
        
        $this->load->view('guest_signup');
        $this->load->view('templates/footer');
    }

}
