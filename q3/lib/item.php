<?php

class Item
{

	public function __construct(
		public string $id = '',
		public string $name = '',
		public float $price = 0.0,
		public int $quantity = 0,
		public array $attributes = [] // Misc other attributes (weight, maybe?)
	) {}

}
