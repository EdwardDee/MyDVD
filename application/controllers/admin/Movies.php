<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movies extends Base_Controller {

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
            $title = $this->input->post('title');
            $type = $this->input->post('type');
            $runtime_start = $this->input->post('runtime_start');
            $runtime_end = $this->input->post('runtime_end');
            $director = $this->input->post('director');
            $actor = $this->input->post('actor');
            $info = $this->input->post('info');
            $published_date = $this->post->('published_date');

            $set = array(
                'title' => $title,
                'type' => $type,
                'runtime_start' => $runtime_start,
                'runtime_end' => $runtime_end,
                'director' => $director,
                'actor' => $actor,
                'info' => $info,
                'published_date' => $published_date;
            );
            $this->db->insert('movies', $set);
        }
    }
}
