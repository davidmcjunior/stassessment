<?php

require_once 'i_question.php';
require_once 'q3/lib/store.php';

class Q3 implements IQuestion
{

	public function run(...$args)
	{
		// $store = new Store();

		echo "(This question has no CLI component.)\n";
	}

}
