<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Director extends Base_Controller {

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
            $this->db->insert('directors', $set);
        }
    }

    public function direct()
    {
        if(!empty($this->input->post)) {
            $director_id = $this->input->post('director_id');
            $movies = $this->input->post('movies');

            $set = array(
                'director_id' => $director_id,
                'movie_id' => 0,
                'main' => FALSE,
            );

            foreach ($movies as $movie){
                $set['movie_id'] = $movie['id'];
                $set['main'] = $movie['main'];
                $this->db->insert('director_direct', $set);
            }
        }
    }
}
