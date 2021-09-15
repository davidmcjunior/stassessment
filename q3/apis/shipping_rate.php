<?php

use Cassandra\Date;

class ShippingRate
{

	/**
	 * @param Address $destination
	 * @param Date $date
	 * @param array $dimensions
	 * @param float $weight
	 *
	 * @return float
	 */
	public static function get(
		Address $destination,
		Date  $date,
		array $dimensions,
		float $weight
	): float {
		return 10.07;
	}

}
