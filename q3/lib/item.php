<?php

require_once 'abstract_model.php';

class Item extends Model
{

	/**
	 * @param string $id
	 * @param string $name
	 * @param float $price
	 * @param int $quantity
	 * @param float $weight
	 * @param array|float[] $dimensions
	 */
	public function __construct(
		public string $id = '',
		public string $name = '',
		public float $price = 0.0,
		public int $quantity = 0,
		public float $weight = 0.0,
		public array $dimensions = [0, 0, 0]
	) {}

}
