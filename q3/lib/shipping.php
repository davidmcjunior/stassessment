<?php

use Cassandra\Date;

require_once '../apis/shipping_rate.php';

class Shipping
{

	public static function get_rate(
		Address $destination,
		Date    $date,
		array   $dimensions = [0, 0, 0, 0],
		float   $weight = 0.0
	): float
	{
		// Get whatever info from the address itself to call the shipment API...
		return ShippingRate::get($destination, $date, $dimensions, $weight);
	}

}
