<?php

class Address
{

	public function __construct(
		public string $line_1 = '',
		public string $line_2 = '',
		public string $city = '',
		public string $state = '',
		public string $zip = ''
	) {}

}
