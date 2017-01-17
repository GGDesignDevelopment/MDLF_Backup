<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_Config extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
				'id' => array(
						'type' => 'INT',
						'constraint' => 1,
						'unsigned' => TRUE,
						'auto_increment' => TRUE
				),
				'linkFacebook' => array(
						'type' => 'VARCHAR',
						'constraint' => '250',
				),
				'linkTwitter' => array(
						'type' => 'VARCHAR',
						'constraint' => '250',
				),
				'linkInstagram' => array(
						'type' => 'VARCHAR',
						'constraint' => '250',
				),
				'linkFlickr' => array(
						'type' => 'VARCHAR',
						'constraint' => '250',
				),
				'tituloSobreMi' => array(
						'type' => 'VARCHAR',
						'constraint' => '100',
				),
				'textoSobreMi' => array(
						'type' => 'VARCHAR',
						'constraint' => '1000',
				),				
				'tituloMiTrabajo' => array(
						'type' => 'VARCHAR',
						'constraint' => '100',
				),
				'textoMiTrabajo' => array(
						'type' => 'VARCHAR',
						'constraint' => '1000',
				),				
				'imagenSobreMi' => array(
						'type' => 'VARCHAR',
						'constraint' => '250',
				),
				'imagenMiTrabajo' => array(
						'type' => 'VARCHAR',
						'constraint' => '250',
				),				
		));
		
		$this->dbforge->add_key('id', TRUE);	
		$this->dbforge->create_table('config');
	}

	public function down()
	{
			$this->dbforge->drop_table('config');
	}
}
