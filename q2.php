<?php

require_once 'i_question.php';

class Q2 implements IQuestion
{

	public function run(...$args)
	{
		require 'guest_data.php';

		$sort_keys = ['account_id'];
		$data = GuestData::data();

		foreach ($sort_keys as $key) {
			uasort($data, function($a, $b) use($key) {
				return $this->sort($a, $b, $key);
			});
		}
	}

	private function sort($a, $b, $key)
	{
		if (array_key_exists($key, $a)) {
			return strcmp($a[$key], $b[$key]);

		} else {
			foreach (array_keys($a) as $k) {
				if (is_array($a[$k])) {
					return $this->sort($a[$k], $b[$k], $key);
				}
			}
		}
	}

}

(new Q2())->run();
