<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_actor_act_table extends CI_Migration
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
            'actor_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
            ),
            'movie_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
            ),
            'main' => array(
                'type' => 'TINYINT',
                'constraint' => 1,
            ),
            'CONSTRAINT FOREIGN KEY (actor_id) REFERENCES actors(id)',
            'CONSTRAINT FOREIGN KEY (movie_id) REFERENCES movies(id)',
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('actor_act');
    }

    public function down()
    {
        $this->dbforge->drop_table('actor_act');
    }
}