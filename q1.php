<?php

require 'guest_data.php';
require_once 'i_question.php';

class Q1 implements IQuestion
{

	public function run(...$args): void
	{
		$record_num = 0;

		foreach (GuestData::data() as $guest) {
			echo 'RECORD NUMBER ' . ++$record_num . "\n";
			$this->print_record($guest);
			echo "\n";
		}
	}

	protected function print_record($data): void
	{
		foreach ($data as $key => $val) {
			if (is_array($val)) {
				$this->print_record($val);
			} else {
				echo $key . ': ' . $val . "\n";
			}
		}
	}

}
