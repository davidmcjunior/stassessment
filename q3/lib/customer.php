<?php

require_once 'abstract_model.php';

class Customer extends Model
{

	public function __construct(
		public string $first_name = '',
		public string $last_name = '',
		public array $addresses = [
			// 'billing'  => null,
			// 'shipping' => null
		]
	) {}

}
