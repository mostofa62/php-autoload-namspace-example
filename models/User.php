<?php
namespace models;
use models\Model;


class User extends Model
{
	
	public $table='user';

	public function showParentName(){
		return parent::tableName();
	}
}


?>