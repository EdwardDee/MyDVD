<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
        session_start();
    }

    public function index()
	{
	    header('index');
		$this->load->view('welcome_message');
	}

	public function test($abc){
	    echo("Hello World!");
	    echo('<br>'.$abc);
    }

    public function error404(){

    }

    public function profile(){
        header('profile');
        echo $_SESSION['id']?:'null';
    }

    public function login(){
        $_SESSION['id'] = 1;
    }

    public function logout(){
        session_destroy();
    }

    public function api{
        echo(
            "{
                [0]:{
                    name='123',
                    price=123,
                },
                [1]:{
                    name='fff',
                    price=333
                }
            }"
        );
    }
}
