<?php

class TaxRate
{

	/**
	 * @param Address $address
	 *
	 * @return float
	 */
	public static function get(Address $address): float
	{
		return 1.07;
	}

}
