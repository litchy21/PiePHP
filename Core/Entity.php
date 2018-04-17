<?php
namespace Core;

use \Core\ORM;

class Entity 
{
	public $table;
	public $fields;
	public $orm;

	public function __construct($params = [])
	{
		foreach ($params as $key => $value) {
			$this->{$key} = $value;
		}
		// $this->params = $this->read();
		// $this->table = str_replace('\\', '', strtolower(str_replace('Model', '', get_called_class()))) . 's';
		$this->orm = new ORM();
		$this->fields = $params;
	}
	public function create()
	{
		return $this->orm->create_orm($this->table, $this->fields);
	}
	public function read()
	{
		return $this->orm->read_orm($this->table, $this->id);
	}
	public function update()
	{
		return $this->orm->update_orm($this->table, $this->id, $this->fields);
	}
	public function delete()
	{
		return $this->orm->delete_orm($this->table, $this->id);
	}
	public function find($params)
	{
		return $this->orm->find_orm($this->table);
	}
	public function save()
	{
		if (!isset($isEmailFree)) {
			return $this->orm->create_orm($this->table, $this->fields);
		} else {
			return $this->orm->update_orm($this->table, $this->id, $this->fields);
		}
	}
}