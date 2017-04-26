<?php
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends Base_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

    }

    public function insert()
    {
        if(!empty($this->input->post)){
            $account = $this->input->post('account');
            $password = $this->input->post('password');
            $name = $this->input->post('name');
            $phone = $this->input->post('phone');
            $email = $this->input->post('email');

            $set = array(
                'account' => $account,
                'password' => $password,
                'name' => $name,
                'phone' => $phone,
                'email' => $email,
            );
            $this->db->insert('users', $set);
        }
    }
}
