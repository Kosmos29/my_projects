<?php

class m151020_113025_create_menu extends CDbMigration
{
	public function up()
	{
            $this->createTable('menu',array(
                'id_menu' => 'pk',
                'title' => 'VARCHAR(20) NOT NULL',
            ));
	}

	public function down()
	{
		$this->dropTable('menu');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}