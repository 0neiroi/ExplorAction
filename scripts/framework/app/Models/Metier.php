<?php
namespace App\Models;

use Pragma\ORM\Model;

class Metier extends Model{
	const TABLENAME = 'metier';

	public function __construct(){
		return parent::__construct(self::TABLENAME);
	}

}