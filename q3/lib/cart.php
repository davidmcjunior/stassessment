<?php

require_once 'abstract_model.php';
require_once 'tax.php';

class Cart extends Model
{

	/**
	 * @param Customer $customer
	 * @param Item[] $items
	 */
	public function __construct(
		public Customer $customer,
		public array $items = []
	) {}

	/**
	 * @return float
	 */
	public function get_shipping(): float
	{
		$total = 0.0;

		foreach ($this->items as $item) {
			$total += Shipping::get_rate($this->customer->addresses['shipping'], $item);
		}

		return $total;
	}

	/**
	 * @return float
	 */
	public function get_subtotal(): float
	{
		$total = 0.0;

		foreach ($this->items as $item) {
			$total += $item->quantity * $item->price;
		}

		return $total;
	}

	/**
	 * @return float
	 */
	public function get_total(): float
	{
		return $this->get_subtotal() * Tax::get_rate($this->customer->addresses['billing']);
	}

	/**
	 * @param Item $item
	 */
	public function add_item(Item $item): void
	{
		$this->items[$item->id] = $item;
	}

	/**
	 * @param string $id
	 */
	public function remove_item(string $id): void
	{
		unset($this->items[$id]);
	}

}
