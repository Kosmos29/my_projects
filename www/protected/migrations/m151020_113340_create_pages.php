<?php

class m151020_113340_create_pages extends CDbMigration
{
	public function up()
	{
            $this->createTable('pages',array(
                'id_page' => 'pk',
                'title' => 'VARCHAR(20) NOT NULL',
                'content' => 'text',
                'id_menu' => 'int(11) NOT NULL',
            ));
            $this->createIndex('id_menu','menu','id_menu');
            $this->addForeignKey('id_menu','pages','id_menu','menu','id_menu');
	}

	public function down()
	{
            $this->dropTable('pages');
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