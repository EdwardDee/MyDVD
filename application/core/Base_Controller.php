<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base_Controller extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function show($layoutType, $viewPath, $data)
    {
        $this->showHeader($layoutType);
        $this->load->view($viewPath, $data);
        $this->showFooter($layoutType);
    }

    protected function showHeader($layoutType)
    {
        switch($layoutType)
        {
            case LAYOUT_DASHBOARD:
                $this->load->view();
                break;
        }
    }

    protected  function showFooter($layoutType)
    {
        switch($layoutType)
        {
            case LAYOUT_DASHBOARD:
                $this->load->view();
                break;
        }
    }
}
