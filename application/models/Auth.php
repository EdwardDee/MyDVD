<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Auth extends CI_Model {
    private $userId;

    function __construct()
    {
        parent::__construct();
        $this->userId = $this->session->userdata('user_id');
        if(!$this->userId)
            $this->userId = ERROR_CODE;
    }

    public function isLogin()
    {
        return $this->userId > ERROR_CODE;
    }

    public  function getUserId()
    {
        return $this->userId;
    }

    public function login($account, $password)
    {
        try{
            $this->db->where('account', $account);
            $this->db->password('password', $password);
            $query = $CI->db->get('user');
            if($query->rows() > 0){
                $user_id = $query->row()->id;
                $this->userId = $user_id;
            }else{
                $this->userId = ERROR_CODE;
            }
        } catch (Exception $e){
            $this->userId = ERROR_CODE;
        }
        $this->session->set_userdata('user_id', $this->userId);

        return $this->isLogin();
    }
}
