<?php

abstract class Model
{

	protected string $table_name;

	public static function get_all(): array
	{
		return [];
	}

	// Whatever other ORM functionality...

}
