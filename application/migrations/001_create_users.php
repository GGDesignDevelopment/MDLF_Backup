<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_Users extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
				'id' => array(
						'type' => 'INT',
						'constraint' => 5,
						'unsigned' => TRUE,
						'auto_increment' => TRUE
				),
				'email' => array(
						'type' => 'VARCHAR',
						'constraint' => '100',
				),
				'password' => array(
						'type' => 'VARCHAR',
						'constraint' => '128',
				),
				'nombre' => array(
						'type' => 'VARCHAR',
						'constraint' => '100',
				),
		));
		
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('usuarios');
	}

	public function down()
	{
			$this->dbforge->drop_table('usuarios');
	}
}