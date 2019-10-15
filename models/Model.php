<?php
namespace models;


class Model
{
	protected $table='model';

	public function tableName(){
		return $this->table;
	}
	
}