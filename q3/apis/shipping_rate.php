<?php

use Cassandra\Date;

class ShippingRate
{

	public static function get(
		Address $destination,
		Date  $date,
		array $dimensions,
		float $weight
	): float {
		return 10.07;
	}

}
