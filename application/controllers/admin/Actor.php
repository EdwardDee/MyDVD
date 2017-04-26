<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Actor extends Base_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
//        $this->load->view('welcome_message');
    }

    public function insert()
    {
        if(!empty($this->input->post)){
            $name = $this->input->post('title');

            $set = array(
                'name' => $name,
            );
            $this->db->insert('actors', $set);
        }
    }

    public function act()
    {
        if(!empty($this->input->post)) {
            $actor_id = $this->input->post('actor_id');
            $movies = $this->input->post('movies');

            $set = array(
                'actor_id' => $actor_id,
                'movie_id' => 0,
                'main' => FALSE,
            );

            foreach ($movies as $movie){
                $set['movie_id'] = $movie['id'];
                $set['main'] = $movie['main'];
                $this->db->insert('actor_act', $set);
            }
        }
    }
}
