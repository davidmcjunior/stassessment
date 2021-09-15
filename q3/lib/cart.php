<?php

class Cart
{

	public function __construct(
		public $customer = null,
		public array $items = []
	) {

	}

	public function get_total()
	{
		$total = 0.0;

		foreach ($this->items as $item) {
			$total = $item->quanity * $item->price;
			// $total =+ $subtotal * $this->
		}

		return $total;
	}

	public function add_item(Item $item)
	{

	}

}
