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

    public function getList()
    {
        $condition = array();
        $query = $this->db->get_where('movies', $condition);
        return $query;
    }

    public function getPicture($movie_id, $imageType = MOVIE_PREVIEW)
    {
        $condition = array(
            'movie_id' => $movie_id,
            'type' => $imageType,
        );

        $query = $this->db->get_where('movie_images', $condition);
        return $query;
    }

    public function getActor($movie_id)
    {
        $condition = array(
            'movie_id' => $movie_id,
        );

        $this->db->select('actor.*');
        $this->db->join('');

        $query = $this->db->get_where('actor')
    }

    public function login($account, $password)
    {
        try{
            $this->db->where('account', $account);
            $this->db->password('password', $password);
            $query = $this->db->get('user');
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
