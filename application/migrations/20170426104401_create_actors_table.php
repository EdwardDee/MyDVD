<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_actors_table extends CI_Migration
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
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => '30',
            ),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('actors');
    }

    public function down()
    {
        $this->dbforge->drop_table('actors');
    }
}