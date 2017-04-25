<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Image extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('ImageLoader');
    }

    public function index($imageName)
    {
        if($this->Auth->isLogin())
            $this->ImageLoader->getImage($imageName);
        else{
            $this->output->set_status_header('403');
            echo '403 Forbidden';
        }
    }
}
