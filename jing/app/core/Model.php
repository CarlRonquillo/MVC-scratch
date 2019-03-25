<?php

class Model extends DB
{
	public function selectAll($tableName)
	{
		$sql = "Select * from ". $tableName;
		$result = $this->connect()->query($sql);
		if($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{
				$data[] = $row;
			}
			return $data;
		}
	}

	public function insert($tableName,$Username,$Password)
	{
		$sql = "Insert into ". $tableName . "(Username,Password) Values ('".$Username."','".$Password."')" ;
		return $this->connect()->query($sql);
	}
}