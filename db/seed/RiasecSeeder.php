<?php

use Phinx\Seed\AbstractSeed;

class RiasecSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
		 $data = array(
            array(
                'type'    => 'Réaliste',
                'created' => date('Y-m-d H:i:s'),
            ),
            array(
                'type'    => 'Investigateur',
                'created' => date('Y-m-d H:i:s'),
            )
		 array(
                'type'    => 'Artiste',
                'created' => date('Y-m-d H:i:s'),
            )
        );

    }

'type','string',array('limit'=>20))
		->addColumn('description','string',array('limit'=>1000))
		->addColumn('qualites1','string',array('limit'=>1000))
		->addColumn('qualites2','string',array('limit'=>1000))
		->addColumn('qualites3','string',array('limit'=>1000))
		->addColumn('faiblesses1','string',array('limit'=>1000))
		->addColumn('faiblesses2','string',array('limit
}
