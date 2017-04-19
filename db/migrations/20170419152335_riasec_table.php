<?php

use Phinx\Migration\AbstractMigration;

class RiasecTable extends AbstractMigration
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
	$riasec=$this->table('riasec');
	$riasec->addColumn('type','string',array('limit'=>20))
		->addColumn('description','string',array('limit'=>1000))
		->addColumn('qualites1','string',array('limit'=>1000))
		->addColumn('qualites2','string',array('limit'=>1000))
		->addColumn('qualites3','string',array('limit'=>1000))
		->addColumn('faiblesses1','string',array('limit'=>1000))
		->addColumn('faiblesses2','string',array('limit'=>1000))
		->addColumn('faiblesses3','string',array('limit'=>1000))
		->addIndex(array('type','qualites1'),array('unique'=>true))
		->save();
    }
}
