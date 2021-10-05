<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Rules extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'RuleID'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'RuleTitle'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'RuleField'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '1000'
			],
			'RuleCat' => [
				'type'           => 'VARCHAR',
				'null'           => 100,
				'default'		 => 'Tata Tertib'
			],
		]);

		// Membuat primary key
		$this->forge->addKey('id', TRUE);

		// Membuat tabel news
		$this->forge->createTable('news', TRUE);
        
	}

	public function down()
	{
		//
	}
}
