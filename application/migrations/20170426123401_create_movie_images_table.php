<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_movie_images_table extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'movie_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
            ),
            'image' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'unsigned' => TRUE,
            ),
            'type' => array(
                'type' => 'INT',
                'constraint' => 5,
            ),
            'CONSTRAINT FOREIGN KEY (movie_id) REFERENCES movies(id)'
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('movie_images');
    }

    public function down()
    {
        $this->dbforge->drop_table('movie_images');
    }
}