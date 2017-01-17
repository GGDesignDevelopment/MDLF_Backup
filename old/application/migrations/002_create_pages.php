<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_Pages extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
				'id' => array(
						'type' => 'INT',
						'constraint' => 5,
						'unsigned' => TRUE,
						'auto_increment' => TRUE
				),
				'descripcion' => array(
						'type' => 'VARCHAR',
						'constraint' => '50',
				),
				'titulo' => array(
						'type' => 'VARCHAR',
						'constraint' => '100',
				),
				'texto' => array(
						'type' => 'VARCHAR',
						'constraint' => '1000',
				),
				'padre' => array(
						'type' => 'INT',
						'constraint' => '5',
				),
		));
		
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('paginas');
	}

	public function down()
	{
			$this->dbforge->drop_table('paginas');
	}
}