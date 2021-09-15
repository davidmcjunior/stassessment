<?php

use Cassandra\Date;

require_once '../apis/shipping_rate.php';

class Shipping
{

	/**
	 * @param Address $destination
	 * @param Item $item
	 *
	 * @return float
	 */
	public static function get_rate(
		Address $destination,
		Item $item
	): float
	{
		// Get whatever info from the address itself to call the shipment API...
		return ShippingRate::get($destination, $item->dimensions, $item->weight);
	}

}
