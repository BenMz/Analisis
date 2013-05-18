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
        $CI->load->helper('url');
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
if ( ! function_exists('makeGuestNav'))
{
	function makeClientNav($active)
	{
		$CI =& get_instance();
        //Items del menú
        $header['nav_items'] = array(
                    array("link"=>"/login", "name"=>"Login", "active"=>False),
                    array("link"=>"/register", "name"=>"Sign up", "active"=>False)
                  );
        $header['title'] = "Homepage";
		$CI->load->view('templates/header', $header);
	}
}
