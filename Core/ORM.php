<?php
namespace Core;

class ORM extends Database
{
	public function create_orm($table, $fields)
	{
		$this->query("INSERT INTO $table(" . implode(',', array_flip($fields)) . ") VALUES(\"" . implode("\",\"", $fields) . "\")");
		$this->execute();

		return $this->last_id();
	}
	
	public function read_orm($table, $id)
	{
		$this->query("SELECT * FROM $table WHERE id = $id");
		return $this->fetch();
	}

	public function update_orm($table, $id, $fields)
	{
		$str_fields = "";
		unset($fields['id']);
		foreach ($fields as $key => $value) {
			$str_fields .= $key . " = \"" . $value . "\",";
		}
		$str_fields = substr($str_fields, 0, -1);
		$this->query("UPDATE $table SET $str_fields WHERE id = $id");
		return $this->execute();
	}
	
	public function delete_orm($table, $id)
	{
		$this->query("DELETE FROM $table WHERE id = $id");
		return $this->execute();
	}

	public function find_orm($table, $params = array(
	 'WHERE' => '', 
	 'ORDER BY' => '', 
	 'LIMIT' => ''))
	{
		if (isset($params)) {
			$str_params = '';
			foreach ($params as $key => $value) {
				if (!empty($value)) {
					$str_params .= $key . ' ' . $value . ' ';
				}	
			}
		}
		$this->query("SELECT * FROM $table $str_params");
		return $this->fetch_all();
	}
}