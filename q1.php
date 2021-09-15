<?php

require_once 'i_question.php';

class Q1 implements IQuestion
{

	public function run(...$args)
	{
		require 'guest_data.php';

		$record_num = 0;

		foreach (GuestData::data() as $guest) {
			echo 'RECORD NUMBER ' . ++$record_num . "\n";
			$this->print_record($guest);
			echo "\n";
		}
	}

	protected function print_record($data)
	{
		foreach ($data as $key => $val) {
			if (is_array($val)) {
				$this->print_record($val, 1);
			} else {
				echo $key . ': ' . $val . "\n";
			}
		}
	}

}
