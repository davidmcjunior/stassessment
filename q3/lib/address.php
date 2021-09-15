<?php

require_once 'abstract_model.php';

class Address extends Model
{

	/**
	 * @param string $line_1
	 * @param string $line_2
	 * @param string $city
	 * @param string $state
	 * @param string $zip
	 */
	public function __construct(
		public string $line_1 = '',
		public string $line_2 = '',
		public string $city = '',
		public string $state = '',
		public string $zip = ''
	) {}

}
