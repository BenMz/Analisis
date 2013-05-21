<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Guest Nav Helper
 *
 * Loads the menu for guests
 *
 * @access	public
 * @param   string el título del página
 * @param	string el elemento activo
 * @return	void
 */
if ( ! function_exists('makeGuestNav'))
{
	function makeGuestNav($title, $active)
	{
        $CI =& get_instance();
        //Items del menú
        $menu_opts = array(
            array("link"=>base_url("index.php/guest/login"), "name"=>"Login"),
            array("link"=>base_url("index.php/guest/signup"), "name"=>"Sign up")
        );
        
        //Revisamos a cuál ponerle el estado activo
        for ($i = 0; $i < count($menu_opts); $i++) {
            if(strcasecmp($active, $menu_opts[$i]['name']) == 0){
                $menu_opts[$i]['active'] = True;
            }
        }
        
        //Asignamos meno a datos del header
        $header['nav_items'] = $menu_opts;
        
        
        $header['title'] = $title;
        $CI->load->view('templates/header', $header);
    }
}

/**
 * Client Nav Helper
 *
 * Loads the menu for guests
 *
 * @access	public
 * @param	string el elemento activo
 * @return	void
 */
if ( ! function_exists('makeClientNav'))
{
	function makeClientNav($title, $active)
	{
        $CI =& get_instance();
        //Items del menú
        $menu_opts = array(
            array("link"=>base_url("index.php/projects"), "name"=>"Projects"),
            array("link"=>base_url("index.php/projects/request"), "name"=>"Request Project"),
            array("link"=>base_url("index.php/users/logout"), "name"=>"Logout")
        );
        
        //Revisamos a cuál ponerle el estado activo
        for ($i = 0; $i < count($menu_opts); $i++) {
            if(strcasecmp($active, $menu_opts[$i]['name']) == 0){
                $menu_opts[$i]['active'] = True;
            }
        }
        
        //Asignamos meno a datos del header
        $header['nav_items'] = $menu_opts;
        
        
        $header['title'] = $title;
        $CI->load->view('templates/header', $header);
		
	}
}
