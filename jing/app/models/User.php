<?php

class User extends Model
{
	public function showUsers($tableName)
	{
		return $this->selectAll($tableName);
	}

	public function saveUser($Username,$Password)
	{
		return $this->insert('users',$Username,$Password);
	}
}