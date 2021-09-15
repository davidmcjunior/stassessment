<?php

use Cassandra\Date;

class ShippingRate
{

	/**
	 * @param Address $destination
	 * @param array $dimensions
	 * @param float $weight
	 *
	 * @return float
	 */
	public static function get(
		Address $destination,
		array $dimensions,
		float $weight
	): float {
		return 10.07;
	}

}
