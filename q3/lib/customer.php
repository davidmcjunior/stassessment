<?php

class Customer
{

	public function __construct(
		public string $first_name = '',
		public string $last_name = '',
		public array $addresses = []
	) {}

}
