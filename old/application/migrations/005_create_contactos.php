<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_Contactos extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
				'id' => array(
						'type' => 'INT',
						'constraint' => 8,
						'unsigned' => TRUE,
						'auto_increment' => TRUE
				),
				'estado' => array(
						'type' => 'INT',
						'constraint' => '1',
				),				
				'creado' => array(
						'type' => 'DATETIME',
				),				
				'nombre' => array(
						'type' => 'VARCHAR',
						'constraint' => '100',
				),
				'email' => array(
						'type' => 'VARCHAR',
						'constraint' => '100',
				),		
				'celular' => array(
						'type' => 'VARCHAR',
						'constraint' => '20',
				),				
				'texto' => array(
						'type' => 'VARCHAR',
						'constraint' => '1000',
				),				
		));
		
		$this->dbforge->add_key('id', TRUE);	
		$this->dbforge->create_table('contactos');
	}

	public function down()
	{
			$this->dbforge->drop_table('contactos');
	}
}
