<?php

require_once 'q1.php';

class Q2 extends Q1
{

	private array $available_sort_fields = [
		'first_name', 'last_name', 'middle_name', 'guest_id','guest_type',
		'gender','booking_number', 'ship_code','room_no', 'start_time','end_time',
		'is_checked_in','account_id', 'status_id', 'account_limit', 'allow_charges'
	];

	public function run(...$args): void
	{
		$sort_fields = readline("Enter one or more sort fields seperated by commas:\n");
		$sort_fields = explode(',', str_replace(' ', '', $sort_fields));

		if (array_intersect($sort_fields, $this->available_sort_fields) == $sort_fields) {
			$data = $this->get_data($sort_fields);

			foreach ($data as $record) {
				$this->print_record($record);
				echo "\n";
			}

		} else {
			echo "Oops: one or more of the fields you entered are incorrect!\n";
			readline("Please re-enter one or more sort fields seperated by commas:\n");
		}

	}

	private function get_data($sort_keys = ['account_id']): array
	{
		$data = GuestData::data();

		foreach ($sort_keys as $key) {
			uasort($data, function($a, $b) use($key) {
				return $this->sort($a, $b, $key);
			});
		}

		return $data;
	}

	private function sort($a, $b, $key): int
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
