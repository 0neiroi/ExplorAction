<?php

use Phinx\Migration\AbstractMigration;

class CreationNouvelleBase extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $users = $this->table('users');
        $users->addColumn('updated', 'datetime', array('null' => true))
              ->addColumn('nbCards', 'integer', array('limit' => 11))
              ->addColumn('idCards', 'string', array('limit' => 500))
              ->addColumn('riasec', 'string', array('limit' => 20))
              ->addColumn('idClass', 'integer', array('limit' => 11))
              ->addColumn('typeProfil', 'boolean')
              ->addColumn('username', 'string', array('limit' => 20))
              ->addColumn('password', 'string', array('limit' => 40))
              ->addColumn('password_salt', 'string', array('limit' => 40))
              ->addColumn('email', 'string', array('limit' => 100))
              ->addIndex(array('username', 'email'), array('unique' => true))
              ->save();
        $cards = $this->table('cards');
        $cards->addColumn('updated', 'datetime', array('null' => true))
              ->addColumn('serial', 'integer', array('limit' => 11))
              ->addColumn('urlImg', 'string', array('limit' => 500))
              ->addColumn('jobTitle', 'string', array('limit' => 100))
              ->addIndex(array('serial', 'jobTitle'), array('unique' => true))
              ->save();
        $weeks = $this->table('weeks');
        $weeks->addColumn('date', 'datetime')
              ->addColumn('idCards', 'string', array('limit' => 20))
              ->addIndex(array('date', 'idCards'), array('unique' => true))
              ->save();
	$riasec=$this->table('riasec');
	$riasec->addColumn('id','integer',array('limit'=>20))
		->addColumn('type','string',array('limit'=>20))
		->addColumn('description','string',array('limit'=>1000))
		->addColumn('qualites','string',array('limit'=>1000))
		->addColumn('faiblesses','string',array('limit'=>1000))
		->addIndex(array('id'),array('unique'=>true))
		->save();
    }
}
