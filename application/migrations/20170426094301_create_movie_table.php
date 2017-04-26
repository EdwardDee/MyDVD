<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_movie_table extends CI_Migration
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
            'title' => array(
                'type' => 'VARCHAR',
                'constraint' => '30',
            ),
            'format' => array(
                'type' => 'int',
                'constraint' => '5',
            ),
            'runtime_start' => array(
                'type' => 'TIMESTAMP',
            ),
            'runtime_end' => array(
                'type' => 'TIMESTAMP',
            ),
            'info' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'published_date' => array(
                'type' => 'TIMESTAMP',
            ),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('movies');
    }

    public function down()
    {
        $this->dbforge->drop_table('movies');
    }
}