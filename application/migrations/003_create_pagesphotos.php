<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_Pagesphotos extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
				'id' => array(
						'type' => 'INT',
						'constraint' => 5,
						'unsigned' => TRUE,
				),
				'secuencial' => array(
						'type' => 'INT',
						'constraint' => '3',
						'unsigned' => TRUE,
				),
				'foto' => array(
						'type' => 'VARCHAR',
						'constraint' => '250',
				),
		));
		
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->add_key('secuencial', TRUE);
		$this->dbforge->create_table('paginas_fotos');
	}

	public function down()
	{
			$this->dbforge->drop_table('paginas_fotos');
	}
}
